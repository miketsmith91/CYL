<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "EventDatabase.php";
include "Event.php";
$event = new Event();
$event -> event_name = $_POST["event_name"];
$event -> event_type = $_POST["event_type"];
$event -> start_date = $_POST["start_date"];
$event -> start_time = $_POST["start_time"];
$event -> end_date = $_POST["end_date"];
$event -> end_time = $_POST["end_time"];
//$event -> organizer = $_POST["organizer"];
//$event -> location = $_POST["location"];
//$event -> address = $_POST["address"];
//$event -> city = $_POST["city"];
//$event -> state = $_POST["state"];
//$event -> zip_code = $_POST["zip_code"];
//$event -> partner_organization = $_POST["partner_organization"];
//$event -> cyl_volunteers_needed = $_POST["cyl_volunteers_needed"];
//$event -> description = $_POST["description"];
echo("<h1>New Event: ".$event->event_name."</h1><br/>");
echo("<h4>Type: ".$event->event_type."</h4><br/>");
if($event->validate()){
    echo"Is valid: ";
    echo$event->toString();
} else {
    echo "Try again";
}
insertEvent($event->event_name,$event->event_type,$event->start_date,
        $event->start_time,$event->end_date,$event->end_time);
retrieveEventById(1);
updateEvent(1,"fuck","fuck","fuck","fuck","fuck","fuck");
deleteEvent(1);
//deleteEvent(1);
//echo("New Event: ".$event_name);
//$start_date=$_POST["start_date"];
//echo("<h1>Start Date: ".$start_date."</h1>");


?>