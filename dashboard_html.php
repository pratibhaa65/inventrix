<?php
include "dashboard.php";
$date = isset($_SESSION["date"]) ? date("d F, Y", strtotime($_SESSION["date"])) : "Unknown";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>INVENTRIX </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/Logo.svg" />
    <link rel="stylesheet" href="./css/backend-plugin.min.css">
    <link rel="stylesheet" href="./css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="./vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="./vendor/remixicon/fonts/remixicon.css">
</head>

<body class="  ">
    <div id="alert-container"></div>

    <!-- Wrapper Start -->
    <div class="wrapper">

        <div class="iq-sidebar  sidebar-default ">
            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <a href="./dashboard_html.php" class="header-logo">
                    <img src="./assets/Logoup.svg" class="logo-title light-logo ml-3" alt="logo">
                </a>
                <div class="iq-menu-bt-sidebar ml-0">
                    <i class="las la-bars wrapper-menu"></i>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active">
                            <a href="./dashboard_html.php" class="svg-icon">
                                <svg class="svg-icon" id="p-dash1" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                </svg>
                                <span class="ml-4">Dashboards</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#product" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash2" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span class="ml-4">Products</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline>
                                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="product" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                    <a href="./page-list-product.php">
                                        <i class="las la-minus"></i><span>List Product</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./page-add-product.php">
                                        <i class="las la-minus"></i><span>Add Product</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#sale" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash4" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                </svg>
                                <span class="ml-4">Sale</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline>
                                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="sale" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                    <a href="./page-list-sale.php">
                                        <i class="las la-minus"></i><span>List Sale</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./page-add-sale.php">
                                        <i class="las la-minus"></i><span>Add Sale</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#purchase" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash5" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>
                                <span class="ml-4">Purchases</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline>
                                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="purchase" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                    <a href="./page-list-purchase.php">
                                        <i class="las la-minus"></i><span>List Purchases</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="./page-add-purchase.php">
                                        <i class="las la-minus"></i><span>Add purchase</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#people" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash8" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span class="ml-4">Suppliers</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline>
                                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="people" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="./page-list-suppliers.php">
                                        <i class="las la-minus"></i><span>List Suppliers</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="./page-add-supplier.php">
                                        <i class="las la-minus"></i><span>Add Suppliers</span>
                                    </a>
                                </li>
                            </ul>
                        </li>



                    </ul>
                </nav>
                <div class="p-3"></div>
            </div>
        </div>
        <div class="iq-top-navbar bg-light">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                        <i class="ri-menu-line wrapper-menu"></i>
                        <a href="./dashboard_html.php" class="header-logo">
                            <img src="./assets/Logoup.svg" class="logo-title ml-3" alt="logo">

                        </a>
                    </div>
                    <div class="iq-search-bar device-search">
                        <form action="#" class="searchbox">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                            <input type="text" class="text search-input" placeholder="Search here...">
                        </form>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                <li class="nav-item nav-icon search-content">
                                    <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="iq-search-bar iq-sub-dropdown dropdown-menu"
                                        aria-labelledby="dropdownSearch">
                                        <form action="#" class="searchbox p-2">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="text search-input font-size-12"
                                                    placeholder="type here to search...">
                                                <a href="#" class="search-link"><i class="las la-search"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="bg-primary"></span>
                                    </a>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                        </svg>
                                        <span class="bg-primary "></span>
                                    </a>
                                </li>
                                <li class="nav-item nav-icon dropdown caption-content">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="./assets/images/user/1.png" class="img-fluid rounded" alt="user">
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 text-center">
                                                <div class="media-body profile-detail text-center">
                                                    <img src="./assets/images/page-img/abc.png" alt="profile-bg"
                                                        class="rounded-top img-fluid mb-4">
                                                    <img src="./assets/images/user/1.png" alt="profile-img"
                                                        class="rounded profile-img img-fluid avatar-70">
                                                </div>
                                                <div class="p-3">
                                                    <h5 class="mb-1"><?php echo htmlspecialchars($_SESSION["email"]); ?></h5>
                                                    <p class="mb-0">Since <?php echo htmlspecialchars($_SESSION["date"]); ?></p>
                                                    <div class="d-flex align-items-center justify-content-center mt-3">
                                                        <a href="logout.php" class="btn border">Log Out</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="content-page">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-6 mb-4 back">
                        <div class="mb-3 p-3 rounded">
                            <?php
                            $email = $_SESSION["email"];
                            $username = explode("@", $email)[0]; // Get the part before "@"
                            $username = preg_replace("/[0-9]/", "", $username); // Remove numbers

                            ?>
                            <h2 class="text-dark">Hi <?php echo htmlspecialchars($username); ?>,<br>Welcome Back!</h2>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4 ">
                        <div class="row mt-5">

                            <!-- FIrst Row -->
                            <div class="col-lg-6 col-md-6 mb-4 ">
                                <div class="card card-block card-stretch card-height card-1">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4 card-total-sale">
                                            <div
                                                class="icon iq-icon-box-2 align-items-center justify-content-center rounded-circle bg-success-light">
                                                <img src="./assets/Icon orders/icon_total.png " class="img-fluid"
                                                    alt="image">
                                            </div>
                                            <div>
                                                <p class="mb-2">Total Product</p>
                                                <h4><?php
                                                    echo $total_products;
                                                    ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card card-block card-stretch card-height card-2 ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4 card-total-sale">
                                            <div
                                                class="icon iq-icon-box-2 bg-success-light align-items-center justify-content-center rounded-circle">
                                                <img src="./assets/Icon orders/icon_neworder.png  " class="img-fluid"
                                                    alt="image">
                                            </div>
                                            <div>
                                                <p class="mb-2">Total Sale</p>
                                                <h4><?php
                                                    echo $total_sales;
                                                    ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Second Row -->
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card card-block card-stretch card-height card-3">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4 card-total-sale">
                                            <div
                                                class="icon iq-icon-box-2 bg-success-light align-items-center justify-content-center rounded-circle">
                                                <img src="./assets/Icon orders/icon_dispatched.png"
                                                    class="img-fluid" alt="image">
                                            </div>
                                            <div>
                                                <p class="mb-2">Total Purchase</p>
                                                <h4><?php
                                                    echo $total_purchases;
                                                    ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card card-block card-stretch card-height card-4">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4 card-total-sale">
                                            <div
                                                class="icon iq-icon-box-2 bg-success-light align-items-center justify-content-center rounded-circle">
                                                <img src="./assets/Icon orders/icon_ delivered.png"
                                                    class="img-fluid" alt="image">
                                            </div>
                                            <div>
                                                <p class="mb-2">Total Supplier</p>
                                                <h4><?php
                                                    echo $total_suppliers;
                                                    ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  d-flex align-items-stretch">
                    <div class="col-lg-8 d-flex flex-column">
                        <div class="card card-block card-stretch card-height  flex-grow-1">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Top Products </h4>
                                </div>
                                <div class="card-header-toolbar d-flex align-items-center">
                                    <button class="btn" style="background-color: #f0f0f0; color: #656464; font-weight: 500; font-size: 12px; border-radius: 6px; padding: 6px 12px; cursor: default;">
                                        This Month
                                    </button>
                                </div>

                            </div>
                            <?php
                            // Ensure the database connection is open
                            $conn = mysqli_connect("localhost", "root", "", "inventrix");
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            // SQL Query to get top products
                            $sql_top_products = "SELECT 
    p.ProductName,
    p.Quantity AS stock_quantity,
    p.Url,
    COALESCE(SUM(s.Quantity), 0) AS sales_quantity
