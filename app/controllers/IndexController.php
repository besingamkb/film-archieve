<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$this->dispatcher->forward(array(
            "action" => "main"
        ));
    }

    public function mainAction() {

    }

    public function getJsonAction() {
    	$data = Film::find();
		header('content-type: application/json');
    	$jsonData = array();

    	foreach ($data as $row) {
    		$jsonData[] = $row;
    	}
    	
    	$jsonReturnData = json_encode($jsonData);

    	echo $jsonReturnData;
    	die();

    }



}