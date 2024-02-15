<?php
session_start(); // Start session at the very beginning

// Your PHP code here
// Initialize session variables if needed
$_SESSION['username'] = 'example';
$_SESSION['loggedin'] = 1; // Example: set 'loggedin' to 1 when the user is logged in

// Redirect example
// header('Location: /apnidukaan/home.php'); // Ensure there's no output before this line
// exit; // Stop execution after redirection

//session_set_cookie_params(0);
$count = 0;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != 1) {
    header('location:http://localhost/apnidukaan/login.php');
    exit();
}

// connect to database
$title = "Index";
require_once "./template/header.php";
require_once "./functions/database_functions.php";
$conn = db_connect();
$row = select4LatestBook($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/apnidukaan/back.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            foreach ($row as $book) {
                ?>
                <div class="col-md-3">
                    <a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
                        <div class="hover08 column">
                            <div>
                                <figure><img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>" /></figure>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <?php
    require_once "./template/footer.php";
    ?>
</body>
</html>
<?php
if (isset($conn)) {
    mysqli_close($conn);
}
?>
