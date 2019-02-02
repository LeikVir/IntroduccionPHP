<?php

namespace App\Controllers;

use App\Models\Job;
use Respect\Validation\Validator as v;


class JobsController extends BaseController {
    
    public function getAddJobAction($request) {
        $responseMessage = null;

        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $jobValidator = v::key('title', v::stringType()->notEmpty())
                  ->key('description', v::stringType()->notEmpty());
                //   ->key('month', v::numeric()->positive());
            
            try{

                $jobValidator->assert($postData);
                $postData = $request->getParsedBody();
             
                // $files = $request -> getUploadedFiles();
                // $logo = $files['logo'];

                
                // if ($logo->getError() == UPLOAD_ERR_OK) {
                //     $fileName = $logo->getClientFilename();
                //     $logo->moveTo('uploads/$fileName');
                // }

                $files = $request->getUploadedFiles();
                $logo = $files['logo'];

                
                
                $job = new Job();
                $job->title = $postData['title'];
                $job->description = $postData['description'];
                $job->month = $postData['month'];
                if($logo->getError() == UPLOAD_ERR_OK) {
                    $fileName = $logo->getClientFilename();
                    $logo->moveTo("uploads/$fileName");
                    $job->logo = "uploads/$fileName";
                }
                $job->save();

                $responseMessage = 'Saved';
                
            }   catch (\Exception $e) {
                $responseMessage = $e->getMessage();
            }  
        }


    return $this->renderHTML('addJob.twig', [
        'responseMessage' => $responseMessage
    ]);
    }
}

//validar los elementos de un objeto == attribute
//validar los miembros de un arreglo == key
//Debemos validar los archivos que se suban, además es ideal que en el servidor solo tengas el codigo php y en otro servidor los archivos subidos.
