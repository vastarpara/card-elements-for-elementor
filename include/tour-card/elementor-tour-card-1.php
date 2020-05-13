<!-- Start Tour Card 1 -->
<div class="tour-card-style-1">
    <div class="container">
		<div>
			<img src="<?php echo $settings['place_image']['url']; ?>" class="tour-img">
		</div>
		<div class="tour-content">
			<div class="elementor-tour-name-wrapper"><?php echo $settings['place_name']; ?></div>
			<div class="elementor-tour-price-wrapper"><?php echo $settings['tour_price']; ?></div>
			<div class="elementor-tour-description-wrapper"><?php echo $settings['tour_description']; ?></div>
		</div>
		<div class="tour-details">
			<ul class="tour-detail-ul">
				<li class="tour-detail-list"><p class="tour-detail-icon"><i class="fas fa-sun"></i></p><p class="tour-detail-text"><?php echo $settings['tour_days']; ?> Days</p></li>
				<li class="tour-detail-list"><p class="tour-detail-icon"><i class="fas fa-users"></i></p><p class="tour-detail-text"><?php echo $settings['tour_person']; ?> Persons</p></li>
				<li class="tour-detail-list"><p class="tour-detail-icon"><i class="fas fa-flag"></i></p><p class="tour-detail-text"><?php echo $settings['tour_guides']; ?> Guides</p></li>
			</ul>
		</div>
		<div class="tour-button">
			<a href="<?php echo $settings['button_link']; ?>" class="view-tour-btn"><?php echo $settings['button_text']; ?></a>
		</div>
	</div>
</div>
<!-- End Testimonial Card -->