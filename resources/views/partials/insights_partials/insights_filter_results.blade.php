
<?php
$group = acf_get_field_group('group_6582fc1da8fa3'); // your field group key
if ($group['active']) {

  $insights_template_group = get_field('insights_template_group');

if ( have_rows('insights_template_group') ):
while( have_rows('insights_template_group') ) : the_row();
  $insights_filter_results_shortcode        = get_sub_field('insights_filter_results_shortcode');

  ?>

<section class="insights_search_results_section w-full text-black">
  <div class="w-full lg:w-1310px max-h-full mx-auto p-4 py-12 lg:py-16 lg:px-0">
    <h3 class="text-2xl lg:text-4xl font-bold">Insights</h3>
    <div class="flex">
      <p><?php echo $insights_filter_results_shortcode; ?></p>
    </div>
  </div>
</section>

<?php
endwhile;
endif;
}  // your field group key
?>
