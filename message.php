<!DOCTYPE html>
<html>
<head>
	<title>DayoftheWeek</title>

	<link rel="stylesheet" type="text/css" href="message-style.css">
</head>
<body>


	<?php  
	//refreshes page every 5 secs
	header("refresh:500");
		$dayoftheweek = date("w");

		switch($dayoftheweek) {
			case 0: 
				echo '<p>Today is Sunday</p>
				<div class ="vid-con">
				<div class="tenor-gif-embed" data-postid="8862897" data-share-method="host" data-width="100%" data-aspect-ratio="1.3313253012048192"><a href="https://tenor.com/view/hiding-gif-8862897">Hiding The Simpsons GIF</a> from <a href="https://tenor.com/search/hiding-gifs">Hiding GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script></div>

				';
				break;
			case 1:
				echo '<p>Today is Monday</p> 

				<div class="vid-con">


				<div class="tenor-gif-embed" data-postid="16916873" data-share-method="host" data-width="100%" data-aspect-ratio="1.0"><a href="https://tenor.com/view/marge-simpson-the-simpsons-shy-shame-ashame-gif-16916873">Marge Simpson The Simpsons GIF</a> from <a href="https://tenor.com/search/margesimpson-gifs">Margesimpson GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script></div>';
				break;
			case 2:
				echo '<p>Today is Tuesday</p>
				<div class="vid-con">


				<div class="tenor-gif-embed" data-postid="5552043" data-share-method="host" data-width="100%" data-aspect-ratio="1.3333333333333333"><a href="https://tenor.com/view/simpsons-dead-gif-5552043">Stop Stop Hes Already Dead GIF</a> from <a href="https://tenor.com/search/thesimpsons-gifs">Thesimpsons GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script></div>';
				break;
			case 3:
				echo "<p>Today is Wednesday </p>
				<div class='vid-con'>


				<div class='tenor-gif-embed' data-postid='8650008' data-share-method='host' data-width='100%' data-aspect-ratio='1.4689655172413794'><a href='https://tenor.com/view/homer-simpsons-gif-8650008'>Homer Simpsons The Simpsons GIF</a> from <a href='https://tenor.com/search/homersimpsons-gifs'>Homersimpsons GIFs</a></div><script type='text/javascript' async src='https://tenor.com/embed.js'></script>";
				break;
			case 4:
				echo '<p>Today is Thursday</p>

				<div class="vid-con">


				<div class="tenor-gif-embed" data-postid="12259197" data-share-method="host" data-width="100%" data-aspect-ratio="1.2704081632653061"><a href="https://tenor.com/view/nhe-the-simpsons-bart-dance-gif-12259197">Nhe The Simpsons GIF</a> from <a href="https://tenor.com/search/nhe-gifs">Nhe GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script></div>';
				break;
			case 5:
				echo '<p>Today is Friday</p>

				<div class="vid-con">


				<div class="tenor-gif-embed" data-postid="4120001" data-share-method="host" data-width="100%" data-aspect-ratio="1.3387096774193548"><a href="https://tenor.com/view/margesimpson-thesimpsons-pretty-mirror-gif-4120001">Primp GIF</a> from <a href="https://tenor.com/search/margesimpson-gifs">Margesimpson GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script></div>';
				break;
			case 6:
				echo '<p>Today is Saturday</p>

				<div  class="vid-con">


				<div class="tenor-gif-embed" data-postid="3722600" data-share-method="host" data-width="100%" data-aspect-ratio="1.2300884955752212"><a href="https://tenor.com/view/he-simpsons-marge-simpson-senator-homer-simpson-gif-3722600">Homers Fantasy - The Simpsons GIF</a> from <a href="https://tenor.com/search/hesimpsons-gifs">Hesimpsons GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script></div>';
				break;

			default:
				echo "<p>Something went wrong</p>

				<div class='vid-con'>


				<div class='tenor-gif-embed' data-postid='8949118' data-share-method='host' data-width='100%' data-aspect-ratio='1.0714285714285714'><a href='https://tenor.com/view/homer-daydreaming-thinking-simpsons-gif-8949118'>Homer Day Dreaming GIF</a> from <a href='https://tenor.com/search/homer-gifs'>Homer GIFs</a></div><script type='text/javascript' async src='https://tenor.com/embed.js'></script></div>"; 
		}

	?>

</body>
</html>
