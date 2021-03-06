<?php
class Event {
    public $id = "";
    public $eventName = "";
    public $eventType = "";
    public $startDate = "";
    public $startTime = "";
    public $endDate = "";
    public $endTime = "";
    public $organizer = "";
    public $location = "";
    public $address = "";
    public $city = "";
    public $state = "";
    public $zipCode = "";
    public $partnerOrganization = "";
    public $cylVolunteersNeeded = "";
    public $description = "";

    public function validate(){
        if ($this->eventName !="" and $this->eventType !="" and $this->startDate !="" and $this->startTime !=""
                and $this->endDate !="" and $this->organizer !="" and $this->location and $this->address !=""
                and $this->city !="" and $this->state !="" and $this->zipCode !=""
                and $this->partnerOrganization !="" and $this->cylVolunteersNeeded !=""){
            return true;
        } else {
            return false;
        }
    }
    public function toString(){
        return "Event Name: $this->eventName <br/>Event Type: $this->eventType"
                . "<br/>Start Date: $this->startDate <br/>Start Time: $this->startTime"
                . "<br/>End Date: $this->endDate <br/>End Time: $this->endTime"
                . "<br/>Organizer: $this->organizer <br/>Location: $this->location"
                . "<br/>Address: $this->address <br/>City: $this->city"
                . "<br/>State: $this->state <br/>Zip Code: $this->zipCode"
                . "<br/>Partner Organization: $this->partnerOrganization"
                . "<br/>CYL Voluntters Needed: $this->cylVolunteersNeeded"
                . "<br/>Description: $this->description";
    }
}
?>
