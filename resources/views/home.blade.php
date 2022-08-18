<!DOCTYPE HTML>
<html>
	<head>
		<title>CarRent</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<a href="index.html" class="title">CarRent</a>
					<nav>						
					<ul>
							<li></li>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#one">Cars</a></li>
							<li><a href="#two">What We Do</a></li>
							<li><a href="#three">Book Now</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">
                   

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Rent a car at low prices</h1>
							<p>The perfect car you're waiting for is here with variety of models and comfort is up to the mark. Book right now!</p>
							<ul class="actions">
								<li><a href="#one" class="button scrolly icon fa-arrow-down">Select a car</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					@include("cars")
				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>What We Do</h2>
							<p>It is very important for us to pay attention to every small details on the transportation system and that is why we came with the best solution to make a comfortable and very much affordable ride for every beloved customer. We provide the best ride you can get while you going to office, school, college or anywhere you want. We assist you with the best ride in a most affordable way. Our vehicles are extremely comfortable and waiting for you to serve the best ride all along. Our drivers are very experienced and also you can contact us whenever you need. </p>

							<p>Furthermore, we're very user-friendly and very easy to book. All you need is just to book according to your schedule and our car is ready for you. So what are you waiting for?</p>

							<div class="features">
								<section>
									<span class="icon major fa-car"></span>
									<h3>Get The Best Cars</h3>
									<p>The perfect car you're waiting for is here with variety of models and comfort is up to the task. One touch away for these beautiful beasts.</p>
								</section>
								<section>
									<span class="icon major fa-money"></span>
									<h3>Non Existing Fare</h3>
									<p>The fare for every ride is so minimal that you'll find it almost non existing. Also we never flactuate the fare in regular circumstances.</p>
								</section>
								<section>
									<span class="icon major fa-star"></span>
									<h3>Top User Experience</h3>
									<p>Get the best riding experience with our skilled and experienced drivers. We're always upto listen your reviews as well.</p>
								</section>
								<section>
									<span class="icon major fa-clock-o"></span>
									<h3>Save Your Time</h3>
									<p>Why looking for public transportation in this busy city when we can deliver you the best vehicles at your doorstep and save you time.</p>
								</section>
							</div>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Book Now</h2>
							<p>To book your vehicle just fill-out the form below and wait for your ride. We can assure you that your informations are very important to us and we'll keep it as a top priority secret.</p>
							<div class="split style1">
								<section>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="location">Location</label>
												<input type="text" name="location" id="location" />
											</div>

											<div class="field half">
												<label for="vehicle-type">Select Vehicle Type</label>

												<select name="vehicle-type" id="vehicle-type">
													<option value="">- Vehicle Type -</option>
													<option value="1">Large: Premium</option>
													<option value="2">Large: Station wagon</option>
													<option value="3">Medium: Low emission</option>
													<option value="4">Small: Economy</option>
													<option value="5">Small: Mini</option>
													<option value="6">Small: Mini Low emission</option>
												</select>
											</div>

											<div class="field half">
												<label for="date-from">Date from</label>
												<input type="text" name="date-from" id="date-from" />
											</div>

											<div class="field half">
												<label for="date-to">Date to</label>
												<input type="text" name="date-to" id="date-to" />
											</div>

											<div class="field">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" />
											</div>

											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>

											<div class="field half">
												<label for="phone">Phone</label>
												<input type="text" name="phone" id="phone" />
											</div>

											<div class="field">
												<label for="message">Comment</label>
												<textarea name="message" id="message" rows="3"></textarea>
											</div>

											<div class="field half">
												<label for="captcha">Captcha</label>
												<input type="text" name="captcha" id="captcha" />
											</div>

											<div class="field half text-right">
												<label>&nbsp;</label>

												<ul class="actions">
													<li><input type="submit" value="Send" class="primary" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<span>66, Beside, BRAC University<br />
											Mohakhali, TN 00000-0000<br />
											Dhaka</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="#">CarRent@untitled.tld</a>
										</li>
										<li>
											<h3>Phone</h3>
											<span>+880101010101</span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="fa-pinterest"><span class="label">Pinterest</span></a></li>
												<li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
												<li><a href="#" class="fa-google-plus"><span class="label">Google plus</span></a></li>
											</ul>
										</li>

										<li>
											<h3>Terms</h3>

											<div class="box">
												<p>It is very important for the customer to pay attention to the adipiscing process. How great, as it were, the trouble with which he repels the pain of renunciation prevents others from being released, except that I would open something that we never deserve, no training, or, let us accuse the flight of pleasure, because it itself. We can hate the very pleasure of being pampered! No one will open it except the most worthy. The needs with which the pain falls! From the pleasures of the wise, pleasure flees into the reality of the pleasures of the things themselves. He repulses the pains, the very act of doing it, and the chosen one who endures the pains, the flight of these consequences, and the architect of life does not accept them. Or indeed, the architect is not the greatest of troubles, but the pains, of the body, are the troubles of the pleasures. Who, to assume the very pleasures of those who praise us more harshly than these, but because he hates duties and those from them! What do they provide for them that are easy to get rid of? Because, as it were, they are. Some labor of life, and therefore no duties. That is not the case of those present duties which are accepted in some ways. That of ours is the blessed one and, may the softness flee, hers, but indeed, therefore, finding them here rejecting those who and that pain. For I hate him with hard work. He will suffer troubles, he will take them, for his mind is happy, pleasures none of them is held by a wise man, I will explain them just to the duties! Those present who are less than that are often blinded by pleasures, let them be saved, for they seek to be abandoned by those who are bound by great times! By this wise man, blinded by the pleasures of pleasure, they do not know who the great ones are. Less called the flattery of the pleasures themselves, the pleasure of choosing to follow, for we can have some freedom, they provide for the pains to be repelled. The very distinction of the corrupt, with pain, pain, and the like, we lead them to the most by that right, and with the pleasures of those who accuse us of just pains! Nor to follow them with desire but trouble! They do not know pain, there are some to whom he flees, but in others the distinction is none of ours. As an architect, he is rightly repulsed. Agreed?</p>
											</div>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>