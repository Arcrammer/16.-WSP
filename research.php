<!DOCTYPE html>
<html>
    <head>
        <title>Pararmani / History</title>
        <!-- Metadata -->
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    		<meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Links -->
            <link rel="stylesheet" href="Assets/Stylesheets/Normalize.css" />
            <link rel="stylesheet" href="Assets/Stylesheets/Main.css" />
            <link rel="stylesheet" href="Assets/Stylesheets/Search.css" />
            <link rel="stylesheet" href="Assets/Stylesheets/History.css" />
            <link rel="stylesheet" href="Assets/Foundation/css/foundation.min.css" />
    </head>
    <body>
        <div class="container">
            <?php include "Assets/Inclusions/Navigation.php" ?>
            <div class="search-bar row">
                <form method="post">
                    <input type="text" placeholder="Search Properties..." />
                    <input type="submit" class="button" value="Find it!" />
                </form>
            </div> <!-- .search-bar .row -->
            <div class="bubblies">
                <div class="bubble">
                    <a href="detail.php?for=432+Park+Avenue">
                        <h4>432 Park Avenue</h4>
                        <h6>Under Construction</h6>
                        <p><img src="Assets/Images/432ParkAvenue.jpg" alt="432ParkAvenue.jpg" /></p>
                        <p>432 Park Avenue is a supertall residential project by CIM Group in midtown Manhattan in New York City with 104 condominium apartments. Originally proposed to be 1,300 feet in 2011, the construction began in 2012 and is scheduled to complete in 2015.</p>
                    </a>
                </div> <!-- .bubble -->
                <div class="bubble">
                    <a href="detail.php?for=Gatchina">
                        <h4>Gatchina</h4>
                        <h6>Unknown</h6>
                        <p><img src="Assets/Images/Gatchina.jpg" alt="Gatchina.jpg" /></p>
                        <p>Live in a Full-Service Luxury Condo- GOLD LEED Certified "green" building with 25 year tax abatement- best priced Harlem resale Mint condition two beds, two baths split layout with huge dining /living area. Fully equipped gourmet kitchen with separate large pantry.</p>
                    </a>
                </div> <!-- .bubble -->
                <div class="bubble">
                    <a href="detail.php?for=Floor+to+Ceiling+Windows">
                        <h4>Floor to Ceiling Windows</h4>
                        <h6>Sold</h6>
                        <p><img src="Assets/Images/FloorCielingWindows.png" alt="FloorCielingWindows.png" /></p>
                        <p>This residence was sold recently with three bedrooms, two baths, and a large eat-in kitchen, floor-to-ceiling windows throughout, and a large balcony for overlooking the city.</p>
                    </a>
                </div> <!-- .bubble -->
                <div class="bubble">
                    <a href="detail.php?for=Gramercy+Park+Flat">
                        <h4>Gramercy Park Flat</h4>
                        <h6>Sold</h6>
                        <p><img src="Assets/Images/GramercyPark.png" alt="GramercyPark.png" /></p>
                        <p>Rare spectacular townhouse-like quadruplex, four floors in a 38' wide boutique West Village condo building. Located on Charles Street in the West Village, off quintessentially colorful Bleecker. There are only two other owners in this building, offering the three owners treasured privacy.</p>
                    </a>
                </div> <!-- .bubble -->
                <div class="bubble">
                    <a href="detail.php?for=Never+let+a+girl+cook+in+your+kitchen">
                        <h4>Never let a girl cook in your kitchen</h4>
                        <h6>Sold</h6>
                        <p><img src="Assets/Images/Kitchen.png" alt="Kitchen.png" /></p>
                        <p>A synchronicity of flooding light, voluminous space and luxurious finishes, Apartment 1D at 155 Perry Street is an architecturally-distinctive one-bedroom duplex in the prime West Village.</p>
                    </a>
                </div> <!-- .bubble -->
                <div class="bubble">
                    <a href="detail.php?for=Not+135+Perry+Street">
                        <h4>Not 135 Perry Street</h4>
                        <h6>Sold</h6>
                        <p><img src="Assets/Images/UglyChair.png" alt="UglyChair.png" /></p>
                        <p>Not nestled on the quiet and tranquil cobblestone portion of tree-lined Perry Street, this elegant two bedroom home captures a timeless pre-war aesthetic in the heart of the West Village.</p>
                    </a>
                </div> <!-- .bubble -->
                <div class="bubble">
                    <a href="detail.php?for=135+Perry+Street">
                        <h4>135 Perry Street</h4>
                        <h6>Sold</h6>
                        <p><img src="Assets/Images/135PerryStreet.jpg" alt="135PerryStreet.jpg" /></p>
                        <p>Actually nestled on the quiet and tranquil cobblestone portion of tree-lined Perry Street, this elegant two bedroom home captures a timeless pre-war aesthetic in the heart of the West Village.</p>
                    </a>
                </div> <!-- .bubble -->
                <div class="bubble">
                    <a href="detail.php?for=95+Charles+Street">
                        <h4>95 Charles Street</h4>
                        <h6>Sold</h6>
                        <p><img src="Assets/Images/95CharlesStreet.jpg" alt="95CharlesStreet.jpg" /></p>
                        <p>Rare spectacular townhouse-like quadruplex, four floors in a 38' wide boutique West Village condo building. Located on Charles Street in the West Village, off quintessentially colorful Bleecker. There are only two other owners in this building, offering the three owners treasured privacy.</p>
                    </a>
                </div> <!-- .bubble -->
            </div> <!-- .bubblies -->
            <form id="detailForBubble" action="detail.php">
                <input type="hidden" name="for" />
            </form>
        </div> <!-- .container -->
        <!-- Scripts -->
            <?php include "Assets/Inclusions/Site-wide Scripts.php" ?>
            <script>
                $(document).foundation();
            </script>
    </body>
</html>