<?php
include "dbh-inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST["Username"];
    $password = $_POST["password"];

    try {
        $query = "SELECT * FROM registration WHERE Username = :Username AND password = :password";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":Username", $Username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();  // No need to pass parameters again

        $registration1 = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($registration1) {
            // Authentication successful
            // You can set session variables or redirect the user to a dashboard page
            // For example:
            // session_start();
            // $_SESSION["user_id"] = $user["id"];
            header("location: ../index.html");
            die();
        } else {
            // Authentication failed
            // Redirect the user back to the login page with an error message

            echo '<script>alert("Invalid credentials. Please try again.");';
            echo 'window.location.href="../login.php?error=InvalidCredentials";</script>';
            die();
        }
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("location: ../register.php");
    die();
}
