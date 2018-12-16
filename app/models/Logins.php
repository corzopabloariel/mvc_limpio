<?php
class Logins extends Model {
	private $table;
	public $id;
	public $login_selector;
	public $login_token;
	public $login_expires;
	public $id_user;

    public function __get($property) {
		if((property_exists($this, $property)))
			return $this->table;
    }

    public function __set($property, $value) {
        if((property_exists($this, $property)))
            $this->$property = $value;
    }

    /*
	 * Función Guardar
	 * Previo a mandar a la Clase Abstracta, se genera un Array con los valores
	 */
	public function save($return_id = false) {
		$arr = Array();
		foreach ($this::get_property() as $key => $value) {
			if(isset($this->$key))
				$arr[$key] = $this->$key; 
			else
				$arr[$key] = "";
		}
		$o = $this::guardar($arr);
		
		if($return_id) return $o->id;
		else return $o;
	}

	public function erase() {
		$this::erase_($this->id);
	}
}
