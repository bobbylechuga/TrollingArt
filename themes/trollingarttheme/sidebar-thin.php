<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trollingarttheme
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>
<div class="col-md-2">
	<div class="panel panel-default" id="sidebar">
		<?php if(is_home() || is_front_page()) { ?>
				<div class="panel-heading" style="color: rgb(255, 255, 255); background-color: rgb(136, 136, 136);">Sidebar</div>
		<?php } ?>
	<div class="panel-body thin-ad">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- NewSidebar -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-3620678877337408"
		     data-ad-slot="3854327579"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</ul>
	<div class="accordion" id="accordion2">
	    <div class="accordion-group">
	        <div class="accordion-heading">
	            <a class="accordion-toggle" href="#collapseOne" data-toggle="collapse" data-parent="#accordion2">
	                Accordion
	            </a>
	        </div>
	        <div class="accordion-body collapse in" id="collapseOne">
	            <div class="accordion-inner">
	                Content here for links, ads, etc..
	            </div>
	        </div>
	    </div>
	    <div class="accordion-group">
	            <div class="accordion-heading">
	                <a class="accordion-toggle" href="#collapseTwo" data-toggle="collapse" data-parent="#accordion2">
	                    Accordion
	                </a>
	            </div>
	            <div class="accordion-body collapse" id="collapseTwo">
	                <div class="accordion-inner">
	                    Another collapse panel. Content here for links, ads, etc..
	                </div>
	            </div>
	        </div>
	</div><!--/acc-->

	  <hr>

	<div class="col col-span-12 side-socials">
		<p>Keep in touch with us

		This is a startup experiment, if you want to support us, just share or subscribe:</p>
	  <a href="https://www.facebook.com/trollingartdotcom/" target="_blank"><i class="fa-2x fa fa-facebook-square"></i></a>&nbsp;
	  <a href="https://twitter.com/trolling_art" target="_blank"><i class="fa-2x fa fa-twitter-square"></i></a>&nbsp;
	  <a href="https://www.instagram.com/trollingart/" target="_blank"><i class="fa-2x fa fa-instagram"></i></a>&nbsp;
	  <a href="https://github.com/chjalmar/TrollingArt" target="_blank"><i class="fa-2x fa fa-github-square"></i></a>
	</div>

	</div><!--/panel body-->
	</div><!--/panel-->
</div>
