<?php
class Model {
    public static function get_property() {
        $m = new static();
        $arr = get_class_vars(get_class($m));
        unset($arr["id"]);unset($arr["table"]);
        return $arr;
    }

    /*
     * Funcion findOneBy: Devuelve un objeto de la clase o false
     * VALUE  = Valor a buscar en la tabla
     * COLUMN = Columna donde buscar el valor. Por default did.
     * WHERE  = Sentencia para acotar la búsqueda; se debe poner nombre
     *          y valor; si son varias, se acompaña con su concatenación
     *          adecuada (AND / OR).
     * ORDER  = Sentencia para ordenar los registros.
     */
    public static function findOneBy($value,$column = "did",$where = "",$order = "") {
        $m = new static();
        $dato = R::findOne($m->table,"{$column} = ? {$where} AND elim = 0 {$order} LIMIT 1",Array($value));
        if($dato) {
            foreach (self::get_property() as $key => $value)
                $m->$key = $dato[$key];
            return $m;
        } else return false;
    }

    /*
     * Función findAllBy: Devuelve Array de Objetos de la clase 
     */
    public static function findAllBy($value,$column = "did",$where = "",$order = "") {
        $model = new static();
        $Adatos = Array();
        $datos = R::findAll($model->table,"{$column} = ? {$where} AND elim = 0 {$order}",Array($value));
        foreach ($datos as $dato) {
            $m = new static();
            foreach (get_class_vars(get_class($m)) as $key => $value)
                $m->$key = $dato[$key];
            $Adatos[] = $m;
        }
        return $Adatos;
    }

    /*
     * Función guardar
     * Devuelve objeto determinado
     */
    public static function guardar($arr) {
        $model = new static();
        $data = R::xdispense($model->table);
        foreach ($arr as $key => $value)
            $data[$key] = $value;
        
        if(isset($data["fecha"])) $data["fecha"] = date("Ymd");
        
        return self::findOneBy(R::store($data),"id");//R::load($model->table, $id);
    }

    /*
     * Función baja
     */
    public static function erase_($id) {
        $model = new static();
        $data = R::findOne($model->table,"id LIKE ?",Array($id));
        $data["elim"] = 1;
        R::store($data);
    }
    public static function findAll($order = "id") {
        $model = new static();
        $Adatos = Array();
        $datos = R::findAll($model->table,"elim = 0 ORDER BY {$order}");
        foreach ($datos as $dato) {
            $m = new static();
            foreach (get_class_vars(get_class($m)) as $key => $value)
                $m->$key = $dato[$key];
            $Adatos[] = $m;
        }
        return $Adatos;
    }

    public static function all__sql_query($column,$value) {
        $model = new static();
        $Adatos = Array();
        $datos = R::getAll("SELECT * FROM {$model->table} WHERE {$column} IN (".$value.") AND elim = 0");
        foreach ($datos as $dato) {
            $m = new static();
            foreach ($m as $key => $value) {
                if($key == "table") continue;
                $m->_SET($key,$dato[$key]);
            }
            $Adatos[] = $m;
        }
        return $Adatos;
    }

    public static function did() {
        $model = new static();
        $dato = R::getRow("SELECT MAX(did) AS did FROM {$model->table} WHERE elim = 0");
        if($dato) return $dato["did"] + 1;
        return 1;
    }
    public static function findDID($column,$find) {
        $model = new static();
        $dato = R::getRow("SELECT MAX(did) AS did FROM {$model->table} WHERE {$column} = ? AND elim = 0",Array($find));
        if($dato) return $dato["did"] + 1;
        return 1;
    }
}
