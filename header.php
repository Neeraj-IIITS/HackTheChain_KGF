<?php
if (!isset($_SESSION)) {session_start();}
error_reporting(E_ALL&~E_NOTICE&~E_STRICT&~E_WARNING);
$dt = date("Y-m-d");
$rupeesymbol = "₹";
include "dbconnection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CollegeFrenzy - The Hub of College Events and Competitions.</title>
    <meta content=""
        name="Event and Competition Management System helps the Students, Colleges, and Companies by providing related information in the website.">
    <meta content="The Hub of College Events and Competitions, CollegeFrenzy" name="keywords">
    <link href="assets/img/dp_pic.jpg" rel="icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body>

    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center">
                <div class="logo mr-auto">
                    <h1 class="text-light">
                        <a href="index.php">
                            <span>CamFrenzy</span>
                        </a>
                    </h1>
                </div>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>

                        <li class="<?php
if (basename($_SERVER['PHP_SELF']) == "index.php") {
    echo ' active ';
}
?>">
                            <a href="index.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </li>

                        <!-- For Records -->

                        <li class="drop-down"><a
                                href="#">Records&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <ul>
                                <li><a href="displayarticles.php?articletype=Events">Events</a></li>
                                <li><a href="displaynews.php?articletype=competitions">Competitions</a></li>
                            </ul>
                        </li>

                        <?php
