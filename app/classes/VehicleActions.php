<?php

// VehicleActions interface to define the actions for vehicle management
interface VehicleActions {

   // Method to add a new vehicle
   public function addVehicle($data);

   // Method to edit a vehicle by ID
   public function editVehicle($id, $data);

   // Method to delete a vehicle by ID
   public function deleteVehicle($id);

   // Method to get all vehicles
   public function getVehicles();
}
