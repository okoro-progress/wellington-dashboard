
<?php

if (isset($_POST['submit'])) {
    require_once "dbh.php";
    require_once "functions.inc.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['email'];
        $password = $_POST['pwd'];
    
        // Query the database for the user
        $query = "SELECT * FROM adminUsers WHERE usersEmail = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
    
        if ($user) {
            // Check the hashed password
            if (password_verify($password, $user['usersPwd'])) {
                // Authentication successful, set a session or cookie here
                // Example: session_start(); $_SESSION['username'] = $username;
    
                header("Location: ../pages/profile.php"); // Redirect to the dashboard or another page
                exit();
            } else {
                $error = "Invalid username or password";
            }
        } else {
            $error = "User not found"; // Handle the case where the user does not exist
        }
    }
    
    // Close the database connection
    $conn->close();
}
