{{--
  Template Name: Contact Us
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts())
    @php(the_post())
    {{--  @include('partials.page-header')--}}
      <?php
      $group = acf_get_field_group('group_65a130fb9caed'); // your field group key
    if ($group['active']) {
      ?>
    {{--  About Us group--}}

    @include('partials.theme_partials.contact_us_hero_header')

    @include('partials.theme_partials.theme_default_breadcrumbs')

    @include('partials.theme_partials.contact_us_info_section')

    @include('partials.theme_partials.theme_default_contact_form')

    @include('partials.theme_partials.theme_default_location')

      <?php
    }  // your field group key
      ?>

  @endwhile
@endsection
