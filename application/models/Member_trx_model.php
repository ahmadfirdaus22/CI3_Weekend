<?php

class Member_trx_model extends CI_Model
{
    protected $table = 'member_trx';

    public function all()
    {
        return $this->db->query("SELECT $this->table.* , member.full_name as name , subscription.title as title FROM $this->table JOIN member on member.id = $this->table.member_id JOIN subscription on $this->table.subs_id = subscription.id")->result();//result untuk banyak data
    }

    public function findByID($id)
    {
        return $this->db->query("select * from $this->table where id=?",[$id])->row();//row untuk satu data
    }

    public function insert($data)
    {
        $statement = "INSERT INTO $this->table(member_id,subs_id,trx_date,active_at, expire_at,status,total_order,note,created_at,updated_at ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
        return $this->db->query($statement, $data);
    }

    public function update($id,$data){

        $statement = "UPDATE $this->table SET member_id = ? , subs_id = ? ,active_at = ? , expire_at = ? ,status = ? ,total_order = ? ,note = ? , updated_at = ? where id=?";
        $data['id'] = $id;

        return $this->db->query($statement, $data);
    }

   public function delete($id){
   $statement = "DELETE FROM $this->table where id=?";
   return $this->db->query($statement,[$id]);
   }

}