<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package trollingarttheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="[ panel panel-default ] panel-google-plus">
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
              <li>#Snippet</li>
          </ul>
      </div>
      <div class="panel-heading">
					<?php
						$str = get_avatar( get_the_author_meta('email') , 65 );
						preg_match('/(src=["\'](.*?)["\'])/', $str, $match);  //find src="X" or src='X'
						$split = preg_split('/["\']/', $match[0]); // split by quotes
						$url_avatar = $split[1]; // X between quotes
					?>
          <img class="img-circle pull-left" src="<?php echo $url_avatar; ?>" alt="Mouse0270">
          <h3>Robert McIntosh</h3>
          <h5><span>Shared publicly</span> - <span>Jun 25, 2014</span> </h5>
      </div>
      <div class="panel-body">
					<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
          <!--<p>Just created a new snippet inspired by the Svbtle Menu. Find it here: <a href="http://bootsnipp.com/snippets/MaWrA">http://bootsnipp.com/snippets/MaWrA</a></p>-->
          <a class="panel-google-plus-image" href="https://plus.google.com/photos/115077481218689845626/albums/6028961040749409985/6028961040650432498">
							<?php $imageMeme = getMemeName(wp_get_attachment_url( get_post_thumbnail_id($post_id))); ?>
              <img src="<?php echo $imageMeme; ?>">
          </a>					
      </div>
      <div class="panel-footer">
          <div class="pull-right">
          <button type="button" class="btn btn-danger btn-lg"><i class="glyphicon glyphicon-heart"></i></button>
          <button type="button" class="btn btn-success btn-lg btn-xl"><i class="glyphicon glyphicon-link"></i></button>
          </div>
          <button type="button" class="[ btn btn-default ]">+1</button>
          <button type="button" class="[ btn btn-default ]">
              <span class="[ glyphicon glyphicon-share-alt ]"></span>
          </button>
      </div>
  </div>
</article><!-- #post-## -->
