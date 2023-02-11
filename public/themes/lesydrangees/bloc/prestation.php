<?php
$first_section = get_field('first_section');
$second_section = get_field('second_section');
$third_section = get_field('third_section');
$fourth_section = get_field('fourth_section');
?>
<!-- Background -->
<section class="_yd_background w-full h-screen z-10">
    <div class="relative flex justify-center items-center w-full h-full flex-col p-4 lg:p-0">
        <h1 class="_yd-gradient-textColor-adjust-on-logo-alt-brightness uppercase text-2xl lg:text-7xl text-center"
            data-aos-once="true" data-aos="zoom-in">
            <?= $first_section["title"] ?>
        </h1>
        <div
            class="_yd-center-justified w-full m-5 md:w-1/3 md:m-0 pt-4 lg:pt-20 text-sm lg:text-2xl text-yd_blue-50 leading-normal"
            data-aos-once="true" data-aos="zoom-in" data-aos-delay="100">
            <?= $first_section["description"] ?>
        </div>
    </div>
</section>
<!-- Comment ça marche -->
<section class="w-full px-4 py-10 lg:p-40">
    <div class="flex justify-center items-center w-full pb-16 lg:pb-32">
        <h2 class="_yd-gradient-textColor-adjust-on-logo-alt text-center uppercase text-3xl lg:text-5xl"
            data-aos-once="true" data-aos="zoom-in-down">
            <?= $second_section["title"] ?>
        </h2>
    </div>
    <!--    grid -->
    <div class="w-full grid grid-cols-1 lg:grid-cols-12">
        <div
            class="lg:col-span-5 lg:row-span-3 text-yd_purple-600 relative lg:text-xl text-lg row-start-1 lg:row-auto py-8"
            data-aos-once="true" data-aos="flip-up">
            <div class="pl-4 lg:pl-32 text-left">
                <?= $second_section['first_description'] = str_replace("<strong>", "<strong class='text-yd_pink-600 font-bold'>", $second_section["first_description"]) ?>
            </div>
            <img class="w-48 h-48 absolute top-1/2 left-0 transform -translate-y-2/3 opacity-25"
                 src="<?= get_template_directory_uri() ?>/assets/images/numbers/1.svg"
                 alt="First part of Home & Office organizing">
        </div>
        <div class="hidden lg:block lg:col-span-2 lg:row-span-3"></div>
        <div
            class="lg:col-span-5 lg:row-span-3 text-yd_purple-600 relative lg:text-xl text-lg row-start-2 lg:row-auto py-8"
            data-aos-once="true" data-aos="flip-up" data-aos-delay="200">
            <div class="pl-4 lg:pl-32 text-left">
                <?= $second_section['second_description'] = str_replace("<strong>", "<strong class='text-yd_pink-600 font-bold'>", $second_section["second_description"]) ?>
            </div>
            <img class="w-48 h-48 absolute top-1/2 right-0 lg:left-0 transform -translate-y-2/3 opacity-25"
                 src="<?= get_template_directory_uri() ?>/assets/images/numbers/2.svg"
                 alt="Second part of Home & Office organizing">
        </div>

        <div class="hidden lg:block col-span-12 row-span-1 text-center mt-16 mb-32">
            <div class="w-full flex justify-center items-center relative">
                <hr class="w-screen _yd_hr_gradient"/>
                <div
                    class="_yd_etape_circle absolute top-1/2 left-0 w-30px h-30px bg-yd_pink-600 rounded-full transform -translate-y-1/2"></div>
                <div
                    class="_yd_etape_circle absolute top-1/2 left-1/3 w-30px h-30px bg-yd_pink-700 rounded-full transform -translate-y-1/2"></div>
                <div
                    class="_yd_etape_circle absolute top-1/2 left-2/3 w-30px h-30px bg-yd_pink-800 rounded-full transform -translate-y-1/2"></div>
                <div
                    class="_yd_etape_circle absolute top-1/2 left-full w-30px h-30px bg-yd_pink-900 rounded-full transform -translate-y-1/2"></div>
            </div>
        </div>
        <div class="lg:block lg:col-span-1 lg:row-span-3"></div>
        <div
            class="lg:col-span-5 lg:row-span-3 text-yd_purple-600 relative lg:text-xl text-lg row-start-3 lg:row-auto py-8"
            data-aos-once="true" data-aos="flip-up" data-aos-delay="400">
            <div class="pl-4 lg:pl-32 text-left">
                <?= $second_section['third_description'] = str_replace("<strong>", "<strong class='text-yd_pink-600 font-bold'>", $second_section["third_description"]) ?>
            </div>
            <img class="w-48 h-48 absolute top-1/2 left-0 transform -translate-y-2/3 opacity-25"
                 src="<?= get_template_directory_uri() ?>/assets/images/numbers/3.svg"
                 alt="Third part of Home & Office organizing">
        </div>
        <div class="lg:block lg:col-span-1 lg:row-span-3"></div>
        <div
            class="lg:col-span-5 lg:row-span-3 text-yd_purple-600 relative lg:text-xl text-lg row-start-4 lg:row-auto py-8"
            data-aos-once="true" data-aos="flip-up" data-aos-delay="600">
            <div class="pl-4 lg:pl-32 text-left">
                <?= $second_section['fourth_description'] = str_replace("<strong>", "<strong class='text-yd_pink-600 font-bold'>", $second_section["fourth_description"]) ?>
            </div>
            <img class="w-48 h-48 absolute top-1/2 right-0 lg:left-0 transform -translate-y-2/3 opacity-25"
                 src="<?= get_template_directory_uri() ?>/assets/images/numbers/4.svg"
                 alt="Fourth part of Home & Office organizing">
        </div>
    </div>
