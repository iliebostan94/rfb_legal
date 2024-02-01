
<section class="related_service_sidebar_section bg-[#F2F6FF] p-6 rounded-xl">
  <div class="flex flex-col text-brandBlue gap-6">
    <h3 class="text-2xl font-semibold">Related Services</h3>

  <?php
  $group = acf_get_field_group('group_659ebf3a61638'); // your field group key
  if ($group['active']) {

    if ( have_rows('team_member_related_service') ):
      $service_count = 1;
      while( have_rows('team_member_related_service') ) : the_row();

        $related_service_name          = get_sub_field('related_service_name');
        $related_service_link          = get_sub_field('related_service_link');
        ?>

    <a href="<?php echo $related_service_link ?>"
       class="related_service_unit_<?php echo $service_count++ ?> flex text-base text-brandBlue font-medium justify-between items-center">
        <?php echo $related_service_name ?>
      <img class="w-7 h-7" src="/wp-content/themes/rfb-legal/resources/images/gold_arrow_forward.svg" alt="arrow-svg">
    </a>

    <?php
    endwhile;
    endif;
    }  // your field group key
    ?>


  </div>
</section>
