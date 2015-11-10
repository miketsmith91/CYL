<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Event {
    public $id = "";
    public $event_name = "";
    public $event_type = "";
    public $start_date = "";
    public $start_time = "";
    public $end_date = "";
    public $end_time = "";
    public $organizer = "";
    //public $location = "";
    //public $address = "";
    //public $city = "";
    //public $state = "";
    //public $zip_code = "";
    //public $partner_organization = "";
    //public $cyl_volunteers_neede = "";
    //public $description = "";
    
    public function validate(){
        if ($this->event_name !="" and $this->event_type !="" and $this->start_date !=""){
            return true;
        } else {
            return false;
        }
    }
    public function toString(){
        return "event_name:$this->event_name";
    }
}
?>