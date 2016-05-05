<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trollingarttheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="col-md-3">
	<div class="panel" id="midCol">
		<?php if(is_home() || is_front_page()) { ?>
			<div class="panel-heading" style="color: rgb(238, 238, 238); background-color: rgb(85, 85, 85);">Help us?</div>
		<?php } ?>
		<div class="panel-body">

			<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/hep-trolling-art.jpg" alt="Help Trollingart">

			<div class="well">
							<p>
							That would be awesome! At this time, while we’re trying out this new idea our biggest goal is to make ourselves known and get as many followers as possible. With that in mind, we have made this flyer so you can share it on your social media. When you do, please tag us so we know -that will make us very happy! We would also like you to tag all of your friends who might enjoy or be interested in our idea. Thanks a lot! The team.
							</p>
							<p>Download / Share / Tag:</p>
			</div>

			<hr>

			<h3>Top Members</h3>

			<h5><a href="#"><i class="glyphicon glyphicon-user"></i> John Chapman</a></h5>
			<h5><a href="#"><i class="glyphicon glyphicon-user"></i> Max Axleton</a></h5>
			<h5><a href="#"><i class="glyphicon glyphicon-user"></i> Devin Skelly</a></h5>
			<h5><a href="#"><i class="glyphicon glyphicon-user"></i> Katie Kowalski</a></h5>
			<h5><a href="#"><i class="glyphicon glyphicon-user"></i> Amet Deberge</a></h5>

			<hr>
			<div classs="ad-siber300">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- New300x200 -->
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-3620678877337408"
				     data-ad-slot="3714726770"
				     data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>

			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="http://placehold.it/80/F0F0F0">
				</a>
				<div class="media-body">
					<h5 class="media-heading"><a class="pull-right" href="/tagged/modal" target="ext"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Modal</strong></a></h5>
					<small>Examples using the Bootstrap modal.</small><br>
					<span class="badge">87</span>
				</div>
			</div>
			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="http://placehold.it/80/F0F0F0">
				</a>
				<div class="media-body">
					<h5 class="media-heading"><a class="pull-right" href="/tagged/slider" target="ext"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Carousel</strong></a></h5>
					<small>How to use the Bootstrap slider.</small><br>
					<span class="badge">322</span>
				</div>
			</div>
			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="http://placehold.it/80/F0F0F0">
				</a>
				<div class="media-body">
					<h5 class="media-heading"><a class="pull-right" href="/tagged/typography" target="ext"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Typography</strong></a></h5>
					<small>See the various textual elements and options.</small><br>
					<span class="badge">44</span>
				</div>
			</div>
			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="http://placehold.it/80/F0F0F0">
				</a>
				<div class="media-body">
					<h5 class="media-heading"><a class="pull-right" href="/tagged/media" target="ext"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>@Media</strong></a></h5>
					<small>Use @media queries to get the layout you want.</small><br>
					<span class="badge">119</span>
				</div>
		 </div>

	 </div>
	 </div><!--/panel-->
</div>
