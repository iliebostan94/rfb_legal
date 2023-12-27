{{--
  Template Name: Insights
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts())
    @php(the_post())
      <?php
      $group = acf_get_field_group('group_6582fc1da8fa3'); // your field group key
    if ($group['active']) {
      ?>

    @include('partials.insights_partials.insights_hero_main_section')
    @include('partials.theme_partials.theme_default_breadcrumbs')
    @include('partials.insights_partials.insights_filter_form')
    @include('partials.insights_partials.insights_recent_post_section')
    @include('partials.insights_partials.insights_filter_results')

{{--    @include('partials.content-page')--}}

      <?php
    }  // your field group key
      ?>

  @endwhile
@endsection
