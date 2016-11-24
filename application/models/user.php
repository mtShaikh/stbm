<?php
/**
*
*/
class user extends CI_Model
{

  public function login($email,$pass)
  {
    $query = $this->db->query("CALL authenticateUser('".$email."','".sha1($pass)."')");
  /*  $this->db->where('email',$email);
    $this->db->where('password',SHA1($pass));
    $query=$this->db ->get('users');
    /*if($query->num_rows()==1){
      return $query->row();
    }
    else{      return false;
    }*/
    if($query->num_rows()==1){
      return $query->row();
    }
    else{
      return false;
    }
  }


    /*public function verify($email)
    {
      $this->db->select('r.name');
      $this->db->from('role r,users u');
      $this->db->where('u.email',$email);
      $this->db->where('r.roleID','u.roleID');
      $this->db->limit(1);

      $query=$this ->db ->get();
      /*_where('users',[
        'type'=>$type,
        'email'=>$email,
        'password'=>SHA1($pass)
      ]);
      if($query->num_rows()==1){
        return $query->result();
      }
      else{
        return false;
        }
    }*/
}
?>
