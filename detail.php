<!DOCTYPE html>
<html>
  <head>
    <title>Pararmani / Detail</title>
    <!-- Metadata -->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
      <div class="detail">
        <h4 id="name">Loading...</h4>
        <h6 id="status">Loading...</h6>
        <p><img src="#" id="image" alt="Loading..." /></p>
        <p id="desc"></p>
      </div> <!-- .detail -->
      <a href="research.php" class="button">&laquo; Back</a>
    </div> <!-- .container -->
    <!-- Scripts -->
    <?php include "Assets/Inclusions/Site-wide Scripts.php" ?>
    <script>
      $(document).ready(function () {
        $("#hide-it").css("display","none");
        var dataForBubbleNamed = window.location.href.split("=")[1];
        switch (dataForBubbleNamed) {
          case "432+Park+Avenue":
            $("#name").text("432 Park Avenue");
            $("#status").text("Under Construction");
            $("#image").attr({
              "src":"Assets/Images/432ParkAvenue.jpg",
              "alt":"432ParkAvenue.jpg"
            });
            $("#desc").text("432 Park Avenue is a supertall residential project by CIM Group in midtown Manhattan in New York City with 104 condominium apartments. Originally proposed to be 1,300 feet in 2011, the construction began in 2012 and is scheduled to complete in 2015.");
            break;
          case "Gatchina":
            $("#name").text("Gatchina");
            $("#status").text("Sold");
            $("#image").attr({
              "src":"Assets/Images/GramercyPark.png",
              "alt":"GramercyPark.png"
            });
            $("#desc").text("Rare spectacular townhouse-like quadruplex, four floors in a 38' wide boutique West Village condo building. Located on Charles Street in the West Village, off quintessentially colorful Bleecker. There are only two other owners in this building, offering the three owners treasured privacy.");
            break;
          case "Floor+to+Ceiling+Windows":
            $("#name").text("Floor to Ceiling Windows");
            $("#status").text("Sold");
            $("#image").attr({
              "src":"Assets/Images/FloorCielingWindows.png",
              "alt":"FloorCielingWindows.png"
            });
            $("#desc").text("This residence was sold recently with three bedrooms, two baths, and a large eat-in kitchen, floor-to-ceiling windows throughout, and a large balcony for overlooking the city.");
            break;
          case "Gramercy+Park+Flat":
            $("#name").text("Gramercy Park Flat");
            $("#status").text("Sold");
            $("#image").attr({
              "src":"Assets/Images/GramercyPark.png",
              "alt":"GramercyPark.png"
            });
            $("#desc").text("Rare spectacular townhouse-like quadruplex, four floors in a 38' wide boutique West Village condo building. Located on Charles Street in the West Village, off quintessentially colorful Bleecker. There are only two other owners in this building, offering the three owners treasured privacy.");
            break;
          case "Never+let+a+girl+cook+in+your+kitchen":
            $("#name").text("Never let a girl cook in your kitchen");
            $("#status").text("Sold");
            $("#image").attr({
              "src":"Assets/Images/Kitchen.png",
              "alt":"Kitchen.png"
            });
            $("#desc").text("Rare spectacular townhouse-like quadruplex, four floors in a 38' wide boutique West Village condo building. Located on Charles Street in the West Village, off quintessentially colorful Bleecker. There are only two other owners in this building, offering the three owners treasured privacy.");
            break;
          case "Not+135+Perry+Street":
            $("#name").text("Not 135 Perry Street");
            $("#status").text("Sold");
            $("#image").attr({
              "src":"Assets/Images/UglyChair.png",
              "alt":"UglyChair.png"
            });
            $("#desc").text("Not nestled on the quiet and tranquil cobblestone portion of tree-lined Perry Street, this elegant two bedroom home captures a timeless pre-war aesthetic in the heart of the West Village.");
            break;
          case "135+Perry+Street":
            $("#name").text("135 Perry Street");
            $("#status").text("Sold");
            $("#image").attr({
              "src":"Assets/Images/135PerryStreet.jpg",
              "alt":"135PerryStreet.jpg"
            });
            $("#desc").text("Actually nestled on the quiet and tranquil cobblestone portion of tree-lined Perry Street, this elegant two bedroom home captures a timeless pre-war aesthetic in the heart of the West Village.");
            break;
          case "95+Charles+Street":
            $("#name").text("95 Charles Street");
            $("#status").text("Sold");
            $("#image").attr({
              "src":"Assets/Images/95CharlesStreet.jpg",
              "alt":"95CharlesStreet.jpg"
            });
            $("#desc").text("Rare spectacular townhouse-like quadruplex, four floors in a 38' wide boutique West Village condo building. Located on Charles Street in the West Village, off quintessentially colorful Bleecker. There are only two other owners in this building, offering the three owners treasured privacy.");
            break;
        }
      });
    </script>
  </body>
</html>