<?php

class Book_model extends CI_Model
{
    protected $table = 'books';

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
        $statement = "INSERT INTO $this->table(isbn,title,synopsis,author,publisher,category,languange, created_at, updated_at ) VALUES(?,?,?, ?, ?, ?, ?, ?, ?)";
        return $this->db->query($statement, $data);
    }

    public function update($id,$data){

        $statement = "UPDATE $this->table SET isbn= ?,title= ? ,synopsis = ? ,author = ? ,publisher= ?, category= ?, languange= ? , updated_at= ? where id=?";
        $data['id'] = $id;

        return $this->db->query($statement, $data);
    }

   public function delete($id){
   $statement = "DELETE FROM $this->table where id=?";
   return $this->db->query($statement,[$id]);
   }

}