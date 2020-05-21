<!-- Start Listing Card 4 -->
<div class="listing-card-style-4">
	<a href="<?php echo $settings['button_link']; ?>">
    <div class="avatar">
		<img src="<?php echo $settings['select_image']['url']; ?>" class="listing-img" alt="<?php _e('Listing Image', CEE_DOMAIN) ?>" />
    </div>
	<div class="listing-main-container">
		<div class="header">
			<h2 class="elementor-listing-name-wrapper"><?php echo $settings['name']; ?></h2>
		</div>
		<div class="elementor-listing-description-wrapper"><?php echo $settings['listing_description']; ?></div>
	</div>
    <div class="actions">
		<div class="listing-footer elementor-listing-price-wrapper"><?php echo $settings['listing_price']; ?></div>
		<div class="listing-footer"><div class="elementor-star-rating__wrapper"><?php echo $stars_element; ?></div></div>
    </div>
	</a>
</div>
<!-- End Listing Card -->
