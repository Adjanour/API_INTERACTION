<?php

function sendPostRequest($api_url, $json_data): bool|string
{
    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        // Handle curl errors
        return false;
    }

    curl_close($ch);

    // Process the API response
    return $response;
}



function sendPutRequest($api_url, $json_data): bool|string
{
    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        // Handle curl errors
        return false;
    }

    curl_close($ch);

    // Process the API response
    return $response;
}


function deleteRequest(string $url): bool|string
{
    // Initialize cURL session
    $curl = curl_init();

    // Set cURL options
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL request and get the response
    $response = curl_exec($curl);

    // Check for cURL errors
    if (curl_errno($curl)) {
        // Handle specific error codes
        $errorCode = curl_errno($curl);
        $errorMessage = curl_error($curl);
        echo 'cURL error (' . $errorCode . '): ' . $errorMessage;
    }

    // Close cURL session
    curl_close($curl);

    // Return Response
    return $response;
}

function getRequest($api_url) {
    // Initialize a cURL session
    $ch = curl_init();

    // Set the URL for the GET request
    curl_setopt($ch, CURLOPT_URL, $api_url);

    // Set CURL-OPT_RETURN-TRANSFER to receive the response as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Execute the cURL request and store the response
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        // Handle specific error codes
        $errorCode = curl_errno($ch);
        $errorMessage = curl_error($ch);
        echo 'cURL error (' . $errorCode . '): ' . $errorMessage;
    }

    // Close the cURL session
    curl_close($ch);

    // Decode the JSON response into a PHP associative array
    return json_decode($response, true);
}

function displaySuccessMessageAndRedirect(): void
{
    echo '<script>alert("Added Successfully");';
    echo 'window.location.href = "testAPI.php";</script>';
}

function displayErrorMessage($errorMessage): void
{
    echo '<script>alert("Error: ' . $errorMessage . '");</script>';
}