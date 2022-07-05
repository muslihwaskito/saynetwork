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
	
		$query = mysqli_query($mysql, "SELECT id, email, name FROM users WHERE email = '$email' and password = '$password'");
		$result = mysqli_fetch_assoc($query);
		if ($result) {
			$_SESSION['user'] = $result;
            header('Location: /admin/index');
		} else {
			$flash_message = [
				'status' => 401,
				'message' => 'Email or password is wrong!'
			];
			$_SESSION['flash_message'] = $flash_message;
			header('Location: /auth/index');
		}
    } else {
        $flash_message = [
			'status' => 422,
			'message' => 'Email or password can\'t empty!',
            'data' => $_POST
		];

        $_SESSION['flash_message'] = $flash_message;
		header('Location: /auth/index');
    }
	
?>