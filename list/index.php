<?php
  $filepath_germany_berlin = "../studios/studiolist-germany-berlin.csv";
  $filepath_morocco_agadir = "../studios/studiolist-morocco-agadir.csv";
  $filepath_morocco_casablanca = "../studios/studiolist-morocco-casablanca.csv";
  $filepath_morocco_rabat = "../studios/studiolist-morocco-rabat.csv";
  $filepath_portugal_lisbon = "../studios/studiolist-portugal-lisbon.csv";
  $filepath_spain_barcelona = "../studios/studiolist-spain-barcelona.csv";
  $filepath_spain_barcelona_no_ok = "../studios/-verified-no-ok/studiolist-spain-barcelona-no-ok.csv";
  $filepath_spain_madrid = "../studios/studiolist-spain-madrid.csv";
  $filepath_spain_madrid_no_ok = "../studios/-verified-no-ok/studiolist-spain-madrid-no-ok.csv";
  $filepath_usa_california_san_francisco = "../studios/studiolist-usa-california-san-francisco.csv";
  $filepath_usa_california_los_angeles = "../studios/studiolist-usa-california-los-angeles.csv";
  $filepath_usa_colorado_denver = "../studios/studiolist-usa-colorado-denver.csv";
  $filepath_usa_georgia_atlanta = "../studios/studiolist-usa-georgia-atlanta.csv";
  $filepath_usa_illinois_chicago = "../studios/studiolist-usa-illinois-chicago.csv";
  $filepath_usa_maryland_baltimore = "../studios/studiolist-usa-maryland-baltimore.csv"; 
  $filepath_usa_new_york_new_york_city = "../studios/studiolist-usa-new-york-new-york-city.csv";
  $filepath_usa_oregon_portland = "../studios/studiolist-usa-oregon-portland.csv";
  $filepath_usa_pennsylvania_philadelphia = "../studios/studiolist-usa-pennsylvania-philadelphia.csv";
  $filepath_usa_tennessee_nashville = "../studios/studiolist-usa-tennessee-nashville.csv";
  $filepath_usa_washington_seattle = "../studios/studiolist-usa-washington-seattle.csv";
  // $filepath_usa_texas_tornillo = "studios/studiolist-usa-texas-tornillo.csv";
  $filepath_uk_sheffield = "../studios/studiolist-uk-sheffield.csv";
  $filepath_uk_bath = "../studios/studiolist-uk-bath.csv";
  $filepath_uk_bristol = "../studios/studiolist-uk-bristol.csv";
  $filepath_uk_cardiff = "../studios/studiolist-uk-cardiff.csv";
  $filepath_uk_edinburgh = "../studios/studiolist-uk-edinburgh.csv";
  $filepath_uk_liverpool = "../studios/studiolist-uk-liverpool.csv";
  $filepath_uk_london = "../studios/studiolist-uk-london.csv";
  $filepath_uk_manchester = "../studios/studiolist-uk-manchester.csv";
  $filepath_uk_newcastle = "../studios/studiolist-uk-newcastle.csv";
  $filepath_uk_oxford = "../studios/studiolist-uk-oxford.csv";

  require '../functions.php';
  // $title = "studiolist.org - Find a voiceover studio";
  $title = "All verified voiceover recording studios - studiolist.org";
  include '../header.php';
?>

