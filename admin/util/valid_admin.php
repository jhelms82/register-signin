<?php
// require_once('util/secure_conn.php');

$username = '';
$password = '';


if (!isset($_SESSION['is_valid_admin'])) {
    header("Location: .?action=show_login" );
}