<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "EventDatabase.php";
include "Event.php";
$event = new Event();
$event -> eventName = $_POST["event_name"];
$event -> eventType = $_POST["event_type"];
$event -> startDate = $_POST["start_date"];
$event -> startTime = $_POST["start_time"];
$event -> endDate = $_POST["end_date"];
$event -> endTime = $_POST["end_time"];
$event -> organizer = $_POST["organizer"];
$event -> location = $_POST["location"];
$event -> address = $_POST["address"];
$event -> city = $_POST["city"];
$event -> state = $_POST["state"];
$event -> zipCode = $_POST["zip_code"];
$event -> partnerOrganization = $_POST["partner_organization"];
$event -> cylVolunteersNeeded = $_POST["cyl_volunteers_needed"];
$event -> description = $_POST["description"];

if($event->validate()){
    echo"Is valid: <br/>";
    echo$event->toString();
} else {
    echo "Try again";
}
?>