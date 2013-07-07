<?php

// I wasn't able to figure out how to change more than one schedule item at a time. I tried
// using php for the whole thing, including the html form, and a few other strategies. I kept running
// into the same problem where I couldn't figure out how to get a variable changed and then passed back to
// the main script. Anyway, here's my attempt.

//This array GETs all the values in the text inputs.

//$day = $_GET['day'];

//$hour = $_GET['hour'];
//$activity = $_GET['activity'];

$collect = array("M" => "Go",
    				"t" => "Stop");



var  $collect = array("M" => array("9am" => "Log on", //This array holds all the times and activities of the schedule.
                       "10am" => "Answer emails",
                       "11am" => "work out",
                       "12pm" => "Lunch",
                       "1pm" => "Meeting with Rob",
                       "2pm" => "Talk to Sadie about lunch",
                       "3pm" => "go to school",
                       "4pm" => "Check email",
                       "5pm" => "log off"),
               "T" => array("9am" => "log on",
                              "10am" => "talk to Linda",
                              "11am" => "check real estate listings",
                              "12pm" => "Lunch",
                              "1pm" => "finish proposal",
                              "2pm" => "work out",
                              "3pm" => "check email",
                              "4pm" => "meeting with Geoffroy",
                              "5pm" => "log off"),
                "W" => array("9am" => "meditation hour",
                             "10am" => "log on",
                             "11am" => "update blog",
                             "12pm" => "sort mail",
                             "1pm" => "nap",
                             "2pm" => "meeting with Alex",
                             "3pm" => "Head out for long weekend",
                             "4pm" => "call Eunice from the car",
                             "5pm" => "buy flowers"),
                "Th" => array("9am" => "meditation hour",
                             "10am" => "walking tour",
                             "11am" => "tennis",
                             "12pm" => "shuffleboard extreme",
                             "1pm" => "nap",
                             "2pm" => "lunch with Connor",
                             "3pm" => "bath salt tutorial",
                             "4pm" => "workout",
                             "5pm" => "dinner with Eunice"),
               "F" => array("9am" => "acupuncture",
                             "10am" => "walking tour: Beach",
                             "11am" => "ping-pong expo",
                             "12pm" => "lawn darts extreme",
                             "1pm" => "nap",
                             "2pm" => "lunch with Chalker",
                             "3pm" => "sushi tutorial",
                             "4pm" => "workout",
                             "5pm" => "dinner with Connor"));


// this if statement checks to see if the html form has passed any values
while(list($key, $value) =each($collect)) {

  echo $key. ":</br>";
  while(list($kay, $vale) =each($value)) {
    echo $kay.": ".$vale."<br/>";
    }
}



?>
