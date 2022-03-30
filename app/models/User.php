<?php
class User extends Model{
    public function __construct(){
        parent::__construct();
        $this->table = 'client';
        $this->primaryKey = 'Reference';
    }
    
    public function signUp($params) {
        $this->execute("INSERT INTO {$this->table} (Reference, first_name, last_name, birthday) VALUES (?,?,?,?)", $params);
    }
}
