<?php
require '../vendor/autoload.php';

define('APPROOT', dirname(dirname(__FILE__)));
print_r(APPROOT);

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$loadedVars = $dotenv->load();

$host = 'localhost';
$data = 'sedona';
$user = $loadedVars['DB_USER'];
$password = $loadedVars['DB_PASSWORD'];
$chrs = 'utf8mb4';
$attr = "mysql:host=$host;dbname=$data;charset=$chrs";
$opts = [
    PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES      => false,
];

try
{
    $pdo = new PDO($attr, $user, $password, $opts);
}
catch (PDOException $e)
{
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

$checkReviewsTable = "CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    impression ENUM('positive', 'negative', 'unsure') NOT NULL,
    details TEXT NOT NULL
)";

$checkUsersTable = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    middle_name VARCHAR(255) NOT NULL DEFAULT '',
    last_name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL
)";

$checkSightsTable = "CREATE TABLE sights (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
)";

$checkUsersReviewsThroughTable = "CREATE TABLE users_reviews (
    user_id INT,
    review_id INT,
    PRIMARY KEY (user_id, review_id),
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (review_id) REFERENCES reviews(id)
)";

$checkSightsReviewsThroughTable = "CREATE TABLE sights_reviews (
    sight_id INT,
    review_id INT,
    PRIMARY KEY (sight_id, review_id),
    FOREIGN KEY (sight_id) REFERENCES sights(id),
    FOREIGN KEY (review_id) REFERENCES reviews(id)
)";

function checkAndCreateTable($pdo, $tableName, $createTableQuery) {
    $query = "SHOW TABLES LIKE '$tableName'";
    $result = $pdo->query($query);
    if ($result->rowCount() == 0) {
        $pdo->exec($createTableQuery);
        return True;
    } else {
        return False;
    }
}

$checkedTables = [
    'reviews' => $checkReviewsTable,
    'users' => $checkUsersTable,
    'sights' => $checkSightsTable,
    'users_reviews' => $checkUsersReviewsThroughTable,
    'sights_reviews' => $checkSightsReviewsThroughTable
];

foreach ($checkedTables as $tableName => $queryString) {
    $isTableCreated = checkAndCreateTable($pdo, $tableName, $queryString);
    $message = $isTableCreated ? "$tableName was created" : "$tableName already exists";
    echo $message;
}
?>