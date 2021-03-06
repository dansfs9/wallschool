<?php
/**
 * The template for displaying all pages.
 *
 * @package	Anarcho Notepad
 * @since	2.4.1
 * @author	Arthur (Berserkr) Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2014, Arthur Gareginyan
 * @link      	http://mycyberuniverse.tk/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<?php get_header(); ?>

<section id="content" role="main">
  <div class="col01">
  <?php anarcho_breadcrumbs(); ?>
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php anarcho_ribbons(); ?>

      <h1><?php the_title(); ?></h1>
      <div class="post-inner">

	        <?php the_post_thumbnail(); ?>

		<?php the_content( __( 'Continue lendo', 'anarcho-notepad' ) ); ?>
      </div>

      <div class="meta"><?php if ((the_category() != '')) { _e('Categoria: ', 'anarcho-notepad'); the_category(', '); } ?></div>
    </article>
    <?php comments_template(); ?>
    <?php endwhile; ?>

    <?php else : ?>

	<div class="no-results">
		<h1><?php _e('Não Encontramos', 'CiênciaWeb'); ?></h1>
    <p><?php _e('Desculpe-nos, mas você está procurando por algo que não está aqui.', 'CiênciaWeb'); ?></p>
	</div>

    <?php endif; ?>

  </div>

   <?php get_sidebar(); ?>
</section><br clear="all" />

<?php get_footer(); ?>