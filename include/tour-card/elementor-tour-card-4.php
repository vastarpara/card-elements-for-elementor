<!-- Start Tour Card 4 -->
<div class="tour-card-style-4">
	<a href="<?php echo $settings['button_link']; ?>">
		<div class="tour-main-container">
			<div class="container-inner">
				<div class="tour-content">
					<div class="elementor-tour-name-wrapper"><?php echo $settings['place_name']; ?></div>
					<div class="elementor-tour-price-wrapper"><?php echo $settings['tour_price']; ?></div>
				</div>
				<div class="tour-image-container">
					<img src="<?php echo $settings['place_image']['url']; ?>" class="tour-img" alt="<?php _e('Tour Image', CEE_DOMAIN) ?>" />
					<div class="tour-desc-inner">
                        <p class="elementor-tour-description-wrapper"><?php echo $settings['tour_description']; ?></p>
                    </div>
				</div>
			</div>
		</div>
	</a>
</div>
<!-- End Tour Card -->
