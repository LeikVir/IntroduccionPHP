<?php

namespace App\Controllers;

class JobsController {
    public function getAddJobAction() {
        if (!empty($_POST)){
            $job = new Job();
            $job->title = $_POST['title'];
            $job->description = $_POST['description'];
            $job->month = $_POST['month'];
            $job->save();
        }

    include '../views/addJob.php';
    }
}