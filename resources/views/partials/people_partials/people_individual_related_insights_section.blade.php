

<?php
$group = acf_get_field_group('group_659ebf3a61638'); // your field group key
if ($group['active']) {


  $display_custom_related_insights      = get_field('display_custom_related_insights');
  $team_member_name                     = get_field('team_member_name');
  ?>

<section class="people_individual_related_insights_section w-full text-black py-10 lg:py-12">
  <div class="max-w-7xl max-h-full mx-auto">
    <div class="people_individual_related_insights_title max-w-4xl mx-auto text-center px-6 md:p-0">
      <h2 class="text-4xl font-semibold text-brandBlue">
          <?php echo $team_member_name ?> Insights
      </h2>
      <div class="w-full py-8 flex justify-center">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
    </div>

    <?php
//    var_dump($display_custom_related_insights);
      if (!$display_custom_related_insights) {
        ?>
      @include('partials.people_partials.people_individual_default_related_insights')
      <?php } else { ?>
      @include('partials.people_partials.people_individual_custom_related_insights')
      <?php }
    ?>
  </div>
</section>

  <?php
}

