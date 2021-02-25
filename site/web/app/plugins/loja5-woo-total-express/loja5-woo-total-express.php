<?php
/*
  Plugin Name: Transportadora Total Express - Loja5
  Description: Integração a transportadora Total Express
  Version: 2.0
  Author: Loja5.com.br
  Author URI: http://www.loja5.com.br
  Copyright: © 2009-2020 Loja5.com.br.
  License: Comercial
*/

define('LOJA5_WOO_TOTAL_EXPRESS_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ));

if ( ! class_exists( ' WC_Loja5_Total_Express' ) ) {
    
class WC_Loja5_Total_Express {
    
    protected static $instance = null;
    
    private function __construct() {
        $this->init();
        add_filter( 'woocommerce_shipping_methods', array( $this, 'include_methods' ) );
		add_filter('woocommerce_after_shipping_rate', array($this,'prazo_de_entrega_carrinho'), 100);
    }
	
	public function prazo_de_entrega_carrinho( $metodo ) {
		$metas = $metodo->get_meta_data();
		$label = '';
		if(isset($metas['prazo_total']) && !empty($metas['prazo_total'])){
			$label .= '<br /><small>';
			$label .= sprintf( __( 'Entrega em até %s dia(s) úteis.', 'loja5-woo-total-express' ), $metas['prazo_total'] );
			$label .= '</small>';
		}
		echo $label;
	}
	
	public function init() {
		if(extension_loaded("IonCube Loader")) {
			if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.6.0', '>=' ) ) {
				if(version_compare(PHP_VERSION, '5.5.0', '<')) {
					include_once(LOJA5_WOO_TOTAL_EXPRESS_DIR.'/include/php54/loja5.php' );
					include(LOJA5_WOO_TOTAL_EXPRESS_DIR.'/include/php54/config.php' );
				}elseif(version_compare(PHP_VERSION, '5.6.0', '<')){
					include_once(LOJA5_WOO_TOTAL_EXPRESS_DIR.'/include/php55/loja5.php' );
					include(LOJA5_WOO_TOTAL_EXPRESS_DIR.'/include/php55/config.php' );
				}elseif(version_compare(PHP_VERSION, '7.1.0', '<')){
					include_once(LOJA5_WOO_TOTAL_EXPRESS_DIR.'/include/php56/loja5.php' );
					include(LOJA5_WOO_TOTAL_EXPRESS_DIR.'/include/php56/config.php' );
				}elseif(version_compare(PHP_VERSION, '7.2.0', '<')){
					include_once(LOJA5_WOO_TOTAL_EXPRESS_DIR.'/include/php71/loja5.php' );
					include(LOJA5_WOO_TOTAL_EXPRESS_DIR.'/include/php71/config.php' );
				}else{
					include_once(LOJA5_WOO_TOTAL_EXPRESS_DIR.'/include/php72/loja5.php' );
					include(LOJA5_WOO_TOTAL_EXPRESS_DIR.'/include/php72/config.php' );
				}
				include_once(dirname(__FILE__).'/classes/abstract-total-express.php');
				include_once(dirname(__FILE__).'/classes/metodos-total-express.php');
			}else{
				add_action( 'admin_notices', array( $this, 'alerta_versao' ) );
			}
		}else{
			add_action( 'admin_notices', array( $this, 'alerta_ioncube' ) );
		}
	}
    
    public function alerta_versao(){
        echo '<div class="error">';
        echo '<p><strong>M&oacute;dulo Transportadora TotalExpress:</strong> Requer vers&atilde;o Woo 3.x ou superior, atualize seu Woo para vers&atilde;o compativel!</p>';
        echo '</div>';
    }
	
	public function alerta_ioncube(){
        echo '<div class="error">';
        echo '<p><strong>Transportadora TotalExpress [Loja5]:</strong> Sua hospedagem n&atilde;o possui o Ioncube ativado, solicite a mesma ativar ou veja com o gestor de seu host!</p>';
        echo '</div>';
    }
	
    public static function get_instance() {
        if ( null === self::$instance ) {
            self::$instance = new self;
        }
        return self::$instance;
    }
	
	public function include_methods( $methods ) {        
        if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.6.0', '>=' ) ) {
            $methods['total-express-legacy'] = 'Loja5_Shipping_Total_Express_Legacy';
            $methods['total-express-esp'] = 'Loja5_Shipping_Total_Express_ESP';
            $methods['total-express-exp'] = 'Loja5_Shipping_Total_Express_EXP';
            $methods['total-express-std'] = 'Loja5_Shipping_Total_Express_STD';
            $methods['total-express-prm'] = 'Loja5_Shipping_Total_Express_PRM';
        }
		return $methods;
	}
}

add_action( 'plugins_loaded', array( 'WC_Loja5_Total_Express', 'get_instance' ) );

}
?>