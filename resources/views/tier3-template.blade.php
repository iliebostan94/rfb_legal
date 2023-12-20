{{--
  Template Name: Tier 3
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts())
    @php(the_post())
      <?php
      $group = acf_get_field_group('group_6582b04fdfcd5'); // your field group key
    if ($group['active']) {
      ?>
    {{--  tier 3 group--}}
    @include('partials.tier_page_partials.tier_page_hero_with_cta')
    @include('partials.theme_partials.theme_default_breadcrumbs')

    <section
      class="page-content tier-2-page-content flex flex-col lg:flex-row justify-center mx-auto p-6 md:p-10 lg:p-12">
      <div class="page-left-content-wrapper max-w-4xl">
        @include('partials.content-page')

      </div>
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


      <?php
    }  // your field group key
      ?>

  @endwhile
@endsection
