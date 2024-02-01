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

    @include('partials.homepage_partials.homepage-hero-main-section')
    @include('partials.homepage_partials.homepage-quick-stats-section')
    @include('partials.homepage_partials.homepage-history-company')

    @include('partials.theme_partials.awards_accreditations_section')

    @include('partials.homepage_partials.services_section')

<<<<<<< HEAD
    @include('partials.theme_partials.need_assistance_banner_full')
=======
    @include('partials.theme_partials.need_assistance_banner')
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26

    @include('partials.theme_partials.meet_team_default_section')

    @include('partials.theme_partials.theme_default_testimonials')
<<<<<<< HEAD
=======

    @include('partials.theme_partials.theme_default_contact_form')

    <!-- @include('partials.theme_partials.theme_insights_slider') -->

>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26

    @include('partials.theme_partials.theme_default_contact_form')

    {{--    @include('partials.content')--}}
      <?php
    }  // your field group key
      ?>

  @endwhile
@endsection
