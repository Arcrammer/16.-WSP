<!DOCTYPE html>
<html>
    <head>
        <title>Pararmani / Create</title>
        <!-- Metadata -->
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    		<meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Links -->
            <link rel="shortcut icon" href="Assets/Images/Logo.png" />
            <link rel="stylesheet" href="Assets/Stylesheets/Normalize.css" />
            <link rel="stylesheet" href="Assets/Foundation/css/foundation.min.css" />
            <link rel="stylesheet" href="Assets/Stylesheets/Main.css" />
    </head>
    <body>
        <div class="container">
            <?php include "Assets/Inclusions/Navigation.php" ?>
            <div class="row">
                <form method="POST">
                    <div class="medium-6 large-4 columns">
                        <div class="fields">
                            <div class="row">
                                <div class="small-12 columns">
                                    <h4 class="form-section-title">The Property:</h4>
                                </div> <!-- .small-12 .columns -->
                            </div> <!-- .row -->
                            <input type="text" id="listing_name" name="listing_name" placeholder="Listing Name" />
                            <div class="row">
                                <div class="small-12 columns">
                                    <input type="text" id="listing_street" name="listing_street" placeholder="Street" />
                                </div> <!-- .small-12 .columns -->
                            </div> <!-- .row -->
                            <div class="row">
                                <div class="small-12 columns">
                                    <input type="text" id="listing_city" name="listing_city" placeholder="City" />
                                </div> <!-- .small-12 .columns -->
                            </div> <!-- .row -->
                            <div class="row">
                                <div class="small-7 columns">
                                    <select name="listing_state">
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA" selected>California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div> <!-- .small-7 .columns -->
                                <div class="small-5 columns">
                                    <input type="text" id="listing_ZIP" name="listing_ZIP" placeholder="ZIP" />
                                </div> <!-- .small-5 .columns -->
                            </div> <!-- .row -->
                        </div> <!-- .fields -->
                    </div> <!-- .small-4 .columns -->
                    <div class="medium-6 large-4 columns">
                        <div class="fields">
                            <div class="row">
                                <div class="small-12 columns">
                                    <h4 class="form-section-title">You:</h4>
                                </div> <!-- .small-12 .columns -->
                            </div> <!-- .row -->
                            <input type="text" id="first_name" name="first_name" placeholder="Full Name" />
                            <div class="row">
                                <div class="small-5 columns">
                                    <input type="number" id="age" placeholder="Age" value="19" />
                                </div> <!-- .small-5 .columns -->
                                <div class="small-7 columns">
                                    <input type="text" id="city" placeholder="City" />
                                </div> <!--  .small-7 .columns -->
                            </div> <!-- .row -->
                        </div> <!-- .fields -->
                    </div> <!-- .small-4 .columns -->
                    <div class="medium-12 large-4 columns">
                        <div class="fields">
                            <div class="row">
                                <div class="small-12 columns">
                                    <h4 class="form-section-title">Meet-up:</h4>
                                </div> <!-- .small-12 .columns -->
                            </div> <!-- .row -->
                            <div class="row">
                                <div class="small-12 columns">
                                    <input type="text" id="meet-up_street" name="meet-up_street" placeholder="Street" />
                                </div> <!-- .small-12 .columns -->
                            </div> <!-- .row -->
                            <div class="row">
                                <div class="small-12 columns">
                                    <input type="text" id="meet-up_city" name="meet-up_city" placeholder="City" />
                                </div> <!-- .small-12 .columns -->
                            </div> <!-- .row -->
                            <div class="row">
                                <div class="small-7 columns">
                                    <select name="meet-up_state">
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA" selected>California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div> <!-- .small-7 .columns -->
                                <div class="small-5 columns">
                                    <input type="text" id="meet-up_ZIP" name="meet-up_ZIP" placeholder="ZIP" />
                                </div> <!-- .small-5 .columns -->
                            </div> <!-- .row -->
                            <div class="row">
                                <div class="small-12 columns">
                                    <input type="date" name="meet-up_date" />
                                </div> <!-- .small-12 .columns -->
                            </div> <!-- .row -->
                            <div class="row">
                                <div class="small-6 columns">
                                    <input type="time" name="meet-up_time" />
                                </div> <!-- .small-6 .columns -->
                                <div class="small-6 columns">
                                    <div class="small-6 columns">
                                        <label for="a">A.M.</label>
                                        <input type="radio" id="a" name="meet-up_meridian" value="yes" />
                                    </div>
                                    <div class="small-6 columns">
                                        <label for="p">P.M.</label>
                                        <input type="radio" id="p" name="meet-up_meridian" value="no" />
                                    </div>
                                </div> <!-- .small-6 .columns -->
                            </div> <!-- .row -->
                            <div class="row">
                                <div class="small-12 text-center columns">
                                    <input type="submit" class="button mint-button" value="Continue" />
                                </div> <!-- .small-12 .text-center .columns -->
                            </div> <!-- .row -->
                        </div> <!-- .fields -->
                    </div> <!-- .small-4 .columns -->
                </form>
            </div> <!-- .row -->
        </div> <!-- .container -->
        <!-- Scripts -->
            <?php include "Assets/Inclusions/Site-wide Scripts.php" ?>
            <script>
                $(document).foundation();
            </script>
    </body>
</html>