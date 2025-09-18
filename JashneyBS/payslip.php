<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Payslip Record</h4>
        </div>
        <div class="card-body">

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $num1 = htmlspecialchars($_POST['num1']);
        $num2 = htmlspecialchars($_POST['num2']);
        $num3 = htmlspecialchars($_POST['num3']);
            $grosspay = $num1 * $num2;
            $tax = $grosspay * 0.02;
            $SSS = $grosspay * 0.015;
            $pagibig = 50;
            $total_dedeuction = $tax + $SSS + $pagibig + $num3;
            $netpay = $grosspay - $total_dedeuction;


    }
    else {
        echo "<p class='text-danger'>No data submitted. Please go back and fill the form.</p>";
        exit;   

    }
    ?>

       
            <p class="lead">Here are your Payslip Record:</p>
           
           <ul class="list-group">
 <ul class="list-group">
    <li class="list-group-item"><strong>Name Of Employee:</strong> <?= $name?> </li>
    <li class="list-group-item"><strong>Total Days Of Work:</strong> <?= $num1?> </li>
    <li class="list-group-item"><strong>Daily Rate:</strong> ₱ <?= number_format($num2, 0) ?> </li> <br>
    
    <li class="list-group-item"><strong>Grosspay:</strong> ₱ <?= number_format($grosspay, 0) ?> </li> 
    <li class="list-group-item"><strong>Tax (2%):</strong> ₱ <?= number_format($tax, 0) ?> </li> 
    <li class="list-group-item"><strong>SSS (1.5%):</strong> ₱ <?= number_format($SSS, 0) ?> </li>
    <li class="list-group-item"><strong>PAG - IBIG:</strong> ₱ <?= number_format($pagibig, 0) ?> </li>
    <li class="list-group-item"><strong>Cash Advance:</strong> ₱ <?= number_format($num3, 0) ?> </li> <br>
    
    <li class="list-group-item"><strong>Total Deduction:</strong> ₱ <?= number_format($total_dedeuction, 0) ?> </li>
    <li class="list-group-item"><strong>Net Pay:</strong> ₱ <?= number_format($netpay, 0)?>  </li> 
</ul>








</ul>

        

     <div class="mt-4 text-center">
    <a href="#" onclick="window.print();" class="btn btn-success ms-2">Print Payslip</a>
    <a href="index.php" class="btn btn-secondary ms-2">Go Back</a>
</div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>