<?php

class AbaModel {

    private $routingNum;
    private $bankName;
    private $city;
    private $state;
    private $zip;
    private $newRoutingNum;

    function __construct($routingNum) {
        $this->routingNum = $routingNum;
    }

    public function isValid() {
        $status = false;
        if ($this->routingNum != "") {
            $db = Zend_Registry::get('rdb');
            $sql = "select name, city, state, zip, newRoutingNum from lib.aba where routingNum=".$this->routingNum;
            $results = $db->fetchRow($sql);
            if ($results) {
                $this->bankName = trim(ucfirst(strtolower($results['name'])));
                $this->city = trim(ucfirst(strtolower($results['city'])));
                $this->state = $results['state'];
                $this->zip = $results['zip'];
                $this->newRoutingNum = $results['newRoutingNum'];
                $status = true;
            }
        }
        return $status;
  }

  public function getBankName() { return $this->bankName; }
  public function getZip() { return $this->zip; }
  public function getNewRoutingNum() { return $this->newRoutingNum; }
  public function getState() { return $this->state; }
  public function getCity() { return $this->city; }
    


}