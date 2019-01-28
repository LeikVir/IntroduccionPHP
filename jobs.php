<?php

$var1 = 'Méndez';
$name = "Luis Fernando $var1";
$limit_month = 2344;


use App\Models\{Job, Project};

$jobs= Job::all();
$projects = Project::all();
    
  function printElement($job) {
    // if($job->visible == false) {
    //   return;
    // }
  
    echo '<li class="work-position">';
    echo '<h5>' . $job->title . '</h5>';
    echo '<p>'.$job->description.'</p>';
    echo $job->getDurationAsString();
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }
  