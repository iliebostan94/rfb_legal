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

    <div class="page-content">
      @include('partials.content-page')
    </div>

    @include('partials.theme_partials.theme_default_contact_form')
    @include('partials.theme_partials.theme_insights_slider')


      <?php
    }  // your field group key
      ?>

  @endwhile
@endsection
