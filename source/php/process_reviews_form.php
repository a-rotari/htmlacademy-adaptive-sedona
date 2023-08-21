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

$fieldBindings = [
    ['name' => 'first_name', 'type' => PDO::PARAM_STR, 'max_length' => 255],
    ['name' => 'middle_name', 'type' => PDO::PARAM_STR, 'max_length' => 255],
    ['name' => 'last_name', 'type' => PDO::PARAM_STR, 'max_length' => 255],
    ['name' => 'email', 'type' => PDO::PARAM_STR, 'max_length' => 255],
    ['name' => 'phone_number', 'type' => PDO::PARAM_STR, 'max_length' => 20],
];
$sql = 'INSERT INTO users(first_name, middle_name, last_name, email, phone) VALUES(?,?,?,?,?)';
$stmt = $pdo->prepare($sql);

// Bind parameters and execute for users insertion
foreach ($fieldBindings as $index => $binding) {
    $stmt->bindParam($index + 1, $sanitizedData[$binding['name']], $binding['type'], $binding['max_length']);
}

$stmt->execute();
$newUserId = $pdo->lastInsertId();

$sql = 'INSERT INTO reviews(impression, details) VALUES(?,?)';
$fieldBindings = [
    ['name' => 'impression', 'type' => PDO::PARAM_STR, 'max_length' => 255],
    ['name' => 'impressions', 'type' => PDO::PARAM_LOB]
];
$stmt = $pdo->prepare($sql);

// Bind parameters and execute for reviews insertion
foreach ($fieldBindings as $index => $binding) {
    if ($binding['type'] !== PDO::PARAM_LOB) {
        $stmt->bindParam($index + 1, $sanitizedData[$binding['name']], $binding['type'], $binding['max_length']);
    } else {
        $stmt->bindParam($index + 1, $sanitizedData[$binding['name']], $binding['type']);
    }
}
$stmt->execute();
$newReviewId = $pdo->lastInsertId();

// Build the SQL query and field bindings
$userReviewSql = 'INSERT INTO users_reviews (user_id, review_id) VALUES (?, ?)';
$userReviewStmt = $pdo->prepare($userReviewSql);

$userReviewStmt->bindValue(1, $newUserId);
$userReviewStmt->bindValue(2, $newReviewId);

$userReviewStmt->execute();