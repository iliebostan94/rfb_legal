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
    @include('partials.tier_page_partials.tier_page_hero_main_section')
    @include('partials.theme_partials.theme_default_breadcrumbs')
    @include('partials.tier_page_partials.tier_page_services_grid')

    <section class="page-content tier-2-page-content flex flex-col lg:flex-row justify-center mx-auto">
      <div class="page-left-content-wrapper max-w-4xl p-2 md:p-3 lg:p-4">
        @include('partials.content-page')

      </div>
      <div class="page-sidebar max-w-xs p-2 md:p-3 lg:p-4">
          <p class="p-0">Understanding Employment Law. How we can help you?</p>
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
