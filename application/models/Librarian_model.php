<?php

class Librarian_model extends CI_Model
{
    protected $table = 'librarian';

    public function all()
    {
        return $this->db->query("SELECT * FROM $this->table")->result();//result untuk banyak data
    }

    public function findByID($id)
    {
        return $this->db->query("select * from $this->table where id=?",[$id])->row();//row untuk satu data
    }

    public function insert($data)
    {
        $statement = "INSERT INTO $this->table(username,name,email,password,avatar,created_at,updated_at) VALUES(?,?,?, ?, ?, ?, ?)";
        return $this->db->query($statement, $data);
    }

    public function update($id,$data)
    {
        if($data['avatar']){
            $statement ="UPDATE $this->table SET username= ?,name= ? ,email = ? ,avatar = ? ,updated_at= ? where id=?";
        }else{
            unset($data['avatar']);
            $statement ="UPDATE $this->table SET username= ?,name= ? ,email = ? ,updated_at= ? where id=?";
        }
        $data['id'] = $id;

        return $this->db->query($statement, $data);
    }

   public function delete($id){
   $statement = "DELETE FROM $this->table where id=?";
   return $this->db->query($statement,[$id]);
   }

}