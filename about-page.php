<?php
/* Template Name: About Template */
?>
<?php get_header(); ?>
    <div class="banner relative min-h-[200px] md:min-h-[300px] lg:min-h-[400px] grid place-content-center"
        >
        <div class="absolute w-full h-full -z-10 brightness-50 bg-no-repeat bg-cover" 
            style="background-image:url('<?php the_field(
                "page_banner"
            ); ?>')" ></div>
        <h1 class=" text-3xl md:text-4xl lg:text-6xl font-bold text-zinc-50">
            <?php the_title(); ?>
        </h1>
    </div>
    <main class="page-single-location py-8">
        <div class="container">
            <h2 class="text-2xl md:text-3xl lg:text-5xl font-bold text-center mb-8">
                Rreth Nesh
            </h2>
            <div class="grid grid-cols-2">
            <div class="block p-4 shadow-lg">
                <img src="<?php bloginfo(
                    "template_url"
                ); ?>/assets/urban.jpg" alt="">
            </div>
            <div class="text p-4">
                <h2 class="text-3xl mb-2 font-semibold">Mirësevini ne Albaponik , kompania e pare inovative dhe me e njohura ne kete sektor!</h2>
                <p class="text-lg">
                    Teresisht shqiptare  që projekton dhe prodhon sisteme hidroponike për kultivimin e mikrofilizave, fidanëve, perimeve dhe jeshilleqeve.
                    Ne kujdesemi për kategori të ndryshme klientësh që duan të bëjnë bujqësi në një mënyrë të shëndetshme dhe të qëndrueshme, duke përfshirë entuziastët e kopshtarisë, fermerët që duan të kalojnë në bujqësi hidroponike, shkollat që ofrojnë programe bujqësore  dhe të rinjtë që duan të hapin një fermë moderne.
                    <br>Albaponik ofron te gjithe gamen e sherbimeve te hidroponise, qe nga projektimi I personalizuar I projektit, ne produktet e nevojshme per implemntimin e strukturave, ushqimin e bimeve dhe mirembajtjen e sistemeve.
                </p>    
            </div>
        </div>

        </div>
    </main>

<?php get_footer(); ?>
