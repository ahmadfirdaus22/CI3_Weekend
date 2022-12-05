<?php

class Member_model extends CI_Model
{
    protected $table = 'member';

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
        $statement = "INSERT INTO $this->table(nik,full_name,phone,address,born_place, born_date, gender, country, nationality,created_at,updated_at ) VALUES(?,?,?, ?, ?, ?, ?, ?, ?,?,?)";
        return $this->db->query($statement, $data);
    }

    public function update($id,$data){

        $statement = "UPDATE $this->table SET nik = ? ,full_name = ? ,phone = ? ,address = ? ,born_place = ?, born_date = ? , gender = ? , country = ? , nationality = ? ,updated_at = ? where id=?";
        $data['id'] = $id;

        return $this->db->query($statement, $data);
    }

   public function delete($id){
   $statement = "DELETE FROM $this->table where id=?";
   return $this->db->query($statement,[$id]);
   }

}