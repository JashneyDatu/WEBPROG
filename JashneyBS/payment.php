
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-3">Submitted Information</h3>

        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST") {

        
            $name = $_POST['fullname'];
            $age  = $_POST['age'];
            $course  = $_POST['course'];
            $gender  = $_POST('gender');
            $grade  = $_POST('grade');

            if ($course == "ACT ") {
                $tuition = 15000;
            }
            else if ($course == "HM" ){
                $tuition = 20000;
            }
             else if ($course == "BSOA" ){
                $tuition = 18000;
            }

            $grade_disc = 0;
            $age_disc = 0;

            if($grade >=95){
                $grade_disc = $tuition * 0.20; //20% discount
            }
            if ($age >= 26 and $age <=30){
                $age_disc = $tuition * 0.05; //5% discount
            }

            $total_discount = $grade_disc + $age_disc;
            $final_tuition = $tuition - $total_discount;

        }
        else {
            echo "No Date Selected";
        }



?>

        <p><strong>Full Name:</strong> <?php=$name; ?></p>
        <p><strong>Age:</strong> <?php=$age; ?></p>
        <p><strong>Course:</strong> <?php=$course; ?></p>
        <p><strong>Full Nam:</strong> <?php=$name; ?></p>
        <p><strong>Gender:</strong> Male</p>
        <hr><p><strong>Tuition Fee:</strong> ₱15,000.00</p>
        <p class='text-success'><strong>Grade Discount (20%):</strong> -₱3,000.00</p>
        <p class='text-success'><strong>Age Discount (5%):</strong> -₱750.00</p><
        p class='text-primary'><strong>Total Discounts:</strong> -₱3,750.00</p>
        <h5><strong>Final Tuition Fee:</strong> ₱11,250.00</h5>       
        

        <a href="registration.php" class="btn btn-secondary mt-3">Go Back</a>
    </div>
</div>

</body>
</html>
