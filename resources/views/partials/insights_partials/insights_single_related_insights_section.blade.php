

<?php
$group = acf_get_field_group('group_65a01b651cf75'); // your field group key
if ($group['active']) {


  $display_custom_related_insights      = get_field('display_custom_related_insights');

  ?>

<section class="insights_single_related_insights_section w-full text-black py-10 lg:py-12">
  <div class="max-w-7xl max-h-full mx-auto">
    <div class="insights_single_related_insights_title max-w-4xl mx-auto text-center px-6 md:p-0">
      <h2 class="text-4xl font-semibold text-brandBlue">
          Related Insights
      </h2>
      <div class="w-full py-8 flex justify-center">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
      <p class="meet-team-carousel-subtitle text-lg font-normal text-utilityGrey">
        Explore the latest legal insights at RFB. Stay informed with expert analyses, guiding you through the dynamic legal landscape.
      </p>
    </div>

    <?php
//    var_dump($display_custom_related_insights);
      if (!$display_custom_related_insights) {
        ?>
      @include('partials.insights_partials.insight_single_default_related_insights')
      <?php } else { ?>
      @include('partials.insights_partials.insight_single_custom_related_insights')
      <?php }
    ?>
  </div>
</section>

  <?php
}

