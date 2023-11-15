
<section @php(post_class('h-entry ')) >
  <header class="mt-20 flex flex-row justify-center items-center post-thumbnail w-full max-w-full min-w-full h-400 lg:h-420 bg-center bg-no-repeat bg-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <h1 class="text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl dark:text-white ">
      {!! $title !!}
    </h1>
    {{--    @include('partials.entry-meta')--}}
  </header>

  <div ></div>
  <div class="e-content bg-white container max-w-7xl mx-auto my-4 p-3 text-gray-500 dark:text-gray-400 leading-relaxed">
    @php(the_content())
  </div>

  <?php
  $display_cta_block = get_field('display_cta_block');
  $display_quote_card_block = get_field('display_quote_card_block');


  if($display_cta_block) { ?>
  @include('partials.theme_partials.general-call-to-action')
    <?php
  }
  if($display_quote_card_block) { ?>
  @include('partials.theme_partials.quote-card-general')
    <?php
  }  ?>


  {{--  <footer>--}}
  {{--    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}--}}
  {{--  </footer>--}}

  {{--  @php(comments_template())--}}
</section>

