
# Module 4: Simple Vehicle Listing App

A lightweight PHP application designed to manage vehicle listings using JSON files for data storage. This project is part of Module 4 in the PHP learning series, focusing on file handling and basic CRUD operations.

## Features

- **Add New Vehicles**: Input details like make, model, year, and price.
- **View Listings**: Display all vehicles in a structured format.
- **Edit Entries**: Modify existing vehicle information.
- **Delete Vehicles**: Remove vehicles from the listing.
- **Data Persistence**: All data is stored in a `vehicles.json` file, eliminating the need for a database.

## Project Structure

```
php-module-4-project/
├── app/
│   └── classes/
│       └── Vehicle.php
├── data/
│   └── vehicles.json
├── public/
│   ├── index.php
│   ├── add.php
│   ├── edit.php
│   └── delete.php
└── README.md
```

- `app/classes/Vehicle.php`: Defines the `Vehicle` class with properties and methods for vehicle operations.
- `data/vehicles.json`: Stores all vehicle data in JSON format.
- `public/`: Contains the main application files accessible via the web.

## Installation

### Option 1: Using XAMPP (Recommended for Windows and macOS Users)

1. **Download and Install XAMPP**:
   - Go to [XAMPP Download](https://www.apachefriends.org/index.html) and download the installer for your platform.
   - Follow the installation steps to install XAMPP.

2. **Clone the Repository**:
   Open a terminal or command prompt and run:
   ```bash
   git clone https://github.com/imsenabir/php-module-4-project.git
   ```

3. **Move the Project to XAMPP's Web Directory**:
   - Copy or move the cloned `php-module-4-project` folder into the `htdocs` directory of your XAMPP installation. This is typically located at:
     - On Windows: `C:\xampp\htdocs`
     - On macOS: `/Applications/XAMPP/htdocs`

4. **Start the XAMPP Control Panel**:
   - Open the XAMPP Control Panel and start the **Apache** server.

5. **Access the Application**:
   Open your browser and navigate to `http://localhost/php-module-4-project/public`. You should see the vehicle listing app running.

### Option 2: Using PHP's Built-in Server

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/imsenabir/php-module-4-project.git
   ```

2. **Navigate to the Project Directory**:
   ```bash
   cd php-module-4-project
   ```

3. **Start a Local PHP Server**:
   ```bash
   php -S localhost:8000 -t public
   ```

4. **Access the Application**:
   Open your browser and navigate to `http://localhost:8000`.

## Usage

- **Add Vehicle**: Click on "Add Vehicle" and fill out the form.
- **Edit Vehicle**: Click on "Edit" next to a vehicle entry, modify the details, and save.
- **Delete Vehicle**: Click on "Delete" next to a vehicle entry to remove it.

## Technologies Used

- **PHP**: Server-side scripting language.
- **JSON**: Lightweight data-interchange format for storing vehicle data.
- **HTML/CSS**: Frontend structure and styling.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request for any enhancements or bug fixes.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Acknowledgments

This application was developed as part of the PHP Module 4 coursework.

---

For more details, visit the [GitHub Repository](https://github.com/imsenabir/php-module-4-project).
