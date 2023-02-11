<?php $first_section = get_field("first_section") ?>

<section class="gap-30 grid grid-cols-1 lg:grid-cols-2 lg:h-screen lg:mb-20 lg:p-0 mb-10 p-4 relative w-full">
    <div class="flex flex-wrap h-full items-center justify-center lg:pl-40 w-full">
        <div>
            <div class="lg:m-0 mt-28 w-full">
                <h2 class="_yd-gradient-textcolor-400-alt font-bold leading-tight lg:text-7xl lg:text-left text-center text-xl uppercase w-full"
                    data-aos-once="true" data-aos="zoom-in">
                    <?= ($first_section['title']) ?>
                </h2>
            </div>
            <div class="flex flex-col lg:hidden mt-10 relative w-full">
                <div class="flex w-full">
                    <div class="_yd_circle_top rounded-full">
                        <div class="relative"><img draggable="false"
                                                   class="h-36 object-center object-cover rounded-full w-36"
                                                   src="<?= esc_url($first_section['img_top']['url']) ?>"
                                                   alt="<?= esc_attr($first_section['img_top']['alt']) ?>"></div>
                    </div>
                </div>
                <div class="flex justify-end w-full">
                    <div class="_yd_circle_bot rounded-full">
                        <div class="relative"><img draggable="false"
                                                   class="h-40 object-center object-cover rounded-full w-40"
                                                   src="<?= esc_url($first_section['img_bot']['url']) ?>"
                                                   alt="<?= esc_attr($first_section['img_bot']['alt']) ?>"></div>
                    </div>
                </div>
                <div class="-translate-x-1/3 -translate-y-2/3 absolute left-1/2 top top-1/2 transform">
                    <div class="_yd_circle_middle rounded-full">
                        <div class="mt-20 relative"><img draggable="false"
                                                         class="h-40 object-center object-cover rounded-full w-40"
                                                         src="<?= esc_url($first_section['img_mid']['url']) ?>"
                                                         alt="<?= esc_attr($first_section['img_mid']['alt']) ?>"></div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center lg:flex-row lg:justify-start mt-20 w-full">
                <div class="lg:m-0 lg:pl-10 lg:w-1/3 mb-3 w-full">
                    <p class="lg:text-left lg:text-xl text-center text-lg text-yd_blue-400" data-aos-once="true"
                       data-aos="zoom-in" data-aos-delay="100"><?= ($first_section['subtitle']) ?>
                    </p>
                </div>
                <a href="<?= esc_url($first_section["button"]['url']) ?>"
                   class="bg-yd_pink-600 lg:ml-10 lg:px-5 lg:py-3 lg:text-lg m-0 px-2 py-2 rounded-xl text-sm text-yd_pink-50 uppercase"
                   data-aos-once="true" data-aos="zoom-in" data-aos-delay="200">
                    <?= ($first_section["button"]['title']) ?>
                </a>
            </div>
        </div>
    </div>
    <div class="hidden lg:block relative w-full">
        <div class="_yd_circle_top absolute left-0 lg:left-60 lg:top-24 rounded-full top-0 z-30">
            <div class="relative"><img class="h-300px object-center object-cover rounded-full w-300px"
                                       draggable="false"
                                       src="<?= esc_url($first_section['img_top']['url']) ?>"
                                       alt="<?= esc_attr($first_section['img_top']['alt']) ?>"></div>
        </div>
        <div class="_yd_circle_middle absolute right-10 rounded-full top-1/4 z-20">
            <div class="relative"><img class="h-500px object-center object-cover rounded-full w-500px"
                                       draggable="false"
                                       src="<?= esc_url($first_section['img_mid']['url']) ?>"
                                       alt="<?= esc_attr($first_section['img_mid']['alt']) ?>"></div>
        </div>
        <div class="_yd_circle_bot absolute bottom-12 left-24 z-10">
            <div class="relative"><img class="h-450px object-center object-cover rounded-full w-450px"
                                       draggable="false"
                                       src="<?= esc_url($first_section['img_bot']['url']) ?>"
                                       alt="<?= esc_attr($first_section['img_bot']['alt']) ?>"></div>
        </div>
    </div>
</section>
<?php $second_section = get_field("second_section") ?>
<section class="gap-30 grid grid-cols-1 lg:grid-cols-2 p-4 relative w-full">
    <div
        class="flex h-full items-start justify-center lg:col-span-1 lg:col-start-2 lg:pr-40 lg:row-span-1 lg:row-start-1 w-full">
        <div>
            <div class="w-full">
                <h2 class="_yd-gradient-textcolor-400-alt font-bold leading-tight lg:text-7xl text-2xl text-right uppercase w-full"
                    data-aos-once="true" data-aos="zoom-in-down"><?= $second_section["title"] ?>
                </h2>
            </div>
        </div>
    </div>
    <div></div>
    <div class="flex h-full items-start justify-center lg:pl-40 w-full">
        <div>
            <div class="mt-10 w-full"><h1
                    class="font-bold leading-tight lg:text-5xl text-center text-sm text-yd_purple-700 w-full"
                    data-aos-once="true" data-aos="zoom-in-down" data-aos-delay="100"><?= $second_section["subtitle"] ?></h1>
                <div
                    class="_yd-gradient-textcolor-700 leading-relaxed lg:mt-20 lg:pb-40 lg:text-xl mt-6 pb-6 text-left text-lg"
                    data-aos-once="true" data-aos="fade-right" data-aos-delay="200">
                    <?= $second_section["description"] ?>
                </div>
            </div>
        </div>
    </div>
    <div id="_yd-filled-box" class="h-full hidden lg:block relative w-full">
        <div class="relative"></div>
        <div class="relative"></div>
        <div class="relative"></div>
        <div class="relative"></div>
        <div class="relative"></div>
        <div class="relative"></div>
        <div class="relative"></div>
        <div class="relative"></div>
        <div id="slider" class="relative"></div>
    </div>
</section>
