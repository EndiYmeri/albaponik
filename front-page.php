<?php get_header(); ?>

<main>
    <section class="hero-section h-[30vh] md:h-[50vh] lg:h-[70vh] relative overflow-hidden">
    <?php while (have_rows("banner")):
        the_row(); ?>
         <?php if (get_sub_field("banner_background") === "image"): ?>
            <picture class="w-full absolute -z-10 brightness-50">
                <source  srcset="<?php echo the_sub_field(
                    "banner_background_image"
                ); ?>" type="image/"> 
                <img src="<?php echo the_sub_field(
                    "banner_background_image"
                ); ?>" alt="" class="w-full object-cover">
            </picture>
        <?php else: ?>
            <video autoplay muted class="w-full absolute -z-10 brightness-50">
                <source 
                    src="<?php echo the_sub_field(
                        "banner_background_video"
                    ); ?>" 
                    type="video/mp4">
                </video>
        <?php endif; ?>
        

        <div class="container w-full mx-auto h-full">
            <div class="h-full grid place-content-center">
              

                         <h1 class="uppercase  text-zinc-50 text-2xl md:text-4xl lg:text-6xl text-center font-bold">
                    <?php echo the_sub_field("banner_title"); ?>
                    <!-- Jemi ne mision -->
                </h1>
                <p class="font-bold text-zinc-50 text-base md:text-lg lg:text-xl text-center ">
                    <?php echo the_sub_field("banner_subtitle"); ?>
                    <!-- Punojme per nje te ardhme te qendrueshme -->
                </p>
                 
               
            </div>
        </div>
               
        <?php
    endwhile; ?>
        
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
    

        <section class="mission px-4 py-6 md:py-12 lg:py-24">
            <div class="container">
                <h1 class="uppercase my-2 text-4xl md:text-5xl lg:text-6xl text-center font-bold text-blue">
                    <?php echo $iconsTitle; ?>
                    <!-- Misioni i se ardhmes -->
                </h1>
                <p class="text-center text-xl md:text-2xl py-8"> 
                    <?php echo $iconsSubtitle; ?>
                    <!-- Nëpërmjet zhvillimit dhe ofrimit të zgjidhjeve dhe teknologjive ne zgjidhim problemet e bujqësisë. -->
                </p>
            </div>
        </section>
        <section class="icons px-4 py-6 md:py-10">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-24 mb-7">
                <div class="icon-box max-w-[400px] justify-self-center md:justify-self-end"><div class="icon">
                    <img class="w-[100px] md:w-[150px] mx-auto md:mr-0"  src="<?php bloginfo(
                        "template_url"
                    ); ?>/assets/agenti-chimici.png" alt="">
                    </div>
                    <p class="text-xl md:text-2xl text-center md:text-right">
                        <?php echo $firstIconText; ?>
                        <!-- Ne reduktojmë përdorimin e agjentëve kimikë dhe pesticideve në kulturat bujqësore. -->
                    </p>
                </div>
                <div class="icon-box max-w-[400px] justify-self-center md:justify-self-start"><div class="icon">
                    <img class="w-[100px] md:w-[150px] mx-auto md:ml-0" src="<?php bloginfo(
                        "template_url"
                    ); ?>/assets/sprechi-acqua.png" alt="">
                    </div>
                    <p class="text-xl md:text-2xl text-center md:text-left">
                        <?php echo $secondIconText; ?>

                        <!-- Ne reduktojmë mbetjet e ujit gjatë seancave të ujitjes.       -->
                    </p>
                </div>
                <div class="icon-box max-w-[400px] justify-self-center md:justify-self-end"><div class="icon">
                    <img class="w-[100px] md:w-[150px] mx-auto md:mr-0" src="<?php bloginfo(
                        "template_url"
                    ); ?>/assets/agricoltura-di-precisione.png" alt="">
                    </div>
                    <p class="text-xl md:text-2xl text-center md:text-right">
                        <?php echo $thirdIconText; ?>
                        <!-- Ne promovojmë eko-qëndrueshmërinë dhe zhvillimin e bujqësisë precize në vend. -->
                    </p>
                </div>
                <div class="icon-box max-w-[400px] justify-self-center md:justify-self-start"><div class="icon">
                    <img class="w-[100px] md:w-[150px] mx-auto md:ml-0" src="<?php bloginfo(
                        "template_url"
                    ); ?>/assets/tecnologia-agricoltura.png" alt="">
                    </div>
                    <p class="text-xl md:text-2xl text-center md:text-left">
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
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 items-center">
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
        <div class="container mx-auto px-4 md:px-0">
            <h2 class="text-xl md:text-2xl lg:text-3xl  text-center font-bold py-8">
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
                                    <img  src="<?php echo $gallery_image_url; ?>" alt="" class="h-[250px] mx-auto">
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
    <section id="contact-section">

        <div class="contact-form w-11/12  max-w-[800px] mx-auto border-gray-light border rounded p-4 mb-5">
            <h3 class="text-2xl md:text-3xl text-center font-bold">
                <?php echo get_field("contact_title"); ?>
            </h3>
            <p class="text-center">
                <?php echo get_field("contact_subtitle"); ?>
            </p>
           <?php if (get_field("contact_form_shortcode")) {
               echo do_shortcode(get_field("contact_form_shortcode"));
           } ?>
        </div>
    </section>
    <section id="map-section">
    <style type="text/css">
        .acf-map {
            width: 100%;
            height: 400px;
            border: #ccc solid 1px;
            margin: 20px 0;
        }

        // Fixes potential theme css conflict.
        .acf-map img {
        max-width: inherit !important;
        }
        </style>
        <?php $map = get_field("map"); ?>

        <div class="acf-map" data-zoom="16">
        <?php echo esc_attr($map["lat"]); ?>
        <?php echo esc_attr($map["lng"]); ?>
            <div class="marker" 
                data-lat="<?php echo esc_attr($map["lat"]); ?>" 
                data-lng="<?php echo esc_attr($map["lng"]); ?>"
            ></div>
        </div>
        <?php  ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZfj4XaiQUIjiYkc4JbjOa3vV8DeOIQk0&callback=Function.prototype"></script>
        <script type="text/javascript">
        (function( $ ) {

        /**
         * initMap
         *
         * Renders a Google Map onto the selected jQuery element
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @return  object The map instance.
         */
        function initMap( $el ) {

            // Find marker elements within map.
            var $markers = $el.find('.marker');

            // Create gerenic map.
            var mapArgs = {
                zoom        : $el.data('zoom') || 16,
                mapTypeId   : google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map( $el[0], mapArgs );

            // Add markers.
            map.markers = [];
            $markers.each(function(){
                initMarker( $(this), map );
            });

            // Center map based on markers.
            centerMap( map );

            // Return map instance.
            return map;
        }

        /**
         * initMarker
         *
         * Creates a marker for the given jQuery element and map.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @param   object The map instance.
         * @return  object The marker instance.
         */
        function initMarker( $marker, map ) {

            // Get position from marker.
            var lat = $marker.data('lat');
            var lng = $marker.data('lng');
            var latLng = {
                lat: parseFloat( lat ),
                lng: parseFloat( lng )
            };

            // Create marker instance.
            var marker = new google.maps.Marker({
                position : latLng,
                map: map
            });

            // Append to reference for later use.
            map.markers.push( marker );

            // If marker contains HTML, add it to an infoWindow.
            if( $marker.html() ){

                // Create info window.
                var infowindow = new google.maps.InfoWindow({
                    content: $marker.html()
                });

                // Show info window when marker is clicked.
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open( map, marker );
                });
            }
        }

        /**
         * centerMap
         *
         * Centers the map showing all markers in view.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   object The map instance.
         * @return  void
         */
        function centerMap( map ) {

            // Create map boundaries from all map markers.
            var bounds = new google.maps.LatLngBounds();
            map.markers.forEach(function( marker ){
                bounds.extend({
                    lat: marker.position.lat(),
                    lng: marker.position.lng()
                });
            });

            // Case: Single marker.
            if( map.markers.length == 1 ){
                map.setCenter( bounds.getCenter() );

            // Case: Multiple markers.
            } else{
                map.fitBounds( bounds );
            }
        }

        // Render maps on page load.
        $(document).ready(function(){
            $('.acf-map').each(function(){
                var map = initMap( $(this) );
            });
        });

        })(jQuery);
        </script>
    </section>
</main>

<?php get_footer(); ?>

