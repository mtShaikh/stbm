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


    public function register($email,$pass)
    {
      $query = $this->db->query("select registerUser('".$email."','".sha1($pass)."') as res");
     if($query->res==1){
      return true;
     }
     else{
      return false;
     }
    }
}
?>
