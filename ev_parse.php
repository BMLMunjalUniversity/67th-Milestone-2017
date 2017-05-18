<?php
$file = fopen(dirname(__FILE__)."/EVENTS.csv","r");
$events = array();
while(!feof($file)) {
  array_push($events, fgetcsv($file));
}

function getEventInfo($evname) {
  global $events;
  foreach ($events as $key => $value) {
    if($value[1] == $evname)
      return $value;
  }
  return -1;
}

function getEventName($evname) {
  global $events;
  foreach ($events as $key => $value) {
    if($value[1] == $evname)
      return $value[0];
  }
  return -1;
}

function getAllEvents() {
  global $events;
  return $events;
}

function isFlagship($evname) {
  global $events;
  foreach ($events as $key => $value) {
    if($value[1] == $evname)
      return ($value[3]=='Flagship')?" flagship ":" ";
  }
  return -1;
}

function getEvType($evname) {
  global $events;
  foreach ($events as $key => $value) {
    if($value[1] == $evname)
      return " ".$value[2]." ";
  }
  return -1;
}

function getMaxParticipants($evname) {
  global $events;
  foreach ($events as $key => $value) {
    if($value[1] == $evname)
      return $value[6];
  }
  return -1;
}

function getMinimumParticipants($evname) {
  global $events;
  foreach ($events as $key => $value) {
    if($value[1] == $evname)
      return $value[5];
  }
  return -1;
}
