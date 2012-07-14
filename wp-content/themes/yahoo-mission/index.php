<?php get_header(); ?>
<h1 id="logo" class="ir"><?php bloginfo( 'name' ); ?></h1>
<fieldset class="login <?php echo isset($_GET['erro']) ? 'erro' : ''; ?>">
<?php 
	$erro = array();
	if(isset($_GET['erro'])) $erro = array('value_username' => __( 'Verifique seu usuário ou senha'));
	wp_login_form(
		array_merge(
			array(	'echo' 			=> true, 
					'redirect' 		=> home_url('missoes'), 
					'label_username'=> 'Usuário',
					'label_log_in'	=> 'OK',
					'remember'		=> false),
				$erro
			)
		); 
?> 
</fieldset>
<?php get_footer();  ?>