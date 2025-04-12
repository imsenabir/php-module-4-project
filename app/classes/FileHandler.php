<?php

// FileHandler trait to handle file operations
trait FileHandler {

    // Path to the JSON file
    private $filePath = __DIR__ . "/../../data/vehicles.json";

    // Constructor to initialize the file path
    public function readFile() {
        // Check if the file exists, if not create it with an empty array
        if(!file_exists($this->filePath)){
            file_put_contents($this->filePath, json_encode([]));
        }

        // Read the file and decode the JSON data
        return json_decode(file_get_contents($this->filePath), true);
    }

    // Function to write data to the file
    public function writeFile($data) {
        file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT));
    }
}
