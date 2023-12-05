{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts())
    @php(the_post())
    {{--  @include('partials.page-header')--}}
      <?php
      $group = acf_get_field_group('group_652cee056e0ad'); // your field group key
    if ($group['active']) {
      ?>
    {{--  homepage group--}}
{{--    @include('partials.homepage_partials.homepage-main-hero-video-section')--}}
    @include('partials.homepage_partials.homepage-hero-main-section')
    @include('partials.homepage_partials.homepage-quick-stats-section')
    @include('partials.homepage_partials.homepage-history-company')

    @include('partials.theme_partials.awards_accreditations_section')

    @include('partials.homepage_partials.services_section')

    @include('partials.theme_partials.need_assistance_banner')



    {{--    @include('partials.content')--}}
      <?php
    }  // your field group key
      ?>
    {{--  theme options group--}}
    @include('partials.theme_partials.general-call-to-action')
    @include('partials.theme_partials.quote-card-general')

  @endwhile
@endsection
