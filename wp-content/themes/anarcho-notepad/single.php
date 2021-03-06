<?php
/**
 * The template for displaying all single posts.
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

    <div class="before-posts"><?php echo get_theme_mod('scripts_before_posts'); ?></div>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php anarcho_ribbons(); ?>

      <h1><?php the_title(); ?></h1>
      <div class="post-inner">

		<div class="beginning-posts"><?php echo get_theme_mod('scripts_beginning_posts'); ?></div>

		<?php the_post_thumbnail(); ?>
		<?php the_content( __( 'Continue lendo', 'anarcho-notepad' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span>' . __( 'Pages:', 'anarcho-notepad' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
      </div>

      <div class="after-posts"><?php echo get_theme_mod('scripts_after_posts'); ?></div>

      <p class="tagsandcopy"><?php the_tags(); ?><br/>
      <?php echo esc_html(get_theme_mod('copyright_post')); ?></p>

      <div class="meta">
	<?php _e('Postado ', 'anarcho-notepad'); the_date(get_option('m.d.Y')); _e(' por ', 'anarcho-notepad'); the_author(); _e(' na categoria ', 'anarcho-notepad'); the_category(', '); ?><br/>

        <?php if ( ( get_the_author_meta( 'description' ) != '' ) ) esc_html(get_template_part( 'author-bio' )); ?>
      </div>

      <?php anarcho_post_nav(); ?>

      <div class="end-posts"><?php echo get_theme_mod('scripts_end_posts'); ?></div>

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