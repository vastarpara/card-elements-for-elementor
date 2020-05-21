<!-- Start Tour Card 2 -->
<div class="tour-card-style-2" style="background-image:url(<?php echo $settings['place_image']['url']; ?>);">
    <div class="tour-main-container">
		<div class="tour-container">
			<div class="tour-content">
				<div class="elementor-tour-name-wrapper"><?php echo $settings['place_name']; ?></div>
				<div class="elementor-tour-price-wrapper"><?php echo $settings['tour_price']; ?></div>
			</div>
			<div class="tour-details">
				<ul class="tour-detail-ul">
					<li class="tour-detail-list"><p class="tour-detail-icon"><i class="fas fa-sun"></i></p><p class="tour-detail-text"><?php echo $settings['tour_days']; ?> <?php _e('Days', CEE_DOMAIN) ?></p></li>
					<li class="tour-detail-list"><p class="tour-detail-icon"><i class="fas fa-users"></i></p><p class="tour-detail-text"><?php echo $settings['tour_person']; ?> <?php _e('Persons', CEE_DOMAIN) ?></p></li>
					<li class="tour-detail-list"><p class="tour-detail-icon"><i class="fas fa-flag"></i></p><p class="tour-detail-text"><?php echo $settings['tour_guides']; ?> <?php _e('Guides', CEE_DOMAIN) ?></p></li>
				</ul>
			</div>
			<div class="elementor-tour-description-wrapper">
				<?php echo $settings['tour_description']; ?>
			</div>
			<div class="tour-button">
				<a href="<?php echo $settings['button_link']; ?>" class="view-tour-btn"><?php echo $settings['button_text']; ?></a>
			</div>
		</div>
	</div>
</div>
<!-- End Tour Card -->
