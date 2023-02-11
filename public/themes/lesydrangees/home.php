<?php get_header(); ?>
<?php $posts = wp_get_recent_posts(array(
    'numberposts' => 8, // Number of recent posts thumbnails to display
    'post_status' => 'publish' // Show only the published posts
));
if (isset($posts)):
    if (!empty($posts)):
        $recent_posts = array_slice($posts, 0, 6);
        ?>
        <section id="articles" class="w-full md:px-40 py-10 lg:py-40 grid grid-cols-1 px-4 relative z-20">
            <div class="w-full flex justify-center items-center py-20">
                <h2 class="text-4xl lg:text-5xl text-center font-bold z-20" data-aos-once="true" data-aos="zoom-in">Nos
                    derniers articles !</h2>
            </div>
            <section class="gridArticle w-full p-4 md:p-10 gap-20">
                <?php if (isset($recent_posts)):
                    if (!empty($recent_posts)):
                        foreach ($recent_posts as $post_item) :
                            if (has_post_thumbnail($post_item['ID'])):?>
                                <a href="<?= esc_url(get_permalink($post_item['ID'])) ?>"
                                   class="bg-yd_pink-50 shadow-xl relative z-20 opacity-90" rel="noopener"
                                   data-aos-once="true" data-aos="flip-down" data-aos-delay="100">
                                    <div class="flex justify-center items-center">
                                        <?= get_the_post_thumbnail($post_item['ID'], 'full',
                                            array('class' => 'rounded object-cover object-center w-full h-300px')) ?>
                                    </div>
                                    <h2 class="text-sm font-bold pt-5 px-5"><?= $post_item['post_title'] ?></h2>
                                    <p class="text-xs p-5">
                                        <?= $post_item['post_excerpt'] ?>
                                    </p>
                                    <img src="<?= get_template_directory_uri() ?>/assets//images/arrowRight.svg"
                                         alt="arrow" class="arrow absolute bottom-0 right-0 h-8 w-8 mb-4 mr-4">
                                </a>
                            <?php endif;
                        endforeach;
                    endif;
                endif; ?>
            </section>
            <div id="yd_rect" class="absolute w-full h-full top-0 left-0 z-0 flex justify-center items-center">
                <!--    Top rect -->
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <!--    Bot rect -->
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </section>
    <?php
    endif;
endif;
get_footer(); ?>
