<?php
class DB{
    private function con(){
        $r = new PDO('mysql:host=localhost;dbname=abudhabi;charset=utf8', 'root', '');
        $r->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $r;
    }

    public static function select($table, $limit = null){
        if($limit) $r = self::con()->prepare("SELECT * FROM {$table} LIMIT {$limit}");
        else $r = self::con()->prepare("SELECT * FROM {$table}");

        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public static function find($arr){
        $r = self::con()->prepare("SELECT * FROM {$arr[0]} WHERE id = ?");
        $r->bindParam(1,$arr[1],		PDO::PARAM_INT);
        $r->execute();
        return $r->fetch(PDO::FETCH_OBJ);
    }

    public static function paginate($arr, $limit = null){
        if($limit) $r = self::con()->prepare("SELECT * FROM {$arr[0]} WHERE id > ? LIMIT {$limit}");
        else $r = self::con()->prepare("SELECT * FROM {$arr[0]} WHERE id > ?");
        $r->bindParam(1,$arr[1],		PDO::PARAM_INT);
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public static function selectWhere($table, $where = null, $value = null){
        if($where) {
            $value = "%{$value}%";
            $r = self::con()->prepare("SELECT * FROM {$table} WHERE {$where} LIKE ?");
            $r->bindParam(1,$value, PDO::PARAM_STR);
        }else $r = self::con()->prepare("SELECT * FROM {$table}");
        $r->execute();
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public static function insert($table, $data = [], $auto = false){
        if(count($data) > 0) {
            $sql = "INSERT INTO {$table} (";

            foreach ($data as $index => $value){
                $sql .= "{$index},";
            }
            $sql = substr($sql, 0, -1) . ") VALUES (";
            foreach ($data as $index => $value){
                $sql .= "?,";
            }
            $sql = substr($sql, 0, -1) . ")";

            $r = self::con()->prepare($sql);

            if($auto){
                $c = 1;
                foreach ($data as $index => $value){
                    $r->bindParam($c++, $value, PDO::PARAM_STR);
                }
            }else{
                $r->bindParam(1, $data["title"], PDO::PARAM_STR);
                $r->bindParam(2, $data["description"], PDO::PARAM_STR);
                $r->bindParam(3, $data['picture'], PDO::PARAM_STR);
            }

            return $r->execute();
        }else return "Incorrecto";
    }

    public static  function login($data = []){
        $r = self::con()->prepare("SELECT * FROM users WHERE username = ?");
        $r->bindParam(1,$data['username'],PDO::PARAM_STR);
        $r->execute();
        $user = $r->fetch(PDO::FETCH_OBJ);
        if(isset($user) && is_object($user) && ($user->password == $data['password'])) {
            session_start();
            $_SESSION['USER'] = $user;
            return true;
        }
        return 'Datos de acceso incorrectos.';
    }

    public static  function edit($table, $data = []){
        if(count($data) > 0) {
            $sql = "UPDATE {$table} SET ";

            foreach ($data as $index => $value){
                $sql .= "{$index} = ? , ";
            }

            $sql = substr($sql, 0, -2) . " WHERE id = ?";

            $r = self::con()->prepare($sql);

            $c = 1;
            $r->bindParam($c++, $data["title"], PDO::PARAM_STR);
            $r->bindParam($c++, $data["description"], PDO::PARAM_STR);
            $r->bindParam($c, $_GET['id'], PDO::PARAM_INT);

            return $r->execute();
        }else return "Incorrecto";
    }

    public static  function delete($table, $id){
        $r = self::con()->prepare("DELETE FROM {$table} WHERE id = ?");
        $r->bindParam(1, $id, PDO::PARAM_STR);
        $r->execute();
        return header('location: places-index.php');
    }


}