<?php
// !!!! DO NOT TOUCH !!!!
$routes = ["GET" => [], "POST" => []];

// Optional:
// $routes["ROOT"] = ["controller" => "main", "action" => "index"]

// Add routes for get requests here
$routes["GET"] = [
  "/" => ["controller" => "main", "action" => "index"],
  "/asdf/" => ["controller" => "main", "action" => "test2"]
];

// Add routes for post requests here
$routes["POST"] = [
  "/" => ["controller" => "main", "action" => "formsubmitted"]
];
?>
