<?php
/**
 * The template for displaying Category pages.
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

      <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link para <?php the_title(); ?>"><?php the_title(); ?></a></h1>
      <div class="post-inner">

		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

		<?php the_content( __( 'Continue lendo', 'CiênciaWeb' ) ); ?>
      </div>
      <div class="meta"><?php _e('Categoria: ', 'CiênciaWeb'); ?><?php the_category(', ') ?> |  <?php comments_popup_link('Nenhum Comentário &#187;', '1 Comentário &#187;', '% Comentários &#187;'); ?></div>
    </article>
    <?php endwhile; ?>

    <?php anarcho_page_nav(); ?>

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