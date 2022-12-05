<?php

class Borrow_books_model extends CI_Model
{
    protected $table = 'borrow_books';

    public function all()
    {
        return $this->db->query("SELECT $this->table.* , member.full_name as name FROM $this->table JOIN member on member.id = $this->table.member_id")->result();//result untuk banyak data
    }

    public function findByID($id)
    {
        return $this->db->query("select * from $this->table where id=?",[$id])->row();//row untuk satu data
    }

    public function insert($data)
    {
        $statement = "INSERT INTO $this->table(member_id,trx_date, note, created_at,updated_at ) VALUES(?, ?, ?, ?, ?)";
        return $this->db->query($statement, $data);
    }

    public function update($id,$data){

        $statement = "UPDATE $this->table SET member_id = ? , note = ? , updated_at = ? where id=?";
        $data['id'] = $id;

        return $this->db->query($statement, $data);
    }

   public function delete($id){
   $statement = "DELETE FROM $this->table where id=?";
   return $this->db->query($statement,[$id]);
   }

}