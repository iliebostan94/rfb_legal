
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

<section class="key_people_block_sidebar mb-10">
  <div class="max-w-sm pt-4 pb-6 px-3 m-auto flex flex-col justify-between bg-customDarkGrey-700 rounded-lg">
    <div class="text-center mb-6">
      <h2 class="text-2xl font-medium title-font text-white px-8"><?php echo $key_people_title ?></h2>
    </div>
    <div class="flex flex-col lg:flex-row w-full">
      <div class="w-1/2 flex flex-col items-center contact-info-unit">
        <img class="w-40 h-40 rounded-lg" src="<?php echo $key_first_person_image ?>" alt="key person image">
        <div class="bg-customGrey-400 p-3 w-40 rounded-lg text-black">
          <p class="leading-relaxed text-sm md:text-base font-semibold"><?php echo $key_first_person_name ?></p>
          <p class="text-xs md:text-sm font-medium"><?php echo $key_first_person_subtitle ?></p>
        </div>
      </div>
      <div class="w-1/2 flex flex-col items-center contact-info-unit">
        <img class="w-40 h-40 rounded-lg" src="<?php echo $key_second_person_image ?>" alt="key person image">
        <div class="bg-customGrey-400 p-3 w-40 rounded-lg text-black">
          <p class="leading-relaxed text-sm md:text-base font-semibold"><?php echo $key_second_person_name ?></p>
          <p class="text-xs md:text-sm font-medium"><?php echo $key_second_person_subtitle ?></p>
        </div>
      </div>
    </div>

  </div>
</section>

<?php
endwhile;
endif;
}  // your field group key
?>
