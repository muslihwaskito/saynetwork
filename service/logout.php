<?php
	require_once 'config.php';
	session_start();

    // destroy sessioin
    session_destroy();
    header('Location: /auth/index');
?>