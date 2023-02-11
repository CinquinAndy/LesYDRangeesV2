<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= get_theme_file_uri('assets/app.css') ?>">
    <?php wp_head(); ?>
    <meta content="index,follow" name="robots">
    <script src="https://use.typekit.net/mjy4bua.js"></script>
    <script>try {
            Typekit.load({async: !0});
        } catch (a) {
        }</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@600&family=Playfair+Display+SC:wght@400;700&display=swap"
        rel="stylesheet">
    <?php if (is_page('contact')) : ?>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php endif; ?>
</head>
<body <?php (is_home() || is_single()) ?
    body_class([
        "_body_blog",
        "text-yd_purple-700",
        "tracking-normal",
        "leading-normal"
    ]) :
    body_class([
        "bg-yd_pink-50",
        "text-yd_blue-50",
        "tracking-normal",
        "leading-normal"
    ]); ?>>
<?php $menu = wp_get_nav_menu_items('lesydrangees_menu') ?>

<nav id="nav"
     class="fixed nav z-50 <?php if (!is_front_page() && !is_page("nos-prestations") && !(is_home() || is_single())) {
         echo "scrolled";
     } ?>">
    <div class="relative bg-yd_blue-900 lg:bg-transparent">
        <a href="<?= esc_url($menu[0]->url) ?>" class="nav-header absolute left-0 top-0 mt-1 ml-5 lg:ml-10 lg:mt-0"
           rel="noopener">
            <button class="button_logo" aria-label="Logo Les YD Rangées - Home & Office Organizers">
                <img class="<?php if ((is_home() || is_single())) {
                    echo "_logo";
                } ?> w-80px h-80px lg:h-100px lg:w-100px"
                     src="<?= get_template_directory_uri() ?>/assets/images/logo.svg"
                     alt="Logo Les YD Rangées - Home organizer - Coach en rangement">
            </button>
        </a>
        <div class="block lg:hidden absolute right-0 top-0 z-30">
            <svg class="hidden">
                <defs>
                    <filter id="gooeyness">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="2.2" result="blur"/>
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -10"
                                       result="gooeyness"/>
                        <feComposite in="SourceGraphic" in2="gooeyness" operator="atop"/>
                    </filter>
                </defs>
            </svg>
            <div id="plate2" class="plate plate2 burger" onclick="this.classList.toggle('active')">
                <svg class="_yd_menu_svg" version="1.1" height="100" width="100" viewBox="0 0 100 100">
                    <path class="line line1"
                          d="M 50,65 H 70 C 70,65 75,65.198488 75,70.762712 C 75,73.779026 74.368822,78.389831 66.525424,78.389831 C 22.092231,78.389831 -18.644068,-30.508475 -18.644068,-30.508475"/>
                    <path class="line line2"
                          d="M 50,35 H 70 C 70,35 81.355932,35.300135 81.355932,25.635593 C 81.355932,20.906215 78.841706,14.830508 72.881356,14.830508 C 35.648232,14.830508 -30.508475,84.322034 -30.508475,84.322034"/>
                    <path class="line line3"
                          d="M 50,50 H 30 C 30,50 12.288136,47.749959 12.288136,60.169492 C 12.288136,67.738339 16.712974,73.305085 40.677966,73.305085 C 73.791674,73.305085 108.47458,-19.915254 108.47458,-19.915254"/>
                    <path class="line line4"
                          d="M 50,50 H 70 C 70,50 81.779661,50.277128 81.779661,36.607372 C 81.779661,28.952694 77.941689,25 69.067797,25 C 39.95532,25 -16.949153,119.91525 -16.949153,119.91525"/>
                    <path class="line line5"
                          d="M 50,65 H 30 C 30,65 17.79661,64.618439 17.79661,74.152543 C 17.79661,80.667556 25.093813,81.355932 38.559322,81.355932 C 89.504001,81.355932 135.59322,-21.186441 135.59322,-21.186441"/>
                    <path class="line line6"
                          d="M 50,35 H 30 C 30,35 16.525424,35.528154 16.525424,24.152542 C 16.525424,17.535987 22.597755,13.559322 39.40678,13.559322 C 80.617882,13.559322 94.067797,111.01695 94.067797,111.01695"/>
                </svg>
                <svg class="x" version="1.1" height="100" width="100" viewBox="0 0 100 100">
                    <path class="line" d="M 34,32 L 66,68"/>
                    <path class="line" d="M 66,32 L 34,68"/>
                </svg>
            </div>
        </div>

        <div class="relative lg:absolute nav-links lg:mr-10 lg:top-0 lg:right-0 lg:h-100px lg:flex lg:items-center">
            <ul id="navLinks"
                class="_yd_fade_invisible w-full flex flex-wrap flex-col justify-evenly items-center lg:block lg:w-auto lg:h-auto">
                <li class="_yd_active_parent w-full flex justify-center lg:inline">
                    <a class="<?= (is_front_page()) ? "_yd_active" : "_yd_not_active" ?> relative text-center uppercase m-0 mt-16 lg:mx-5"
                       href="<?= esc_url($menu[0]->url) ?>" rel="noopener"><?= $menu[0]->title ?></a>
                </li>
                <li class="w-full flex justify-center lg:inline">
                    <a class="<?= (is_page("notre-activite")) ? "_yd_active" : "_yd_not_active" ?> relative text-center uppercase m-0 lg:mx-5"
                       href="<?= esc_url($menu[1]->url) ?>" rel="noopener"><?= $menu[1]->title ?></a>
                </li>
                <li class="w-full flex justify-center lg:inline">
                    <a class="<?= (is_page("nos-prestations")) ? "_yd_active" : "_yd_not_active" ?> relative text-center uppercase m-0 lg:mx-5"
                       href="<?= esc_url($menu[2]->url) ?>" rel="noopener"><?= $menu[2]->title ?></a>
                </li>
                <li class="w-full flex justify-center lg:inline">
                    <a class="<?= (is_home() || is_single()) ? "_yd_active" : "_yd_not_active" ?> relative text-center uppercase m-0 lg:mx-5"
                       href="<?= esc_url($menu[3]->url) ?>" rel="noopener"><?= $menu[3]->title ?></a>
                </li>
                <li class="w-full flex justify-center lg:inline">
                    <a class="<?= (is_page("contact")) ? "_yd_active" : "_yd_not_active" ?> relative text-center uppercase m-0 lg:mx-5"
                       href="<?= esc_url($menu[4]->url) ?>" rel="noopener"><?= $menu[4]->title ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

