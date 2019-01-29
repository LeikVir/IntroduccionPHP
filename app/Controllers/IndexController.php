<?php

namespace App\Controllers;

use App\Models\{Job, Project};

class IndexController {
    public function indexAction() {

    $jobs= Job::all();
    $projects = Project::all();

    $var1 = 'Méndez';
    $name = "Luis Fernando $var1";
    $limit_month = 2344;
    include '../views/index.php';    
    }
}