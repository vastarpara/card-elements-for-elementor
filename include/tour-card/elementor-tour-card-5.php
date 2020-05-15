<!-- Start Tour Card 5 -->
<div class="tour-card-style-5">
	<a href="<?php echo $settings['button_link']; ?>">
    <div class="container">
		<div class="tour-img">
            <img src="<?php echo $settings['place_image']['url']; ?>" sizes="(max-width: 700px) 100vw, 700px" width="700" height="700">
        </div>
		<div class="container-inner">
            <div class="elementor-tour-name-wrapper"><?php echo $settings['place_name']; ?></div>
            <div class="elementor-tour-description-wrapper"><?php echo $settings['tour_description']; ?></div>
			<div class="tour-details">
				<ul class="tour-detail-ul">
					<li class="tour-detail-list"><p class="tour-detail-icon"><i class="fas fa-sun"></i></p><p class="tour-detail-text"><?php echo $settings['tour_days']; ?> Days</p></li>
					<li class="tour-detail-list"><p class="tour-detail-icon"><i class="fas fa-users"></i></p><p class="tour-detail-text"><?php echo $settings['tour_person']; ?> Persons</p></li>
					<li class="tour-detail-list"><p class="tour-detail-icon"><i class="fas fa-flag"></i></p><p class="tour-detail-text"><?php echo $settings['tour_guides']; ?> Guides</p></li>
				</ul>
			</div>
			<div class="content-price-top">
				<div class="elementor-tour-price-wrapper"><?php echo $settings['tour_price']; ?></div>
			</div>
        </div>
	</div>
	</a>
</div>
<!-- End Tour Card -->
