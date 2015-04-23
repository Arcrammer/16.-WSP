<!DOCTYPE html>
<html>
  <head>
    <title>Pararmani / Support</title>
    <!-- Metadata -->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Links -->
      <link rel="shortcut icon" href="Assets/Images/Logo.png" />
      <link rel="stylesheet" href="Assets/Stylesheets/Normalize.css" />
      <link rel="stylesheet" href="Assets/Bootstrap/css/bootstrap.min.css" />
      <link rel="stylesheet" href="Assets/Bootstrap/css/bootstrap-theme.min.css" />
      <link rel="stylesheet" href="Assets/Stylesheets/Main.css" />
  </head>
  <body>
    <div class="container">
      <?php include "Assets/Inclusions/Navigation.php" ?>
      <div class="faq-panels">
        <div>
          <h4>The Basics</h4>
          <ul>
          <li><a>Creating an Account &raquo;</a></li>
          <li><a>Searching Homes &raquo;</a></li>
          <li><a>Adding a Listing &raquo;</a></li>
          </ul>
        </div>
        <div>
          <h4>Advanced</h4>
          <ul>
            <li><a>Flag a Listing or User &raquo;</a></li>
            <li><a>Change Meet-up &raquo;</a></li>
            <li><a>Using the <em><strong>History</strong></em> feature &raquo;</a></li>
            <li><a>Pararmani for iOS &raquo;</a></li>
            <li><a>Protect Your Account &raquo;</a></li>
            <li><a>Terms of Service &raquo;</a></li>
            <li><a>Abuse &raquo;</a></li>
          </ul>
        </div>
        <div>
          <h4>Troubleshooting</h4>
          <ul>
            <li><a>I've lost my password. &raquo;</a></li>
            <li><a>My account was hacked. &raquo;</a></li>
            <li><a>My account was suspended. &raquo;</a></li>
            <li><a>I can't confirm my email. &raquo;</a></li>
            <li><a>I'd like to call Pararmani. &raquo;</a></li>
          </ul>
        </div>
      </div> <!-- .faq-panels -->
    </div> <!-- .container -->
    <!-- Scripts -->
    <?php include "Assets/Inclusions/Site-wide Scripts.php" ?>
    <script>
      $(document).ready(function () {
        /* Frameworks & Plug-ins */
        $(document).foundation();
        
        $("#hide-it").css("display","none");
      });
    </script>
  </body>
</html>