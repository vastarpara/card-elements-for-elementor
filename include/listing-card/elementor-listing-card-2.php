<!-- Start Listing Card 2 -->
<div class="listing-card-style-2">
	<div class="container">
		<div class="listing-container">
			<div class="listing-content-img">
				<img src="<?php echo $settings['select_image']['url']; ?>" class="listing-img">
			</div>
			<div class="listing-content">
				<div class="elementor-listing-name-wrapper"><?php echo $settings['name']; ?></div>
				<div class="elementor-listing-description-wrapper"><?php echo $settings['listing_description']; ?></div>
				<div class="elementor-star-rating__wrapper">
					<?php echo $stars_element; ?>
				</div>
				<div class="elementor-btn-price">
					<div class="elementor-listing-price-wrapper"><?php echo $settings['listing_price']; ?></div>
					<div class="listing-button">
						<a href="<?php echo $settings['button_link']; ?>" class="view-listing-btn"><?php echo $settings['button_text']; ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Listing Card -->