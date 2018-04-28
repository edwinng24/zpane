<?php

require_once 'BaseController.php';
require_once 'AbaModel.php';

class AbaController extends BaseController
{

    // GET /aba/123456789 
    public function showAction()
    {
        $params = $this->getRequest()->getParams();
        $aba = $params['routingnum'];
        $abaModel = new AbaModel($aba);
        if ($abaModel->isValid()) {
            
            $arr = array('routing_num' => $aba,
                         'name' => $abaModel->getBankName(), 
                         'city' => $abaModel->getCity(), 
                         'state' => $abaModel->getState(), 
                         'zip' => $abaModel->getZip(), 
                         'new_routing_num' => $abaModel->getNewRoutingNum());  
            $res = $this->_sendResponse('aba', 'success', 200, 'aba_info', $arr);
        }
        else {
            $res = $this->_sendResponse('aba', 'failed', 404, 'aba_info', array());
        }

    }

}