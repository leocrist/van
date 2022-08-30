<div class="qodef-tours-search-main-filters-holder qodef-boxed-widget">
	<form action="<?php echo esc_url(setsail_tours_get_search_page_url()); ?>" method="GET">
		<div class="qodef-tours-search-main-filters-title">
			<h4><?php esc_html_e('Planen Sie Ihre Reise', 'setsail-tours'); ?></h4>
		</div>
		<div class="qodef-tours-search-main-filters-text">
			<p><?php esc_html_e('Es ist an der Zeit, den perfekten Urlaub zu planen!', 'setsail-tours'); ?></p>
		</div>

		<input type="hidden" name="order_by" value="<?php echo esc_attr(setsail_tours_search()->getOrderBy()); ?>">
		<input type="hidden" name="order_type" value="<?php echo esc_attr(setsail_tours_search()->getOrderType()); ?>">
		<input type="hidden" name="view_type" value="<?php echo esc_attr(setsail_tours_search()->getViewType()); ?>">
		<input type="hidden" name="page" value="<?php echo esc_attr($current_page); ?>">

		<div class="qodef-tours-search-main-filters-fields">
			<div class="qodef-tours-input-with-icon">
				<span class="qodef-tours-input-icon">
					<span class="icon_search"></span>
				</span>
				<input class="qodef-tours-keyword-search" value="<?php echo esc_attr($keyword); ?>" type="text" name="keyword" placeholder="<?php esc_attr_e('Search Tour', 'setsail-tours'); ?>">
			</div>
			<div class="qodef-tours-input-with-icon" style="margin-bottom:30px;">
				<span class="qodef-tours-input-icon">
					<span class="icon_compass"></span>
				</span>
				<input type="text" value="<?php echo esc_attr($destination); ?>" class="qodef-tours-destination-search" name="destination" placeholder="<?php esc_attr_e('Where To?', 'setsail-tours'); ?>">
			</div>
			
			<?php if(is_array($tour_types) && count($tour_types) && $show_tour_types) : ?>
				<h4>Kategorie</h4>
				<?php foreach($tour_types as $type) : ?>
					<?php
					$checked = in_array($type->slug, $checked_types);
					$checked_attr = $checked ? 'checked' : '';
					?>

					<div class="qodef-tours-type-filter-item">
						<input <?php echo esc_attr($checked_attr); ?> type="checkbox" id="qodef-tour-type-filter-<?php echo esc_attr($type->slug); ?>" name="type[]" value="<?php echo esc_attr($type->slug); ?>">
						<label for="qodef-tour-type-filter-<?php echo esc_attr($type->slug); ?>">
						<span>
							<?php echo esc_html($type->name); ?>
						</span>
						</label>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

			<?php if(setsail_tours_theme_installed()) : ?>
				<?php echo setsail_select_execute_shortcode('qodef_button', array(
					'html_type'    => 'input',
					'input_name'   => 'setsail_tours_search_submit',
					'size'		   => 'medium',
					'text'         => esc_attr__('Search', 'setsail-tours'),
					'custom_attrs' => array(
						'data-searching-label' => esc_attr__('Searching...', 'setsail-tours')
					)
				)); ?>
			<?php else: ?>
				<input type="submit" name="setsail_tours_search_submit" value="<?php esc_attr_e('Search', 'setsail-tours') ?>" class="qodef-btn qodef-btn-medium qodef-btn-solid" data-searching-label="<?php esc_attr_e('Searching...', 'setsail-tours'); ?>">
			<?php endif; ?>
			
			<?php if(setsail_tours_is_wpml_installed()) { ?>
				<?php
					$lang = ICL_LANGUAGE_CODE;
				?>
				<input type="hidden" name="lang" value="<?php echo esc_attr($lang); ?>">
			<?php } ?>
		</div>
	</form>
</div>
