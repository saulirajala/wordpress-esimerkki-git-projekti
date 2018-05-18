<?php
/**
 * The sidebar containing the main widget area
 *
 */
?>

<?php
// Tarkistetaan onko sidebar-primary olemassa
if ( ! is_active_sidebar( 'sidebar-primary' ) ) {
	return;
}
?>

<!-- Tämä tulostetaan sivupalkkiin -->
<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-primary' ); ?>
</aside>
