<?php

class BaseController extends Zend_Controller_Action
{

    public function preDispatch() {
        
        // authenticate the request
        $valid = true;
        if (!$valid) {
            $response = Zend_Controller_Front::getInstance()->getResponse();
            $response->setHttpResponseCode(401);
            $this->_sendResponse('API', 'Unauthorized Access', 401, 'api_info',  array());
        }
    }

    protected function _sendResponse($apiName, $status, $status_code, $dataName, $data) {

        $res =  array($apiName => array(
            'results' => array (
                'status' => $status,
                'status_code' => $status_code,
                $dataName => $data)));
        $this->_helper->json->sendJson($res);
    }
            

}