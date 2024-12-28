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

	<?php wp_head(); ?>
</head>

<body class="che-brigade">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'che-brigade' ); ?></a>

	<header>
  <div class="container">
    <div class="logo">
      <a href="/">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/che-logo.svg" alt="">
				<h1>Che Guevara Volunteer Work Brigade</h1>
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
              <a href="/">Indigenous Scholarship</a>
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

            <li class="btn menu-item">
              <a href="/">Register</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
