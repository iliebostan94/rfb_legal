{{--
  Template Name: About Us
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts())
    @php(the_post())
    {{--  @include('partials.page-header')--}}
      <?php
      $group = acf_get_field_group('group_65a12ef7d3421'); // your field group key
    if ($group['active']) {
      ?>
    {{--  About Us group--}}

    @include('partials.theme_partials.about_us_hero_header')

    @include('partials.theme_partials.theme_default_breadcrumbs')

    @include('partials.theme_partials.about_us_experience_history')

    <div class="e-content bg-white container max-w-5xl mx-auto my-10 lg:my-14 px-3 lg:px-10 text-gray-500 dark:text-gray-400 leading-relaxed">
      @php(the_content())
    </div>

    @include('partials.theme_partials.theme_default_testimonials')
    @include('partials.theme_partials.theme_default_location')
    @include('partials.theme_partials.meet_team_default_section')

    @include('partials.theme_partials.need_assistance_banner_full')

    @include('partials.theme_partials.theme_default_contact_form')

      <?php
    }  // your field group key
      ?>

  @endwhile
@endsection
