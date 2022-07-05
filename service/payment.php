<?php
	require_once 'config.php';

    session_start();

	// Create connection
	$mysql = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($mysql->connect_error) {
		$die("Connection failed: " . $mysql->connect_error);
	}

    if (!isset($_SESSION['user'])) {
        echo 'error user not found';
    }

    if (!empty($_POST)) {
        // timestamp
        $timestamp = time();
        $code_trx = 'TRX'.$timestamp;
        $created_at = date('Y-m-d H:i:s');
        $user_id = $_SESSION['user']['id'];
        $amount = $_POST['token_amount'];
        $currency = $_POST['currency'];
        $send = $_POST['send'];
        $token = $_POST['token'];
        $insert = mysqli_query($mysql, "INSERT INTO transactions(amount, code_trx, user_id, currency, send, token, created_at) VALUES('$amount', '$code_trx','$user_id', '$currency', '$send', '$token','$created_at')");
        // var_dump($insert);die;
        if ($insert) {
            $query = mysqli_query($mysql, "SELECT * FROM transactions WHERE code_trx = '$code_trx'");
            $trx = mysqli_fetch_assoc($query);
            
            $response = [
                'status' => 200,
                'data' => $trx
            ];

            echo json_encode($response);
        } else {
            echo mysqli_error($mysql);
        }
    }
	
?>