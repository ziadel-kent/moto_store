<?php
include "dbh-inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if required fields are set
    if (isset($_POST["SHIPPING"], $_POST["PAYMENT_METHOD"], $_POST["Date"], $_POST["Subtotal"])) {
        $SHIPPING = $_POST["SHIPPING"];
        $PAYMENT_METHOD = $_POST["PAYMENT_METHOD"];
        $Date = $_POST["Date"];
        $Subtotal = $_POST["Subtotal"];
        // Add Tax input if needed
        $Tax = isset($_POST["Tax"]) ? $_POST["Tax"] : null;

        // Additional server-side validation and password hashing can be added here

        try {
            // Insert data into the correct table and columns
            // echo "ziad1";
            $query = "INSERT INTO checkout (SHIPPING, PAYMENT_METHOD, Date, Subtotal, Tax) VALUES (?, ?, ?, ?, ?);";
            // echo "ziad2";
            $stmt = $pdo->prepare($query);
            // echo "ziad3";
            $stmt->execute([$SHIPPING, $PAYMENT_METHOD, $Date, $Subtotal, $Tax]);
            // echo "ziad4";

            // Redirect after successful operation
            header("location:../cart.html");
            // echo "ziad5";
            die();
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    } else {
        echo "Required fields are not set123.";
    }
} else {
    // Redirect if the request method is not POST
    header("location:../index.html");
}
