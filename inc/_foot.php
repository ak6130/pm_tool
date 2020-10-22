

	</div><!--/#main-->

	<!-- footer -->
	<footer id='footer'>
		<p>
		Powered by <a href='http://processwire.com'>ProcessWire CMS</a> and <a href="http://snipcart.com">Snipcart</a>  &nbsp; / &nbsp; 
		</p>
	</footer>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<?php
  $api_key = $pages->get('/')->Snipcart_API_Key;
  echo "<script src='https://cdn.snipcart.com/scripts/2.0/snipcart.js' data-api-key='$api_key' id='snipcart'></script>";
?>

<link href="https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css" rel="stylesheet" type="text/css" />
</body>
</html>