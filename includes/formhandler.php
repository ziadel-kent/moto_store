    <?php
    include "dbh-inc.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Username = $_POST["Username"];
        $EMAIL = $_POST["EMAIL"];
        $password = $_POST["password"];
        $Phone_Number = $_POST["Phone_Number"];

        // Additional server-side validation and password hashing can be added here

        try {
            $query = "INSERT INTO registration (Username, EMAIL, password, Phone_Number) VALUES (?, ?, ?, ?);";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$Username, $EMAIL, $password, $Phone_Number]);
            $pdo = null;
            $stmt = null;
            header("location:../login.php");
            die();
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    } else {
        header("location:../register.php");
    }
