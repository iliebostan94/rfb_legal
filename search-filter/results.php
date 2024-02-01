<?php
/**
 * Search & Filter Pro
 *
 * Sample Results Template
 *
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 *
 * Note: these templates are not full page templates, rather
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think
 * of it as a template part
 *
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs
 * and using template tags -
 *
 * http://codex.wordpress.org/Template_Tags
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$result_unit_count = 1;

if ( $query->have_posts() ) {
	?>

	<?php
	while ( $query->have_posts() ) {
		$query->the_post();
		?>
<<<<<<< HEAD

=======
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
		<div class="insight-result-unit insight-result-<?php echo $result_unit_count++ ?> ">
			<div class="insight-result-unit-thumbnail" <?php
			if ( has_post_thumbnail() ) {
				echo '<p>';
				the_post_thumbnail( 'small' );
				echo '</p>';
			}
			?>
            </div>

            <div class="insight-result-unit-content w-full bg-customGrey-400 p-3 rounded-b-xl">
<<<<<<< HEAD
                <h2 class="insight-result-unit-title text-brandBlue text-base font-semibold leading-5"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                <time class="insight-result-unit-registered-time text-darkGrey text-sm leading-6"><?php echo get_the_date('j-m-Y'); ?></time>
                <p class="insight-result-unit-position"><?php echo get_field('team_member_position')?></p>
=======
                <h2 class="insight-result-unit-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <time><?php the_date(); ?></time>
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
            </div>
		</div>

		<?php
	}
	?>
	<?php
} else {
	echo 'No Results Found';
}
?>
