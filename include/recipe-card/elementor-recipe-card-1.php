<!-- Start Recipe Card 1 -->
<div class="recipe-card-style-1">
    <div class="container">
		<div>
			<img src="<?php echo $settings['dish_image']['url']; ?>" class="recipe-img">
		</div>
		<div class="recipe-container">
			<div class="recipe-content">
				<h3 class="elementor-recipe-name-wrapper"><?php echo $settings['dish_name']; ?></h3>
				<p class="elementor-recipe-type-wrapper"><?php echo $settings['dish_type']; ?></p>
			</div>
			<ul class="recipe-detail">
				<li class="recipe-detail-list"><p class="recipe-detail-no"><?php echo $settings['recipe_minutes']; ?></p><p class="recipe-detail-text">Minutes</p></li>
				<li class="recipe-detail-list"><p class="recipe-detail-no"><?php echo $settings['recipe_servings']; ?></p><p class="recipe-detail-text">Servings</p></li>
				<li class="recipe-detail-list"><p class="recipe-detail-no"><?php echo $settings['recipe_ingredients']; ?></p><p class="recipe-detail-text">Ingredients</p></li>
			</ul>
			<div class="elementor-recipe-description-wrapper">
				<?php echo $settings['recipe_description']; ?>
			</div>
			<div class="recipe-button">
				<a href="<?php echo $settings['button_link']; ?>" class="view-recipe-btn"><?php echo $settings['button_text']; ?></a>
			</div>
		</div>
    </div>
</div>
<!-- End Recipe Card -->