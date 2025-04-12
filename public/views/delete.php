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

// If the form is submitted, delete the vehicle
if($_SERVER['REQUEST_METHOD'] === "POST"){
    if(isset($_POST['confirm']) && $_POST['confirm'] === 'yes'){
        $vehicleManager->deleteVehicle($id);
    }
    header("Location: ../index.php");
    exit;
}

// Include the header file
include './header.php';
?>
<!-- HTML form to confirm deletion of the vehicle -->
<div class="container my-4">
    <h1>Delete Vehicle</h1>
    <p>Are you sure you want to delete <strong></strong>?</p>
    <form method="POST">
        <button type="submit" name="confirm" value="yes" class="btn btn-danger">Yes, Delete</button>
        <a href="../index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>