<?php
$group = acf_get_field_group('group_654deb926289b'); // your field group key
if ($group['active']) {

  $awards_accreditations_group = get_field('awards_accreditations_group', 'options');

if ( have_rows('awards_accreditations_group', 'options') ):
while( have_rows('awards_accreditations_group', 'options') ) : the_row();

  $accreditations_title         = get_sub_field('accreditations_title', 'options');
  $accreditations_subtitle      = get_sub_field('accreditations_subtitle', 'options');

  ?>

<<<<<<< HEAD
<section class="awards_theme_default_section bg-white relative z-10 my-10 md:my-72px">
  <div class="mx-auto max-w-5xl text-center">
=======
<section class="bg-white">
  <div class="py-8 px-4 mx-auto max-w-5xl text-center md:py-16 md:px-0">
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
    <h2 class="mb-6 text-3xl font-medium tracking-tight leading-none text-brandBlue md:text-4xl">
      <?php echo $accreditations_title ?>
    </h2>
    <div class="w-full flex justify-center mb-6 ">
      <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
    </div>
    <p class="mb-8 text-base font-light text-utilityGrey md:text-2xl md:px-16 ">
      <?php echo $accreditations_subtitle ?>
    </p>
    <div class="flex flex-wrap flex-row justify-around">
      <?php
        if ( have_rows('accreditations_repeater') ):
        while( have_rows('accreditations_repeater') ) : the_row();

          $accreditations_image      = get_sub_field('accreditations_image');
          ?>

      <div class="accreditation-unit m-5">
        <img alt="accreditation" class="flex-shrink-0 w-full h-14 object-cover object-center"
          src="<?php echo $accreditations_image ?>">
      </div>

      <?php
        endwhile;
        endif
          ?>

    </div>
  </div>
</section>

<?php
endwhile;
endif;
}  // your field group key
?>