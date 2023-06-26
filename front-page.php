<?php get_header(); ?>

<main>
    <section class="hero-section h-[70vh] relative overflow-hidden">
        <video autoplay muted class="w-full absolute -z-10 brightness-50">
            <source src="<?php bloginfo(
                "template_url"
            ); ?>/assets/hero-section-video.mp4" type="video/mp4">
        </video>
        <div class="container w-full mx-auto h-full">
            <div class="h-full grid place-content-center">
                <?php while (have_rows("banner")):
                    the_row(); ?>
                         <h1 class="uppercase  text-zinc-50 text-6xl text-center font-bold">
                    <?php echo the_sub_field("banner_title"); ?>
                    <!-- Jemi ne mision -->
                </h1>
                <p class="font-bold text-zinc-50 text-xl text-center ">
                    <?php echo the_sub_field("banner_subtitle"); ?>
                    <!-- Punojme per nje te ardhme te qendrueshme -->
                </p>
                        
                   <?php
                endwhile; ?>
                
               
            </div>
        </div>
    </section>
    <?php
    while (have_rows("icons")):

        the_row();
        $iconsTitle = get_sub_field("icons_title");
        $iconsSubtitle = get_sub_field("icons_subtitle");
        $firstIconText = get_sub_field("first_icon_text");
        $secondIconText = get_sub_field("second_icon_text");
        $thirdIconText = get_sub_field("third_icon_text");
        $fourthIconText = get_sub_field("fourth_icon_text");
        ?>
    

        <section class="mission py-24 md:py-12 sm:py-6">
            <div class="container">
                <h1 class="uppercase my-2 text-6xl text-center font-bold text-blue">
                    <?php echo $iconsTitle; ?>
                    <!-- Misioni i se ardhmes -->
                </h1>
                <p class="text-center text-2xl py-8"> 
                    <?php echo $iconsSubtitle; ?>
                    <!-- Nëpërmjet zhvillimit dhe ofrimit të zgjidhjeve dhe teknologjive ne zgjidhim problemet e bujqësisë. -->
                </p>
            </div>
        </section>
        <section class="icons py-10">
            <div class="container mx-auto grid grid-cols-2 gap-24 mb-7">
                <div class="icon-box max-w-[400px] justify-self-end"><div class="icon">
                    <img class="w-[150px] ml-auto"  src="<?php bloginfo(
                        "template_url"
                    ); ?>/assets/agenti-chimici.png" alt="">
                    </div>
                    <p class="text-2xl text-right">
                        <?php echo $firstIconText; ?>
                        <!-- Ne reduktojmë përdorimin e agjentëve kimikë dhe pesticideve në kulturat bujqësore. -->
                    </p>
                </div>
                <div class="icon-box max-w-[400px] justify-self-start"><div class="icon">
                    <img class="w-[150px] mr-auto" src="<?php bloginfo(
                        "template_url"
                    ); ?>/assets/sprechi-acqua.png" alt="">
                    </div>
                    <p class="text-2xl text-left">
                        <?php echo $secondIconText; ?>

                        <!-- Ne reduktojmë mbetjet e ujit gjatë seancave të ujitjes.       -->
                    </p>
                </div>
                <div class="icon-box max-w-[400px] justify-self-end"><div class="icon">
                    <img class="w-[150px] ml-auto" src="<?php bloginfo(
                        "template_url"
                    ); ?>/assets/agricoltura-di-precisione.png" alt="">
                    </div>
                    <p class="text-2xl text-right">
                        <?php echo $thirdIconText; ?>
                        <!-- Ne promovojmë eko-qëndrueshmërinë dhe zhvillimin e bujqësisë precize në vend. -->
                    </p>
                </div>
                <div class="icon-box max-w-[400px] justify-self-start"><div class="icon">
                    <img class="w-[150px] mr-auto" src="<?php bloginfo(
                        "template_url"
                    ); ?>/assets/tecnologia-agricoltura.png" alt="">
                    </div>
                    <p class="text-2xl text-left">
                        <?php echo $fourthIconText; ?>
                        
                        <!-- Ne projektojmë dhe prodhojmë teknologji për bujqësinë 4.0. -->
                    </p>
                </div>
            </div> 
            <!-- <div class="container mx-auto grid justify-items-center ">
                <button class="bg-green mx-auto py-1 px-3 rounded">
                    <a href="#" class="text-zinc-50 text-base">Shiko me shume</a>
                </button>
            </div> -->
        </section>
    <?php
    endwhile;
    while (have_rows("about")):
        the_row(); ?>
    <section class="image-text py-10">
        <div class="container mx-auto grid grid-cols-2">
            <div class="block p-4 shadow-lg">
                <img src="<?php echo get_sub_field("about_image"); ?>" alt="">
            </div>
            <div class="text p-4">
                <?php while (have_rows("about_content")):

                    the_row();
                    $aboutTitle = get_sub_field("about_title");
                    $aboutText = get_sub_field("about_text");
                    ?>
                <h2 class="text-3xl mb-2 font-semibold">
                    <?php echo $aboutTitle; ?>
                <!-- Mirësevini ne Albaponik , kompania e pare inovative dhe me e njohura ne kete sektor! -->
                </h2>
                <p class="text-lg">
                    <?php echo $aboutText; ?>
                    <!-- Teresisht shqiptare  që projekton dhe prodhon sisteme hidroponike për kultivimin e mikrofilizave, fidanëve, perimeve dhe jeshilleqeve.
                    Ne kujdesemi për kategori të ndryshme klientësh që duan të bëjnë bujqësi në një mënyrë të shëndetshme dhe të qëndrueshme, duke përfshirë entuziastët e kopshtarisë, fermerët që duan të kalojnë në bujqësi hidroponike, shkollat që ofrojnë programe bujqësore  dhe të rinjtë që duan të hapin një fermë moderne.
                    <br>Albaponik ofron te gjithe gamen e sherbimeve te hidroponise, qe nga projektimi I personalizuar I projektit, ne produktet e nevojshme per implemntimin e strukturave, ushqimin e bimeve dhe mirembajtjen e sistemeve. -->
                </p> 
                <?php
                endwhile; ?>  
            </div>
        </div>
    </section>
    <?php
    endwhile;
    ?>
    <section class="gallery py-6">
        <div class="container">
            <h2 class="text-3xl text-center font-bold py-8">
            <?php echo the_field("gallery_title"); ?>
            <!-- Seleziona la categoria a cui appartieni ed inizia ad esplorare le nostre soluzioni, scopri come la nostra tecnologia può aiutarti a coltivare in modo efficace e sostenibile. -->
            </h2>
            <article class="grid sm:grid-cols-1 md:grid-cols-3 gap-8">

            <?php // Check rows exists.

if (have_rows("gallery_tab")):
                // Loop through rows.
                while (have_rows("gallery_tab")):

                    the_row();
                    // Load sub field value.
                    $gallery_name = get_sub_field("gallery_name");
                    $gallery_page_url = get_sub_field("gallery_page_link");
                    $gallery_image_url = get_sub_field("gallery_cover");
                    ?>
                            <a href="<?php echo $gallery_page_url; ?>">
                                <div class="gallery-cat grid gap-4 justify-center py-6 shadow-md">
                                    <img  src="<?php echo $gallery_image_url; ?>" alt="" class="h-[250px]">
                                    <h3 class="gallery-title text-2xl font-bold px-4">
                                        <?php echo $gallery_name; ?>
                                    </h3>
                                </div>
                            </a>
			<?php
                endwhile;
            else:


                // Do something...
            endif; ?>
            </article>
        </div>
    </section>
    <section id="map-section">
        
    </section>
</main>

<?php get_footer(); ?>

