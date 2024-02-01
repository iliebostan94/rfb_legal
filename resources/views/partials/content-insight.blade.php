
<?php
$group = acf_get_field_group('group_65a01b651cf75'); // your field group key
if ($group['active']) {

  $insight_main_title = get_field('insight_main_title');
  $insight_main_image = get_field('insight_main_image');
  $selected_insight_author = get_field('selected_insight_author');

  ?>


<article @php(post_class('h-entry people-individual-template')) >

  @include('partials.insights_partials.insight_single_hero_main_section')
  @include('partials.theme_partials.theme_default_breadcrumbs')

  <section
    class="page-content insight-single-template-content flex flex-col lg:flex-row justify-center mx-auto px-5 py-10 lg:px-0 lg:py-16 gap-16">

    <div class="single-insight-left-content-wrapper w-full lg:w-858px lg:px-0">
      @php(the_content())
    </div>

    <div class="page-sidebar insight-single-template-sidebar w-full flex flex-col md:max-w-sm gap-6 md:gap-12">
      @include('partials.insights_partials.insight_single_author_sidebar_card')
      @include('partials.theme_partials.theme_default_testimonials_sidebar')
      @include('.partials.tier_page_partials.need_assistance_banner_sidebar')
    </div>

  </section>

  @include('partials.theme_partials.theme_default_contact_form')
  @include('partials.insights_partials.insights_single_related_insights_section')

</article>

  <?php
}  // your field group key
?>

