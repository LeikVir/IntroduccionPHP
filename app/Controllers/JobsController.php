<?php

namespace App\Controllers;

use App\Models\Job;

class JobsController {
    public function getAddJobAction($request) {
        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $job = new Job();
            $job->title = $_POST['title'];
            $job->description = $_POST['description'];
            $job->month = $_POST['month'];
            $job->save();
        }

    include '../views/addJob.php';
    }
}