<?php
include "Event.php";
include "EventDatabase.php";
$connection = getConnection();

$testEvent= new Event();
$testEvent -> eventName = "testthing";
$testEvent -> eventType = "testType";
$testEvent -> startDate = "20150925";
$testEvent -> startTime = "testStartTime";
$testEvent -> endDate = "testEndDate";
$testEvent -> endTime = "testEndTime";
$testEvent -> organizer = "testOrganizer";
$testEvent -> location = "testLocation";
$testEvent -> address = "testAddress";
$testEvent -> city = "testCity";
$testEvent -> state = "testState";
$testEvent -> zipCode = "testZipCode";
$testEvent -> partnerOrganization = "testPartner";
$testEvent -> cylVolunteersNeeded = 6;
$testEvent -> description = "testDescription";

insertEvent($testEvent);
retrieveEventById($testEvent->id);
$testEvent-> location = "newTestLocation";
updateEvent($testEvent);
//deleteEvent($testEvent->id);
echo("<br><br>Test Completed")
?>