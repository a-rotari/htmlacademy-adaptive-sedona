<?php
$sightHumanReadableNames = [
    "bridge_sights" => "Devil's Bridge",
    "bell_sights" => "Bell Rock",
    "slide_sights" => "Slide Rock State Park",
    "red_sights" => "Red Rocks",
];

$sql = "SELECT u.first_name, r.impression, r.details, r.id
        FROM reviews r JOIN users_reviews ur ON r.id = ur.review_id JOIN users u ON ur.user_id = u.id";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$context = [];
foreach ($rows as $row) {
    $firstName = $row['first_name'];
    $impression = $row['impression'];
    $details = $row['details'];

    $sql = "SELECT s.name 
            FROM sights s
            JOIN sights_reviews sr ON s.id = sr.sight_id
            JOIN reviews r ON sr.review_id = r.id
            WHERE r.id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $row['id']);
    $stmt->execute();
    $sights = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $sightNames = [];
    foreach ($sights as $sight) {
        $sightNames[] = $sightHumanReadableNames[$sight['name']];
    }
    $row['sights'] = $sightNames;
    $context[] = $row;
}
