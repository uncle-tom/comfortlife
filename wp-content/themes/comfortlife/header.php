<head>
<title><?php wp_title(); ?></title>

<!-- Заглавная картинка -->
<?php 
	$args = array(
		'default-image' => get_template_directory_uri() . '/images/header.jpg',
		'uploads'       => true,
		'flex-width'    => true,
		'flex-width'    => true,
		'height'        => 410,
	);
	add_theme_support( 'custom-header', $args )
?>

<meta name=viewport content="width=device-width, initial-scale=1">

<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Counter -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.7.1/countUp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>

<!-- Materialize -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script> -->

<?php wp_head(); ?>
</head>

<header>
	<div class="container">
		<div class="first-header">
			<div class="first-header-contact">
				<p><img src="http://localhost/mythemetwo/comfortlife/wp-content/uploads/2017/03/phone.png" alt=""> 000 000-00-00</p>
				<p><img src="http://localhost/mythemetwo/comfortlife/wp-content/uploads/2017/03/mail.png" alt=""> info@comfortlife.com.ua</p>
			</div>
			<div class="first-header-social">
				<img src="http://localhost/mythemetwo/comfortlife/wp-content/uploads/2017/03/fb.png" alt="">
				<img src="http://localhost/mythemetwo/comfortlife/wp-content/uploads/2017/03/twitter.png" alt="">
				<img src="http://localhost/mythemetwo/comfortlife/wp-content/uploads/2017/03/youtube.png" alt="">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="second-header">
			<div class="second-header-logo">
				<img src="http://localhost/mythemetwo/comfortlife/wp-content/uploads/2017/03/logo-comfortlife.png" alt="">
			</div>
			<div class="second-header-menu">
				<li><a href="">Главная</a></li>
				<li><a href="">О нас</a></li>
				<li><a href="">Услуги</a></li>
				<li><a href="">Цены</a></li>
				<li><a href="">Фотогалерея</a></li>
				<li><a href="">Контакты</a></li>
			</div>
		</div>
	</div>
</header>
