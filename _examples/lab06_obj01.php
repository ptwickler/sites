<?php

  $new_time = $_GET["hour"];

  $new_activity = $_GET["activity"];


$daily_sched= array("9AM" => "Log on", "10AM" => "check inbox", "11AM" => "working", "12PM" => "lunch","1PM" => "run", "2PM" => "pick up kid from school", "3PM" => "working", "4PM" => "working", "5PM" => "Make kid a snack");

if ($new_time) {

    $daily_sched[$new_time] = $new_activity;
}



while (list($key, $value) = each($daily_sched)) {

 echo $key.": ".$value."<br>";
}


echo "back to change form <a href=\"sched.html\">HERE</a>";
?>
<form method="GET" action="lab06_obj01.php">
           <label for="hour">Enter the hour</label>
            <input type="text" name = "hour">
           <label for="activity">Enter the activity</label>
            <input type="text" name="activity">
            <input type="submit" value="change schedule"></input>
        </form>