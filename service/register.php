<?php
	require_once 'config.php';

    session_start();

	// Create connection
	$mysql = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($mysql->connect_error) {
		$die("Connection failed: " . $mysql->connect_error);
	}

    if (!empty($_POST)) {
        $email = $_POST['email'];
		$password = md5($_POST['password']);
    
        $query = mysqli_query($mysql, "SELECT * FROM users WHERE email = '$email'");
        $result = mysqli_fetch_assoc($query);
        if ($result) {
            $flash_message = [
                'status' => 401,
                'message' => 'email '.$email.' is exist ! Please Sign In !'
            ];
            $_SESSION['flash_message'] = $flash_message;
            header('Location: /auth/register');
        } else {
            $created_at = date('Y-m-d H:i:s');
            $name = $_POST['name'];
            $insert = mysqli_query($mysql, "INSERT INTO users(email, password, name, created_at) VALUES('$email', '$password', '$name', '$created_at')");
            // var_dump($insert);die;
            if ($insert) {
                $query_user = mysqli_query($mysql, "SELECT email, name FROM users WHERE email = '$email' and password = '$password'");
                $user = mysqli_fetch_assoc($query_user);
                $_SESSION['user'] = $user;
                header('Location: /admin');
            } else {
                echo mysqli_error($mysql);die;
                $flash_message = [
                    'status' => 401,
                    'message' => 'Server error, please try again later!'
                ];
                $_SESSION['flash_message'] = $flash_message;
                header('Location: /auth/register');
            }
        }
    } else {
        $flash_message = [
			'status' => 422,
			'message' => 'Email or password can\'t empty!',
            'data' => $_POST
		];

        $_SESSION['flash_message'] = $flash_message;
		header('Location: /auth/register.php');
    }
	
?>