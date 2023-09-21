<?php

function usernameExists($db, $username) {
    $query = "SELECT * FROM adminUsers WHERE usersUid=?";
    $stmt = $db->prepare($query);
    
    if (!$stmt) {
        return false; // Return false if statement preparation fails
    }
    
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    return $result->num_rows > 0;
}

function verifyUserPassword($db, $username, $password) {
    $query = "SELECT usersPwd FROM adminUsers WHERE usersUid=?";
    $stmt = $db->prepare($query);
    
    if (!$stmt) {
        return false; // Return false if statement preparation fails
    }
    
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPwd = $row['usersPwd'];
        
        // Verify the password
        return password_verify($password, $hashedPwd);
    }
    
    return false; // Return false if no matching user is found
}

function createUser($db, $username, $hashedPwd) {
    $query = "INSERT INTO adminUsers (usersUid, usersPwd) VALUES (?, ?)";
    $stmt = $db->prepare($query);
    
    if (!$stmt) {
        return false; // Return false if statement preparation fails
    }
    
    $stmt->bind_param("ss", $username, $hashedPwd);
    return $stmt->execute(); // Return true if insertion is successful, false otherwise
}
?>
