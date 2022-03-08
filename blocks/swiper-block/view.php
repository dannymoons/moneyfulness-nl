<?php defined('ABSPATH') || exit('Forbidden');

$swiperOptions = [
  'spaceBetween' => 64,
];

$swiperOptionsJSON = rawurlencode(json_encode($swiperOptions));

?>

<div class="slider swiper" data-swiper="<?php echo $swiperOptionsJSON; ?>">

  <div class="slider__wrapper swiper-wrapper">
    <div class="slider__slide swiper-slide"></div>
    <div class="slider__slide swiper-slide"></div>
    <div class="slider__slide swiper-slide"></div>
    <div class="slider__slide swiper-slide"></div>
  </div>

  <div class="slider__button slider__button--next"></div>
  <div class="slider__button slider__button--prev"></div>
  <div class="slider__pagination"></div>

</div>