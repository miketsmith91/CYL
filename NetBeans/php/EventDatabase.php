<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "DatabaseConnect.php";
//include "Event.php";
function insertEvent($event){
    try {
        $connection = getConnection();
        $sql = "INSERT INTO event(event_name, event_type, start_date, "
                . "start_time, end_date, end_time)"
                . "VALUES ('$event->event_name', '$event->event_type', '$event->start_date',"
                . " '$event->start_time', '$event->end_date', '$event->end_time')";
        $connection->exec($sql);
        $event->id = $connection->lastInsertId();
        $connection = null;
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
            $event->event_name = $row['event_name'];
            $event->event_type = $row['event_type'];
            $event->start_date = $row['start_date'];
            $event->start_time = $row['start_time'];
            $event->end_date = $row['end_date'];
            $event->end_time = $row['end_time'];
        echo "Event Found :".$event->id."Event Name: ".$event->event_name;  
        $connection = null;
        }
    } catch (Exception $ex) {
        echo "EXCEPTION : Retrieve failed : " .$ex->getMessage();
    }
}

function updateEvent($event) {
    try {
        $connection = getConnection();
        $sql = "UPDATE event SET event_name = '$event->event_name', "
                . "event_type = '$event->event_type', start_date = '$event->start_date', "
                . "start_time = '$start_time', end_date = '$event->end_date', "
                . "end_time = '$event->end_time' WHERE id = $id";
        $result = $connection->exec($sql);
        $connection = null;
    } catch (Exception $ex) {
        echo "EXCEPTION : Update failed : " .$ex->getMessage();
    }
    $event2 = new Event();
    $event2->id = $id;
    $event2->event_name = $event_name;
    $event2->event_type = $event_type;
    $event2->start_date = $start_date;
    $event2->start_time = $start_time;
    $event2->end_date = $end_date;
    $event2->end_time = $end_time;
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