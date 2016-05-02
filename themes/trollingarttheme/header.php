<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trollingarttheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php metaTagsRich(); ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60185776-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '548546291973891',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60185776-1', 'auto');
  ga('send', 'pageview');

</script>
<nav class="navbar navbar-static">
   <div class="container">
    <div class="navbar-header">
      <a class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
    </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
					<?php if( has_nav_menu( 'primary' ) ) :
			            wp_nav_menu( array(
		                        'theme_location'  => 'primary',
		                        'container'       => false,
		                        //'menu_class'      => 'nav navbar-nav',//  'nav navbar-right'
		                        'walker'          => new Bootstrap_Nav_Menu(),
		                        'fallback_cb'     => null,
				                'items_wrap'      => '%3$s',// skip the containing <ul>
		                    )
		                );
	                else :
		                wp_list_pages( array(
				                'menu_class'      => 'nav navbar-nav',//  'nav navbar-right'
				                'walker'          => new Bootstrap_Page_Menu(),
				                'title_li'        => null,
			                )
		                );
		            endif;
		        ?>
        </ul>
        <ul class="nav navbar-right navbar-nav">
          <li class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
            <ul class="dropdown-menu" style="padding: 12px;">
                <form class="form-inline">
     				<i class="glyphicon glyphicon-search"></i></button><?php get_search_form(); ?>
                </form>
             </ul>
          </li>
          <!--
          <li class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#">Login</a></li>
              <li><a href="#">Profile</a></li>
              <li class="divider"></li>
              <li><a href="#">About</a></li>
             </ul>
          </li>-->
        </ul>
      </div>
    </div>
</nav><!-- /.navbar -->
<header class="masthead">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-trollingart.jpg" class="img-responsive">
				</a>
      </div>
      <div class="col-md-6">
        <div class="well pull-right">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- trollingNewTop -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-3620678877337408"
			     data-ad-slot="5535027177"
			     data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
        </div>
      </div>
    </div>
  </div>
</header>
