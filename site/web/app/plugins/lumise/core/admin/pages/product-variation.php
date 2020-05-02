<?php
	
	
	global $lumise;
	global $lumise_admin;
	
	$lumise->connector->platform = 'php';
	
	if (isset($_POST['data'])) {
		$data = json_decode(urldecode($_POST['data']), true);	
	} else {
		$data = array(
			'stages' => '',
			'printing' => ''
		);
	}
	
	$arg = array(
		array(
			'type' => 'stages',
			'name' => 'stages',
			'value' => isset($data['stages']) ? $data['stages'] : ''
		),
		array(
			'type' => 'printing',
			'name' => 'printings',
			'label' => $lumise->lang('Printing Techniques'),
			'desc' => $lumise->lang('Select Printing Techniques with price calculations for this product').'<br>'.$lumise->lang('Drag to arrange items, the first one will be set as default'),
			'value' => isset($data['printing']) ? $data['printing'] : ''
		)
	);
	
	$fields = $arg;
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo (isset($title) ? $title : 'Lumise Control Panel'); ?></title>
		<?php $lumise->do_action('admin-header'); ?>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $lumise->cfg->admin_assets_url;?>css/font-awesome.min.css?version=<?php echo LUMISE; ?>">
		<link rel="stylesheet" href="<?php echo $lumise->cfg->admin_assets_url;?>css/admin.css?version=<?php echo LUMISE; ?>">
		<link rel="stylesheet" href="<?php echo $lumise->cfg->admin_assets_url;?>css/responsive.css?version=<?php echo LUMISE; ?>">
		<link rel="stylesheet" href="<?php echo $lumise->cfg->upload_url; ?>user_data/custom.css?version=<?php echo $lumise->cfg->settings['last_update']; ?>">
		<link rel="stylesheet" href="<?php echo $lumise->cfg->admin_assets_url; ?>css/iframe.css?version=<?php echo LUMISE; ?>" />
		<script src="<?php echo $lumise->apply_filters('editor/jquery.min.js', $lumise->cfg->assets_url.'assets/js/jquery.min.js?version='.LUMISE); ?>"></script>
		<?php $lumise->do_action('editor-header'); ?>
</head>
<body class="LumiseDesign">
	<div class="lumise_wrapper" id="lumise-product-page" style="width: 100%; padding: 0px;">
		<div class="lumise_content" style="width: 100%;padding: 34px 20px 14px;border: 2px solid #f1f1f1;">
			<div class="lumise-variation-btns">
				<button class="lumise-button" is="options-frame">
					<i class="fa fa-ellipsis-h"></i>
					<ul>
						<li data-frame-fn="copy"><?php echo $lumise->lang('Copy this designs config'); ?></li>
						<li data-frame-fn="paste"><?php echo $lumise->lang('Paste the copied config'); ?></li>
						<li data-frame-fn="apply"><?php echo $lumise->lang('Apply this for all variations'); ?></li>
						<li data-frame-fn="remove" style="color:#E91E63;"><?php echo $lumise->lang('Remove this Lumise config'); ?></li>
					</ul>
				</button>
				<button class="lumise-button" data-frame-fn="close">
					<i class="fa fa-sort-up" data-frame-fn="close"></i>
				</button>
			</div>
			<?php $lumise->views->tabs_render($fields, 'products'); ?>
		</div>
	</div>
<script>
	var LumiseDesign = {
		url : "<?php echo htmlspecialchars_decode($lumise->cfg->url); ?>",
		admin_url : "<?php echo htmlspecialchars_decode($lumise->cfg->admin_url); ?>",
		ajax : "<?php echo htmlspecialchars_decode($lumise->cfg->admin_ajax_url); ?>",
		assets : "<?php echo $lumise->cfg->assets_url; ?>",
		jquery : "<?php echo $lumise->cfg->load_jquery; ?>",
		nonce : "<?php echo lumise_secure::create_nonce('LUMISE_ADMIN') ?>",
		filter_ajax: function(ops) {
			return ops;
		},
		js_lang : <?php echo json_encode($lumise->cfg->js_lang); ?>
	};
</script>
<script src="<?php echo $lumise->cfg->admin_assets_url;?>js/vendors.js?version=<?php echo LUMISE; ?>"></script>
<script src="<?php echo $lumise->cfg->admin_assets_url;?>js/main.js?version=<?php echo LUMISE; ?>"></script>
<?php $lumise->do_action('editor-footer'); ?>
<script type="text/javascript">
(function() {
	
	let fitIframe = () => {
		
			inp.val(
				encodeURIComponent(
					JSON.stringify({
						stages: enjson(lumise.product.get_stages($('#lumise-stages-wrp'))),
						printing: encodeURIComponent(JSON.stringify(lumise.product.get_printing(wrp)))
					})
				)
			).change();
		
			if (window.frameElement && !window.frameElement.getAttribute('data-full')) {
				window.frameElement.style.height = document.body.scrollHeight+'px';
				window.frameElement.parentNode.removeAttribute('data-loading');
			};
		},
		wrp = $('#lumise-product-page'),
		inp = window.parent.jQuery(window.parent.window['variable-lumise-<?php echo $_GET['variation_id']; ?>']),
		btn = window.parent.jQuery('#lumise-config-<?php echo $_GET['variation_id']; ?>');
		
	$(document).on('click', (e) => {
		
		if (e.target.getAttribute && e.target.getAttribute('data-frame-fn')) {
			
			switch (e.target.getAttribute('data-frame-fn')) {
				case 'close' : 
					fitIframe();
					btn.parent().removeClass('hasFrame');
					return window.frameElement.parentNode.removeChild(window.frameElement);
				break;
				case 'remove' : 
					if (confirm('<?php echo $lumise->lang('Are you sure that you want to delete this config?'); ?>')) {
						inp.val('').change();
						btn.parent().attr('data-empty', 'true').removeClass('hasFrame');
						return window.frameElement.parentNode.removeChild(window.frameElement);
					} else return;
				break;
				case 'copy': 
					localStorage.setItem('LUMISE-VARIATION-COPY', 
						encodeURIComponent(
							JSON.stringify({
								stages: enjson(lumise.product.get_stages($('#lumise-stages-wrp'))),
								printing: encodeURIComponent(JSON.stringify(lumise.product.get_printing(wrp)))
							})
						)
					);
					alert('<?php echo $lumise->lang('Your design config has been copied!'); ?>');
				break;
				case 'paste': 
					if (!localStorage.getItem('LUMISE-VARIATION-COPY'))
						return alert('<?php echo $lumise->lang('Error, You must copy one config before pasting'); ?>');
					
					inp.val(localStorage.getItem('LUMISE-VARIATION-COPY')).change();
					window.frameElement.parentNode.removeChild(window.frameElement);
					
					btn.parent().attr('data-empty', 'false').removeClass('hasFrame');
					
				break;
				case 'apply': 
					if (confirm('<?php echo $lumise->lang('Are you sure that you want to apply this config to all other variations?'); ?>')) {
						window.parent.jQuery('textarea.lumise-vari-inp').val(
							encodeURIComponent(
								JSON.stringify({
									stages: enjson(lumise.product.get_stages($('#lumise-stages-wrp'))),
									printing: encodeURIComponent(JSON.stringify(lumise.product.get_printing(wrp)))
								})
							)
						).first().change();
						window.parent.jQuery('div.variable_lumise_data').attr('data-empty', 'false');
					}
				break;
			}
			
		};
		
		fitIframe();
		
		setTimeout(fitIframe, 1000);
		
	}).click();

})();
</script>
</body>
</html>