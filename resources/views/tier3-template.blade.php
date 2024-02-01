{{--
<<<<<<< HEAD
Template Name: Tier 3
=======
  Template Name: Tier 3
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts())
    @php(the_post())
      <?php
      $group = acf_get_field_group('group_6582b04fdfcd5'); // your field group key
<<<<<<< HEAD

    if ($group['active']) {
      ?>

    {{-- tier 3 group--}}
=======
    if ($group['active']) {
      ?>
    {{--  tier 3 group--}}
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
    @include('partials.tier_page_partials.tier_page_hero_with_cta')
    @include('partials.theme_partials.theme_default_breadcrumbs')

    <section
<<<<<<< HEAD
      class="tier_3_page_content_section page-content tier-3-page-content flex flex-col lg:flex-row justify-center mx-auto p-0 md:p-10 lg:p-12">
=======
      class="page-content tier-2-page-content flex flex-col lg:flex-row justify-center mx-auto p-6 md:p-10 lg:p-12">
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
      <div class="page-left-content-wrapper max-w-4xl">
        @include('partials.content-page')

      </div>
<<<<<<< HEAD
      <div class="page-sidebar md:max-w-sm max-w-full">
        @include('partials.tier_page_partials.need_assistance_banner_sidebar')
        @include('partials.tier_page_partials.key_people_block_sidebar_repeater')
        @include('partials.theme_partials.theme_default_testimonials_sidebar')
      </div>
    </section>

    @include('partials.tier_page_partials.key_people_fullwidth_slider')
    @include('partials.theme_partials.theme_default_contact_form')
    @include('partials.tier_page_partials.related_services_tier_3')
    @include('partials.tier_page_partials.tier_related_insights_section')
    @include('partials.tier_page_partials.tier_department_awards')
=======
      <div class="page-sidebar max-w-sm">
        @include('partials.tier_page_partials.need_assistance_banner_sidebar')
        @include('partials.tier_page_partials.key_people_block_sidebar_repeater')
        @include('partials.tier_page_partials.tier_testimonials_sidebar')
      </div>
    </section>

    @include('partials.theme_partials.theme_default_contact_form')
    @include('partials.tier_page_partials.related_services_tier_3')
    @include('partials.theme_partials.theme_insights_slider')
    @include('partials.theme_partials.awards_accreditations_section')
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26


      <?php
    }  // your field group key
      ?>

  @endwhile
@endsection
<<<<<<< HEAD

=======
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
