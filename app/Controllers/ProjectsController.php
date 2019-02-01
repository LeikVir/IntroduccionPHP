<?php

namespace App\Controllers;

use App\Models\Project;

class ProjectsController extends BaseController {
    public function getAddProjectAction($request) {
        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();          
            $projects = new Project();
            $projects->title = $_POST['title'];
            $projects->description = $_POST['description'];
            $projects->month = $_POST['month'];
            $projects->save();
        }

    return $this->renderHTML('addProject.twig');
    }
}
