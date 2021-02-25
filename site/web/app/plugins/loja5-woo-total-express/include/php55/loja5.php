<?php
class gateway_woo_total_express_loja5
{
	var $license_key;
	var $home_url_site = 'd3d3LmxvY2FzaXN0ZW1hcy5jb20=';
	var $home_url_port = 80;
	var $home_url_iono = 'L2NsaWVudGVzL3JlbW90ZS5waHA=';
	var $key_location;	
	var $remote_auth;
	var $key_age;
	var $key_data;
	var $now;
	var $result;
	var $produto_servico = '107';
    function __construct($license_key, $remote_auth, $key_location = 'key.php', $key_age = 1296000){
        return $this->gateway_woo_total_express_loja5($license_key, $remote_auth, $key_location, $key_age);
    }
	function gateway_woo_total_express_loja5($license_key, $remote_auth, $key_location = 'key.php', $key_age = 1296000)
	{
		$this->license_key = $license_key;
		$this->remote_auth = $remote_auth;
		$this->key_location =  $key_location;
		$this->key_age =  $key_age;
		$this->now = time();
		
		$p_id = $this->produto_servico;
	    $a = @explode('-',$license_key);
	    if(isset($a[2]) && $a[2]!=$p_id){
		$this->result = 'NjY=';
		return true;
		}
		
		if (empty($license_key))
		{
			$this->result = 'NA==';
			return false;
		}
		
		if (empty($remote_auth))
		{
			$this->result = 'NA==';
			return false;
		}
		
		if (file_exists($this->key_location))
		{
			$this->result = $this->read_key();
		}
		else
		{
			$this->result = $this->generate_key();
			
			if (empty($this->result))
			{
				$this->result = $this->read_key();
			}
		}
		
		unset($this->remote_auth);
		
		return true;
	}
	
	function http_response($url) 
    {
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, "https://".$url); 
		curl_setopt($ch,CURLOPT_TIMEOUT, 5); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
		$head = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
		curl_close($ch);
		return $httpCode;
    }
	
	function MCoder($str){
		return base64_decode($str);
	}

	function generate_key()
	{		
		$request = 'remote=licenses&type=5&license_key='.urlencode(base64_encode($this->license_key));
		$request .= '&host_ip='.urlencode(base64_encode("")).'&host_name='.urlencode(base64_encode(str_replace('www.','',$_SERVER['SERVER_NAME'])));
		$request .= '&hash='.urlencode(base64_encode(md5($request)));
		$request = $this->MCoder($this->home_url_site).''.$this->MCoder($this->home_url_iono).'?'.$request;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $request);
		curl_setopt($ch, CURLOPT_PORT, $this->home_url_port);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, 'iono (www.olate.co.uk/iono)');
		$content = curl_exec($ch);
		echo 
		curl_close($ch);
		if (!$content)
		{
			return 'MTI=';
		}
		$string = urldecode($content);
		$exploded = explode('|', $string);		
		switch ($exploded[0]) // If we have an inactive license, return the status code
		{
			case 0:
				return 'OA==';
				break;
			case 2:
				return 'OQ==';
				break;
			case 3:
				return 'NQ==';
				break;
			case 10:
				return 'NA==';
				break;
		}
		$data['license_key'] = $exploded[1];
		$data['expiry']	= $exploded[2];
		$data['hostname'] = $exploded[3];
		$data['ip']	= $exploded[4];
		$data['timestamp'] = $this->now;
		if (empty($data['hostname']))
		{
			$data['hostname'] = str_replace('www.','',$_SERVER['SERVER_NAME']);
		}
		if (empty($data['ip']))
		{
			$data['ip'] = "";
		}
		$data_encoded = serialize($data);
		$data_encoded = base64_encode($data_encoded);
		$data_encoded = md5($this->now.$this->remote_auth).$data_encoded;
		$data_encoded = strrev($data_encoded);
		$data_encoded_hash = sha1($data_encoded.$this->remote_auth);
		$fp = fopen($this->key_location, 'w');
		if ($fp)
		{
			$fp_write = fwrite($fp, wordwrap($data_encoded.$data_encoded_hash, 40, "\n", true));
			
			if (!$fp_write)
			{	
				return 'MTE='; // Unable to write to file
			}
			
			fclose($fp);
		}
		else
		{
			return 'MTA='; // Unable to open file for writing
		}
	}
	function read_key()
	{
		$key = file_get_contents($this->key_location);
		
		if ($key !== false)
		{
			$key = str_replace("\n", '', $key); // Remove the line breaks from the key string
			
			// Split out SHA1 hash from the key data
			$key_string = substr($key, 0, strlen($key)-40);
			$key_sha_hash = substr($key, strlen($key)-40, (strlen($key)));
			
			if (sha1($key_string.$this->remote_auth) == $key_sha_hash) {
				$key = strrev($key_string); // Back the right way around
				
				$key_hash = substr($key, 0, 32); // Get the MD5 hash of the data from the string
				$key_data = substr($key, 32); // Get the data from the string
				
				$key_data = base64_decode($key_data);
				$key_data = unserialize($key_data);
				
				if (md5($key_data['timestamp'].$this->remote_auth) == $key_hash) {					
					if (($this->now - $key_data['timestamp']) >= $this->key_age)
					{						
						unlink($this->key_location);
						
						$this->result = $this->generate_key();
			
						if (empty($this->result))
						{
							$this->result = $this->read_key();
						}
						
						return 'MQ==';
					} else {
						$this->key_data = $key_data;
						if ($key_data['license_key'] != $this->license_key)
						{
							return 'NA==';
						}
						if ($key_data['expiry'] <= $this->now && $key_data['expiry'] != 1)
						{
							return 'NQ==';
						}
						if (substr_count($key_data['hostname'], ',') == 0) { 
						// No
							$limpo = str_replace('www.','',$_SERVER['SERVER_NAME']);
							if ($key_data['hostname'] != $limpo && !empty($key_data['hostname']))
							{
								return 'Ng=='; // Host name does not match key file
							}
						} else { 
						// Yes
							$hostnames = explode(',', $key_data['hostname']);
							$limpo = str_replace('www.','',$_SERVER['SERVER_NAME']);
							if (!in_array($limpo, $hostnames))
							{
								return 'Ng=='; // Host name is not in key file
							}
						}
						
						return 'MQ==';
					}
				}
				else
				{
					return 'Mw==';
				}
			}
			else
			{
				return 'Mg==';
			}
		}
		else
		{
			return 'MA==';
		}
	}
	function get_data()
	{
		return $this->key_data;
	}
}
?>