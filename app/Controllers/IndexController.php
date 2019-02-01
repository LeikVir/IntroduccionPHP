<?php

namespace App\Controllers;

use App\Models\{Job, Project};

class IndexController extends BaseController {
    public function indexAction() {

    $jobs= Job::all();
    $projects = Project::all();

    $var1 = 'Méndez';
    $name = "Luis Fernando $var1";
    $limit_month = 2344;
    
    return $this->renderHTML('index.twig', [
        'name' => $name,
        'title1' => $jobs[0]->title,
        'jobs' => $jobs,
        'projects' => $projects
    ]);
    
    }
}