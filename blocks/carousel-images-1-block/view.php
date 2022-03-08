<?php defined('ABSPATH') || exit('Forbidden');

$carousel_slides = get_field('carousel_images_slides');
// $banner_align = get_field('banner_1_align');
// $banner_width = get_field('banner_1_width');
$slides_mobile = "2";
?>

<section class="section section--wide">
    <div class="section__container">
        <div class="swiper carousel carousel--images">
            <div class="swiper-wrapper">

                <?php foreach ($carousel_slides as $carousel_slide) : ?>

                    <div class="swiper-slide carousel__slide">

                        <?php

                        moonsio_image($carousel_slide['image'], 'content_regular', [
                            'class' => 'section__img',
                        ]);

                        ?>

                    </div>

                <?php endforeach; ?>

            </div>
            <div class="carousel__prev"></div>
            <div class="carousel__next"></div>
        </div>
    </div>
</section>
<script>
    const carousel1 = new Swiper(".carousel--images", {
        // Optional parameters
        // direction: "vertical",
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        speed: 500,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".carousel__pagination",
        },
        navigation: {
            nextEl: ".carousel__next",
            prevEl: ".carousel__prev",
        },
        breakpoints: {
            600: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },

        // And if we need scrollbar
        // scrollbar: {
        //   el: ".swiper-scrollbar",
        // },
    });
</script>