</section>
<div class="w-full md:px-40 pt-16">
    <div class="w-full flex justify-center items-center">
        <hr class="w-1/2 lg:w-1/3 border-yd_pink-500 border">
    </div>
    <?php $third_section_repeater = $third_section["presta"];
    $i = 0;
    foreach ($third_section_repeater as $item): ?>
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-40 pt-20 px-4">
            <!-- Section -- Right image -->
            <div
                class="_yd_presta_images w-full h-90vh flex justify-center items-center relative row-start-2 lg:col-start-<?= ($i % 2) ? "1" : "2" ?> lg:row-start-1">
                <img draggable="false"
                     class="w-full h-80p object-center object-cover shadow-2xl z-20"
                     src="<?= esc_url($item['img']['url']) ?>"
                     alt="<?= esc_attr($item['img']['url']) ?>">
            </div>
            <div
                class="w-full flex flex-col justify-center items-center text-yd_purple-700 lg:row-start-1 lg:col-start-<?= ($i % 2) ? "2" : "1" ?>">
                <h2 class="font-bold text-center text-2xl lg:text-5xl leading-normal text-yd_purple-800"
                    data-aos-once="true" data-aos="zoom-in">
                    <?= $item['title'] ?>
                </h2>
                <div class="mt-8 lg:mt-20 text-lg lg:text-xl _yd-center-justified"
                     data-aos-once="true" data-aos="zoom-in" data-aos-delay="100">
                    <?= $item['description'] = str_replace(
                        [
                            "<ul>",
                            "<li>",
                            "</ul>"
                        ],
                        [
                            "<div class='mt-8 lg:mt-20'><ul class='text-center'>",
                            "<li class='text-yd_purple-700'>•&nbsp;",
                            "</ul></div>"
                        ],
                        $item['description']) ?>
                    <div class="mt-8 lg:mt-20 text-yd_pink-600">
                        <?= $item['price'] ?>
                    </div>
                </div>
            </div>
        </section>
        <?php $i++ ?>;
    <?php endforeach; ?>

    <div class="w-full flex justify-center items-center py-10 lg:py-20">
        <hr class="w-1/2 lg:w-1/3 border-yd_pink-500 border">
    </div>
    <?php
    //fourth_section
    //option
    //title
    //description
    //price
    ?>
    <!-- Section -- Options image -->
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-20 lg:gap-40 pt-20 pb-40 px-4">
        <?php $fourth_section_options = $fourth_section["option"];
        foreach ($fourth_section_options as $option):?>
            <div class="w-full flex flex-col justify-start items-center text-yd_purple-700">
                <h2 class="font-bold text-center text-2xl lg:text-5xl leading-normal text-yd_purple-800"
                    data-aos-once="true" data-aos="zoom-in">
                    <?= $option["title"] ?>
                </h2>
                <div class="mt-8 lg:mt-20 text-lg lg:text-xl _yd-center-justified"
                     data-aos-once="true" data-aos="zoom-in" data-aos-delay="100">
                    <?= $item['description'] = str_replace(
                        [
                            "<ul>",
                            "<li>",
                            "</ul>"
                        ],
                        [
                            "<div class='mt-8 lg:mt-20'><ul class='text-center'>",
                            "<li class='text-yd_purple-700'>•&nbsp;",
                            "</ul></div>"
                        ],
                        $option['description'])
                    ?>
                    <div class="mt-8 lg:mt-20 text-yd_pink-600">
                        <?= $option["price"] ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</div>
