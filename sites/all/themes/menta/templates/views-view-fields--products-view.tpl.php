<div id="main_product">
	<div id="product_container">
		<div class="product_term">
			<?php print $fields['field_class_to_term']->content; ?>
		</div>
		<div class="product_title">
			<?php print $fields["title"]->content; ?>
		</div>
		<div class="product_image">
			<?php print $fields["field_product_image"]->content; ?>
		</div>
		<div class="product_price">
			<div class="product_price_inner">
				<div class="product_price_top">
					<?php print $fields["field_pre_price"]->content; ?>
				</div>
				<div class="product_price_middle">
					<?php print $fields["field_product_price"]->content; ?>
				</div>
				<div class="product_price_bottom">
					<?php print $fields["field_end_price"]->content; ?>
				</div>
			</div>
		</div>
		<div class="product_terms">
			<?php print $fields["nothing"]->content; ?>
		</div>
	</div>
</div>