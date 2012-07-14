<?php userLogado(); ?>
<?php global $user; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<meta name="author" content="/humans.txt">
<base href="<?php bloginfo( 'url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<div id="main">
		<?php if(!is_home()){ ?>
		<header role="banner">
			<div>
				<h1 id="logo" class="ir"><a href="<?php echo home_url( '/missoes' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<div id="profile">
					<h2><?php echo preg_replace('/https?:\/\//s', '', $user->user_url); ?></h2>
					<?php 
						/**
						* Imagem perfil
						*/
						$imagem = get_the_author_meta('imagem', $user->ID); 
						$imagem = empty($imagem) ? "http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=150" : $imagem; 
					?>
					<figure><img src="<?php echo $imagem; ?>" alt="<?php echo esc_attr( $user->user_nicename ); ?>" title="<?php echo esc_attr( $user->user_nicename ); ?>"></figure>
					<nav>
						<ul>
							<li class="menu-missoes"><a class="ir" href="<?php echo home_url( '/missoes' ); ?>" title="Missões">Missões</a></li>
							<li class="menu-regras"><a class="ir" href="#" title="Regras">Regras</a></li>
							<li class="menu-performance"><a class="ir" href="#" title="Performance">Performance</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<section id="ranking">
				<header>
					<h1 class="ir">Ranking</h1>
					<em class="ir">atualizado uma vez a cada 24 horas.</em>
					<nav>
						<a class="current aba-semanal" href="#" title="Semanal">Semanal</a>
						<a class="aba-geral" href="#" title="Geral">Geral</a>
					</nav>
				</header>
				<ul>
					<li><a href="#" title="Brainstorm9">Brainstorm9</a> <b>1860 pontos</b></li>
					<li><a href="#" title="Não Salvo">Não Salvo</a> <b>865 pontos</b></li>
					<li><a href="#" title="Be Cool or Be Fool">Be Cool or Be Fool</a> <b>650 pontos</b></li>
					<li><a href="#" title="Techtudo">Techtudo</a> <b>300 pontos</b></li>
					<li><a href="#" title="Garotas Estúpidas">Garotas Estúpidas</a> <b>180 pontos</b></li>
				</ul>
			</section>
		</header>
		<div>
			<h2 class="ir" id="str">Missões</h2>
			<form method="post" id="shortener">
				<fieldset>
					<label for="shorturl">Quer encurtar uma URL?</label>
					<input type="text" name="shorturl" id="shorturl">
					<input type="submit" value="Copiar" class="copy">
				</fieldset>
			</form>
		</div>
		<?php } ?>
		<section id="content" role="main">