
<?php
$group = acf_get_field_group('group_657b172132538'); // your field group key
if ($group['active']) {

  $tier_1_template_group = get_field('tier_1_template_group');

  if ( have_rows('tier_1_template_group') ):
  while( have_rows('tier_1_template_group') ) : the_row();

      $key_people_title             = get_sub_field('key_people_title');
      $key_first_person_image       = get_sub_field('key_first_person_image');
      $key_first_person_name        = get_sub_field('key_first_person_name');
      $key_first_person_subtitle    = get_sub_field('key_first_person_subtitle');
      $key_second_person_image      = get_sub_field('key_second_person_image');
      $key_second_person_name       = get_sub_field('key_second_person_name');
      $key_second_person_subtitle   = get_sub_field('key_second_person_subtitle');

  ?>

<section class="key_people_block_sidebar">
  <div class="max-w-sm p-3 m-auto flex flex-col justify-between bg-customDarkGrey-700 rounded-lg">
    <div class="text-center mb-6">
      <h2 class="text-2xl font-medium title-font text-customGrey-200"><?php echo $key_people_title ?></h2>
    </div>
    <div class="flex flex-col justify-center max-w-full">
      <div class="w-full flex flex-row flex-wrap contact-info-unit mb-6">
        <img class="w-10 h-10 mr-2" src="<?php echo $key_first_person_image ?>" alt="key person image">
        <p class="leading-relaxed text-gray-300 text-base md:text-lg font-normal"><?php echo $key_first_person_name ?></p>
        <p class="test"><?php echo $key_first_person_subtitle ?></p>
      </div>
      <div class="w-full flex flex-row flex-wrap contact-info-unit mb-6">
        <img class="w-10 h-10 mr-2" src="<?php echo $key_second_person_image ?>" alt="key person image">
        <p class="leading-relaxed text-gray-300 text-base md:text-lg font-normal"><?php echo $key_second_person_name ?></p>
        <p class="test"><?php echo $key_second_person_subtitle ?></p>
      </div>
    </div>

  </div>
</section>

<?php
endwhile;
endif;
}  // your field group key
?>