FROM product p
LEFT JOIN sales s ON p.ProductCode = s.ProductCode
GROUP BY p.ProductCode
ORDER BY sales_quantity DESC
LIMIT 6";

                            $result_top_products = mysqli_query($conn, $sql_top_products);

                            // Check if the query was successful
                            if (!$result_top_products) {
                                die("Query failed:" . mysqli_error($conn));
                            }
                            ?>

                            <div class="card-body">
                                <ul class="list-unstyled row top-product mb-0">
                                    <?php while ($row = mysqli_fetch_assoc($result_top_products)) { ?>
                                        <li class="col-lg-3">
                                            <div class="card card-block card-stretch card-height mb-0">
                                                <div class="card-body">
                                                    <div class="bg-light rounded">
                                                        <img src="<?php echo !empty($row['Url']) ? $row['Url'] : './assets/images/default.png'; ?>"
                                                            class="style-img img-fluid m-auto  object-cover h-100 w-100" alt="image" style="width: full !important; height: 200px !important; object-fit: cover; border-radius:8px;">

                                                    </div>
                                                    <div class="style-text text-left mt-3">
                                                        <h5 class="mb-1"><?php echo htmlspecialchars($row['ProductName']); ?></h5>
                                                        <p class="mb-0"><?php echo $row['sales_quantity']; ?> Items Sold</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>

                            <?php
                            // Close connection only after all queries are done
                            mysqli_close($conn);
                            ?>


                            <?php
                            function formatNepaliCurrency($number)
                            {
                                $exploded = explode('.', $number);
                                $intPart = $exploded[0];
                                $decimalPart = isset($exploded[1]) ? '.' . $exploded[1] : '';

                                // Apply Nepali currency formatting
                                $lastThree = substr($intPart, -3);
                                $remaining = substr($intPart, 0, -3);

                                if ($remaining != '') {
                                    $remaining = preg_replace("/\B(?=(\d{2})+(?!\d))/", ",", $remaining);
                                    $formattedNumber = $remaining . ',' . $lastThree;
                                } else {
                                    $formattedNumber = $lastThree;
                                }

                                return $formattedNumber . $decimalPart;
                            }

                            $incomeFormatted = formatNepaliCurrency(number_format($income, 2, '.', ''));
                            $expensesFormatted = formatNepaliCurrency(number_format($expenses, 2, '.', ''));
                            ?>


                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column">
                        <div class="card card-block card-stretch card-height mb-2">
                            <div class="card-body" style="background: url(./assets/income.svg); background-size: contain; background-position: right; background-repeat: no-repeat;">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div>
                                        <p class="mb-0">Income</p>
                                        <h5>
                                            <?php
                                            echo "Rs. " . $incomeFormatted;
                                            ?>
                                        </h5>

                                    </div>
                                </div>
                                <button class="btn" style="background-color: #f0f0f0; color: #656464; font-weight: 500; font-size: 12px; border-radius: 6px; padding: 6px 12px; cursor: default;">
                                    This Month
                                </button>
                            </div>
                        </div>
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body" style="background: url(./assets/expensess.svg); background-size: contain; background-position: right; background-repeat: no-repeat; ">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div>
                                        <p class="mb-0">Expense</p>
                                        <h5><?php
                                            echo "Rs. " . $expensesFormatted;
                                            ?></h5>
                                    </div>

                                </div>
                                <button class="btn" style="background-color: #f0f0f0; color: #656464; font-weight: 500; font-size: 12px; border-radius: 6px; padding: 6px 12px; cursor: default;">
                                    This Month
                                </button>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Page end  -->
    </div>
    </div>
    </div>
    <!-- Wrapper End-->





    <!-- Backend Bundle JavaScript -->
    <script src="./js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="./js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->

    <script src="./js/login_signup.js"></script>


    <!-- app JavaScript -->
    <script src="./js/app.js"></script>
</body>

</html>