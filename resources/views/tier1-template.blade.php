{{--
Template Name: Tier 1
--}}

@extends('layouts.app')

@section('content')
@while(have_posts())
@php(the_post())
<?php
      $group = acf_get_field_group('group_6579ba2fa347c'); // your field group key
    if ($group['active']) {
      ?>
{{-- tier 1 group--}}
{{--@include('partials.tier_page_partials.tier_page_hero_main_section')--}}
@include('partials.tier_page_partials.tier_page_hero_with_cta')
@include('partials.theme_partials.theme_default_breadcrumbs')
@include('partials.tier_page_partials.tier_page_services_grid')

@include('partials.theme_partials.need_assistance_banner_full')
@include('partials.theme_partials.awards_accreditations_section')


{{-- @include('partials.content')--}}
<?php
    }  // your field group key
      ?>

@endwhile
@endsection
