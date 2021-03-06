<?php
include_once 'psl-config.php';
include_once 'db_connect.php';

$error_msg = "";

if (isset($_POST['email'], $_POST['p'])) {
    // Sanitize and validate the data passed in
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">Wprowadzony adres email jest niepoprawny.</p>';
    }

    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Błędna konfiguracja hasła</p>';
    }

    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //

    $prep_stmt = "SELECT id FROM users WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);

    // check existing email
    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            // A user with this email address already exists
            $error_msg .= '<p class="error">Użytkownik o podanym adresie e-mail już istnieje.</p>';
            $stmt->close();
        }
    } else {
        $error_msg .= '<p class="error bg-danger">Wystąpił błąd</p>';
        $stmt->close();
    }

    // check existing username
    $prep_stmt = "SELECT id FROM users WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);

    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            // A user with this username already exists
            $error_msg .= '<p class="error">Użytkownik z tym loginem już istnieje</p>';
            $stmt->close();
        }
    } else {
        $error_msg .= '<p class="error bg-danger">Wystąpił błąd</p>';
        $stmt->close();
    }

    if (empty($error_msg)) {

        // Create hashed password using the password_hash function.
        // This function salts it with a random salt and can be verified with
        // the password_verify function.
        $password = password_hash($password, PASSWORD_BCRYPT);

        // Insert the new user into the database
        if ($insert_stmt = $mysqli->prepare("INSERT INTO users (email, password) VALUES (?, ?)")) {
            $insert_stmt->bind_param('ss', $email, $password);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
        header('Location: ./register_success.php');
    }
}