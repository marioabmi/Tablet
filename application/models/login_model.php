<?php 
Class Login_model extends CI_Model
{
 function login($usuario, $clave)
 {
   $this -> db -> select('idUsuario, usuario, clave');
   $this -> db -> from('usuarios');
   $this -> db -> where('usuario', $usuario);
   $this -> db -> where('clave', MD5($clave));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>