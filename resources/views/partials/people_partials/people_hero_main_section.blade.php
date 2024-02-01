
<?php
$above_the_fold_section = get_field('people_template_group');

if ( have_rows('people_template_group') ):
while( have_rows('people_template_group') ) : the_row();

  $featured_people_title        = get_sub_field('featured_people_title');
  $featured_people_image        = get_sub_field('featured_people_image');
  ?>

<section class="people_hero_main_section relative h-auto md:h-96">
  <div class="relative md:absolute w-full h-80 md:h-full bg-cover bg-top"
       style="background-image: url(<?php echo $featured_people_image ?>)"></div>
  <div class="mx-auto p-6 lg:p-0 h-auto md:h-full bg-gradient-to-r md:from-brandBlue md:to-transparent from-[#1b355dee] to-brandBlue  flex flex-col justify-center relative animate-fade animate-delay-300 animation-duration-1000 animate-once">
    <div class="lg:ml-15% xl:ml-20% lg:max-w-xl text-left flex flex-col justify-center items-start text-customGrey-100">

      <h5 class="text-xl font-semibold mb-4">Our People</h5>

      <h1 class="mb-2 md:mb-6 text-3xl tracking-tight leading-none md:text-5xl">
          <?php echo $featured_people_title; ?>
      </h1>
      <div class="w-20 bg-accentGold h-1 rounded-full"> </div>

    </div>
  </div>

</section>

<?php
endwhile;
endif;
?>
