<?php 

function debug($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

function slugify($text){
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'anonymous';
  }

  return $text;
}


//get late time
function getLateTime($startTime, $endTime){
  $seconds = calculateTimeDiff($startTime, $endTime);

  $lateTime = '';

  $minutes = ($seconds / 60) % 60;
  $hours = round($seconds / (60 * 60));

  if ($hours  > 1) {
    $hourUnit = "hours";
  }else{
    $hourUnit = "hour";
  }

  if($minutes > 1){
    $minuteUnit = 'minutes';
  }else{
    $minuteUnit = 'minute';
  }

  if($seconds == 0){
    //acurate time
    echo "acurate time";
  }else if($seconds < 0){
    //before start time
  }else {
    //after start time
    if($hours == 0){
      $hours = '';
    }else{
       $hours = "$hours $hourUnit";
    }
    $lateTime = "$hours $minutes $minuteUnit";
  }
  return $lateTime;
}


//get early time
function getEarlyTime($startTime, $endTime){
  $seconds = calculateTimeDiff($startTime, $endTime);

  $earlyTime = '';

  if($seconds == 0){
    //acurate time
  }else if($seconds < 0){
    //before start time
    $seconds = abs($seconds);
    $minutes = ($seconds / 60) % 60;
    $hours = round($seconds / (60 * 60));

    if ($hours  > 1) {
      $hourUnit = "hours";
    }else{
      $hourUnit = "hour";
    }

    if($minutes > 1){
      $minuteUnit = 'minutes';
    }else{
      $minuteUnit = 'minute';
    }
    if($hours == 0){
        $hours = '';
      }else{
         $hours = "$hours $hourUnit";
      }
      $earlyTime = "$hours $minutes $minuteUnit";
  }else {
    //after start time
  }
  return $earlyTime;
}


//calculate time difference
function calculateTimeDiff($startTime, $endTime){

  $time1 = date("H:i", strtotime($startTime));
  $time2 = date("H:i", strtotime($endTime));

  list($hours, $minutes) = explode(':', $time1);
  $startTimestamp = mktime($hours, $minutes);

  list($hours, $minutes) = explode(':', $time2);
  $endTimestamp = mktime($hours, $minutes);

  $seconds = $endTimestamp - $startTimestamp;
  return $seconds;

/*  
  $minutes = ($seconds / 60) % 60;
  $hours = round($seconds / (60 * 60));
  echo "<b>$hours</b> hours and<b>$minutes</b> minutes</b>";
  */
 
}