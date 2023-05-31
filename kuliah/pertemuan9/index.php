<?php 
require('functions.php');

$title = 'home';
$student = [
    [
        "nama" => "anissa nursafitri",
        "npm" => "223040163",
        "email" => "nissa@gmail.com"

    ],
    [
        "nama" => "mustika",
        "npm" => "223040166",
        "email" => "mustika@gmail.com"

    ]
    ];
    dd($SERVER[REQUEST_URI]);

    
    

    require('views/index.view.php');
    







