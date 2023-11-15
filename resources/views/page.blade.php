@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
{{--        default header for page template disabled--}}
{{--    @include('partials.page-header')--}}
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
