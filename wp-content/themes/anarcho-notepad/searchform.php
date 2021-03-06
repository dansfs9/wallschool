<?php
/**
 * The template for displaying Searchform (HTML5).
 *
 * @package	Anarcho Notepad
 * @since	2.4.1
 * @author	Arthur (Berserkr) Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2014, Arthur Gareginyan
 * @link      	http://mycyberuniverse.tk/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<div id="search">
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url() ); ?>">
	<label>
		<span class="screen-reader-text">Buscar por:</span>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Digite o que procura e aperte Enter', 'anarcho-notepad'); ?>" value="" name="s" title="Buscar" />
	</label>
	<input type="submit" class="search-submit" value="Buscar" />
</form>
</div>