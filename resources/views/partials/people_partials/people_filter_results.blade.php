
<?php
$group = acf_get_field_group('group_65a0022478ba4'); // your field group key
if ($group['active']) {

  $people_template_group = get_field('people_template_group');

    if ( have_rows('people_template_group') ):
        while( have_rows('people_template_group') ) : the_row();
        $people_filter_results_shortcode       = get_sub_field('people_filter_results_shortcode');
        ?>

<section class="people_search_results_section w-full text-black">
  <div class="w-full lg:w-1310px max-h-full mx-auto p-4 py-12 lg:py-16 lg:px-0">
    <h3 class="text-2xl lg:text-4xl font-bold">People</h3>
    <div class="flex flex-col">
      <p><?php echo $people_filter_results_shortcode; ?></p>
    </div>
  </div>
</section>

<?php
endwhile;
endif;
}  // your field group key
?>
