<<<<<<< HEAD
<?php
=======

<?php
$group = acf_get_field_group('group_6582b04fdfcd5'); // your field group key
if ($group['active']) {
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26

  $tier_1_template_group = get_field('tier_1_template_group');

if ( have_rows('tier_1_template_group') ):
while( have_rows('tier_1_template_group') ) : the_row();

<<<<<<< HEAD
  $key_people_title                     = get_sub_field('key_people_title');
  $display_full_width_team_slider       = get_sub_field('display_full_width_team_slider');

    if (!$display_full_width_team_slider) {

  ?>

<section class="key_people_block_sidebar_repeater_section mb-10">
  <div class="max-w-sm pt-4 pb-6 px-3 m-auto flex flex-col justify-between gradientBlueBackground md:rounded-lg">
    <div class="text-left mb-6">
      <h2 class="text-2xl font-medium title-font text-white">
        <?php echo $key_people_title ?>
      </h2>
      <div class="w-full mt-6 ">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
    </div>
    <div class="w-full flex flex-row flex-wrap justify-between">

      <?php
        $key_people_tier_repeater    = get_sub_field('key_people_tier_repeater');

        if (have_rows('key_people_tier_repeater') ):
          $key_person_tier_count = 1;
        while( have_rows('key_people_tier_repeater') ) : the_row();
=======
  $key_people_title_tier_3    = get_sub_field('key_people_title_tier_3');

  ?>

<section class="key_people_block_sidebar mb-10">
  <div class="max-w-sm pt-4 pb-6 px-3 m-auto flex flex-col justify-between bg-customDarkGrey-700 rounded-lg">
    <div class="text-center mb-6">
      <h2 class="text-2xl font-medium title-font text-white px-8"><?php echo $key_people_title_tier_3 ?></h2>
    </div>
    <div class="w-full flex flex-col lg:flex-row flex-wrap">

      <?php
        if (have_rows('key_people_tier_3_repeater') ):
          $key_person_tier_3_count = 1;
        while( have_rows('key_people_tier_3_repeater') ) : the_row();
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
          $key_person_name        = get_sub_field('key_person_name');
          $key_person_subtitle    = get_sub_field('key_person_subtitle');
          $key_person_image       = get_sub_field('key_person_image');
        ?>
<<<<<<< HEAD
      <div class="w-[48%] py-3 flex flex-col items-center contact-info-unit-<?php echo $key_person_tier_count++ ?>">
        <img class="w-full h-40 rounded-lg object-cover" src="<?php echo $key_person_image ?>" alt="key person image">
        <div class="bg-cloudGrey p-3 w-full rounded-lg text-brandBlue -mt-2.5">
          <p class="leading-relaxed text-sm md:text-base font-semibold">
            <?php echo $key_person_name ?>
          </p>
          <p class="text-xs md:text-sm font-medium text-darkGrey">
            <?php echo $key_person_subtitle ?>
          </p>
        </div>
      </div>
      <?php
=======
          <div class="w-1/2 py-3 flex flex-col items-center contact-info-unit-<?php echo $key_person_tier_3_count++ ?>">
            <img class="w-40 h-40 rounded-lg" src="<?php echo $key_person_image ?>" alt="key person image">
            <div class="bg-customGrey-400 p-3 w-40 rounded-lg text-black">
              <p class="leading-relaxed text-sm md:text-base font-semibold"><?php echo $key_person_name ?></p>
              <p class="text-xs md:text-sm font-medium"><?php echo $key_person_subtitle ?></p>
            </div>
          </div>
        <?php
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
        endwhile;
        endif;
          ?>
    </div>
  </div>
</section>

<?php
<<<<<<< HEAD
}
endwhile;
endif;

=======
endwhile;
endif;
}  // your field group key
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
?>
