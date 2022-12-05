<?php

class Subscription_model extends CI_Model
{
    protected $table = 'subscription';

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
        $statement = "INSERT INTO $this->table(title,month,price,is_Active,created_at, updated_at) VALUES(?,?,?, ?, ?, ?)";
        return $this->db->query($statement, $data);
    }

    public function update($id,$data){

        $statement = "UPDATE $this->table SET title= ?,month = ? ,price = ? ,is_Active = ?, updated_at = ? where id=?";
        $data['id'] = $id;

        return $this->db->query($statement, $data);
    }

   public function delete($id){
   $statement = "DELETE FROM $this->table where id=?";
   return $this->db->query($statement,[$id]);
   }

}