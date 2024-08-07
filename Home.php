<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome|PGLife</title>

    <?php
    include "includes/head_links.php";
    ?>

    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

<?php
    include "includes/header.php";
?>


    <div class="banner-container">
        <h2 class="white pb-4">Happiness per Square Foot</h2>

        <form action="property_list.php" id="search-form" method="get">
            <div class="input-group city-search">
                <input type="text" name="city" id="city" placeholder="Enter your city to search for PGs"
                    class="form-control input-city">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">Major Cities</h1>
        <div class="row">
            <div class="col-md-3  city-container">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="col-md-3  city-container">
                <a href="property_list.php?city=Bangalore">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="col-md-3  city-container">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="col-md-3  city-container">
                <a href="property_list.php?city=Kolkata">
                    <div class="city-card rounded-circle">
                        <img src="img/kolkata.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- modal -->
   
    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>
</body>

</html>