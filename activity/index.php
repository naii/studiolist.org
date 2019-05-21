<?php
	require '../functions.php';
	$title = "Activity on studiolist.org";
	include '../header.php';
?>		

		<!-- <section id="main-content"> -->
		<h1>Public documentation</h1>
		<p>I prefer to be open and transparent about the development of studiolist.org. That’s why I’m listing major development steps here. I understand that this is not super interesting for you as an artist but my developer friends like it and some of them are voiceover artists as well :P</p>
		
		<h2>Current activity</h2>

		<p><strong>I’m validating studiolist.org within 4 months (Feb 1 to May 31) while traveling & working (day job, voiceover). No market validation until Jun 1 means studiolist.org dies.</strong> In practical terms this means that I’m cold-contacting recording studios to connect to them and convince them to be listed on studiolist.org.</p>

		<p><strong><a href="https://www.instagram.com/naii.io/">Follow my daily struggle as an adventureneur!</a></strong></p>

		<h3>Countries and cities where I connected to VO studios:</h3>

		<ul>
			<li>Germany - Berlin</li>
			<li>USA - Miami, New York City, Philadelphia, Baltimore, Washington D.C., Atlanta, Nashville, Chicago, Denver, Seattle, San Francisco, Los Angeles</li>
			<li>Morocco - Agadir, Marrakesh, Casablanca, Rabat</li>
			<li>Portugal - Lisbon</li>
			<li>Spain - Madrid, Barcelona</li>
		</ul>

		<h3>Currently collecting in:</h3>

		<ul>
			<li>USA - New York City (Mar 13) to Los Angeles (Apr 24)</li>
		</ul>

		<h3>Activity log</h3>

		<?php
			$today = new DateTime('now');
			$date000 = new DateTime("2018-04-13");
			$date001 = new DateTime("2018-11-21");
			$date002 = new DateTime("2019-02-01");
			$date003 = new DateTime("2019-02-13");
			$date004 = new DateTime("2019-02-20");
			$date005 = new DateTime("2019-03-28");
			$date006 = new DateTime("2019-04-08");
			$date007 = new DateTime("2019-04-12");
			$date008 = new DateTime("2019-04-13");
			$date009 = new DateTime("2019-04-15");
			$date010 = new DateTime("2019-04-17");
			$date011 = new DateTime("2019-04-18");
			$date012 = new DateTime("2019-04-21");
			$date013 = new DateTime("2019-04-23");
			$interval000 = $date000->diff($today);
			$interval001 = $date001->diff($today);
			$interval002 = $date002->diff($today);
			$interval003 = $date003->diff($today);
			$interval004 = $date004->diff($today);
			$interval005 = $date005->diff($today);
			$interval006 = $date006->diff($today);
			$interval007 = $date007->diff($today);
			$interval008 = $date008->diff($today);
			$interval009 = $date009->diff($today);
			$interval010 = $date010->diff($today);
			$interval011 = $date011->diff($today);
			$interval012 = $date012->diff($today);
			$interval013 = $date013->diff($today);
		?>

		<ul>
			<li>
				<span><strong>
					<?php
						if ($interval013->days == 0) {
							echo " Today";
						} elseif ($interval013->days == 1) {
							echo "1 day ago";
						} else {
							echo $interval013->days . " days ago";
						}
					?>:
				</strong></span>added three new VO-verified, Los-Angeles-based studios; small copy updates
			</li>
			<li><span><strong><?php	echo $interval012->days . " days ago"; ?>: </strong></span>added new VO-verified, San-Francisco-based studio; small correction in the contact form and added honeypot field for/against spam; redirect to https version by default
			</li>
			<li><span><strong><?php echo $interval011->days . " days ago"; ?>: </strong></span>added new VO-verified, San-Francisco-based studio
			</li>
			<li><span><strong><?php echo $interval010->days . " days ago"; ?>: </strong></span>added four new VO-verified studio (in Portland, Oregon); added new San Francisco based, VO-verified studio & corrected studio count
			</li>
			<li><span><strong><?php echo $interval009->days . " days ago"; ?>: </strong></span>added five new VO-verified studio (in Portland, Oregon)
			</li>
			<li><span><strong><?php	echo $interval008->days . " days ago"; ?>: </strong></span>added new VO-verified studio (in Seattle, Washington)
			</li>
			<li><span><strong><?php	echo $interval007->days . " days ago"; ?>: </strong></span>added three new VO-verified studios (in Seattle, Washington)
			</li>
			<li><span><strong><?php echo $interval006->days . " days ago"; ?>: </strong></span>studiolist.org now online (redirect from studiolist.io active); Added all verified and visited studios in Morocco, Portugal, Spain and US (NYC, Philadelphia, Baltimore, Atlanta, Nashville, Chicago, Denver); added to link to Mastodon; turned every mention into studiolist.org to make it brand-consistent; added telegram to footer; added 120-day journey to story
			</li>
			<li><span><strong><?php echo $interval005->days . " days ago"; ?>: </strong></span>studiolist goes open-source, bought studiolist.org for 240 US dollars, a new /activity page, and some minor on the /about page
			</li>
			<li><span><strong><?php echo $interval004->days . " days ago"; ?>: </strong></span>Added Moroccan studios who agreed to be listed here, some amendments on the frontpage copytext
			</li>
			<li><span><strong><?php echo $interval003->days . " days ago"; ?>: </strong></span>Slimmer home page, new about page, new contact page</li>
			<li><span><strong><?php echo $interval002->days . " days ago"; ?>: </strong></span>Started 120-day challenge. If I can’t validate studiolist.io within these 4 months, the project dies. See me document it on <a href="https://twitter.com/hashtag/startupdiarystudiolist?src=hash">Twitter</a> and <a href="https://www.instagram.com/explore/tags/startupdiarystudiolist/">Instagram</a>. Hashtag is #startupdiarystudiolist.</li>
			<li><span><strong><?php echo $interval001->days . " days ago"; ?>: </strong></span>Added new copytext, a teaser for upcoming interviews and the paragraph of using existing studio infrastructure</li>
			<li><span><strong><?php echo $interval000->days . " days ago"; ?>: </strong></span>Launched on a Friday 13th, wish me luck <em>haha</em></li>
		</ul>

		<h3>Statistics</h3>

		<ul>
		<li>Currently, 62 studios on 3 continents, 4 countries, 10 federal states and 17 cities</li>
		</ul>
		<!-- </section> -->

<?php include '../footer.php'; ?>