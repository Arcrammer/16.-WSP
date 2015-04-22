<!DOCTYPE html>
<html>
    <head>
        <title>Pararmani</title>
        <!-- Metadata -->
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    		<meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Links -->
            <link rel="shortcut icon" href="Assets/Images/Logo.png" />
            <link rel="stylesheet" href="Assets/Stylesheets/Normalize.css" />
            <link rel="stylesheet" href="Assets/Stylesheets/Main.css" />
            <link rel="stylesheet" href="Assets/Stylesheets/Search.css" />
            <link rel="stylesheet" href="Assets/Foundation/css/foundation.min.css" />
    </head>
    <body>
        <div class="container">
            <?php include "Assets/Inclusions/Navigation.php" ?>
            <div class="search-bar row">
                <form method="post">
                    <input type="text" id="propertySearch" placeholder="Search Properties..." />
                    <input type="submit" class="button" value="Find it!" />
                </form>
            </div> <!-- .search-bar .row -->
            <div class="slidesies">
                <ul>
                    <li>
                        <div>
                            <h1>More Listings</h1>
                            <p>Homes for sale? We also have for sale by owner homes, Coming Soon listings, foreclosures, rentals, and other exclusive listings you won't find anywhere else.</p>
                            <img src="Assets/Images/95CharlesStreet.jpg" alt="95CharlesStreet.jpg" />
                        </div>
                    </li>
                    <li>
                        <div>
                            <h1>Pre-approval</h1>
                            <p>Get a pre-approval letter from a participating lender in minutes through Zillow's website or the Zillow Mortgages app.</p>
                            <img src="Assets/Images/135PerryStreet.jpg" alt="135PerryStreet.jpg" />
                        </div>
                    </li>
                    <li>
                        <div>
                            <h1>Home Estimations</h1>
                            <p>Use Pararmani's popular Pestimate as a starting point for a home's value and couple it with the Pestimate forecast to see its future value.</p>
                            <img src="Assets/Images/Gatchina.jpg" alt="Gatchina.jpg" />
                        </div>
                    </li>
                    <li>
                        <div>
                            <h1>Something New</h1>
                            <p>Are you looking for the newest apartments around the city? We contact local developments before they even open their doors in order to bring you the most accurate and useful listings.</p>
                            <img src="Assets/Images/432ParkAvenue.jpg" alt="432ParkAvenue.jpg" />
                        </div>
                    </li>
                    <li>
                        <div>
                            <h1>It's so ugly!</h1>
                            <p>Designing a stunning flat can be frustrating. Let our worldwide known designers do it for you! They love it, and you will, too.</p>
                            <img src="Assets/Images/FloorCielingWindows.png" alt="FloorCielingWindows.png" />
                        </div>
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
                    $(document).foundation();
                        $(".slidesies").unslider({
                            keys: true,
                            fluid: true
                        });
                    
                    /* Document */
                    document.getElementById("propertySearch").focus();
                });
            </script>
    </body>
</html>