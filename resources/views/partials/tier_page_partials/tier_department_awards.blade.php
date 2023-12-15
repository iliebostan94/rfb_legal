
<?php
$group = acf_get_field_group('group_657b172132538'); // your field group key
if ($group['active']) {

  $tier_1_template_group = get_field('tier_1_template_group');

if ( have_rows('tier_1_template_group') ):
while( have_rows('tier_1_template_group') ) : the_row();

  $accreditations_title         = get_sub_field('accreditations_title', 'options');
  $accreditations_subtitle      = get_sub_field('accreditations_subtitle', 'options');

  ?>

<section class="bg-white">
  <div class="py-8 px-4 mx-auto max-w-5xl text-center md:py-16 md:px-0">
    <h2 class="mb-8 text-3xl font-medium tracking-tight leading-none text-black md:text-4xl"><?php echo $accreditations_title ?></h2>
    <p class="mb-8 text-base font-light text-black md:text-2xl md:px-16 "><?php echo $accreditations_subtitle ?></p>
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
}  // your field group key
?>
