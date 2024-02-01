
<?php
$group = acf_get_field_group('group_6582fc1da8fa3'); // your field group key
if ($group['active']) {

  $insights_template_group = get_field('insights_template_group');

  if ( have_rows('insights_template_group') ):
    while( have_rows('insights_template_group') ) : the_row();
        $insights_filter_shortcode        = get_sub_field('insights_filter_shortcode');

      ?>

<<<<<<< HEAD
<section class="insights_search_form_section flex justify-center w-full lg:max-w-7xl m-auto text-black recent-updates-section ">
=======
<section class="flex justify-center w-full lg:max-w-7xl m-auto text-black recent-updates-section ">
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
  <div class="bg-customGrey-400 w-full max-h-full p-4 py-6 lg:m-4 rounded">
    <div class="flex flex-col lg:flex-row justify-center w-full text-black text-left gap-y-6 lg:gap-x-14 ">
      <p><?php echo $insights_filter_shortcode; ?></p>
    </div>
  </div>
</section>

    <?php
    endwhile;
  endif;
}  // your field group key
?>
