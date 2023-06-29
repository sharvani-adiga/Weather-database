# Weather Database Project

This project is a weather database application built using HTML, CSS, JavaScript, and PHP, with a MySQL database hosted on XAMPP. The application provides current weather information using the OpenWeatherMap API and displays a random image related to the city's weather using the Unsplash API.

## Features

- **Current Weather:** Get the current weather of any place in the world using the OpenWeatherMap API.
- **City Information:** Access detailed weather reports of major cities (Bangalore, New Delhi, Mumbai, Kolkata) for any day in 2021.
- **City Request:** Request weather information for a new city by providing its name, latitude, and longitude. The data is stored in the region table of the database.
- **Admin Login:** Admin login functionality to manage the region table and update city information.

## Setup and Installation

1. Clone the repository to your local machine.
2. Set up XAMPP or any other suitable web server stack.
3. Create a new MySQL database.
4. Import the provided database schema into your MySQL database. The database schema file is not included in this repository.
5. Update the database connection settings in the PHP files located in the appropriate directories.
6. Obtain API keys for OpenWeatherMap and Unsplash and replace the placeholder keys in the JavaScript files.

### Database

Please note that the database is not included in this repository. You will need to set up the database separately. Here are the steps to set up the database:

1. Install XAMPP or any suitable web server stack on your local machine.
2. Create a new MySQL database.
3. Create a database using the provided database schema ( included in this repository) into your MySQL database.
4. Contents of the database are downloaded and imported from "https://power.larc.nasa.gov/data-access-viewer/"
5. Update the database connection settings in the PHP files located in the appropriate directories.
6. If required, obtain the necessary API keys and replace the placeholder keys in the JavaScript files.

If you have any questions or need further assistance with setting up the database, please feel free to contact me.

## Usage

1. Open the main page (`disp.html`) in a web browser.
2. View the current weather and a random background image related to the city's weather.
3. Click on "More info?" to access detailed weather reports for major cities.
4. To access admin functionality, click on the "Admin" link on the main page.
5. Enter the admin username and password to log in.(username and password must be setup personally by you in the database directly)
6. Once logged in, you will have access to the region table for managing city information.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please feel free to submit a pull request.
