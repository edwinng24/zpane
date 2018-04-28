<?php

class ZipModel {

    private $zip;
    private $city;
    private $state;

    function __construct($zip) {
        $this->zip = $zip;
    }

    public function isValid() {
        $status = false;
        if ($this->zip == "") return $status;
        $db = Zend_Registry::get('rdb');
        $sql = "select city, state from lib.zipcode where zip=".$this->zip;
        $results = $db->fetchRow($sql);
        if ($results) {
            $this->city = $results['city'];
            $this->state = $results['state'];
            $status = true;
        }
        return $status;
    }

    public function getState() { return $this->state; }
    public function getCity() { return $this->city; }
    
}