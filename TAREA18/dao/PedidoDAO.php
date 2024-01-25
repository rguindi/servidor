<?php
class PedidoDAO{
    public static function findAll(){
        $sql = "SELECT * FROM Pedido WHERE activo = 1";
        $parametros = array();
        $result = FactoryBD::realizaConsulta($sql, $parametros);
        $array_pedidos = array();
        while ($pedido = $result->fetchObject()) {
            $pedido = new Pedido(
                $pedido->id,
                $pedido->cod_producto,
                $pedido->cantidad,
                $pedido->fecha,
                $pedido->usuario,
                $pedido->total,
                $pedido->activo
            );

            array_push($array_pedidos, $pedido);
        }
        return $array_pedidos;
    }

    public static function findByCodigo($id){
        $sql = "SELECT * FROM Pedido WHERE id = ? AND activo = 1";
        $parametros = array($id);
        $result = FactoryBD::realizaConsulta($sql, $parametros);
        if ($result->rowCount() == 1) {

            $pedido = $result->fetchObject();
            $pedido = new Pedido(
                $pedido->id,
                $pedido->cod_producto,
                $pedido->cantidad,
                $pedido->fecha,
                $pedido->usuario,
                $pedido->total,
                $pedido->activo
            );
            return $pedido;
        } else {
            return null;
        }
    }

    //COMPRA PRODUCTO procesacompra, y actualiza stock
    public static function compraProducto($pedido, $producto){
        $sql = "INSERT INTO Pedido (cod_producto, cantidad, fecha, usuario, total, activo) VALUES (?,?,?,?,?,?)";
        //insertar todos los atributos
        $parametros = array(
            $pedido->cod_producto,
            $pedido->cantidad,
            $pedido->fecha,
            $pedido->usuario,
            $pedido->total,
            $pedido->activo
        );
        ;
        if (FactoryBD::realizaConsulta($sql, $parametros)) {
            ProductoDAO::reduceStock($pedido->cod_producto, $pedido->cantidad);
            return true;
        } else {
            return false;
        }
    }

    public static function findByUser($user) {
        $sql = "SELECT * FROM Pedido WHERE usuario = ? AND activo = 1";
        $parametros = array($user);
        $result = FactoryBD::realizaConsulta($sql, $parametros);
        $array_pedidos = array();
        while ($pedido = $result->fetchObject()) {
            $pedido = new Pedido(
                $pedido->id,
                $pedido->cod_producto,
                $pedido->cantidad,
                $pedido->fecha,
                $pedido->usuario,
                $pedido->total,
                $pedido->activo
            );

            array_push($array_pedidos, $pedido);
        }
        return $array_pedidos;
    }

}