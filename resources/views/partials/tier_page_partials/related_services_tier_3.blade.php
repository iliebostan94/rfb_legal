
<?php

if ( have_rows('tier_1_template_group') ):
while( have_rows('tier_1_template_group') ) : the_row();


  $related_services_tier_3_title      = get_sub_field('related_services_tier_3_title');
  ?>


<section class="bg-customGrey-400 text-black body-font py-4 md:py-6 lg:py-10">
  <div class="max-w-6xl py-4 px-3 mx-auto text-left">
    <h2 class="text-2xl lg:text-4xl font-semibold text-black"><?php echo $related_services_tier_3_title ?></h2>
  </div>

  <div class="max-w-6xl py-4 px-3 mx-auto flex flex-wrap">
      {{--      RELATED SERVICE BLOCK REPEATER ---------------------}}
      <div class="w-full flex flex-wrap justify-between gap-x-2">
          <?php
        if (have_rows('related_services_tier_3_repeater') ):
          $related_services_tier_3_repeater_count = 1;
        while( have_rows('related_services_tier_3_repeater') ) : the_row();
          $related_service_title = get_sub_field('related_service_title');
          $related_service_link = get_sub_field('related_service_link');
          ?>
        <div class="py-3 lg:w-1/4 w-1/2 personal-services-unit-<?php echo $related_services_tier_3_repeater_count++ ?>">
          <a href="<?php echo $related_service_link ?>" class="flex text-lg text-black font-medium services-link"><?php echo $related_service_title ?></a>
        </div>
          <?php
        endwhile;
        endif;
          ?>
      </div>
      {{--      ---------------------}}
  </div>

</section>

<?php
endwhile;
endif;
?>
