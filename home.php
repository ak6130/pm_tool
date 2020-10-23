<?php include('./inc/_head.php'); // include header markup ?>

<div id='content'><?php

	echo "<h3 class='site-title'>" . $page->get('headline|title') . "</h1>";

	echo "<div class='products'>";

		echo $page->body;
		
		$numofCols = 4;
		$rowCount = 0; 
		$bootstrapColWidth = 12 / $numofCols;
		foreach($page->children() as $product) {
			if($rowCount % $numofCols == 0) { echo "<div class='row'>";}
			$image = $product->product_image->url;
			$render = "<div class='col-md-" . $bootstrapColWidth . "'>"
						. "<img src='$image' class='card-img-top'>"
						. "<h5 class='card-title'><a href='$product->url'>$product->title</a></h5>"						
						. "<p class='card-text'>$product->product_description</p>"
					. "<button class='snipcart-add-item btn btn-info' 
									data-item-id='$product->product_id'
									data-item-name='$product->product_name'
									data-item-price='$product->product_price'
									data-item-url='$product->product_url'
									data-item-image='$image'
									data-item-description='$product->product_description'>
									$product->product_name kaufen
							</button>"
			.		  "</div>";

			echo $render;
			if($rowCount % $numofCols == 0) { echo "</div>";}
		}
	echo "</div>";


?></div><!-- end content -->

<?php include('./_snipcart.php');?>
<?php include('./inc/_foot.php'); // include footer markup ?>
