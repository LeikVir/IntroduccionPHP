<?php

namespace App\Controllers;

use App\Models\Project;
use Respect\Validation\Validator as v;

class ProjectsController extends BaseController {
    public function getAddProjectAction($request) {
        $responseMessage = null;

        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $projectValidator = v::key('title', v::stringType()->notEmpty())
                ->key('description', v::stringType()->notEmpty());
                //   ->key('month', v::numeric()->positive());
            
            try{

                $projectValidator->assert($postData);
                $postData = $request->getParsedBody();
                $project = new project();
                $project->title = $_POST['title'];
                $project->description = $_POST['description'];
                $project->month = $_POST['month'];
                $project->save();

                $responseMessage = 'Saved';
                
            }   catch (\Exception $e) {
                $responseMessage = $e->getMessage();
            }  
        }


    return $this->renderHTML('addProject.twig', [
        'responseMessage' => $responseMessage
    ]);
    }
}