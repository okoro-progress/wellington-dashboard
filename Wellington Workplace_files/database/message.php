<?php
if (isset($_POST["submit"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "well";

    // Create a new connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO `messages` (`name`, `email`, `subject`, `message`) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters and execute the statement
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    if ($stmt->execute()) {
        // Successful form submission, display HTML response
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Wellington Tech - Message Submitted</title>
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
                    background-color: white;
                    color: #007bff;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    min-height: 100vh;
                }

                .container {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    background-color: rgba(255, 255, 255, 0.9);
                    padding: 40px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                    height: 75vh;
                    max-height: 90%;
                }

                .logo {
                    max-width: 150px;
                    margin-bottom: 20px;
                }

                h1 {
                    color: #3498db;
                    font-size: 24px;
                    font-weight: 300;
                }

                p {
                    color: #000;
                    font-size: 14px;
                    font-weight: 300;
                    display: block;
                    margin: 10px 0;
                }

                .home-button {
                    background-color: #3498db;
                    color: white;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 5px;
                    font-size: 16px;
                    cursor: pointer;
                    margin-top: 20px;
                }

                @media (max-width: 768px) {
                    .container {
                        width: 90%;
                    }
                }
            </style>
        </head>
        <body>
            <div class="container">
                <img src="hero-img.png" alt="Wellington Tech Logo" class="logo">
                <h1>Thank you!</h1>
                <p>We will get back to you as soon as possible.</p>
                <a class="home-button" href="./wellington/Wellington Workplace_files/Wellington Workplace.php" target="_blank" >Home</a>
            </div>
        </body>
        </html>
        <?php
    } else {
        // Form submission failed
        echo "Form submission failed: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
