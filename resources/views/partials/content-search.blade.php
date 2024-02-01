{{--<article @php(post_class())>--}}
{{--  <header>--}}
{{--    <div class="max-w-7xl max-h-full mx-auto p-4 py-12 lg:py-16">--}}
{{--      <div class="flex flex-col lg:flex-row lg:flex-wrap justify-center w-full text-black text-left gap-y-6 lg:gap-x-6 ">--}}
{{--        <?php--}}
{{--        // Get all registered post types--}}
{{--        $post_types = get_post_types(array('public' => true), 'objects');--}}

{{--        // Extract post type slugs--}}
{{--        $post_type_slugs = array_keys($post_types);--}}

{{--        $search_post_result = get_posts(array(--}}
{{--          'post_type' => $post_type_slugs,--}}
{{--          's' => get_search_query(),--}}
{{--          // 'posts_per_page' => 6,--}}
{{--        ));--}}
{{--        $search_item_order = 1;--}}

{{--        if ($search_post_result):--}}
{{--        foreach ($search_post_result as $post):--}}
{{--          $permalink = get_permalink($post->ID);--}}
{{--          $title = get_the_title($post->ID);--}}
{{--          $post_thumbnail = get_the_post_thumbnail_url($post->ID);--}}
{{--          $post_date = get_the_date('j-m-Y', $post->ID);--}}
{{--          ?>--}}

{{--        <a href="<?php echo $permalink; ?>" class="recent-search-result-unit w-full lg:w-1/4 search-result-unit-<?php echo $search_item_order ?> ">--}}
{{--          <div id="search-result-unit-<?php echo $search_item_order++ ?>" class="">--}}
{{--            <img src="<?php echo $post_thumbnail ?>" alt="image" class="aspect-2/1 w-full rounded-t-xl object-cover"/>--}}
{{--            <div class="search-result-desc flex flex-col justify-center h-2/5 w-full bg-zinc-100 text-black text-left p-4 rounded-b-xl">--}}
{{--              <h2 class="text-base font-semibold title-font tracking-wider lg:truncate lg:max-w-lg"><?php echo $title ?></h2>--}}
{{--              <p class="text-base font-semibold title-font tracking-wider"><?php echo $post_date ?></p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </a>--}}

{{--        <?php--}}
{{--        endforeach;--}}
{{--        endif;--}}
{{--        ?>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </header>--}}
{{--</article>--}}


<article @php(post_class('w-full lg:w-1/4 '))>
        <a href="{{ get_permalink() }}" class="recent-search-result-unit w-full search-result-unit-">
          <div class="search-result-unit-wrapper">
            <img src="{{get_the_post_thumbnail_url()}}" alt="image" class="aspect-2/1 w-full rounded-t-xl object-cover"/>
            <div class="search-result-desc flex flex-col justify-center h-2/5 w-full bg-zinc-100 text-black text-left p-4 rounded-b-xl">
              <h2 class="text-base font-semibold title-font tracking-wider lg:truncate lg:max-w-lg">{{get_the_title()}}</h2>
              <p class="text-base font-semibold title-font tracking-wider">{{get_the_date('j-m-Y',)}}</p>
            </div>
          </div>
        </a>
</article>

