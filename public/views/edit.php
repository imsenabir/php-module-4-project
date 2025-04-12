<?php

require_once "../../app/classes/VehicleManager.php";


// Include the VehicleManager class to manage vehicle data
$vehicleManager = new VehicleManager('', '', '', '');

// Get the vehicle ID from the URL
$id = $_GET['id'] ?? null;

// Check if the ID is valid
if($id === null){
    header("Location: ../index.php");
    exit;
}

// Get the vehicle details using the ID
$vehicles = $vehicleManager->getVehicles();

// Check if the vehicle exists
$vehicle = $vehicles[$id] ?? null;


// If the vehicle does not exist, redirect to the index page
if(!$vehicle){
    header("Location: ../index.php");
    exit;
}

// If the form is submitted, update the vehicle details

if($_SERVER['REQUEST_METHOD']=== "POST"){
    $vehicleManager->editVehicle($id,[
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'price' => $_POST['price'],
        'image' => $_POST['image']
    ]);

    // Redirect to the index page after updating the vehicle
    header("Location: ../index.php");
    exit;
}



// Include the header file
include './header.php';
?>

<!-- HTML form to edit the vehicle details -->
<div class="container my-4">
    <h1>Edit Vehicle</h1>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Vehicle Name</label>
            <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($vehicle['name']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Vehicle Type</label>
            <input type="text" name="type" class="form-control" value="<?= htmlspecialchars($vehicle['type']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control" value="<?= htmlspecialchars($vehicle['price']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Image URL</label>
            <input type="text" name="image" class="form-control" value="<?= htmlspecialchars($vehicle['image']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Vehicle</button>
        <a href="../index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>