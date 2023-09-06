# API_INTERACTION with PHP App

A Php crud app to interact with APIx (an app built using Django)

This repository contains a PHP application that interacts with an external API. It allows you to interact with the DJANGO api fron the APIx Repo.

## Getting Started

These instructions will help you set up and run the PHP application on your local machine.

### Prerequisites

To run this PHP app, you need:

- PHP (version 7.0 or higher)
- XAMPP webserver or PHPSTORM by IntelliJIDEA

### Installation

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/Adjanour/API_INTERACTION.git
   ```

2. Open the Cloned Repository

   ```bash
   cd API_INTEGRATION
   ```

## Configuration

  Open the config.php file and provide the necessary configuration details:

### Example configuration

  ```bash
  $api_url = "https://api.example.com/";
  $api_key = "your-api-key";
  ```

## Usage

### Sending GET Requests

To retrieve data from the API, you can use the `sendGetRequest` function. It simplifies the process of making GET requests and decoding JSON responses.

```php
// Example usage:
$api_url = "http://127.0.0.1:8000/employees";
$data = getRequest($api_url);
```

### Sending POST Requests

To retrieve data from the API, you can use the `sendPostRequest` function. It simplifies the process of making POST requests and decoding JSON responses.

```PHP
// Example API endpoint URL
$api_url = "http://example.com/api/resource";

// Example JSON data to be sent in the request
$json_data = '{"key": "value", "name": "John Doe"}';

// Send a POST request and handle the response
$response = sendPostRequest($api_url, $json_data);
```

## License

This project is licensed under the MIT License.

## Contact

If you have any questions or need assistance, feel free to contact Bernard Kirk Katamanso at <adjanour@icloud.com>.
