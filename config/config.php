<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// include $_SERVER['DOCUMENT_ROOT'] . "/tms-app/config/db.php";
$base_url = "http://localhost/tutorial/ajax_practice_app/";


$category_status = array('Inactive', 'Active');
