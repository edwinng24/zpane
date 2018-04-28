<?php

require_once 'BaseController.php';
require_once 'ZipModel.php';

class ZipController extends BaseController
{

    // GET /zip/94539
    public function showAction()
    {
        $params = $this->getRequest()->getParams();
        $zip = $params['zip'];
        $zipModel = new ZipModel($zip);
        if ($zipModel->isValid()) {

            $arr = array('zip' => $zip,
                         'city' => $zipModel->getCity(), 
                         'state' => $zipModel->getState());  
            $res = $this->_sendResponse('zip', 'success', 200, 'zip_info', $arr);
        }
        else {
            $res = $this->_sendResponse('zip', 'failed', 404, 'zip_info', array());
        }

    }

}