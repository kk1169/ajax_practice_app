<?php

include $_SERVER['DOCUMENT_ROOT'] . "/tutorial/ajax_practice_app/config/config.php";
include $_SERVER['DOCUMENT_ROOT'] . "/tutorial/ajax_practice_app/config/db.php";

$data = array();

if (isset($_POST['create_category'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $status = $conn->real_escape_string($_POST['status']);

    $categoryQueryResult = $conn->query("INSERT INTO `category`(`name`,`status`) VALUES('$name','$status')");

    if ($categoryQueryResult) {
        $data = array("status" => true, "message" => "Category created successfully!", "redirect_url" => $base_url . 'index.php');
    } else {
        $data = array("status" => false, "message" => "Something went wrong!", "redirect_url" => $base_url . 'index.php');
    }
    echo json_encode($data);
} else {
    $categoryQueryResult = $conn->query("SELECT * FROM category");
    $categoryQueryCount = $categoryQueryResult->num_rows;
}
