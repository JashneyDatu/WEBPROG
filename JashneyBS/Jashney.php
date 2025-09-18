 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Activity - Product Purchase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
      <?php
      
    $name = $_POST['name'];
    $quan = $_POST['quantity'];
    $price = $_POST['price'];
    $add = $_POST['addONS'];

    $subttotal = $quan * $price;
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        if ( $add == "GIFT" ){
            $addons = 50;
        }
        elseif ( $add == "EXP"){
            $addons = 100;
        }
        elseif ( $add == "WARR"){
            $addons = 200;
        }

        
        $subtotal = $quan * $price;
        $total = $subtotal + $addons;
    
          
    }

    ?>

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="mb-4 text-center">🛒 Product Purchase</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Customer Name</label>
                <input type="text" class="form-control" name="name"  value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity"  value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Price per Item</label>
                <input type="number" class="form-control" name="price" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Optional Addons:</label>
                <check name="addONS" class="form-check" required>
                
                    <input class="form-check-input" type="checkbox" value="GIFT">Gift Wrap (+₱50)</label><br>
                    <input class="form-check-input" type="checkbox" value="EXP">Express Shipping (+₱100)</label><br>
                    <input class="form-check-input" type="checkbox" value="WARR">Warranty (+₱200)</label>
            </check>
            </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Compute Total</button>
        </form>

                <div class="alert alert-success mt-4">
            <h4>💡 Purchase Summary</h4>
            <p><strong>Name:</strong><?=$name?></p>
            <p><strong>Quantity:</strong><?=$quan?></p>
            <p><strong>Price per Item:</strong><?=$price?></p>
            <p><strong>Subtotal:</strong><?=$subtotal?></p>
            <p><strong>Add-ons:</strong><?=$add?></p>
            <h5><strong>Final Total:</strong> <?=$total?></h5>
        </div>
            </div>
</div>

</body>
</html>
