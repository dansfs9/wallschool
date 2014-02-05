<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package	Anarcho Notepad
 * @since	2.4.1
 * @author	Arthur (Berserkr) Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2014, Arthur Gareginyan
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<?php get_header(); ?>

<section id="content" role="main">
  <div class="col01">

<!-- YOU CAN EDIT FROM HERE -->

    <h1><?php _e('Página Não Encontrada', 'CiênciaWeb'); ?></h1>
    <p><?php _e('Desculpe-nos, mas a página que procura não foi encontrada! Ela pode ter sido movida ou excluída.', 'CiênciaWeb'); ?></p>
    <p><?php _e('Não quero te culpar, mas você verificou sua barra de endereços? Pode haver um erro de digitação na URL.', 'CiênciaWeb'); ?></p>
    <p><?php _e('Se não houver, você pode tentar usar a Busca do meu site para encontrar o conteúdo que você estava procurando:', 'CiênciaWeb'); ?></p>
    <?php get_search_form(); ?>

<!-- YOU CAN EDIT UP TO HERE -->

  </div>

   <?php get_sidebar(); ?>
</section><br clear="all" />

<?php get_footer(); ?>