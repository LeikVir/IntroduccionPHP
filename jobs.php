<?php

$var1 = 'Méndez';
$name = "Luis Fernando $var1";
$limit_month = 2344;

class Job {
    private $title;
    public $description;
    public $visible = true;
    public $month;
    
    public function __construct($title, $description, $month) {
        $this->setTitle($title); 
        $this->description = $description; 
        $this->month = $month;
    }

    public function setTitle($t) {
        if($t == '') {
            $this->title = 'N/A';
        }else {
            $this->title = $t;
        }
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getDurationAsString() {
    
        $years = floor($this->month/12);
        $months = $this->month%12;
        if (($years >= 1) && ($months != 0)) {
        return "$years years $months months <br>";
        } else if ((($years >= 1) && ($months == 0))) {
        return "$years years <br>";
        } else {
        return "$months months <br>";
        }
    }
}


$job1 = new Job('PHP Developer', 'This job was greaaaaat!!', 23);

$job2 = new Job('Python  Developer', 'This job was... meh', 12);

$job3 = new Job('', 'This job was... meh', 16);

$Job = [
    $job1,
    $job2,
    $job3
    ];

//     0 => [
//       'title'=> '',
//       'description' => ,
//       'visible' => true,
//       'month' => 26
//     ],
//     1 => [
//       'title'=> ,
//       'description' => ,
//       'visible' => false,
//       'month' => 14
//       ],
//     2 => [
//       'title'=>'DevOps',
//       'description'=>'THIS WAS THE BEST JOB',
//       'visible' => false,
//       'month' => 5
//     ],
//     3 => [
//       'title'=>'FrontEnd Developer',
//       'description'=>'THIS WAS THE FIRST JOB',
//       'visible' => true,
//       'month' => 12
//     ],
//     4 => [
//       'title'=>'AI Python Dev',
//       'description'=>'THIS WAS THE LAST JOB',
//       'visible' => true,
//       'month' => 3
//     ]
//   ];

  
  function printJob($Job, $idx) {
    if($Job[$idx]->visible == false) {
      return;
    }
  
    echo '<li class="work-position">';
    echo '<h5>' . $Job[$idx]->getTitle() . '</h5>';
    echo '<p>'.$Job[$idx]->description.'</p>';
    echo $Job[$idx]->getDurationAsString();
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }
  