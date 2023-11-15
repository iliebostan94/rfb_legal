{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
{{--  @include('partials.page-header')--}}
  <?php
        $group = acf_get_field_group('group_652cee056e0ad'); // your field group key
      if ($group['active']) {
  ?>
                        {{--  homepage group--}}
  @include('partials.homepage_partials.homepage-above-the-fold')
  @include('partials.homepage_partials.homepage-masonry-section')
  @include('partials.homepage_partials.homepage-trusted-source-section')
  @include('partials.homepage_partials.homepage-pricing-section')
  @include('partials.homepage_partials.homepage-customer-endorsements')

{{--    @include('partials.content')--}}
  <?php
       }  // your field group key
  ?>
                        {{--  theme options group--}}
  @include('partials.theme_partials.general-call-to-action')
  @include('partials.theme_partials.quote-card-general')

  @endwhile
@endsection
