<?php
include("Json.php");
$file = "app.json";

$json = new Json($file);
$user = [
    "name" => "azamat",
    "job" => "coder",
    "city" => "new york"
];

$users = [
    [
        "name" => "azamat",
        "job" => "coder",
        "city" => "new york"
    ],
    [
        "name" => "azamat",
        "job" => "coder",
        "city" => "new york"
    ],
    [
        "name" => "azamat",
        "job" => "coder",
        "city" => "new york"
    ],
];
print_r($json->add_to_json_array($users));
