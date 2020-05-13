<!-- Start Tour Card 6 -->
<div class="tour-card-style-6">
	<a href="<?php echo $settings['button_link']; ?>">
		<div class="container">
			<div class="tour-container">
				<div class="tour-content">
					<div class="elementor-tour-name-wrapper"><?php echo $settings['place_name']; ?></div>
					<div class="elementor-tour-price-wrapper"><?php echo $settings['tour_price']; ?></div>
				</div>
				<div class="tour-content-img">
					<img src="<?php echo $settings['place_image']['url']; ?>" class="tour-img">
				</div>
			</div>
			<div class="tour-details">
				<ul class="tour-detail-ul">
					<li class="tour-detail-list"><p class="tour-detail-icon"><i class="fas fa-sun"></i></p><p class="tour-detail-text"><?php echo $settings['tour_days']; ?> Days</p></li>
					<li class="tour-detail-list"><p class="tour-detail-icon"><i class="fas fa-users"></i></p><p class="tour-detail-text"><?php echo $settings['tour_person']; ?> Persons</p></li>
					<li class="tour-detail-list"><p class="tour-detail-icon"><i class="fas fa-flag"></i></p><p class="tour-detail-text"><?php echo $settings['tour_guides']; ?> Guides</p></li>
				</ul>
			</div>
			<div class="elementor-tour-description-wrapper">
				<?php echo $settings['tour_description']; ?>
			</div>
		</div>
	</a>
</div>
<!-- End Tour Card -->