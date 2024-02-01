
<?php
$group = acf_get_field_group('group_65a0022478ba4'); // your field group key
if ($group['active']) {

  $people_template_group = get_field('people_template_group');

  if ( have_rows('people_template_group') ):
    while( have_rows('people_template_group') ) : the_row();
        $people_filter_shortcode        = get_sub_field('people_filter_shortcode');

      ?>

<section class="people_search_form_section flex justify-center w-full lg:max-w-7xl m-auto text-black">
  <div class="bg-customGrey-400 w-full max-h-full p-4 py-6 lg:m-4 rounded">
    <div class="flex flex-col lg:flex-row justify-center w-full text-black text-left gap-y-6 lg:gap-x-14 ">
      <p><?php echo $people_filter_shortcode; ?></p>
    </div>
  </div>
</section>

    <?php
    endwhile;
  endif;
}  // your field group key
?>
