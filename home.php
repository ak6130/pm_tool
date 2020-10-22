<?php include('./inc/_head.php'); // include header markup ?>

<div id='content'><?php

	echo "<h3 class='site-title'>" . $page->get('headline|title') . "</h1>";

	echo "<div class='products'>";

		echo $page->body;

		foreach($page->children() as $product) {
			$image = $product->product_image->url;
			$render = "<div class='product'>"
					. "<div class='product-description'>"

						. "<img src='$image' height='150px'>"
						. "<a href='$product->url'>$product->title</a>"
						. "<p>$product->product_description</p>"
					. "</div>"
					. "<button class='snipcart-add-item btn btn-info' 
									data-item-id='$product->product_id'
									data-item-name='$product->product_name'
									data-item-price='$product->product_price'
									data-item-url='$product->product_url'
									data-item-image='$image'
									data-item-description='$product->product_description'>
									$product->product_name kaufen
							</button>"
				.	"</a>"
			. "</div>";

			echo $render;
		}

	echo "</div>";


?></div><!-- end content -->

<?php include('./_snipcart.php');?>
<?php include('./inc/_foot.php'); // include footer markup ?>
