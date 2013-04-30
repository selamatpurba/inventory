<?php
App::uses('AppController', 'Controller');
/**
 * Items Controller
 *
 * @property Item $Item
 */
class ItemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Item->recursive = 0;
		$this->set('items', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid item'));
		}
		$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
		$this->set('item', $this->Item->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Item->create();
			if ($this->Item->save($this->request->data)) {
				$name=$this->request->data['Item']['name'];
				$text="Pengguna menambahkan item berupa ".$name;
				$sql="INSERT INTO `histories` (`value`,`created`)VALUES ('".$text."',CURRENT_TIMESTAMP)";
				$this->Item->query($sql);				
				$this->Session->setFlash(__('The item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			//debug($this->request->data);
			//exit();
			if ($this->Item->save($this->request->data)) {
				$first=$this->data['first'];
				$name=$this->request->data['Item']['name'];
				$text="Pengguna mengubah item ".$first." menjadi ".$name;
				$sql="INSERT INTO `histories` (`value`,`created`)VALUES ('".$text."',CURRENT_TIMESTAMP)";
				$this->Item->query($sql);				
				$this->Session->setFlash(__('The item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
			$this->request->data = $this->Item->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			throw new NotFoundException(__('Invalid item'));
		}
		$this->request->onlyAllow('post', 'delete');
		$sql="SELECT name FROM `items` where `id` = ".$id;
		$execute=$this->Item->query($sql);
		$name=$execute[0]['items']['name'];
		//debug();
		//exit();
		$text="Pengguna menghapus item ".$name;
		$sql2="INSERT INTO `histories` (`value`,`created`)VALUES ('".$text."',CURRENT_TIMESTAMP)";
		$this->Item->query($sql2);
		if ($this->Item->delete()) {
			
			$this->Session->setFlash(__('Item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
