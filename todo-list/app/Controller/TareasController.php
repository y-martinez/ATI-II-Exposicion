<?php
class TareasController extends AppController {
	//var $helpers = array('Html','Form'); Helper para crear un Formulario
	function index() {
		$this->set('tareas',$this->Tarea->find('all', array('conditions' => array('Tarea.hecha' => true),'order' => array('Tarea.created' => 'asc'))));
		$this->set('tareasp',$this->Tarea->find('all', array('conditions' => array('Tarea.hecha' => false),'order' => array('Tarea.created' => 'asc'))));
	}


	function delete($id=null){
		$this->autoRender = false;
		$this->Tarea->id = $id;
		if($this->Tarea->delete($id)){
				$this->Session->setFlash('Tu tarea ha sido eliminada');
				$this->redirect(array('action'=>'index'));
		}else{
				$this->Session->setFlash('No se puede eliminar');
		}
	}

	function editar($id=null){
		$this->Tarea->id = $id;
		if($this->request->is('get')){
			$this->request->data =$this->Tarea->read();
		}else{
			if($this->Tarea->save($this->request->data)){
				$this->Session->setFlash('Tu tarea ha sido guardada');
				$this->redirect(array('action'=>'index'));
			}else{
				$this->Session->setFlash('No se puede');
			}
		}
	}

	function add() {
		if(!empty($this->data)){
			$this->Tarea->create();

			if($this->Tarea->save($this->data)){
				$this->Session->setFlash('Tarea Agregada con Exito');
				$this->redirect(array('action'=>'index'),null,true);
			}
			else{
				$this->Session->setFlash('Tarea no salvada');
			}
		}
	}
}
?>
