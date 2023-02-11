<section class="flex flex-col justify-center mx-0 mb-10 mt-40 lg:mx-40 lg:mb-40 text-yd_purple-700">
    <h1 class="uppercase text-2xl font-bold text-yd_pink-500 text-center">
        Politique de confidentialitée & Mentions légales
    </h1>
    <div class="w-full flex justify-center items-center p-10">
        <hr class="w-1/3 border-yd_pink-500 border">
    </div>
    <div class="w-full flex justify-center items-center _yd-center-justified" data-aos-once="true"
         data-aos="zoom-in-down">
        <div class="w-full mx-5 md:w-1/2 lg:m-0 flex justify-center items-center grid grid-cols-1 text-base lg:text-xl text-yd_purple-700">
            <?php foreach (get_field("politic") as $item): ?>
                <h2 class="text-2xl font-bold my-10"><?= $item["title"] ?></h2>
                <?= $item['description'] = str_replace("<a", "<a class='text-yd_pink-600' rel='noopener noreferrer'", $item['description']) ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

