<!-- Start Recipe Card 4 -->
<div class="recipe-card-style-4">
	<a href="<?php echo $settings['button_link']; ?>">
		<div class="container">
			<div class="recipe-container" style="background-image:url(<?php echo $settings['dish_image']['url']; ?>);">
				<div class="recipe-content-min bg-color">
					<div><p class="recipe-detail-no"><?php echo $settings['recipe_minutes']; ?></p><span class="recipe-detail-text">min.</span></div>
				</div>
				<div class="recipe-content-ser bg-color">
					<div><p class="recipe-detail-no"><?php echo $settings['recipe_servings']; ?></p><span class="recipe-detail-text">serv.</span></div>
				</div>
				<div class="recipe-content-ing bg-color">
					<div><p class="recipe-detail-no"><?php echo $settings['recipe_ingredients']; ?></p><span class="recipe-detail-text">ing.</span></div>
				</div>
			</div>
			<div class="recipe-container-content">
				<div class="recipe-content-type bg-color-type">
					<p class="elementor-recipe-type-wrapper"><?php echo $settings['dish_type']; ?></p>
				</div>
				<div class="recipe-content">
					<h3 class="elementor-recipe-name-wrapper"><?php echo $settings['dish_name']; ?></h3>
					<p class="elementor-recipe-description-wrapper"><?php echo $settings['recipe_description']; ?></p>
				</div>
			</div>
		</div>
	</a>
</div>
<!-- End Recipe Card -->
