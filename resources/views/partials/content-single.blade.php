<article @php(post_class('h-entry ')) >
  <img class="mt-20 mb-4 lg:mx-auto post-thumbnail  w-full lg:w-1/2 h-400 lg:h-420 object-cover" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="post header image">
  <header class="flex flex-row justify-center items-center">
    <h1 class="my-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
      {!! $title !!}
    </h1>
{{--    @include('partials.entry-meta')--}}
  </header>

  <div class="e-content max-w-4xl mx-auto my-4 p-3 text-gray-500 dark:text-gray-400 leading-relaxed">
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
</article>
