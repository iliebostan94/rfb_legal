<<<<<<< HEAD
=======

>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
<?php

if ( have_rows('tier_1_template_group') ):
while( have_rows('tier_1_template_group') ) : the_row();


  $related_services_tier_3_title      = get_sub_field('related_services_tier_3_title');
  ?>


<<<<<<< HEAD
<section class="bg-[#F2F6FF] text-blue body-font py-4 md:py-6 lg:py-10">
  <div class="max-w-6xl py-4 px-6 mx-auto text-left">
    <h2 class="text-2xl lg:text-4xl font-medium text-brandBlue">
      <?php echo $related_services_tier_3_title ?>
    </h2>
  </div>

  <div class="max-w-6xl py-4 px-6 mx-auto flex flex-wrap">
    {{-- RELATED SERVICE BLOCK REPEATER ---------------------}}
    <div class="w-full flex flex-wrap justify-between gap-x-2">
      <?php
=======
<section class="bg-customGrey-400 text-black body-font py-4 md:py-6 lg:py-10">
  <div class="max-w-6xl py-4 px-3 mx-auto text-left">
    <h2 class="text-2xl lg:text-4xl font-semibold text-black"><?php echo $related_services_tier_3_title ?></h2>
  </div>

  <div class="max-w-6xl py-4 px-3 mx-auto flex flex-wrap">
      {{--      RELATED SERVICE BLOCK REPEATER ---------------------}}
      <div class="w-full flex flex-wrap justify-between gap-x-2">
          <?php
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
        if (have_rows('related_services_tier_3_repeater') ):
          $related_services_tier_3_repeater_count = 1;
        while( have_rows('related_services_tier_3_repeater') ) : the_row();
          $related_service_title = get_sub_field('related_service_title');
          $related_service_link = get_sub_field('related_service_link');
          ?>
<<<<<<< HEAD
      <div class="py-3 lg:w-1/4 w-full personal-services-unit-<?php echo $related_services_tier_3_repeater_count++ ?>">
        <a href="<?php echo $related_service_link ?>"
          class="flex text-lg text-brandBlue font-medium justify-between items-center">
          <?php echo $related_service_title ?>
          <img class="w-7 h-7" src="/wp-content/themes/rfb-legal/resources/images/gold_arrow_forward.svg" alt="gold arrow svg">
        </a>
      </div>
      <?php
        endwhile;
        endif;
          ?>
    </div>
    {{-- ---------------------}}
=======
        <div class="py-3 lg:w-1/4 w-1/2 personal-services-unit-<?php echo $related_services_tier_3_repeater_count++ ?>">
          <a href="<?php echo $related_service_link ?>" class="flex text-lg text-black font-medium services-link"><?php echo $related_service_title ?></a>
        </div>
          <?php
        endwhile;
        endif;
          ?>
      </div>
      {{--      ---------------------}}
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
  </div>

</section>

<?php
endwhile;
endif;
?>
