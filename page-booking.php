<?php 
    /*
    Template Name: Бронирование
    */
?>

<?php 
    get_header();
?>

<!--/about-->
<section class="banner-bottom-w3layouts py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="page-content col-lg-12 py-4 px-5 mx-auto">
                <h1 class="tittle booking-title"><?php the_field('page_title'); ?></h1>
            </div>
            <p class="my-4" data-aos="fade-up"><?php the_field('main_text'); ?></p>
            <!-- BEGIN UGOLOC CODE {literal} -->
            <div id='ugoloc'></div>
            <script type='text/javascript'>
                var widgetUrl = 'https://ugoloc.ru';
                (function () {
                    var room_id = 946;
                    var timestamp = Math.round(Date.now()/10000);
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', widgetUrl + '/embed/booking.json?id=' + room_id);
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            var script = document.createElement('script');
                            script.type = 'text/javascript';
                            script.src = widgetUrl + '/assets/embed/ugoloc.embed.js?t=' + timestamp;
                            var styles = document.createElement('link');
                            styles.type = 'text/css';
                            styles.rel = 'stylesheet';
                            styles.href = widgetUrl + '/assets/embed/ugoloc.css?t=' + timestamp;
                            var ugoloc = document.getElementById('ugoloc');
                            var json = JSON.parse(xhr.responseText);
                            document.body.appendChild(styles);
                            ugoloc.innerHTML = json.html;
                            ugoloc.appendChild(script);
                        }
                    };
                    xhr.send();
                })();
            </script>
            <!-- {/literal} END UGOLOC CODE -->
        </div>
</section>
    <!--//about-->
<?php
    get_footer();
?>