<section>

    <h2>Overview: All verified studios</h2>

    <h3>Morocco (8)</h3>

    <ul>
      <li><a href="#morocco-agadir">Morocco › Agadir</a></li>
      <li><a href="#morocco-casablanca">Morocco › Casablanca</a></li>
      <li><a href="#morocco-rabat">Morocco › Rabat</a></li>
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

    <h3>UK (27)</h3>

    <ul>
      <li><a href="#uk-bath">UK › Bath</a></li>
      <li><a href="#uk-bristol">UK › Bristol</a></li>
      <li><a href="#uk-cardiff">UK › Cardiff</a></li>
      <li><a href="#uk-edinburgh">UK › Edinburgh</a></li>
      <li><a href="#uk-liverpool">UK › Liverpool</a></li>
      <li><a href="#uk-london">UK › London</a></li>
      <li><a href="#uk-manchester">UK › Manchester</a></li>
      <li><a href="#uk-newcastle">UK › Newcastle</a></li>
      <li><a href="#uk-oxford">UK › Oxford</a></li>
      <li><a href="#uk-sheffield">UK › Sheffield</a></li>
    </ul>


    <h3>USA (42)</h3>

    <ul>
      <li><a href="#usa-california-los-angeles">USA › California › Los Angeles</a></li>
      <li><a href="#usa-california-san-francisco">USA › California › San Francisco</a></li>
      <li><a href="#usa-colorado-denver">USA › Colorado › Denver</a></li>
      <li><a href="#usa-georgia-atlanta">USA › Georgia › Atlanta</a></li>
      <li><a href="#usa-illinois-chicago">USA › Illinois › Chicago</a></li>
      <li><a href="#usa-maryland-baltimore">USA › Maryland › Baltimore</a></li>
      <li><a href="#usa-new-york-new-york-city">USA › New York › New York City</a></li>
      <li><a href="#usa-oregon-portland">USA › Oregon › Portland</a></li>
      <li><a href="#usa-pennsylvania-philadelphia">USA › Pennsylvania › Philadelphia</a></li>
      <li><a href="#usa-tennessee-nashville">USA › Tennessee › Nashville</a></li>
      <li><a href="#usa-washington-seattle">USA › Washington › Seattle</a></li>
    </ul>

    <!-- <h3>USA</h3>

    <ul>
      <li><a href="#usa-texas-tornillo">USA › TX › Tornillo</a></li>
    </ul> -->

  </section>
  <section>

  <h2>The complete list of all verified studios</h2>

    <p><!-- There are more studios I verified already. After my travels I will add all verified studios. --> The current order of listing is alphabetical.</p>

    <!-- <h3 id="germany-berlin">Germany, Berlin</h3>
    <table sortable>
      <tr> -->
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <!-- <th scope="col"><?php getColumnName($filepath_germany_berlin, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_germany_berlin); ?>
    </table> -->

    <p><hr class="below-the-fold-subtle"></p>

    <h3 id="morocco-agadir">Morocco, Agadir (1)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_morocco_agadir, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_morocco_agadir); ?>
    </table>

    <h3 id="morocco-casablanca">Morocco, Casablanca (4)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_morocco_casablanca, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_morocco_casablanca); ?>
    </table>

    <h3 id="morocco-rabat">Morocco, Rabat (3)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_morocco_rabat, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_morocco_rabat); ?>
    </table>

    <p><hr class="below-the-fold-subtle"></p>

    <h3 id="portugal-lisbon">Portugal, Lisbon (4)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_portugal_lisbon, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_portugal_lisbon); ?>
    </table>

    <p><hr class="below-the-fold-subtle"></p>

    <h3 id="spain-barcelona">Spain, Barcelona (3)</h3>
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

    <p><hr class="below-the-fold-subtle"></p>

    <h3 id="uk-bath">UK, Bath (1)</h3>
    <table sortable>
      <tr>
       <th scope="col"><?php getColumnName($filepath_uk_bath, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_uk_bath); ?>
    </table>

    <p><hr class="below-the-fold-subtle"></p>

    <h3 id="uk-bristol">UK, Bristol (5)</h3>
    <table sortable>
      <tr>
       <th scope="col"><?php getColumnName($filepath_uk_bristol, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_uk_bristol); ?>
    </table>

    <h3 id="uk-cardiff">UK, Cardiff (1)</h3>
    <table sortable>
      <tr>
       <th scope="col"><?php getColumnName($filepath_uk_cardiff, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_uk_cardiff); ?>
    </table>

    <h3 id="uk-edinburgh">UK, Edinburgh (3)</h3>
    <table sortable>
      <tr>
       <th scope="col"><?php getColumnName($filepath_uk_edinburgh, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_uk_edinburgh); ?>
    </table>

    <h3 id="uk-liverpool">UK, Liverpool (1)</h3>
    <table sortable>
      <tr>
       <th scope="col"><?php getColumnName($filepath_uk_liverpool, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_uk_liverpool); ?>
    </table>

    <h3 id="uk-london">UK, London (6)</h3>
    <table sortable>
      <tr>
       <th scope="col"><?php getColumnName($filepath_uk_london, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_uk_london); ?>
    </table>

    <h3 id="uk-manchester">UK, Manchester (2)</h3>
    <table sortable>
      <tr>
       <th scope="col"><?php getColumnName($filepath_uk_manchester, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_uk_manchester); ?>
    </table>

    <h3 id="uk-newcastle">UK, Newcastle (3)</h3>
    <table sortable>
      <tr>
       <th scope="col"><?php getColumnName($filepath_uk_newcastle, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_uk_newcastle); ?>
    </table>

    <h3 id="uk-oxford">UK, Oxford (2)</h3>
    <table sortable>
      <tr>
       <th scope="col"><?php getColumnName($filepath_uk_oxford, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_uk_oxford); ?>
    </table>

    <h3 id="uk-sheffield">UK, Sheffield (3)</h3>
    <table sortable>
      <tr>
       <th scope="col"><?php getColumnName($filepath_uk_sheffield, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_uk_sheffield); ?>
    </table>

    <p><hr class="below-the-fold-subtle"></p>

    <h3 id="usa-california-los-angeles">USA, California, Los Angeles (3)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_usa_california_los_angeles, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_usa_california_los_angeles); ?>
    </table>

    <h3 id="usa-california-san-francisco">USA, California, San Francisco (3)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_usa_california_san_francisco, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_usa_california_san_francisco); ?>
    </table>

    <h3 id="usa-colorado-denver">USA, Colorado, Denver (1)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_usa_colorado_denver, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_usa_colorado_denver); ?>
    </table>

    <h3 id="usa-georgia-atlanta">USA, Georgia, Atlanta (2)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_usa_georgia_atlanta, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_usa_georgia_atlanta); ?>
    </table>

    <h3 id="usa-illinois-chicago">USA, Illinois, Chicago (3)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_usa_illinois_chicago, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_usa_illinois_chicago); ?>
    </table>

    <h3 id="usa-maryland-baltimore">USA, Maryland, Baltimore (2)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_usa_maryland_baltimore, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_usa_maryland_baltimore); ?>
    </table>

    <h3 id="usa-new-york-new-york-city">USA, New York, New York City (4)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_usa_new_york_new_york_city, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_usa_new_york_new_york_city); ?>
    </table>

    <h3 id="usa-oregon-portland">USA, Oregon, Portland (9)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_usa_oregon_portland, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_usa_oregon_portland); ?>
    </table>

    <h3 id="usa-pennsylvania-philadelphia">USA, Pennsylvania, Philadelphia (7)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_usa_pennsylvania_philadelphia, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_usa_pennsylvania_philadelphia); ?>
    </table>

    <h3 id="usa-tennessee-nashville">USA, Tennessee, Nashville (4)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_usa_tennessee_nashville, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_usa_tennessee_nashville); ?>
    </table>

    <h3 id="usa-washington-seattle">USA, Washington, Seattle (4)</h3>
    <table sortable>
      <tr>
       <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
       <th scope="col"><?php getColumnName($filepath_usa_washington_seattle, 0); ?></th>
      </tr>
      <?php buildHTMLTable($filepath_usa_washington_seattle); ?>
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
    <!-- </section> -->

  </section>

<?php include '../footer.php'; ?>