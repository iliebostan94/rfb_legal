{{--
  Template Name: People
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts())
    @php(the_post())
      <?php
      $group = acf_get_field_group('group_65a0022478ba4'); // your field group key
    if ($group['active']) {
      ?>

    @include('partials.people_partials.people_hero_main_section')
    @include('partials.theme_partials.theme_default_breadcrumbs')
    @include('partials.people_partials.people_filter_form')
    @include('partials.people_partials.people_filter_results')

    {{--    @include('partials.content-page')--}}

      <?php
    }  // your field group key
      ?>

  @endwhile
@endsection
