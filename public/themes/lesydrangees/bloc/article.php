<?php $img = get_field("img"); ?>
<section id="articles" class="w-full md:px-40 py-10 lg:py-40 grid grid-cols-1 lg:grid-cols-12 z-10 px-4 relative">
    <div
        class="lg:col-start-4 lg:col-end-12 grid grid-cols-1 lg:grid-cols-3 bg-yd_pink-50 rounded-2xl shadow-xl relative mt-20 z-10">
        <img draggable="false"
             class="hidden lg:block _yd_image_article lg:absolute lg:top-0 lg:left-0 w-25vw h-25vw object-center object-cover rounded-full shadow-2xl"
             src="<?= esc_url($img["url"]) ?>"
             alt="<?= esc_attr($img["alt"]) ?>">
        <div class="lg:col-start-2 lg:col-span-2 rounded-2xl _yd-center-justified">
            <div class="p-4 lg:p-10">
                <h1 class="text-2xl lg:text-4xl font-bold text-center pb-6 lg:pb-20" data-aos-once="true"
                    data-aos="zoom-in" data-aos-delay="100"><?= get_field("title") ?></h1>
                <div class="w-full flex lg:hidden justify-center items-center">
                    <img data-aos-once="true" data-aos="zoom-in" data-aos-delay="200"
                         class="lg:max-w-max w-60vw h-60vw lg:w-80vw lg:h-80vw object-center object-cover rounded-full shadow-2xl mb-6"
                         src="<?= esc_url($img["url"]) ?>"
                         alt="<?= esc_attr($img["alt"]) ?>">
                </div>
                <div data-aos-once="true" data-aos="zoom-in" data-aos-delay="300">
                    <p>
                        <?= get_field("description") ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
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

