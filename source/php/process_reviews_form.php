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

// Init the array with sanitized data
$sanitizedData = [];

foreach ($fieldsToSanitize as $field) {
    if (isset($_POST[$field])) {
        $sanitizedData[$field] = sanitizeString($_POST[$field]);
    }
}


// Insert the data about the user into the database
$fieldBindings = [
    ['name' => 'first_name', 'type' => PDO::PARAM_STR, 'max_length' => 255],
    ['name' => 'middle_name', 'type' => PDO::PARAM_STR, 'max_length' => 255],
    ['name' => 'last_name', 'type' => PDO::PARAM_STR, 'max_length' => 255],
    ['name' => 'email', 'type' => PDO::PARAM_STR, 'max_length' => 255],
    ['name' => 'phone_number', 'type' => PDO::PARAM_STR, 'max_length' => 20],
];
$sql = 'INSERT INTO users(first_name, middle_name, last_name, email, phone) VALUES(?,?,?,?,?)';
$stmt = $pdo->prepare($sql);

foreach ($fieldBindings as $index => $binding) {
    $stmt->bindParam($index + 1, $sanitizedData[$binding['name']], $binding['type'], $binding['max_length']);
}

$stmt->execute();
$newUserId = $pdo->lastInsertId();


// Insert the data about the review into the database
$sql = 'INSERT INTO reviews(impression, details) VALUES(?,?)';
$fieldBindings = [
    ['name' => 'impression', 'type' => PDO::PARAM_STR, 'max_length' => 255],
    ['name' => 'impressions', 'type' => PDO::PARAM_LOB]
];
$stmt = $pdo->prepare($sql);

foreach ($fieldBindings as $index => $binding) {
    if ($binding['type'] !== PDO::PARAM_LOB) {
        $stmt->bindParam($index + 1, $sanitizedData[$binding['name']], $binding['type'], $binding['max_length']);
    } else {
        $stmt->bindParam($index + 1, $sanitizedData[$binding['name']], $binding['type']);
    }
}
$stmt->execute();
$newReviewId = $pdo->lastInsertId();


// Relate the user and the review via a 'through' table
$userReviewSql = 'INSERT INTO users_reviews (user_id, review_id) VALUES (?, ?)';
$userReviewStmt = $pdo->prepare($userReviewSql);

$userReviewStmt->bindValue(1, $newUserId);
$userReviewStmt->bindValue(2, $newReviewId);

$userReviewStmt->execute();

// Relate the review and the sights via a 'through' table
$fieldBindings = [
    ['name' => 'impression', 'type' => PDO::PARAM_STR, 'max_length' => 2],
    ['name' => 'impressions', 'type' => PDO::PARAM_STR, 'max_lenth' => 2]
];

foreach ($sightsList as $sight) {
    if (isset($sanitizedData[$sight]) && $sanitizedData[$sight] === 'on') {
        $reviewSightSql = 'INSERT INTO sights_reviews (sight_id, review_id) VALUES ((SELECT id FROM sights WHERE name = ?), ?)';
        $reviewSightStmt = $pdo->prepare($reviewSightSql);
        $reviewSightStmt->bindValue(1, $sight);
        $reviewSightStmt->bindValue(2, $newReviewId);

        $reviewSightStmt->execute();
    }
}

header("Location: /index.php");
exit;
?>