<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

// EMI Calculation Logic
$amount = $down_payment = $loan_amount = $mon = $int = $interest = $pay = $emi = 0;

if (isset($_REQUEST['calc'])) {
    $amount = $_REQUEST['amount']; // Property Price
    $down_payment = $_REQUEST['down_payment']; // Down Payment
    $loan_amount = $amount - $down_payment; // Loan Amount
    $mon = $_REQUEST['month']; // Loan Duration in Months
    $int = $_REQUEST['interest']; // Annual Interest Rate

    // Monthly Interest Rate
    $monthly_interest_rate = $int / (12 * 100);

    // EMI Calculation
    if ($monthly_interest_rate > 0) {
        $emi = ($loan_amount * $monthly_interest_rate * pow(1 + $monthly_interest_rate, $mon)) / (pow(1 + $monthly_interest_rate, $mon) - 1);
    } else {
        $emi = $loan_amount / $mon; // If 0% interest
    }

    // Total Payable Amount
    $pay = $emi * $mon;

    // Total Interest
    $interest = $pay - $loan_amount;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="images/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<title>REMS</title>
</head>
<body>

<div id="page-wrapper">
    <div class="row">
        <?php include("include/header.php");?>
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>EMI Calculator</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">EMI Calculator</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-row bg-gray">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center">EMI Calculator</h2>
                    </div>
                </div>
                <form method="post" action="calc.php" class="col-lg-6 mx-auto">
                    <div class="form-group">
                        <label for="amount">Property Price (INR)</label>
                        <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Property Price" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="down_payment">Down Payment (INR)</label>
                        <input type="number" class="form-control" id="down_payment" name="down_payment" placeholder="Enter Down Payment" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="month">Loan Duration (Months)</label>
                        <input type="number" class="form-control" id="month" name="month" placeholder="Enter Loan Duration in Months" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="interest">Annual Interest Rate (%)</label>
                        <input type="number" class="form-control" id="interest" name="interest" placeholder="Enter Interest Rate" required autocomplete="off">
                    </div>
                    <button type="submit" name="calc" class="btn btn-primary btn-block">Calculate EMI</button>
                </form>
            </div>
        </div>

        <?php if (isset($_REQUEST['calc'])) { ?>
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-secondary text-center">Calculation Results</h3>
                        <table class="table table-bordered mt-4">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Details</th>
                                    <th>Amount (INR)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Property Price</td>
                                    <td>INR <?php echo number_format($amount, 2); ?></td>
                                </tr>
                                <tr>
                                    <td>Down Payment</td>
                                    <td>INR <?php echo number_format($down_payment, 2); ?></td>
                                </tr>
                                <tr>
                                    <td>Loan Amount</td>
                                    <td>INR <?php echo number_format($loan_amount, 2); ?></td>
                                </tr>
                                <tr>
                                    <td>Total Interest</td>
                                    <td>INR <?php echo number_format($interest, 2); ?></td>
                                </tr>
                                <tr>
                                    <td>Total Payable Amount</td>
                                    <td>INR <?php echo number_format($pay, 2); ?></td>
                                </tr>
                                <tr>
                                    <td>Monthly EMI</td>
                                    <td>INR <?php echo number_format($emi, 2); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php include("include/footer.php");?>
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/greensock.js"></script>
<script src="js/layerslider.transitions.js"></script>
<script src="js/layerslider.kreaturamedia.jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/tmpl.js"></script>
<script src="js/jquery.dependClass-0.1.js"></script>
<script src="js/draggable-0.1.js"></script>
<script src="js/jquery.slider.js"></script>
<script src="js/wow.js"></script>
<script src="js/custom.js"></script>
</body>
</html>