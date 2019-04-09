<?php
	$filepath_germany_berlin = "studios/studiolist-germany-berlin.csv";
	$filepath_morocco_agadir = "studios/studiolist-morocco-agadir.csv";
	$filepath_morocco_casablanca = "studios/studiolist-morocco-casablanca.csv";
	$filepath_morocco_rabat = "studios/studiolist-morocco-rabat.csv";
	$filepath_portugal_lisbon = "studios/studiolist-portugal-lisbon.csv";
	$filepath_spain_barcelona = "studios/studiolist-spain-barcelona.csv";
	$filepath_spain_barcelona_no_ok = "studios/-verified-no-ok/studiolist-spain-barcelona-no-ok.csv";
	$filepath_spain_madrid = "studios/studiolist-spain-madrid.csv";
	$filepath_spain_madrid_no_ok = "studios/-verified-no-ok/studiolist-spain-madrid-no-ok.csv";
	// $filepath_usa_texas_tornillo = "studios/studiolist-usa-texas-tornillo.csv";
	require 'functions.php';
	$title = "studiolist.org - Find a voiceover studio";
	include 'header.php';#
?>

	<h1>Find a voiceover studio</h1>
	<h2>Verified VO-ready recording studios</h2>

	<p>I verify the studios by meeting with the studio owner/manager and have a look at the recording booth and control room. So far I’ve connected to 20+ studios. <strong><a href="https://www.instagram.com/explore/tags/startupdiarystudiolist/">Live updates every day!</a></strong><!-- The studios are currently listed alphabetically. Click a studio to see all contact details (soon). --></p>

	<!-- <h3>Germany</h3>

	<ul>
		<li><a href="#germany-berlin">Germany › Berlin</a></li>
	</ul> -->

	<h3>Morocco (8)</h3>

	<ul>
		<li><a href="#morocco-agadir">Morocco › Agadir</a></li>
		<li><a href="#morocco-casablanca">Morocco › Casablanca</a></li>
		<li><a href="#morocco-casablanca">Morocco › Rabat</a></li>
	</ul>

	<h3>Portugal (4)</h3>

	<ul>
		<li><a href="#portugal-lisbon">Portugal › Lisbon</a></li>
	</ul>

	<h3>Spain (8)</h3>

	<ul>
		<li><a href="#spain-barcelona">Spain › Barcelona</a></li>
		<li><a href="#spain-madrid">Spain › Madrid</a></li>
	</ul>

	<!-- <h3>USA</h3>

	<ul>
		<li><a href="#usa-texas-tornillo">USA › TX › Tornillo</a></li>
	</ul> -->

	<p>There are more studios I verified already, e.g. in Portugal, Spain and the US. After my travels I will add all verified studios.</p>

	<!-- <h3 id="germany-berlin">Germany, Berlin</h3>
	<table sortable>
		<tr> -->
		 <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
		 <!-- <th scope="col"><?php getColumnName($filepath_germany_berlin, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_germany_berlin); ?>
	</table> -->

	<h3 id="morocco-agadir">Morocco, Agadir (1)</h3>
	<table sortable>
		<tr>
		 <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
		 <th scope="col"><?php getColumnName($filepath_morocco_agadir, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_morocco_agadir); ?>
	</table>

	<h3 id="morocco-agadir">Morocco, Casablanca (4)</h3>
	<table sortable>
		<tr>
		 <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
		 <th scope="col"><?php getColumnName($filepath_morocco_casablanca, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_morocco_casablanca); ?>
	</table>

	<h3 id="morocco-agadir">Morocco, Rabat (3)</h3>
	<table sortable>
		<tr>
		 <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
		 <th scope="col"><?php getColumnName($filepath_morocco_rabat, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_morocco_rabat); ?>
	</table>

	<h3 id="portugal-lisbon">Portugal, Lisbon (4)</h3>
	<table sortable>
		<tr>
		 <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
		 <th scope="col"><?php getColumnName($filepath_portugal_lisbon, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_portugal_lisbon); ?>
	</table>

	<h3 id="spain-madrid">Spain, Barcelona (3)</h3>
	<table sortable>
		<tr>
		 <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
		 <th scope="col"><?php getColumnName($filepath_spain_barcelona, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_spain_barcelona); ?>
	</table>

	<h3 id="spain-madrid">Spain, Madrid (5)</h3>
	<table sortable>
		<tr>
		 <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
		 <th scope="col"><?php getColumnName($filepath_spain_madrid, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_spain_madrid); ?>
	</table>

	<!-- <h3 id="usa-texas-tornillo">USA, TX, Tornillo</h3>
	<table>
		<tr>
		 <th scope="col"><?php  getColumnName($filepath_usa_texas_tornillo, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_usa_texas_tornillo); ?>
	</table> -->

	<!-- <h2>Visited recording studios</h2>

	<p>Some studios agreed to talk and meet me at their recording space but they didn’t give their final OK to be listed on studiolist.org. They are listed here. Until their final decision I’m listing them here.</p>

	<h3>Spain (3)</h3>

	<ul>
		<li><a href="#spain-barcelona-no-ok">Spain › Barcelona</a></li>
		<li><a href="#spain-madrid-no-ok">Spain › Madrid</a></li>
	</ul>

	<h3 id="spain-barcelona-no-ok">Spain, Barcelona</h3>
	<table sortable>
		<tr>
		 <th scope="col"><?php getColumnName($filepath_spain_barcelona_no_ok, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_spain_barcelona_no_ok); ?>
	</table>

	<h3 id="spain-madrid-no-ok">Spain, Madrid</h3>
	<table sortable>
		<tr>
		 <th scope="col"><?php getColumnName($filepath_spain_madrid_no_ok, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_spain_madrid_no_ok); ?>
	</table> -->


<?php include 'footer.php'; ?>