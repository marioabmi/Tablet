<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Model_carrito extends CI_Model { 

    public function carrito()
    {    
        $query = $this->db->query('SELECT 
tbl_carrito.idProducto,
tbl_carrito.codigo,
tbl_carrito.cantidad,
clientes.nombre,
productos.nombre FROM tbl_carrito
inner join clientes on clientes.idCliente = tbl_carrito.idCliente
inner join productos on productos.idProducto = tbl_carrito.idProducto
where tbl_carrito.idCliente= 252 and tbl_carrito.int_transaccionefectuada = 0;');
        return $query->result();
    }
 }