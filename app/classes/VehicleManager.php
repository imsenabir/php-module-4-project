<?php
// VehicleManager class to manage vehicle data
require_once 'VehicleBase.php';
require_once 'VehicleActions.php';
require_once 'FileHandler.php';


 // VehicleManager class extends VehicleBase and implements VehicleActions
class VehicleManager extends VehicleBase implements VehicleActions {
    use FileHandler;


    // Function to add a new vehicle
    public function addVehicle($data) {
        $vehicles = $this->readFile();
        $vehicles[] = $data;
        $this->writeFile($vehicles);
    }

    // Function to edit a vehicle by ID
    public function editVehicle($id, $data) {
        $vehicles = $this->readFile();
        if(isset($vehicles[$id])){
            $vehicles[$id] = $data;
            $this->writeFile($vehicles);
        }
    }


    // Function to delete a vehicle by ID
    public function deleteVehicle($id) {
        $vehicles = $this->readFile();
        if(isset($vehicles[$id])){
            unset($vehicles[$id]);
            $this->writeFile(array_values($vehicles));
        }
    }

    //Function to read the file and return the vehicles
    public function getVehicles() { 
       return $this->readFile();
    }

    // Method to get vehicle details
    public function getDetails() {
        return [
            'name' => $this->name,
            'type' => $this->type,  
            'price' => $this->price,  
            'image' => $this->image
        ];
    }
}
