<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Loja5_Shipping_Total_Express_Legacy extends WC_Shipping_Method {

	private $request;
	private $boxes;
	private $units;
	private $method_errors;

	function __construct() {
		global $woocommerce;
		$this->id = 'total-express';
		$this->method_title = 'Transportadora Total Express [Loja5]';
        $this->init_settings();
		$this->init_form_fields();
        
        // Method variables.
        $this->enabled            = $this->get_option( 'enabled' );
		$this->availability       = 'specific';
		$this->countries          = array( 'BR' );
        
		add_action('woocommerce_update_options_shipping_'.$this->id,array($this,'process_admin_options'));
	}

	public function init_form_fields() {
        $serial = trim($this->settings['serial']);
        $key_string = trim($serial);
		$remote_auth = 'df08acba4ec3';
		$key_location = LOJA5_WOO_TOTAL_EXPRESS_DIR.'/key.'.md5($serial).'.php';
		$key_age = 1296000;
		$resultado = new gateway_woo_total_express_loja5($key_string, $remote_auth, $key_location, $key_age);
		$hosts = isset($resultado->key_data['hostname'])?$resultado->key_data['hostname']:'';
		if(isset($_GET['debug_total'])){
			print_r($resultado);
		}
		$check = base64_decode($resultado->result);
		if($check==1){
			$this->form_fields = array(
				'imagem' => array(
					'title' => "",
					'type' 			=> 'hidden',
					'description' => "<img src='".plugins_url()."/loja5-woo-total-express/banner.png'>",
					'default' => ''
				),
				'serial' => array(
					'title'       => __( 'Serial de Registro ('.$check.')', 'loja5-woo-total-express' ),
					'type'        => 'text',
					'description' => "Status: ".$check." / Registrado para: ".$hosts."",
					'default'     => '',
				),
				'behavior_options' => array(
					'title'   => __( 'Configura&ccedil;&otilde;es Transportadora Total Express', 'loja5-woo-total-express' ),
					'type'    => 'title',
					'default' => '',
				),
				'enabled' => array(
					'title'   => __( 'Ativar/Desativar', 'loja5-woo-total-express' ),
					'type'    => 'checkbox',
					'label'   => __( 'Ativa ou não o serviço na loja', 'loja5-woo-total-express' ),
					'default' => 'yes',
				),
				'login' => array(
					'title' => "Login Total Express",
					'type' => 'text',
					'css' => 'width: 250px;',
					'description' => '<a href="https://loja5.zendesk.com/hc/pt-br/articles/360049481191-Como-Obter-Login-e-Senha-de-Integra%C3%A7%C3%A3o-a-Transportadora-Total-Express-" target="_blank">Clique aqui</a> para detalhes.'
				),
				'senha' => array(
					'title' => "Senha Total Express",
					'type' => 'text',
					'css' => 'width: 250px;',
					'description' => '<a href="https://loja5.zendesk.com/hc/pt-br/articles/360049481191-Como-Obter-Login-e-Senha-de-Integra%C3%A7%C3%A3o-a-Transportadora-Total-Express-" target="_blank">Clique aqui</a> para detalhes.'
				),
				'peso_tipo'  => array(
					'title'           => "Tipo peso usado na loja",
					'type'            => 'select',
					'default'         => 'k',
					'options'         => array(
						'k' => 'Kilo',
						'g' => 'Grama'
					),
					'description' => ''
				),
				'pagar'  => array(
					'title'           => "Pagar no Destino",
					'type'            => 'select',
					'default'         => 'N',
					'options'         => array(
						'0' => 'Nao',
						'1' => 'Sim'
					),
					'description' => ''
				),
				'exibir_prazo'  => array(
					'title'           => "Exibir Prazo",
					'type'            => 'select',
					'default'         => 'inline',
					'options'         => array(
						'inline' => 'Inline (abaixo)',
						'titulo' => 'No Titulo (junto ao valor)'
					),
					'description' => __( 'Formato e loca a exibir o prazo ao cliente (condicional ao tema usado).', 'loja5-woo-total-express' ),
				),
			);
        }else{  
			$this->form_fields = array(
				'imagem' => array(
					'title' => "",
					'type' 			=> 'hidden',
					'description' => "<img src='".plugins_url()."/loja5-woo-total-express/banner.png'>",
					'default' => ''
				),
				'serial' => array(
					'title'       => __( 'Serial de Registro ('.$check.')', 'loja5-woo-total-express' ),
					'type'        => 'text',
					'description' => "Status: ".$check." / M&oacute;dulo Comercial, informe o serial de registro! Vendas em <a href='https://www.loja5.com.br/' target='_blank'>https://www.loja5.com.br</a> e em caso de problema de ativa&ccedil;o <a href='https://loja5.zendesk.com/hc/pt-br/articles/360001980232-Problema-ou-erro-ao-ativar-um-m%C3%B3dulo-' target='_blank'>acesse aqui</a>.",
					'default'     => '',
				)
			);    
        }
	}

	public function admin_options() {
		global $woocommerce;
		?>
		<h3><?php echo $this->method_title;?></h3>
		<p><?php echo $this->method_description;?></p>
		<table class="form-table">
			<?php
			$this->generate_settings_html();
			?>
		</table>
		<?php
	}
}
?>