<?php 


class PortaModel extends Model {

	public function create($p_data = array()) {
		foreach ($p_data as $key => $value) {
			$$key = $value;
		}

		$content = str_replace("'", "\'", $content);

		$this->query = "INSERT INTO portafolio (p_id, nom_proyecto, imagen, descripcion) VALUES ('$p_id', $nom_proyecto, $imagen, $descripcion)";
		$this->set_query();
	}

	public function read($p_id = ''){
		$this->query = ($p_id != '')
		?"SELECT * from portafolio where p_id = $p_id" 
		:"SELECT * from portafolio";

		$this->get_query();
		//var_dump($this->rows);

		$num_rows = count($this->rows);

		$data = array();

		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}

		return $data;
	}

	public function update($p_data = array()){

		foreach ($p_data as $key => $value) {
			$$key = $value;
		}

		$content = str_replace("'", "\'", $content);

		$this->query = "UPDATE portafolio nom_proyecto, imaten, descripcion SET p_id = $p_id, nom_proyecto = '$nom_proyecto', imagen = '$imaten', descripcion = '$descripcion' WHERE p_id = $p_id";
		$this->set_query();
	}

	public function delete($p_id = '') {
		$this->query = "DELETE FROM portafolio WHERE p_id = '$p_id'";
		$this->set_query();
	}

	public function __destruct() {
	}
}
