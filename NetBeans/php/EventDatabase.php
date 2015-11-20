<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "DatabaseConnect.php";
include "Event.php";
function insertEvent($event){
    try {
        $connection = getConnection();
        $sql = "INSERT INTO event(event_name, event_type, start_date, "
                . "start_time, end_date, end_time, organizer, location, "
                . "address, city, state, zip_code, partner_organization, "
                . "cyl_volunteers_needed, description)"
                . "VALUES ('$event->eventName', '$event->eventType', '$event->startDate',"
                . " '$event->startTime', '$event->endDate', '$event->endTime',"
                . " '$event->organizer', '$event->location', '$event->address',"
                . " '$event->city', '$event->state', '$event->zipCode',"
                . " '$event->partnerOrganization', '$event->cylVoluneersNeeded',"
                . " '$event->description')";
        $connection->exec($sql);
        $event->id = $connection->lastInsertId();
        $connection = null;
        return $id;
    } catch (Exception $ex) {
        echo "EXCEPTION : Insert failed : " .$ex->getMessage();
    }
}

function retrieveEventById($id) {
    try {
        $connection = getConnection();
        $sql = "SELECT * FROM event WHERE id = $id";
        $result = $connection->query($sql);
        $event = new Event();
        foreach ($result as $row) {
            $event->id = $row['id'];
            $event->eventName = $row['event_name'];
            $event->eventType = $row['event_type'];
            $event->startDate = $row['start_date'];
            $event->startTime = $row['start_time'];
            $event->endDate = $row['end_date'];
            $event->endTime = $row['end_time'];
            $event->organizer = $row['organizer'];
            $event->location = $row['location'];
            $event->address = $row['address'];
            $event->city = $row['city'];
            $event->state = $row['state'];
            $event->zipCode = $row['zip_code'];
            $event->partnerOrganization = $row['partner_organization'];
            $event->cylVolunteersNeeded = $row['cyl_volunteers_needed'];
            $event->description = $row['description'];
        echo "Event Found : ".$event->id."<br/>Event Name: ".$event->eventName;  
        $connection = null;
        }
    } catch (Exception $ex) {
        echo "EXCEPTION : Retrieve failed : " .$ex->getMessage();
    }
}

function updateEvent($event) {
    try {
        $connection = getConnection();
        $sql = "UPDATE event SET event_name = '$event->eventName', "
                . "event_type = '$event->eventType', "
                . "start_date = '$event->startDate', "
                . "start_time = '$event->startTime', "
                . "end_date = '$event->endDate', "
                . "end_time = '$event->endTime', "
                . "organizer ='$event->organizer', "
                . "location = '$event->location', "
                . "address = '$event->address', "
                . "city = '$event->city', "
                . "state = '$event->state', "
                . "zip_code = '$event->zipCode', "
                . "partner_organization = '$event->partnerOrganization', "
                . "cyl_volunteers_needed = '$event->cylVolunteersNeeded', "
                . "description = '$event->description' "
                . "WHERE id = '$event->id'";
        $result = $connection->exec($sql);
        $connection = null;
    } catch (Exception $ex) {
        echo "EXCEPTION : Update failed : " .$ex->getMessage();
    }
    $event2 = new Event();
    $event2->id = $id;
    $event2->eventName = $event->eventName;
    $event2->event_type = $event->eventType;
    $event2->startDate = $event->startDate;
    $event2->startTime = $event->startTime;
    $event2->endDate = $event->endDate;
    $event2->endTime = $event->endTime;
    $event2->organizer = $event->organizer;
    $event2->location = $event->location;
    $event2->address = $event->address;
    $event2->city = $event->city;
    $event2->state = $event->state;
    $event2->zipCode = $event->zipCode;
    $event2->partnerOrganization = $event->partnerOrganization;
    $event2->cylVolunteersNeeded = $event->cylVolunteersNeeded;
    $event2->description = $event->description;
    return $event2;
}

function deleteEvent($id) {
    try {
        $connection = getConnection();
        $sql = "DELETE FROM event WHERE id = $id";
        $result = $connection->exec($sql);
        $connection = null;
    } catch (Exception $ex) {
        echo "EXCEPTION : Delete failed : ".$ex->getMessage();
    }
}