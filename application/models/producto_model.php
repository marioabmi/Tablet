<?php
class Producto_model extends CI_Model{
    //put your code here
    
    function __construct() {        
    parent::__construct();

    }

    public function index()
    {
        $this->load->model('conexion');
  

        
        function Categoria( $idSucursal )
    {
        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBaseDatos('multirep');
        $rSQL = $this->getConsulta("SELECT productos.codigo,
            productos.nombre,
            productos.margenutilidad,
            productos.equivalente1,
            productos.equivalente2,
            inventario.existencia,
            precios.pmayoreo,
            precios.pmayoreo * 0.10 + precios.pmayoreo AS PrcPreferencial,
            precios.pmayoreo * 0.70 + precios.pmayoreo AS PrcDetalle,
            sucursales.idSucursal

        FROM productos
        INNER JOIN precios ON precios.idProducto = productos.idProducto    
        INNER JOIN inventario ON inventario.idProducto = productos.idProducto
        INNER JOIN sucursales ON sucursales.idSucursal = precios.idSucursal
        WHERE precios.idSucursal =  '$idSucursal';");
    
        if(mysql_num_rows($rSQL)>0)
        {
            while ($fila = mysql_fetch_assoc($rSQL))
            {
                array_push($resultado, $fila);
            }
        }
    
        $this->cerrarConexion();
    
        return $resultado;
    }

   function buscarLinkPorID( $idSucursal )
    {
        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBaseDatos('multirep');
        $rSQL = $this->getConsulta("SELECT productos.codigo,
            productos.nombre,
            productos.margenutilidad,
            productos.equivalente1,
            productos.equivalente2,
            inventario.existencia,
            precios.pmayoreo,
            precios.pmayoreo * 0.10 + precios.pmayoreo AS PrcPreferencial,
            precios.pmayoreo * 0.70 + precios.pmayoreo AS PrcDetalle,
            sucursales.idSucursal

        FROM productos
        INNER JOIN precios ON precios.idProducto = productos.idProducto    
        INNER JOIN inventario ON inventario.idProducto = productos.idProducto
        INNER JOIN sucursales ON sucursales.idSucursal = precios.idSucursal
        WHERE precios.idSucursal =  '$idSucursal';");
    
        if(mysql_num_rows($rSQL)>0)
        {
            while ($fila = mysql_fetch_assoc($rSQL))
            {
                array_push($resultado, $fila);
            }
        }
    
        $this->cerrarConexion();
    
        return $resultado;
    }

      }

    public function sucur(){
        $this->db->order_by('nombre','asc');
        $sucursal = $this->db->get('sucursales');
        if($sucursal->num_rows()>0)
        {
            return $sucursal->result();
        }
    }

        public function cliente(){
        $this->db->order_by('nombre','asc');
        $sucursal = $this->db->get('clientes');
        if($sucursal->num_rows()>0)
        {
            return $sucursal->result();
        }
    }

    }    