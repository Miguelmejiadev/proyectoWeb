<?php 
class PortaController {
	private $model;

	public function __construct() {
		$this->model = new PortaModel();
	}

	public function create( $p_data = array() ) {
		return $this->model->create($p_data);
	}

	public function read( $p_id = '' ) {
		return $this->model->read($p_id);
	}

	public function update( $p_data = array() ) {
		return $this->model->update($p_data);
	}


	public function delete( $p_id = '' ) {
		return $this->model->delete($p_id);
	}

	public function __destruct() {
}
}