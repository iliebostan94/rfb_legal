
<?php
  $tier_1_template_group = get_field('tier_1_template_group');

if ( have_rows('tier_1_template_group') ):
while( have_rows('tier_1_template_group') ) : the_row();

  $accreditations_title         = get_sub_field('accreditations_title');
  $accreditations_subtitle      = get_sub_field('accreditations_subtitle');

  ?>

<section class="tier_department_awards_custom_sections bg-white">
  <div class="py-8 px-4 mx-auto max-w-5xl text-center md:py-16 md:px-0">
    <h2 class="text-32px font-semibold text-brandBlue lg:text-40px"><?php echo $accreditations_title ?></h2>
    <div class="w-full py-8 flex justify-center">
      <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
    </div>
    <p class=" mb-6 lg:mb-11 text-base lg:text-xl font-normal text-utilityGrey "><?php echo $accreditations_subtitle ?></p>
    <div class="flex flex-wrap flex-row md:flex-row md:justify-between md:flex-nowrap">
        <?php
      if ( have_rows('accreditations_repeater') ):
      while( have_rows('accreditations_repeater') ) : the_row();

        $accreditations_image      = get_sub_field('accreditations_image');
        ?>

      <div class="accreditation-unit">
        <img alt="accreditation" class="flex-shrink-0 w-full h-14 object-cover object-center" src="<?php echo $accreditations_image ?>">
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
?>
