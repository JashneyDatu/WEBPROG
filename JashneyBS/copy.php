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
    $subtotal = $quan * $price;

    if(isset($_POST['submit'])) {
        if (!empty($_POST['addons'])){
            $total = 0

            foreach ($_POST['addons'] as $addons){
                $total += $addons;
                $final = $subtotal + $total;
            }
        }
    
        else{
            $total = 0;
        }
        $final = $subtotal + $total;

    }
  
    ?>

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="mb-4 text-center">🛒 Product Purchase</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Customer Name</label>
                <input type="text" class="form-control" name="name" required value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity" required min="1" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Price per Item</label>
                <input type="number" class="form-control" name="price" required min="1" value="">
            </div>

            <div class="mb-3">
                <label class="form-label">Optional Add-ons</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="addons[]" value="Gift Wrap"
                        checked>
                    <label class="form-check-label">Gift Wrap (+₱50)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="addons[]" value="Express Shipping"
                      checked  >
                    <label class="form-check-label">Express Shipping (+₱100)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="addons[]" value="Warranty"
                      checked  >
                    <label class="form-check-label">Warranty (+₱200)</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Compute Total</button>
        </form>

                <div class="alert alert-success mt-4">
            <h4>💡 Purchase Summary</h4>
            <p><strong>Name:</strong><?=$name?></p>
            <p><strong>Quantity:</strong> <?=$quan?></p>
            <p><strong>Price per Item:</strong><?=$price?></p>
            <p><strong>Subtotal:</strong><?=$subtotal?></p>
            <p><strong>Add-ons:</strong> <?=$total?></p>
            <h5><strong>Final Total:</strong><?=$final?></h5>
        </div>
            </div>
</div>

</body>
</html>
