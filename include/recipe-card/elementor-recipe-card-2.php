<!-- Start Recipe Card 2 -->
<div class="recipe-card-style-2" style="background-image:url(<?php echo $settings['dish_image']['url']; ?>);">
    <div class="container">
		<div class="recipe-container">
			<div class="recipe-content">
				<h3 class="elementor-recipe-name-wrapper"><?php echo $settings['dish_name']; ?></h3>
				<p class="elementor-recipe-type-wrapper"><?php echo $settings['dish_type']; ?></p>
			</div>
			<ul class="recipe-detail">
				<li class="recipe-detail-list"><span class="recipe-detail-no"><?php echo $settings['recipe_minutes']; ?></span><span class="recipe-detail-text">Minutes</span></li>
				<li class="recipe-detail-list"><span class="recipe-detail-no"><?php echo $settings['recipe_servings']; ?></span><span class="recipe-detail-text">Servings</span></li>
				<li class="recipe-detail-list"><span class="recipe-detail-no"><?php echo $settings['recipe_ingredients']; ?></span><span class="recipe-detail-text">Ingredients</span></li>
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