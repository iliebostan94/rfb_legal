

<?php
$group = acf_get_field_group('group_657b172132538');  // your field group key
if ($group['active']) {

    $tier_1_template_group = get_field('tier_1_template_group');

    if ( have_rows('tier_1_template_group') ):
    while( have_rows('tier_1_template_group') ) : the_row();

        $display_custom_related_insights        = get_sub_field('display_custom_related_insights');
        $related_insights_taxonomy              = get_sub_field('related_insights_taxonomy');
        $custom_related_insights                = get_sub_field('custom_related_insights');
  ?>


<section class="related_insights_tier_template_section w-full text-black py-10 lg:py-12">
  <div class="max-w-7xl max-h-full mx-auto">
    <?php if ($related_insights_taxonomy || $custom_related_insights) { ?>
    <div class="related_insights_tier_title max-w-4xl mx-auto text-center px-6 md:p-0">
      <h2 class="text-4xl font-semibold text-brandBlue">
        Related Insights
      </h2>
      <div class="w-full py-8 flex justify-center">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
      <p class="related_insights_tier_subtitle text-lg font-normal text-utilityGrey">
        Explore the latest legal insights at RFB. Stay informed with expert analyses, guiding you through the dynamic legal landscape.
      </p>
    </div>
   <?php } elseif (empty($related_insights_taxonomy) || !$display_custom_related_insights) { ?>
{{--      display nothing   --}}
   <?php }?>

      <?php
//        var_dump($display_custom_related_insights);
        if (!$display_custom_related_insights) {
          ?>
        @include('partials.tier_page_partials.tier_related_insights_default')
        <?php } else { ?>
        @include('partials.tier_page_partials.tier_related_insights_custom')
        <?php }
      ?>

  </div>
</section>

<?php
endwhile;
endif;
}  // your field group key
?>
