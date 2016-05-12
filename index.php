<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AAW-first task</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="icon" href="favicon.png"/>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/layout.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<header class="ba-header">
		<div class="ba-container cf">
			<a href="#" id="ba-menu-toggle" class="ba-menu-toggle"><span></span></a>
			<a href="#" class="ba-logo ba-float-left">
				<img src="img/logo.png" alt="logo">
			</a>
			<a class="ba-button ba-button__register" href="#subscribe">
				Subcribe
			</a>
			<a class="ba-button ba-button__register" href="#login">
				Login
			</a>
			<nav class="ba-float-right">
				<ul class="ba-menu">
					<li><a href="#home">Home</a></li>
					<li><a href="#price">Price</a></li>
					<li><a href="#events">Events</a></li>
					<li><a href="#contact">Contact us</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<main role="main" >
		<section class="ba-banner">
			<a id="home">
				<h2>We are working for you</h2>
			</a>
		</section>
		<section class="ba-price">
			<a id="price">
				<div class="ba-container">
					<div class="ba-price__title">
						<h2>Our offers</h2>
					</div>
					<div class="ba-grid ba-offers__field">
						<div class="ba-width-1-3 our-offers">
							<div class="our-offers__itemfield">
								<h3>9$</h3>
								<p><i class="fa fa-university fa-icon" aria-hidden="true"></i></p>
								<p>Free 5 Mb/s</p>
								<p><i class="fa fa-graduation-cap fa-icon" aria-hidden="true"></i></p>
								<p>10 lessons</p>
								<a class="ba-button" href="#">
									Join now
								</a>
							</div>
						</div>
						<div class="ba-width-1-3 our-offers">
							<div class="our-offers__itemfield">
								<h3>29$</h3>
								<p><i class="fa fa-university fa-icon" aria-hidden="true"></i></p>
								<p>Free 40 Mb/s</p>
								<p><i class="fa fa-graduation-cap fa-icon" aria-hidden="true"></i></p>
								<p>70 lessons</p>
								<a class="ba-button" href="#">
									Join now
								</a>
							</div>
						</div>
						<div class="ba-width-1-3 our-offers">
							<div class="our-offers__itemfield">
								<h3>59$</h3>
								<p><i class="fa fa-university fa-icon" aria-hidden="true"></i></p>
								<p>Free 100 Mb/s</p>
								<p><i class="fa fa-graduation-cap fa-icon" aria-hidden="true"></i></p>
								<p>200 lessons</p>
								<a class="ba-button" href="#">
									Join now
								</a>
							</div>
						</div>
					</div>
				</div>
			</a>
		</section>
		<section class="events" id="events">
			<div class="ba-container">
				<h2 class="events-title">Events</h2>

					<?php
					define('POST_ACTIVE', 1);
					define('POST_INACTIVE', 0);

					$posts = [
						[
							'image' => ['name' => 'JS', 'path' => 'img/js.png'],
							'title' => 'Javascript 1.0',
							'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
							'begin' => 1474480800,
							'end' => 1474470000,
							'address' => '13 kuibysheva street',
							'cost' => '$20',
							'active' => POST_ACTIVE
						],
						[
							'image' => ['name' => 'Angular 2.0', 'path' => 'img/angular2.png'],
							'title' => 'Angular 2.0',
							'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
							'begin' => 1471791600,
							'end' => 1471802400,
							'address' => '13 kuibysheva street',
							'cost' => '$30',
							'active' => POST_ACTIVE
						],
						[
							'image' => ['name' => 'React', 'path' => 'img/react1.png'],
							'title' => 'React',
							'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
							'begin' => 1474480800,
							'end' => 1474470000,
							'address' => '13 kuibysheva street',
							'cost' => 'free',
							'active' => POST_ACTIVE
						],
					];
					// var_dump($posts);

					if ($posts) {
						foreach ($posts as $post){
							if ($post['active'] == POST_ACTIVE) {
								?>
								<div class="event-item">
									<img class="events-img" src="<?php echo $post['image']['path'] ?>" alt="<?php $post['image']['name'] ?>">
									<div class="events-text">
										<h3><?php echo $post['title'] ?></h3>
										<p><?php echo $post['text'] ?></p>
										<p class="events-text__date">Begin: <?php echo date('d-m-Y G:i:s', $post['begin']) ?></p>
										<p class="events-text__date">End: <?php echo date('d-m-Y G:i:s', $post['begin']) ?></p>
										<p class="events-text__address"><?php echo $post['address'] ?></p>
										<p class="events-text__cost">Cost: <?php echo $post['cost'] ?></p>
									</div>
								</div>
							<?php
							}
						}
					}
					?>

			</div>
		</section>
		<section class="contact" id="contact">
			<div class="ba-container">
				<h2 class="ba-contact__title">Contact</h2>
				<form class="ba-contact__userinfo" action="#" method="post">
					<input class="ba-contact__firstname" type="text" name="name" placeholder="Your firstname">
					<input class="ba-contact__lastname" type="text" name="name" placeholder="Your lastname">
					<textarea class="ba-contact__text" placeholder="Enter Your message"></textarea>
					<input class="ba-button ba-button__contact" type="submit" value="Send">
				</form>
			</div>
		</section>


	</main>
	<div class="footer">
		<footer class="ba-footer">
			&copy; 2016 Team It Poltava
		</footer>
		<a class="ba-overlay" id="subscribe"></a>
		<div class="ba-popup">
			<form action="#" method="post">
				<label for="name-subscribes">Your name</label><br>
				<input id="name-subscribes" name="name" size="30" type="text"><br>
				<label for="email-subscribes">Your email</label><br>
				<input id="email-subscribes" name="email" size="30" type="email"><br>
				<input value="Subscribe" type="submit">
			</form>
			<a class="ba-close" title="Close" href="#close"></a>
		</div>
		<a class="ba-overlay" id="login"></a>
		<div class="ba-popup">
			<form action="#" method="post">
				<label for="name-login">Your name</label><br>
				<input id="name-login" name="name" size="30" type="text"><br>
				<label for="password-login">Your email</label><br>
				<input id="assword-login" name="password" size="30" type="password"><br>
				<input value="Login" type="submit">
				<a class="ba-button" href="admin.html">Admin</a>
			</form>
			<a class="ba-close" title="Close" href="#close"></a>
		</div>
	</div>
	<script src="js/main.js"></script>
</body>
</html>
