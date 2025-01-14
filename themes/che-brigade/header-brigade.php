<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package che-brigade
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body class="che-brigade">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'che-brigade' ); ?></a>

	<header class="header">
  <div class="container">
    <div class="logo">
      <a href="/">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.svg" alt="">
				<h1 class="sr-only">Che Guevara Volunteer Work Brigade</h1>
      </a>
    </div>

    <div class="main-navigation-wrap">
      <nav class="main-navigation">
        <div class="menu-side-menu-container">
          <ul class="menu">
            <li class="menu-item">
              <a href="/">Home</a>
            </li>

            <li class="menu-item">
              <a href="/">About Brigade</a>
            </li>

            <li class="menu-item">
              <a href="/">Scholarship</a>
            </li>

            <li class="menu-item">
              <a href="/">Guides</a>
            </li>

            <li class="menu-item">
              <a href="/">FAQ</a>
            </li>

            <li class="menu-item">
              <a href="/">Past brigades</a>
            </li>

            <li class="menu-item">
              <a href="/">Contact</a>
            </li>

            <li class="menu-item">
              <a href="/" class="btn">Register</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
</div>
</body>