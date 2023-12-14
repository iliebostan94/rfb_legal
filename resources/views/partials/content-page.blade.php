
<section @php(post_class('h-entry ')) >

  <?php if ( !is_page_template( ['homepage-template.blade.php', 'tier1-template.blade.php', 'tier2-template.blade.php'] ) ) { ?>

  <header class="mt-20 flex flex-row justify-center items-center post-thumbnail w-full max-w-full min-w-full h-400 lg:h-420 bg-center bg-no-repeat bg-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <h1 class="text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl dark:text-white ">
      {!! $title !!}
    </h1>
    {{--    @include('partials.entry-meta')--}}
  </header>

  <?php } ?>

  <div class="e-content bg-white container max-w-7xl mx-auto my-4 p-3 text-gray-500 dark:text-gray-400 leading-relaxed">
    @php(the_content())
  </div>


  {{--  <footer>--}}
  {{--    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}--}}
  {{--  </footer>--}}

  {{--  @php(comments_template())--}}
</section>

