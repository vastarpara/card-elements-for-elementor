<!-- Start Recipe Card 3 -->
<div class="recipe-card-style-3">
	<a href="<?php echo $settings['button_link']; ?>">
		<div class="container">
			<div class="recipe-container">
				<div class="recipe-content">
					<h3 class="elementor-recipe-name-wrapper"><?php echo $settings['dish_name']; ?></h3>
					<p class="elementor-recipe-type-wrapper"><?php echo $settings['dish_type']; ?></p>
				</div>
				<div class="recipe-content-img">
					<img src="<?php echo $settings['dish_image']['url']; ?>" class="recipe-img">
				</div>
			</div>
			<ul class="recipe-detail">
				<li class="recipe-detail-list"><span class="recipe-detail-no"><?php echo $settings['recipe_minutes']; ?></span><span class="recipe-detail-text">Min.</span></li>
				<li class="recipe-detail-list"><span class="recipe-detail-no"><?php echo $settings['recipe_servings']; ?></span><span class="recipe-detail-text">Serv.</span></li>
				<li class="recipe-detail-list"><span class="recipe-detail-no"><?php echo $settings['recipe_ingredients']; ?></span><span class="recipe-detail-text">Ing.</span></li>
			</ul>
			<div class="elementor-recipe-description-wrapper">
				<?php echo $settings['recipe_description']; ?>
			</div>
		</div>
	</a>
</div>
<!-- End Recipe Card -->