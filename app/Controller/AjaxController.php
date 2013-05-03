<?php

class AjaxController extends AppController {

	public function history() {
        $term=$_GET['term'];
		$this->autoRender=false;        
        $this->loadModel('History');
        $r=$this->History->find('all', array('conditions' => array('histories.created LIKE' => '%'.$term.'%')));
        foreach ($r as $c) {
            $tmp[]=array('id' => $c['Tag']['id'],'value' => $c['Tag']['name'],'label' =>$c['Tag']['name'], 'cop' => $c['Tag']['id']); 
        }
        echo json_encode($tmp);
        exit();
    }
   

}
