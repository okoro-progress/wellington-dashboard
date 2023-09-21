<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Perform basic input validation
    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
    } elseif ($password !== $confirmPassword) {
        echo "Passwords do not match.";
    } else {
        require_once "dbh.php";

        // Check if the email already exists
        $query = "SELECT * FROM adminusers WHERE usersEmail = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Email address already exists. Please use a different email.";
        } else {
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data into the "adminusers" table
            $insertQuery = "INSERT INTO adminusers (usersName, usersEmail, usersPwd) VALUES (?, ?, ?)";
            $insertStmt = $conn->prepare($insertQuery);
            $insertStmt->bind_param("sss", $username, $email, $hashedPassword);

            if ($insertStmt->execute()) {
                echo "Registration successful. <a href='login.php'>Login</a>";
                header("Location: ../pages/dashboard.php");
            } else {
                echo "Registration failed. Please try again later.";
            }

            $insertStmt->close();
        }

        $stmt->close();
        $conn->close();
    }
}
