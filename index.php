<!DOCTYPE html>
<html>
    <head>
        <title>Pararmani</title>
        <!-- Metadata -->
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    		<meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Links -->
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
        </div> <!-- .container -->
        <!-- Scripts -->
            <?php include "Assets/Inclusions/Site-wide Scripts.php" ?>
            <script>
                $(document).foundation();
                document.getElementById("propertySearch").focus();
            </script>
    </body>
</html>