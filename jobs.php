<?php

$var1 = 'Méndez';
$name = "Luis Fernando $var1";
$limit_month = 2344;

require_once 'vendor/autoload.php'; 

use App\Models\{Job, Project, Printable};

$job1 = new Job('PHP Developer', 'This job was greaaaaat!!', 23);

$job2 = new Job('Python  Developer', 'This job was... meh', 12);

$job3 = new Job('', 'This job was... meh', 16);

$project1 = new Project('Project 1', 'Descripction 1', 2);

$Job = [
    $job1,
    $job2,
    $job3
    ];

$Projects = [
    $project1
];
    
  function printElement(Printable $job) {
    if($job->visible == false) {
      return;
    }
  
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
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
  