if (isset($_SESSION['customerid'])) {
    ?>
                        <li class="drop-down <?php
if (basename($_SERVER['PHP_SELF']) == "customerpanel.php" || basename($_SERVER['PHP_SELF']) == "customerUpdate.php" || basename($_SERVER['PHP_SELF']) == "Customerchngpassword.php" || basename($_SERVER['PHP_SELF']) == "viewcstpurchasereport.php" || basename($_SERVER['PHP_SELF']) == "viewpurchaserequest.php" || basename($_SERVER['PHP_SELF']) == "viewcstpurchaseorder.php" || basename($_SERVER['PHP_SELF']) == "viewpurchasereport.php") {
        echo ' active ';
    }
    ?>">
                            <a href="">My Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <ul>
                                <li><a href="customerpanel.php">Student Panel</a></li>
                                <li><a href="viewcstpurchasereport.php">Program - Registration Report</a></li>

                                <li><a href="customerUpdate.php">Update Profile</a></li>
                                <li><a href="Customerchngpassword.php">Change Password</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                        <?php
} else if (isset($_SESSION['sellerid'])) {
    ?>
                        <li class="drop-down <?php
if (basename($_SERVER['PHP_SELF']) == "viewworkerrequest.php" || basename($_SERVER['PHP_SELF']) == "viewcstpurchasereport.php" || basename($_SERVER['PHP_SELF']) == "viewpurchasereport.php" || basename($_SERVER['PHP_SELF']) == "viewpurchaseorder.php" || basename($_SERVER['PHP_SELF']) == "sellerpanelchart.php" || basename($_SERVER['PHP_SELF']) == "Product.php" || basename($_SERVER['PHP_SELF']) == "viewProduct.php" || basename($_SERVER['PHP_SELF']) == "sellerprofile.php" || basename($_SERVER['PHP_SELF']) == "Sellerchngpassword.php" || basename($_SERVER['PHP_SELF']) == "sellerpanel.php") {
        echo ' active ';
    }
    ?>">
                            <a href="">My Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <ul>
                                <li><a href="sellerpanel.php">Company</a></li>

                                <li class="drop-down"><a href="#">My Profile</a>
                                    <ul>
                                        <li><a href="sellerprofile.php">Update Profile</a></li>
                                        <li><a href="Sellerchngpassword.php">Change Password</a></li>
                                    </ul>
                                </li>

                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>

                        <?php
} else if (isset($_SESSION['adminid'])) {
    ?>
                        <li class="drop-down <?php
if (basename($_SERVER['PHP_SELF']) == "adminpanel.php" || basename($_SERVER['PHP_SELF']) == "customerUpdate.php" || basename($_SERVER['PHP_SELF']) == "Customerchngpassword.php" || basename($_SERVER['PHP_SELF']) == "adminpanel.php" || basename($_SERVER['PHP_SELF']) == "customerUpdate.php" || basename($_SERVER['PHP_SELF']) == "Customerchngpassword.php" || basename($_SERVER['PHP_SELF']) == "viewcustomerReg.php" || basename($_SERVER['PHP_SELF']) == "viewadminpurchasereport.php" || basename($_SERVER['PHP_SELF']) == "viewadminpurchaserequest.php" || basename($_SERVER['PHP_SELF']) == "viewpurchasereport.php" || basename($_SERVER['PHP_SELF']) == "admin.php" || basename($_SERVER['PHP_SELF']) == "viewadmin.php" || basename($_SERVER['PHP_SELF']) == "chngadminpassword.php" || basename($_SERVER['PHP_SELF']) == "city.php" || basename($_SERVER['PHP_SELF']) == "viewcity.php" || basename($_SERVER['PHP_SELF']) == "state.php" || basename($_SERVER['PHP_SELF']) == "viewstate.php" || basename($_SERVER['PHP_SELF']) == "country.php" || basename($_SERVER['PHP_SELF']) == "viewcountry.php" || basename($_SERVER['PHP_SELF']) == "category.php" || basename($_SERVER['PHP_SELF']) == "viewcategory.php" || basename($_SERVER['PHP_SELF']) == "Produce.php" || basename($_SERVER['PHP_SELF']) == "viewProduce.php" || basename($_SERVER['PHP_SELF']) == "variety.php" || basename($_SERVER['PHP_SELF']) == "viewvariety.php" || basename($_SERVER['PHP_SELF']) == "sellingproduce.php" || basename($_SERVER['PHP_SELF']) == "viewSellingProduce.php" || basename($_SERVER['PHP_SELF']) == "viewseller.php" || basename($_SERVER['PHP_SELF']) == "viewworker.php" || basename($_SERVER['PHP_SELF']) == "viewworkerrequest.php" || basename($_SERVER['PHP_SELF']) == "sellingproduct.php" || basename($_SERVER['PHP_SELF']) == "viewsellingproduct.php" || basename($_SERVER['PHP_SELF']) == "article.php" || basename($_SERVER['PHP_SELF']) == "viewarticle.php") {
        echo ' active ';
    }
    ?>">
                            <a href="">My Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <ul>
                                <li><a href="adminpanel.php">Admin Panel</a></li>

                                <li class="drop-down"><a href="#">Report</a>
                                    <ul>
                                        <li><a href="viewcustomerReg.php">Student Account Report</a></li>
                                        <li><a href="viewseller.php">Company Account Report</a></li>
                                </li>
                            </ul>
                        </li>

                        <li class="drop-down"><a href="#">General Settings</a>
                            <ul>
                                <li><a href="admin.php">Add Admin</a></li>
                                <li><a href="viewadmin.php">View Admin</a></li>
                                <li><a href="chngadminpassword.php">Change My Password</a></li>
                                <li><a href="city.php">Add City</a></li>
                                <li><a href="viewcity.php">View City</a></li>
                                <li><a href="state.php">Add State</a></li>
                                <li><a href="viewstate.php">View State</a></li>
                                <li><a href="country.php">Add Country</a></li>
                                <li><a href="viewcountry.php">View Country</a></li>
                            </ul>
                        </li>

                        <li class="drop-down"><a href="#">Record Settings</a>
                            <ul>
                                <li><a href="article.php">Add Record</a></li>
                                <li><a href="viewarticle.php">View Record</a></li>
                            </ul>
                        </li>

                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                    </li>
                    <?php
} else
{
    ?>
                    <li class="drop-down"><a href="">My
                            Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <ul>
                            <li><a href="customerreglogin.php">As Student</a></li>
                            <li><a href="farmerreglogin.php">As Company</a></li>
                            <li><a href="adminloginpanel.php">As College</a></li>
                        </ul>
                    </li>
                    <?php
}
?>
                    <li><a href="contact.php">Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    </ul>
                </nav>
            </div>
    </header>