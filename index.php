<!DOCTYPE html>
<html>
  <head>
    <title>Pararmani</title>
    <!-- Metadata -->
      <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
      <meta content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" id="viewport" name="viewport">
    <!-- Links -->
      <link rel="shortcut icon" href="Assets/Images/Logo.png">
      <link rel="stylesheet" href="Assets/Stylesheets/Normalize.css">
      <link rel="stylesheet" href="Assets/Bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="Assets/Bootstrap/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="Assets/Stylesheets/Main.css">
  </head>
  <body>
    <div class="container">
      <?php include "Assets/Inclusions/Navigation.php" ?>
      <div class="search-bar row">
        <form method="post" id="property-search">
          <input placeholder="Search Properties..." type="text" id="search-bar">
          <input class="button mint-button" type="submit" value="Find it!">
        </form>
      </div> <!-- .search-bar .row -->
      <div class="slidesies">
        <ul>
          <li>
            <h1>More Listings</h1>
            <p>Homes for sale? We also have for sale by owner homes, Coming Soon listings, foreclosures, rentals, and other exclusive listings you won't find anywhere else.</p>
            <img alt="95CharlesStreet.jpg" src="Assets/Images/95CharlesStreet.jpg">
          </li>
          <li>
            <h1>Pre-approval</h1>
            <p>Get a pre-approval letter from a participating lender in minutes through Zillow's website or the Zillow Mortgages app.</p>
            <img alt="135PerryStreet.jpg" src="Assets/Images/135PerryStreet.jpg">
          </li>
          <li>
            <h1>Home Estimations</h1>
            <p>Use Pararmani's popular Pestimate as a starting point for a home's value and couple it with the Pestimate forecast to see its future value.</p>
            <img alt="Gatchina.jpg" src="Assets/Images/Gatchina.jpg">
          </li>
          <li>
            <h1>Something New</h1>
            <p>Are you looking for the newest apartments around the city? We contact local developments before they even open their doors in order to bring you the most accurate and useful listings.</p>
            <img alt="432ParkAvenue.jpg" src="Assets/Images/432ParkAvenue.jpg">
          </li>
          <li>
            <h1>It's so ugly!</h1>
            <p>Designing a stunning flat can be frustrating. Let our worldwide known designers do it for you! They love it, and you will, too.</p>
            <img alt="FloorCielingWindows.png" src="Assets/Images/FloorCielingWindows.png">
          </li>
        </ul>
      </div> <!-- .slidesies -->
    </div> <!-- .container -->
    <!-- Scripts -->
    <?php include "Assets/Inclusions/Site-wide Scripts.php" ?>
    <script src="Assets/Scripts/unslider.min.js"></script>
    <script>
      $(document).ready(function () {
        /* Frameworks & Plug-ins */
        $(".slidesies").unslider({
          keys: true,
          fluid: true
        });
        
        /* Document */
        document.getElementById("search-bar").focus();
        $("#search-bar").keydown(function (searchBarKeyDown) {
          var textField = searchBarKeyDown.target;
          $(textField).css("border-color","#73e6bf");
        });
        $("#search-bar").keyup(function (searchBarKeyUp) {
          var textField = searchBarKeyUp.target;
          $(textField).css("border-color","#eaeaea");
        });
      });
    </script>
  </body>
</html>