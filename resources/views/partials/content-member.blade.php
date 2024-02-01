
<?php
$group = acf_get_field_group('group_659ebf3a61638'); // your field group key
if ($group['active']) {

  $team_member_name = get_field('team_member_name');
  $team_member_position = get_field('team_member_position');
  $team_member_expertise = get_field('team_member_expertise');
  $team_member_profile_picture = get_field('team_member_profile_picture');
  $team_member_thumbnail_picture = get_field('team_member_thumbnail_picture');
  $team_member_sra_image = get_field('team_member_sra_image');
  $team_member_phone_number = get_field('team_member_phone_number');
  $team_member_email = get_field('team_member_email');
  $team_member_linkedin_profile_link = get_field('team_member_linkedin_profile_link');

  ?>


<article @php(post_class('h-entry people-individual-template')) >

  @include('partials.people_partials.people_individual_hero_main_section')
  @include('partials.theme_partials.theme_default_breadcrumbs')
  @include('partials.people_partials.people_individual_testimonials')

  <section
    class="page-content people-individual-template-content flex flex-col lg:flex-row justify-center mx-auto px-5 py-10 lg:px-0 lg:py-16 gap-16">

    <div class="page-left-content-wrapper w-full lg:w-858px lg:px-0">
      @php(the_content())
    </div>

    <div class="page-sidebar people-individual-template-sidebar w-full flex flex-col md:max-w-sm gap-6 md:gap-12">
      @include('partials.people_partials.people_individual_sidebar_card')
      @include('partials.people_partials.people_individual_related_service')
    </div>

  </section>

  @include('partials.theme_partials.need_assistance_banner_full')
  @include('partials.people_partials.people_individual_related_insights_section')

</article>

  <?php
}  // your field group key
?>

