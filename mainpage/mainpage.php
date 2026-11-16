<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
	<style>
		* { box-sizing: border-box; }
		body {
			margin: 0;
			font-family: Arial, sans-serif;
			color: #243746;
			background: linear-gradient(rgba(0, 0, 0, 0.22), rgba(0, 0, 0, 0.22)),
				url("background.gif") center / cover fixed no-repeat;
		}
		header {
			position: relative;
			display: flex;
			flex-wrap: wrap;
			align-items: flex-end;
			min-height: 200px;
			padding: 0 32px 20px;
			background: linear-gradient(135deg, #1c64bd, #7ab0f2);
		}
		.header-rectangle {
			position: absolute;
			right: 20px;
			top: 16px;
			width: 32px;
			height: 20px;
			border: 2px solid #000;
			background: transparent;
		}
		header h1 {
			margin: 0;
			color: #fff;
			font-size: clamp(24px, 7vw, 100px);
		}
		.header-images {
			display: flex;
			gap: 6px;
			margin-left: 12px;
			flex-shrink: 0;
			transform: translateY(-12px);
		}
		.header-images img {
			width: clamp(48px, 6vw, 80px);
			height: clamp(48px, 6vw, 80px);
			object-fit: contain;
			filter: brightness(0) invert(1);
		}
		.header-images img:nth-child(even) {
			transform: translateY(-12px);
		}
		main {
			width: calc(100% - 32px);
			max-width: 960px;
			margin: 40px auto;
			padding: 24px 32px;
			border-radius: 8px;
			background: #fff;
			box-shadow: 0 4px 16px rgba(36, 55, 70, 0.2);
		}
		main h2 {
			font-size: 36px;
			text-align: center;
		}
        main p {
            font-size: 18px;
            line-height: 1.4;
        }
        .featured-fish {
        	margin-top: 48px;
        }
        .featured-fish h2 {
        	margin-bottom: 24px;
        	text-align: center;
        }
        .fish-grid {
        	display: grid;
        	grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        	gap: 24px;
        }
        .fish-card {
        	overflow: hidden;
        	border-radius: 12px;
        	background: #f2f7fc;
        	box-shadow: 0 4px 12px rgba(36, 55, 70, 0.12);
        }
        .fish-card img {
        	display: block;
        	width: 100%;
        	height: 200px;
        	object-fit: cover;
        }
        .fish-card h3 {
        	margin: 0;
        	padding: 16px;
        	font-size: 22px;
        	background: #777;
        	color: #fff;
        }
        .store-callout {
        	margin: 32px 0 0;
        	font-size: 24px;
        	font-weight: bold;
        	text-align: center;
        }
	</style>
</head>
<body>
	<header>
		<h1>Fishy Business</h1>
		<div class="header-images" aria-hidden="true">
			<img src="fih.png" alt="">
			<img src="fih.png" alt="">
			<img src="fih.png" alt="">
			<img src="fih.png" alt="">
		</div>
		<span class="header-rectangle" aria-hidden="true"></span>
	</header>
	<main>
		<h2>Welcome to Fishy Business!</h2>
		<p>	   We are here for all of your fishy needs!  Whether you want a pet, a snack, or something to put on your wall, we've got you covered!  We carry a wide range of fish from standard fish to exotic species to fish that may not even exist in the wild.  Anything fishy you want, we have it.  Check out our selection in our store or look at out featured items.</p>
		<section class="featured-fish" aria-labelledby="featured-fish-title">
			<h2 id="featured-fish-title">Featured Fish</h2>
			<div class="fish-grid">
				<article class="fish-card">
					<img src="catfish.jpg" alt="Catfish">
					<h3>Catfish</h3>
				</article>
				<article class="fish-card">
					<img src="goldfish.jpg" alt="Goldfish">
					<h3>Goldfish</h3>
				</article>
				<article class="fish-card">
					<img src="koifish.jpg" alt="Koi Fish">
					<h3>Koi</h3>
				</article>
				<article class="fish-card">
					<img src="lionfish.jpg" alt="Lionfish">
					<h3>Lionfish</h3>
				</article>
				<article class="fish-card">
					<img src="mcfish.webp" alt="Pixel Fish">
					<h3>Pixel Fish</h3>
				</article>
				<article class="fish-card">
					<img src="salmon.jpg" alt="Salmon">
					<h3>Salmon</h3>
				</article>
			</div>
			<p class="store-callout">Visit our store!</p>
		</section>
		<section class="about-us" aria-labelledby="about-us-title">
			<h2 id="about-us-title">About Us</h2>
			<p>Fishy Business was founded in 20XX by two best friends Gillbert and Finnegan who both shared a passion for fishing.  They both grew tired of their dead end jobs and decided to take a risk and start their own business.  Fishy Business has been going strong and serving people for many years.</p>
			<div class="fish-grid">
				<article class="fish-card">
					<img src="gillbert.jpg" alt="Gilbert">
					<h3>Gillbert</h3>
				</article>
				<article class="fish-card">
					<img src="finnegan.jpg" alt="Finnegan">
					<h3>Finnegan</h3>
				</article>
			</div>
		</section>
	</main>
</body>
</html>
