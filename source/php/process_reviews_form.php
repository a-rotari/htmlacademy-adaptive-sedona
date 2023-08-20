<?php

require_once APPROOT . '/php/helpers.php';

$fieldsToSanitize = [
    'first_name',
    'middle_name',
    'last_name',
    'phone_number',
    'email',
    'impression',
    'bridge_sights',
    'bell_sights',
    'slide_sights',
    'red_sights',
    'impressions'
];

$sanitizedData = [];

foreach ($fieldsToSanitize as $field) {
    if (isset($_POST[$field])) {
        $sanitizedData[$field] = sanitizeString($_POST[$field]);
    }
}

print_r($sanitizedData);

$stmt = $pdo->prepare('INSERT INTO users(first_name, middle_name, last_name, email, phone) VALUES(?,?,?,?,?)');
$stmt->bindParam(1, $first_name, PDO::PARAM_STR, 255);
$stmt->bindParam(2, $middle_name, PDO::PARAM_STR, 255);
$stmt->bindParam(3, $last_name, PDO::PARAM_STR, 255);
$stmt->bindParam(4, $email, PDO::PARAM_STR, 255);
$stmt->bindParam(5, $phone, PDO::PARAM_STR, 20);

$first_name = $sanitizedData['first_name'] ?? '';
$middle_name = $sanitizedData['middle_name'] ?? '';
$last_name = $sanitizedData['last_name'] ?? '';
$email = $sanitizedData['email'] ?? '';
$phone = $sanitizedData['phone_number'] ?? '';


$stmt->execute([$first_name, $middle_name, $last_name, $email, $phone]);

printf("%d Row inserted.\n", $stmt->rowCount());