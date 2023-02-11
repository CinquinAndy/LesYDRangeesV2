<?php get_header(); ?>
<section class="w-full lg:mb-40 grid grid-cols-1 lg:grid-cols-2 lg:gap-40 p-4 lg:p-0 lg:pr-10">
    <div class="_yd_contact_background w-full h-auto lg:h-auto lg:w-auto hidden lg:block">
        <div class="relative w-full h-full">
            <h2 class="leading-relaxed _yd-gradient-textColor-adjust-on-logo-alt-brightness w-full
            text-left text-5xl absolute bottom-0 left-0 lg:pb-20 lg:px-20 normal-case font-bold">
                Envie de faire appel à&nbsp;nos&nbsp;services&nbsp;?
            </h2>
        </div>
    </div>
    <div
        class="flex justify-center items-center lg:items-start lg:justify-start w-full pt-36 lg:py-36 text-yd_pink-600 tracking-widest flex-col">
        <h1 class="_yd-gradient-textColor-adjust-on-logo-alt w-full text-center lg:text-right lg:pr-10 pt-6 mb-16 text-3xl lg:text-6xl font-bold">
            Contactez-nous !
        </h1>
        <form action="#" method="POST" class="w-full max-w-lg">
            <?php wp_nonce_field('envoyer-message', 'message-verif') ?>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase text-gray-700 text-xs mb-2"
                           for="grid-first-name">
                        Prénom
                    </label>
                    <input class="shadow-xl appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded
                    py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                           id="grid-first-name" placeholder=". . ."
                           type="text" name="prenom" required>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase text-gray-700 text-xs mb-2"
                           for="grid-last-name">
                        Nom
                    </label>
                    <input class="shadow-xl appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded
                    py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           id="grid-last-name" placeholder=". . ."
                           type="text" name="nom" required>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase text-gray-700 text-xs mb-2"
                           for="grid-first-email">
                        Email
                    </label>
                    <input class="shadow-xl appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded
                    py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                           id="grid-first-email" placeholder=". . .@. . . .com"
                           type="email" name="mail" required>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase text-gray-700 text-xs mb-2"
                           for="grid-last-tel">
                        Numéro de téléphone
                    </label>
                    <input class="shadow-xl appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded
                    py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           id="grid-last-tel" placeholder="+33 6 . .  . .  . .  . ."
                           type="text" name="telephone" required>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase text-gray-700 text-xs mb-2"
                           for="grid-first-ville">
                        Ville
                    </label>
                    <input class="shadow-xl appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded
                    py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                           id="grid-first-ville" placeholder="Thonon-Les-Bains..."
                           type="text" name="ville" required>
                </div>
            </div>
            <!--  Raison -->
            <input type="hidden" name="raison">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase text-gray-700 text-xs mb-2"
                           for="grid-message">
                        Message
                    </label>
                    <textarea
                        class="shadow-xl no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                        id="grid-message"
                        type="text" name="message" required>
                    </textarea>
                    <p class="text-gray-600 text-xs italic opacity-50">Aucune donnée personnelle n’est conservée par
                        notre site via
                        ce formulaire, les données de contact seront utilisées uniquement pour vous re-contacter.
                        (Une copie du mail générée vous sera également envoyer directement à la boite mail
                        indiquée.)</p>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="flex w-full justify-evenly flex-col md:flex-row">
                    <!--            capcha -->
                    <div class="flex text-center justify-center items-center">
                        <div class="g-recaptcha" data-sitekey="6LfqXDMcAAAAAPT-c8jCOREe7U-gYT-0bfXcW54f"></div>
                    </div>
                    <div class="flex items-end my-6 md:mt-0">
                        <input type="submit"
                               class="shadow-xl bg-yd_pink-600 focus:shadow-outline focus:outline-none text-yd_pink-50 py-2 px-12 md:px-4 rounded"
                               name="envoyer-message" value="Envoyer">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<section id="erreur" class="_yd_fade _yd_fade_invisible_popup fixed -bottom-60px p-4 flex justify-center items-center rounded shadow-2xl bg-yd_pink-600 z-50 flex-col transition-all ml-10 mt-10">
    Erreur !
</section>
<section id="fine" class="_yd_fade _yd_fade_invisible_popup fixed -bottom-60px p-4 flex justify-center items-center rounded shadow-2xl bg-yd_blue-600 z-50 flex-col transition-all ml-10 mt-10">
    Mail envoyé !
</section>
<?php get_footer(); ?>
