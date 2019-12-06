<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
Modulo comercial desenvolvido por Loja5.com.br
*/
${"G\x4cO\x42A\x4cS"}["g\x63\x63g\x73\x75\x6dv"]="\x63\x68\x65\x63\x6b";${"G\x4cO\x42\x41\x4cS"}["t\x67\x6f\x73\x6d\x65"]="k\x65y_\x6c\x6f\x63a\x74\x69\x6f\x6e";${"GL\x4fB\x41L\x53"}["u\x77an\x7aqo\x64\x6f"]="\x72\x65m\x6ft\x65\x5f\x61u\x74\x68";${"\x47\x4c\x4fB\x41\x4cS"}["my\x65v\x70\x76\x69\x69\x66"]="key_ag\x65";${"\x47\x4c\x4f\x42\x41\x4cS"}["\x61\x6e\x70\x61\x6f\x63p"]="\x6b\x65\x79\x5fs\x74ri\x6e\x67";${"\x47\x4cO\x42A\x4c\x53"}["\x63\x61\x71\x75\x71u\x70\x76h\x6a"]="\x73\x65\x72i\x61\x6c";class Loja5_Shipping_Total_Express_Legacy extends WC_Shipping_Method{private$request;private$boxes;private$units;private$method_errors;function __construct(){global$woocommerce;$this->id="\x74ot\x61l-ex\x70r\x65s\x73";$this->method_title="\x54\x72an\x73\x70\x6f\x72tador\x61\x20T\x6f\x74a\x6c Express\x20[\x4coj\x61\x35]";$this->init_settings();$this->init_form_fields();$this->enabled=$this->get_option("\x65\x6e\x61\x62\x6c\x65\x64");$this->availability="sp\x65\x63\x69fic";$this->countries=array("BR");add_action("w\x6foco\x6dm\x65\x72\x63\x65_upd\x61te_o\x70t\x69on\x73_\x73\x68i\x70p\x69ng\x5f".$this->id,array($this,"\x70\x72\x6fc\x65\x73s_\x61dmi\x6e_\x6f\x70ti\x6f\x6e\x73"));}public function init_form_fields(){$filgegqs="\x73e\x72ial";${${"\x47\x4cO\x42\x41\x4cS"}["ca\x71\x75\x71up\x76\x68j"]}=trim($this->settings["\x73eri\x61\x6c"]);${"\x47LO\x42\x41L\x53"}["u\x69\x64\x6a\x72\x6e\x7a\x65\x76f"]="\x6b\x65y\x5f\x6co\x63\x61\x74\x69\x6fn";${"G\x4cOB\x41L\x53"}["v\x64\x64o\x74\x6b\x6cf\x6ai\x64"]="\x72\x65\x73\x75lt\x61do";${"\x47L\x4f\x42\x41\x4c\x53"}["\x72\x75lgx\x76\x6b"]="\x72e\x6d\x6fte\x5f\x61\x75th";${"\x47\x4c\x4f\x42\x41\x4cS"}["\x6a\x72\x76\x73\x71\x72"]="\x6b\x65\x79_\x73tri\x6e\x67";${"\x47\x4c\x4fB\x41LS"}["\x77\x72\x75u\x6f\x61\x6b\x74\x75v\x66\x68"]="\x6be\x79_\x61g\x65";$scmgrivl="\x63hec\x6b";${${"\x47\x4cO\x42\x41\x4cS"}["\x61\x6e\x70\x61\x6f\x63\x70"]}=trim(${$filgegqs});${${"\x47\x4cO\x42\x41\x4c\x53"}["\x72u\x6c\x67xv\x6b"]}="\x64f08a\x63b\x614\x65\x63\x33";${${"G\x4c\x4f\x42\x41\x4c\x53"}["u\x69\x64jrn\x7a\x65\x76\x66"]}=dirname(__FILE__)."/\x2e./\x6be\x79\x2et\x6f\x74al-\x65x\x70re\x73\x73.\x70hp";${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x6d\x79\x65\x76\x70\x76\x69i\x66"]}=1296000;$sbxvbrh="c\x68e\x63\x6b";${${"GLO\x42\x41\x4c\x53"}["\x76\x64d\x6f\x74k\x6c\x66\x6ai\x64"]}=new gateway_woo_total_express_loja5(${${"\x47L\x4fBA\x4c\x53"}["j\x72v\x73q\x72"]},${${"G\x4c\x4f\x42ALS"}["\x75\x77an\x7a\x71\x6f\x64o"]},${${"\x47\x4c\x4f\x42\x41L\x53"}["\x74g\x6fs\x6de"]},${${"\x47\x4c\x4fBA\x4c\x53"}["\x77\x72uu\x6f\x61\x6bt\x75\x76\x66\x68"]});${$scmgrivl}=base64_decode($resultado->result);if(${$sbxvbrh}==1){$this->form_fields=array("ima\x67\x65\x6d"=>array("t\x69t\x6ce"=>"","ty\x70\x65"=>"\x68\x69\x64\x64e\x6e","\x64escr\x69pt\x69on"=>"\x3c\x69m\x67\x20\x73r\x63\x3d'".plugins_url()."/\x6co\x6a\x615-\x77o\x6f-\x74o\x74\x61\x6c-ex\x70r\x65\x73\x73/\x62a\x6en\x65\x72.\x70\x6eg\x27>","d\x65f\x61ult"=>""),"\x73\x65r\x69al"=>array("\x74\x69t\x6c\x65"=>__("\x53\x65rial\x20d\x65 \x52e\x67istro (".${${"GL\x4f\x42\x41LS"}["g\x63\x63\x67s\x75\x6d\x76"]}.")","\x6co\x6a\x61\x35-\x77\x6f\x6f-\x74o\x74\x61\x6c-expres\x73"),"\x74\x79p\x65"=>"\x74e\x78t","\x64\x65s\x63\x72iptio\x6e"=>__("O\x20seu s\x65\x72\x69al de\x20\x72e\x67istr\x6f.","loja\x35-\x77\x6f\x6f-t\x6ftal-\x65\x78p\x72\x65ss"),"d\x65\x73\x63\x5f\x74ip"=>true,"d\x65f\x61u\x6c\x74"=>"",),"\x62eh\x61\x76i\x6f\x72\x5fop\x74\x69\x6f\x6e\x73"=>array("\x74\x69tl\x65"=>__("C\x6f\x6ef\x69g\x75r\x61&c\x63\x65\x64\x69\x6c\x3b\x26\x6f\x74i\x6cde;es\x20\x54\x72\x61\x6es\x70o\x72t\x61\x64o\x72a\x20\x54\x6ft\x61\x6c\x20Ex\x70r\x65\x73\x73","lo\x6aa5-w\x6fo-\x74o\x74al-e\x78\x70\x72\x65\x73\x73"),"\x74\x79\x70\x65"=>"titl\x65","def\x61\x75\x6c\x74"=>"",),"\x65\x6eabl\x65d"=>array("\x74itle"=>__("A\x74\x69var/De\x73\x61\x74iv\x61r","\x6co\x6aa5-\x77o\x6f-\x74o\x74a\x6c-e\x78\x70r\x65ss"),"\x74ype"=>"\x63heck\x62\x6fx","labe\x6c"=>__("\x41\x74\x69\x76a\x20ou \x6eã\x6f o serviço \x6e\x61\x20l\x6fja","\x6co\x6a\x615-\x77oo-\x74\x6f\x74a\x6c-\x65\x78p\x72\x65\x73\x73"),"\x64efau\x6ct"=>"\x79e\x73",),"\x6c\x6fg\x69n"=>array("\x74\x69\x74le"=>"Log\x69\x6e\x20\x54o\x74\x61\x6c\x20Exp\x72e\x73s","\x74yp\x65"=>"\x74\x65x\x74","\x63ss"=>"wid\x74h:\x20\x325\x30\x70x;","\x64e\x73\x63ri\x70t\x69\x6f\x6e"=>""),"\x73\x65\x6eha"=>array("\x74i\x74\x6ce"=>"\x53\x65n\x68\x61\x20To\x74\x61l Ex\x70\x72ess","t\x79p\x65"=>"\x74\x65\x78\x74","cs\x73"=>"\x77\x69dth: \x325\x30p\x78\x3b","\x64\x65s\x63ript\x69\x6fn"=>""),"\x70e\x73o_\x74\x69p\x6f"=>array("ti\x74\x6ce"=>"T\x69\x70\x6f\x20\x70\x65so\x20\x75sa\x64o\x20\x6ea l\x6f\x6a\x61","\x74\x79\x70e"=>"se\x6c\x65ct","d\x65fa\x75\x6c\x74"=>"\x6b","o\x70\x74i\x6f\x6es"=>array("\x6b"=>"\x4bil\x6f","\x67"=>"\x47r\x61\x6d\x61"),"\x64e\x73c\x72\x69\x70\x74\x69\x6fn"=>""),"\x70\x61g\x61\x72"=>array("t\x69tl\x65"=>"\x50a\x67\x61\x72\x20\x6eo\x20D\x65s\x74i\x6eo","ty\x70e"=>"se\x6ce\x63t","\x64efau\x6c\x74"=>"N","\x6f\x70tio\x6es"=>array("\x30"=>"N\x61o","\x31"=>"\x53im"),"de\x73\x63ri\x70\x74io\x6e"=>""),);}else{${"\x47\x4c\x4f\x42ALS"}["\x6d\x65\x71\x6a\x72s\x6e"]="c\x68e\x63\x6b";$this->form_fields=array("im\x61g\x65m"=>array("ti\x74l\x65"=>"","\x74\x79\x70e"=>"h\x69dd\x65\x6e","de\x73crip\x74\x69on"=>"<img\x20\x73rc='".plugins_url()."/\x6coj\x615-\x77\x6f\x6f-\x74\x6f\x74\x61l-\x65\x78\x70res\x73/\x62\x61\x6ene\x72.p\x6e\x67'\x3e","\x64e\x66\x61ul\x74"=>""),"\x73\x65\x72\x69\x61\x6c"=>array("t\x69\x74l\x65"=>__("S\x65r\x69a\x6c de\x20R\x65\x67\x69\x73tr\x6f (".${${"G\x4c\x4fB\x41\x4c\x53"}["\x6de\x71j\x72s\x6e"]}.")","\x6c\x6fj\x61\x35-\x77\x6fo-to\x74\x61\x6c-\x65xpr\x65\x73s"),"\x74ype"=>"t\x65x\x74","de\x73\x63ri\x70\x74i\x6f\x6e"=>__("O seu\x20s\x65r\x69a\x6c\x20\x64\x65\x20\x72\x65g\x69s\x74r\x6f\x2e","\x6c\x6f\x6a\x61\x35-\x77oo-t\x6f\x74\x61\x6c-expre\x73\x73"),"d\x65sc\x5f\x74ip"=>true,"\x64efault"=>"",));}}public function admin_options(){global$woocommerce;echo "\t\t<\x683>";echo$this->method_title;echo "</\x68\x33\x3e\n\t\t<\x70>";echo$this->method_description;echo "\x3c/\x70>\n\t\t<tab\x6c\x65\x20class=\"for\x6d-\x74ab\x6c\x65\">\n\t\t\t";$this->generate_settings_html();echo "\t\t\x3c/ta\x62l\x65>\n\t\t";}}

abstract class Loja5_Shipping_Total_Express extends WC_Shipping_Method {

	protected $code = '';
    protected $log = null;
    public $serial = '';
    public $uri = 'https://edi.totalexpress.com.br/webservice_calculo_frete.php?wsdl';

	public function __construct( $instance_id = 0 ) {
		$this->instance_id        = absint( $instance_id );
		$this->method_description = sprintf( __( '%s é um metodo transportadora Total Express', 'loja5-woo-total-express' ), $this->method_title );
		$this->supports           = array(
			'shipping-zones',
			'instance-settings',
		);

		$this->init_settings();
		$this->init_form_fields();

        $this->title              = $this->get_option( 'title' );
        $this->pagar              = $this->get_option( 'pagar' );
        $this->fator              = $this->get_option( 'fator' );
        $this->peso_calculo       = $this->get_option( 'peso_calculo' );
		$this->peso_minimo        = $this->get_option( 'peso_minimo' );
		$this->prazo              = $this->get_option( 'prazo' );
        $this->taxa               = $this->get_option( 'taxa' );
        $this->debug              = $this->get_option( 'debug' );
        
        $this->log = new WC_Logger();

		add_action( 'woocommerce_update_options_shipping_' . $this->id, array( $this, 'process_admin_options' ) );
	}

	protected function get_log_link() {
		if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.2', '>=' ) ) {
			return ' <a href="' . esc_url( admin_url( 'admin.php?page=wc-status&tab=logs&log_file=' . esc_attr( $this->id ) . '-' . sanitize_file_name( wp_hash( $this->id ) ) . '.log' ) ) . '">' . __( 'Ver logs.', 'loja5-woo-total-express' ) . '</a>';
		}
	}
    
	public function init_form_fields() {
        $this->instance_form_fields = array(
			'imagem' => array(
				'title' => "",
				'type' 			=> 'hidden',
				'description' => "<img src='".plugins_url()."/loja5-woo-total-express/banner.png'>",
				'default' => ''
			),
		    'title' => array(
				'title'       => __( 'Titulo', 'loja5-woo-total-express' ),
				'type'        => 'text',
				'description' => __( 'Nome a exibir do meio de entrega.', 'loja5-woo-total-express' ),
				'desc_tip'    => true,
				'default'     => $this->method_title,
			),
			'behavior_options' => array(
				'title'   => __( 'Configura&ccedil;&otilde;es '.$this->method_title.'', 'loja5-woo-total-express' ),
				'type'    => 'title',
				'default' => '',
			),
		    'prazo' => array(
				'title' => "Prazo Extra",
				'type' => 'text',
				'description' => "Prazo extra em dias a somar no prazo real.",
				'default' => '1'
		    ),
			'taxa' => array(
				'title' => "Taxa Extra",
				'type' => 'text',
				'description' => "Valor em R$ de uma Taxa extra caso queira cobrar.",
				'default' => '0.00'
		    ),
            'peso_minimo' => array(
				'title'       => __( 'Peso Minimo KG', 'loja5-woo-total-express' ),
				'type'        => 'text',
				'description' => __( 'Peso minimo de um pedido para uso do modulo.', 'loja5-woo-total-express' ),
				'desc_tip'    => true,
				'placeholder' => '0.00',
				'default'     => '0.00',
			),
            'peso_calculo'  => array(
				'title'           => "Peso do Produto a Usar",
				'type'            => 'select',
				'default'         => 'cubado',
				'options'         => array(
					'real' => 'Peso real dos produtos',
					'cubado' => 'Peso cubado dos produtos'
				),
				'description' => ''
			),
            'fator' => array(
				'title'       => __( 'Fator de Cubagem', 'loja5-woo-total-express' ),
				'type'        => 'text',
				'description' => __( 'Fator de cubagem para calculo do peso cubico.', 'loja5-woo-total-express' ),
				'desc_tip'    => true,
				'default'     => '300',
			),
            'testing' => array(
				'title'   => __( 'Debug', 'loja5-woo-total-express' ),
				'type'    => 'title',
				'default' => '',
			),
			'debug' => array(
				'title'       => __( 'Log', 'loja5-woo-total-express' ),
				'type'        => 'checkbox',
				'label'       => __( 'Ativar log', 'loja5-woo-total-express' ),
				'default'     => 'no',
				'description' => sprintf( __( 'Logs e eventos de %s.', 'loja5-woo-total-express' ), $this->method_title ) . $this->get_log_link(),
			),
		);
	}

	public function admin_options() 
    {
		global $woocommerce;
		?>
		<h3><?php echo $this->method_title;?></h3>
		<p><?php echo $this->method_description;?></p>
		<table class="form-table">
			<?php
			echo $this->get_admin_options_html();
			?>
		</table>
		<?php
	}
    
    public function is_available( $package ) {
		return true;
	}

	protected function get_cart_total() {
		if ( ! WC()->cart->prices_include_tax ) {
			return WC()->cart->cart_contents_total;
		}
		return WC()->cart->cart_contents_total + WC()->cart->tax_total;
	}
    
    private function calcular_pesos($package) {
        $config = new Loja5_Shipping_Total_Express_Legacy();
        $fator = $this->fator;
        if($fator <= 0){
            $fator = 300;
        }
		$peso_cubado = $peso_real = $volume = 0;
    	foreach ( $package['contents'] as $item_id => $values ) {
    		if( !$values['data']->needs_shipping() ){
    			continue;
    		}
            $product = $values['data'];
			$qty     = $values['quantity'];
            $volume++;
            $alt = $product->get_height()/100;
            $com = $product->get_length()/100;
            $lar = $product->get_width()/100;
			$peso = $product->get_weight();
            $peso_cubado += (($alt*$lar*$com)*$qty)*$fator;
			if($config->settings['peso_tipo']=='k'){
				$peso_real += $peso*$qty;
			}else{
				$peso_real += ($peso/1000)*$qty;
			}
    	}
        return array('real'=>round($peso_real, 2),'cubado'=>round($peso_cubado, 2),'volume'=>$volume);
    }

	public function calculate_shipping( $package = array() ) {
		$config = new Loja5_Shipping_Total_Express_Legacy();
		
        if ( 'yes' !== $this->enabled ) {
            return;
        }
        
        if ( '' === $package['destination']['postcode'] || 'BR' !== $package['destination']['country'] ) {
			return;
		}
        
        $peso = $this->calcular_pesos($package);
        
        //pega o peso para uso 
        if($this->peso_calculo=='cubado'){
            if($peso['real'] > $peso['cubado']){
                $peso = $peso['real'];
            }else{
                $peso = $peso['cubado'];
            }
        }else{
            $peso = $peso['real'];
        }
		if($peso < 1.00){
			$peso = 1.00;
		}
        
        //regra peso minimo
        if($peso < $this->peso_minimo){
            return;
        }
        
        //calcula 
        $calculo = $this->calcular_frete($package,$peso);
        
        if(isset($calculo->ValorServico)){
            $calculo_total = (float)str_replace(',','.',str_replace('.','',$calculo->ValorServico));
			$calculo_total = number_format($calculo_total, 2, '.', '');
            if(isset($calculo->Prazo)){
                $prazo = 'em at&eacute; '.((int)$this->prazo+$calculo->Prazo).' dia(s)';
            }else{
				$prazo = '';
			}				
            if($calculo_total > 0){
                $calculo_total += (float)$this->taxa;
                $this->add_rate(array(
                    'code'	=> 'total-express',
                    'id' 	=> $this->id,
                    'label' => $this->title.' '.$prazo.'',
                    'cost' 	=> $calculo_total
                ));
            }else{
                return;
            }
        }else{
            return;
        }

	}
	
	public function calcular_frete($pack,$peso){
	    global $woocommerce;
        
        $config = new Loja5_Shipping_Total_Express_Legacy();
        
        $request = array();
		$request['TipoServico'] = strtoupper($this->code);
        $request['CepDestino'] = preg_replace('/\D/', '', $pack['destination']['postcode']);
        $request['Peso'] = number_format($peso, 2, '.', '');
        $request['ValorDeclarado'] = number_format($pack['contents_cost'], 2, '.', '');
		$request['TipoEntrega'] = 0;
		$request['ServicoCOD'] = (bool)$config->settings['pagar'];
        
        if ( 'yes' === $this->debug ) {
            $this->log->add( $this->id, 'Total express '.$this->title.' envio: ' . print_r($request,true) );
        }
        
        $soap_opt = array();
        $soap_opt['stream_context'] = stream_context_create(array('http' => array('protocol_version' => 1.0) ) );
        $soap_opt['encoding']    = 'UTF-8';
        $soap_opt['trace']           = true;
        $soap_opt['exceptions'] = true;
		$soap_opt['connection_timeout'] = 10;
        $soap_opt['login'] = html_entity_decode(trim($config->settings['login']), ENT_QUOTES, 'UTF-8');
        $soap_opt['password'] = html_entity_decode(trim($config->settings['senha']), ENT_QUOTES, 'UTF-8');

		$client = new SoapClient($this->uri,$soap_opt);
		try { 
			$info = $client->__call("calcularFrete", array($request));
            
            if ( 'yes' === $this->debug ) {
                $this->log->add( $this->id, 'Total Express '.$this->title.' resultado: ' . print_r($info,true) );
            }
                
            if(isset($info->CodigoProc)){
                if($info->CodigoProc==1){
                    return $info->DadosFrete;
                }else{
                    $erro = isset($info->ErroConsultaFrete)?$info->ErroConsultaFrete:'Verificar login/senha e ambiente!';
                    if(function_exists('wc_add_notice')){
                        wc_add_notice("Erro Total Express ".$this->title.": " . $erro);
                    }else{
                        $woocommerce->add_error("Erro Total Express ".$this->title.": " . $erro);
                    }
                    return false;
                }
            }else{
                return false;
            }
		} catch (SoapFault $fault) { 
            if ( 'yes' === $this->debug ) {
                $this->log->add( $this->id, 'Total Express '.$this->title.' fault: ' . print_r( $fault->faultstring, true ) );
            }
			if(function_exists('wc_add_notice')){
                wc_add_notice("Erro Total Express: ".$fault->faultstring."");
			}else{
                $woocommerce->add_error("Erro Total Express: ".$fault->faultstring."");
			}
			return false; 
		}
	}
}