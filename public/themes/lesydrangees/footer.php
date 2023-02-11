<footer class="w-full md:px-40">
    <div class="w-full flex justify-center items-center">
        <hr class="w-1/2 lg:w-1/3 border-yd_pink-500 border">
    </div>
    <div class="mt-20 mb-10 w-full">
        <h2 class="text-center text-2xl lg:text-3xl text-yd_purple-600 uppercase font-bold">Les yd Rangées</h2>
    </div>
    <div class="mt-30 grid grid-cols-1 lg:grid-cols-3">
        <div class="text-center text-yd_purple-600">
            <h2 class="font-bold text-lg lg:text-xl text-yd_purple-800">
                Secteurs d'intervention
            </h2>
            <div class="font-bold mt-2 lg:mt-10">
                <p>
                    Thonon-les-Bains
                </p>
                <p>
                    Haute-Savoie & Suisse voisine
                </p>
            </div>
        </div>
        <div class="mt-10 lg:mt-0 text-center text-yd_purple-600">
            <h2 class="font-bold text-lg lg:text-xl text-yd_purple-800">
                Contact
            </h2>
            <div class="font-bold mt-2 lg:mt-10">
                <p class="font-bold">
                    Laura & Virginie
                </p>
                <p>
                    <a href="tel:+33674562701">06 74 56 27 01</a>
                    &nbsp;-&nbsp;
                    <a href="tel:+33650103170">07 88 19 16 10</a>
                </p>
                <p>
                    <a href="mailto:les.yd.rangees@gmail.com">les.yd.rangees@gmail.com</a>
                </p>
                <br>
                <a class="link-animation" href="<?= esc_url(get_permalink(get_page_by_title('Contact'))) ?>"
                   rel="noopener">Contactez-nous !</a>
            </div>
        </div>
        <div class="mt-10 lg:mt-0 text-center text-yd_purple-600">
            <h2 class="font-bold text-lg lg:text-xl text-yd_purple-800">
                Suivez-nous !
            </h2>
            <div class="font-bold mt-2 lg:mt-10">
                <div class="w-full flex justify-center items-center">
                    <a class="flex justify-center items-center mx-5"
                       href="https://www.facebook.com/les.yd.rangees/" rel="noopener noreferrer"><img
                            class="h-50px w-50px"
                            src="<?= get_template_directory_uri() ?>/assets/images/4494463-social-media/svg/001-facebook.svg"
                            alt="Facebook - les YD Rangées - Home & Office Organizers"></a>
                    <a class="flex justify-center items-center mx-5" href="https://instagram.com/les.yd.rangees"
                       rel="noopener noreferrer"><img
                            class="h-50px w-50px"
                            src="<?= get_template_directory_uri() ?>/assets/images/4494463-social-media/svg/005-instagram.svg"
                            alt="Instagram - les YD Rangées - Home & Office Organizers"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="w-full py-10 text-center text-yd_purple-800 text-xs uppercase">
    <a class="link-animation font-bold" href="<?= esc_url(get_permalink(get_page_by_title('Politique de confidentialité'))) ?>" rel="noopener">Mentions Légales</a>
    <p>
        Developed by <a class="link-animation font-bold" href="https://www.malt.fr/profile/andycinquin/" rel="noopener noreferrer">Andy CINQUIN</a>
        & Designed by
<!--        <a-->
<!--            class="link-animation font-bold" href="#" rel="noopener">-->
<!--        </a>-->
            Pauline GOUVERNET
    </p>
</div>
<div class="w-full flex justify-center items-center">
    <hr class="w-screen _yd_hr_gradient"/>
</div>
<div class="w-full py-10 text-center text-yd_purple-600 text-lg uppercase">
    <p class="text-sm">
        ©2021 par Les YD rangées SAS - Tous droits réservés
    </p>
</div>
<script src="<?= get_theme_file_uri('assets/app.js') ?>" async></script>
<?php wp_footer(); ?>
</body>
</html>
