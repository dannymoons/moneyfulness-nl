<?php defined('ABSPATH') || exit('Forbidden');

global $post;
$ID = get_the_ID();
$title = get_the_title();
$date = get_field('event_date_field', $ID);
$location = get_field('event_location_field', $ID);
$venue = get_field('event_venue_field', $ID);
$starttime = get_field('event_starttime_field', $ID);
$endtime = get_field('event_edntime_field', $ID);
$price = get_field('event_price_field', $ID);
$ticket_link = get_field('event_ticket_link_field', $ID);

?>

<div class="event card">
    <div class="event__content">
        <div class="event__icon-container">
            <svg class="event__icon">
                <use href="#i-event"></use>
            </svg>
        </div>
        <span class="event__date"><?= $date; ?></span>
        <p class="event__title"><?= $title; ?></p>
        <div class="event__data">
            <div class="event__meta">
                <svg class="event__meta-icon">
                    <use href="#i-geo"></use>
                </svg>
                <span class="event__location"><?= $location; ?></span>
            </div>
            <div class="event__meta">
                <svg class="event__meta-icon">
                    <use href="#i-building"></use>
                </svg>
                <span class="event__venue"><?= $venue; ?></span>
            </div>
            <div class="event__meta">
                <svg class="event__meta-icon">
                    <use href="#i-clock"></use>
                </svg>
                <span class="event__start"><?= $starttime; ?></span>
            </div>
            <div class="event__meta">
                <svg class="event__meta-icon">
                    <use href="#i-ticket"></use>
                </svg>
                <span class="event__price"><?= $price; ?></span>
            </div>
        </div>

    </div>
    <a href="<?= $ticket_link; ?>" class="event__tickets btn btn--text">
        Tickets
        <svg class="btn__icon">
            <use href="#i-arrow-right"></use>
        </svg>
    </a>
</div>