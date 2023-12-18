{{--
  Template Name: Tier 2
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts())
    @php(the_post())
      <?php
      $group = acf_get_field_group('group_657b172132538'); // your field group key
    if ($group['active']) {
      ?>
    {{--  tier 2 group--}}
    @include('partials.tier_page_partials.tier_page_hero_with_cta')
    @include('partials.theme_partials.theme_default_breadcrumbs')
    @include('partials.tier_page_partials.tier_page_services_grid')

    <section class="page-content tier-2-page-content flex flex-col lg:flex-row justify-center mx-auto p-6 md:p-10 lg:p-12">
      <div class="page-left-content-wrapper max-w-4xl">
        @include('partials.content-page')

      </div>
      <div class="page-sidebar max-w-xs">
          @include('.partials.tier_page_partials.need_assistance_banner_sidebar')
          @include('.partials.tier_page_partials.key_people_block_sidebar')
      </div>
    </section>

    @include('partials.tier_page_partials.tier_department_awards')
    @include('partials.theme_partials.theme_default_contact_form')
    @include('partials.theme_partials.theme_insights_slider')


      <?php
    }  // your field group key
      ?>

  @endwhile
@endsection
