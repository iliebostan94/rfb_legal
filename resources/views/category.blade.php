@extends('layouts.app')

@section('content')
  <div class="flex justify-center p-4">
    @include('partials.page-header')
  </div>

  @if (! have_posts())
    <div class="max-w-7xl max-h-full mx-auto flex flex-col justify-center p-4 py-12 lg:py-16 gap-4">
      <x-alert type="warning">
        {!! __('Sorry, no results were found.', 'sage') !!}
      </x-alert>
      {!! get_search_form(false) !!}
    </div>
  @endif

  {{--  search results container--}}

  <div class="max-w-7xl max-h-full mx-auto p-4 py-12 lg:py-16">
    <div class="flex flex-col lg:flex-row lg:flex-wrap justify-center w-full text-black text-left gap-y-6 lg:gap-x-6 ">
      @while(have_posts()) @php(the_post())
      @include('partials.content-search')
      @endwhile
    </div>
  </div>
  {{--  end search results container--}}

  {!! get_the_posts_navigation() !!}
@endsection
