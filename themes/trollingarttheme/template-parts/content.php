<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package trollingarttheme
 */
	$selector = get_field('select-repost', $post_id );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="panel panel-default panel-google-plus">
			<!--
      <div class="dropdown">
          <span class="dropdown-toggle" type="button" data-toggle="dropdown">
              <span class="[ glyphicon glyphicon-chevron-down ]"></span>
          </span>
          <ul class="dropdown-menu" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
          </ul>
      </div>
			-->
      <div class="panel-google-plus-tags">
          <ul>
              <li>#<?php getFirstCat($post_id); ?></li>
          </ul>
      </div>
      <div class="panel-heading">
          <?php the_author_like_google(); ?>
      </div>
      <div class="panel-body">
					<?php //the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
					<h3 class="entry-title">
						<a href="<?php echo get_the_permalink(); ?>" rel="bookmark">
							<?php if ($selector == true) {?><i class="fa fa-retweet" aria-hidden="true"></i><?php } ?>
							<?php echo " ".get_the_title(); ?>
						</a>
					</h3>
          <!--<p>Just created a new snippet inspired by the Svbtle Menu. Find it here: <a href="http://bootsnipp.com/snippets/MaWrA">http://bootsnipp.com/snippets/MaWrA</a></p>-->
          <a class="panel-google-plus-image" href="<?php echo get_permalink(); ?>">
						<?php
							if ($selector == true) {
								$imageMeme = wp_get_attachment_url( get_post_thumbnail_id($post_id));
						?>
								<blockquote><center><img src="<?php echo $imageMeme; ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive"></center></blockquote>
						<?php
							} else {
								$imageMeme = getMemeName(wp_get_attachment_url( get_post_thumbnail_id($post_id)));
							?>
							<img src="<?php echo $imageMeme; ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive">
						<?php
							}
						?>
          </a>
					<p class="panel-tags"><?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo '<span class="tags">#'.$tag->name . '</Span> '; } } ?></p>
      </div>
			<div class="panel-footer">
		      <?php share(); ?>
					<a href="<?php echo get_permalink(); ?>" class="btn btn-default"><span class="fa fa-plus" aria-hidden="true"></span> Read more</a>
			</div>
  </div>
</article><!-- #post-## -->
