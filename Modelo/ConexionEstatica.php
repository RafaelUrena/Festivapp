<?php

include_once 'Auxiliar/Constantes.php';

/**
 * Description of ConexionEstatica
 *
 * @author rafa
 */
class ConexionEstatica {

    private static $conexion;

    static function conectar() {

        try {
            self::$conexion = new mysqli(Constantes::$HOST, Constantes::$USUARIO, Constantes::$PASS, Constantes::$BBDD);
        } catch (Exception $ex) {
            echo 'Error al conectar a la base de datos';
        }
    }

    static function desconectar() {
        try {
            self::$conexion->close();
        } catch (Exception $ex) {
            echo 'Error al desconectar de la base de datos';
        }
    }

    static function agregarUsuario($usuario) {
        try {
            $stmt = self::$conexion->prepare("INSERT INTO USUARIO (Nombre,Apellido,Email,Password,Activo,Foto,Edad) VALUES(?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssisi", $usuario->getNombre(), $usuario->getApellido(), $usuario->getEmail(), $usuario->getPassword(), $usuario->getActivo(), $usuario->getFoto(), $usuario->getEdad());
            $stmt->execute();
        } catch (Exception $ex) {
            echo 'Error al agregar usuario';
        }
    }

    static function existeUsuario($email) {
        try {
            $stmt = self::$conexion->prepare("SELECT * FROM USUARIO,ROL_ASIGNADO WHERE Email =? AND USUARIO.ID_usuario = ROL_ASIGNADO.ID_usuario");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($fila = $result->fetch_assoc()) {
                $usuario = new Usuario($fila['ID_usuario'], $fila['Nombre'], $fila['Apellido'], $fila['Edad'], $fila['Email'], $fila['Password'], $fila['ID_rol'], $fila['Foto'], $fila['Activo']);
            }
            $stmt->close();
        } catch (Exception $ex) {
            
        }

        return $usuario;
    }

    static function sacarUsuarios() {
        try {

            $query = "SELECT * FROM usuario ORDER BY usuario.Email";
            $i = 0;

            $resultado = self::$conexion->query($query);
            while ($fila = $resultado->fetch_assoc()) {
                $usuario = new Usuario($fila['Nombre'], $fila['Apellido'], $fila['Edad'], $fila['Email'], $fila['Password'], $fila['Ganadas'], $fila['Administrador']);
                $usuarios[$i] = $usuario;
                $i++;
            }
            $resultado->close();
        } catch (Exception $ex) {
            echo 'Error al sacar usuarios.';
        }

        return $usuarios;
    }

    static function modificarUsuario($usuario) {
        try {
            $stmt = self::$conexion->prepare("UPDATE usuario SET usuario.Nombre = ?, usuario.Apellido = ?, usuario.Edad = ? WHERE usuario.Email = ?");
            $stmt->bind_param("ssis", $usuario->getNombre(), $usuario->getApellido(), $usuario->getEdad(), $usuario->getEmail());
            $stmt->execute();
        } catch (Exception $ex) {
            echo 'Error al modificar usuario.';
        }
    }

    static function eliminarUsuario($usuario) {
        try {
            $stmt = self::$conexion->prepare("DELETE FROM usuario WHERE usuario.Email = ?");
            $stmt->bind_param("s", $usuario->getEmail());
            $stmt->execute();
        } catch (Exception $ex) {
            echo 'Error al eliminar usuario.';
        }
    }

    static function modificarAdmin($usuario) {
        try {
            $stmt = self::$conexion->prepare("UPDATE usuario SET usuario.Administrador = ? WHERE usuario.Email = ?");
            $stmt->bind_param("is", $usuario->getAdmin(), $usuario->getEmail());
            $stmt->execute();
        } catch (Exception $ex) {
            echo 'Error al modificar rol';
        }
    }

//    static function modificarGanadas($usuario) {
//        try {
//            $stmt = self::$conexion->prepare("UPDATE usuario SET usuario.Ganadas = ? WHERE usuario.Email = ?");
//            $stmt->bind_param("is", $usuario->getGanadas(), $usuario->getEmail());
//            $stmt->execute();
//        } catch (Exception $ex) {
//            echo 'Error al modificar partidas ganadas';
//        }
//    }
//
//    static function sacarRanking() {
//        try {
//
//            $query = "SELECT Email,Ganadas FROM usuario ORDER BY Ganadas DESC ";
//            $i = 0;
//
//            $resultado = self::$conexion->query($query);
//                while ($fila = $resultado->fetch_assoc()) {
//                    $usuario = new Usuario($fila['Nombre'], $fila['Apellido'], $fila['Edad'], $fila['Email'], $fila['Password'], $fila['Ganadas'], $fila['Administrador']);
//                    $usuarios[$i] = $usuario;
//                    $i++;
//                }
//            
//        } catch (Exception $ex) {
//            echo 'Error al sacar ranking.';
//        }
//
//        return $usuarios;
//    }

    static function modificarPassword($usuario) {
        try {
            $stmt = self::$conexion->prepare("UPDATE usuario SET usuario.Password = ? WHERE usuario.Email = ?");
            $stmt->bind_param("ss", $usuario->getPassword(), $usuario->getEmail());
            $stmt->execute();
        } catch (Exception $ex) {
            echo 'Error al modificar la contraseña';
        }
    }

    static function sacarFestivalesNombre() {
        try {

            $query = "SELECT * FROM FESTIVAL ORDER BY Nombre";
            $i = 0;

            $resultado = self::$conexion->query($query);
            while ($fila = $resultado->fetch_assoc()) {
                $festival = new Festival($fila['ID_festival'],$fila['Nombre'],$fila['Localizacion'],$fila['Foto'],$fila['Fecha_inicio'],$fila['Fecha_fin'],$fila['Precio'],$fila['Descripcion'],$fila['Estilo_musical']);
                $festivales[$i] = $festival;
                $i++;
            }
            $resultado->close();
        } catch (Exception $ex) {
            echo 'Error al sacar los festivales.';
        }

        return $festivales;
    }
    
    static function sacarFestivalesEstilo() {
        try {

            $query = "SELECT * FROM FESTIVAL ORDER BY Estilo_musical";
            $i = 0;

            $resultado = self::$conexion->query($query);
            while ($fila = $resultado->fetch_assoc()) {
                $festival = new Festival($fila['ID_festival'],$fila['Nombre'],$fila['Localizacion'],$fila['Foto'],$fila['Fecha_inicio'],$fila['Fecha_fin'],$fila['Precio'],$fila['Descripcion'],$fila['Estilo_musical']);
                $festivales[$i] = $festival;
                $i++;
            }
            $resultado->close();
        } catch (Exception $ex) {
            echo 'Error al sacar los festivales.';
        }

        return $festivales;
    }
    
    static function sacarFestivalesLocalizacion() {
        try {

            $query = "SELECT * FROM FESTIVAL ORDER BY Localizacion";
            $i = 0;

            $resultado = self::$conexion->query($query);
            while ($fila = $resultado->fetch_assoc()) {
                $festival = new Festival($fila['ID_festival'],$fila['Nombre'],$fila['Localizacion'],$fila['Foto'],$fila['Fecha_inicio'],$fila['Fecha_fin'],$fila['Precio'],$fila['Descripcion'],$fila['Estilo_musical']);
                $festivales[$i] = $festival;
                $i++;
            }
            $resultado->close();
        } catch (Exception $ex) {
            echo 'Error al sacar los festivales.';
        }

        return $festivales;
    }
    
    static function sacarFestival($id_festival){
        try {
            $stmt = self::$conexion->prepare("SELECT * FROM FESTIVAL WHERE ID_festival = ?");
            $stmt->bind_param("i", $id_festival);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($fila = $result->fetch_assoc()) {
                $festival = new Festival($fila['ID_festival'],$fila['Nombre'],$fila['Localizacion'],$fila['Foto'],$fila['Fecha_inicio'],$fila['Fecha_fin'],$fila['Precio'],$fila['Descripcion'],$fila['Estilo_musical']);
            }
            $stmt->close();
        } catch (Exception $ex) {
            
        }

        return $festival;
    }
    
    static function sacarNoticias() {
        try {

            $query = "SELECT * FROM NOTICIA ORDER BY Fecha_publicacion";
            $i = 0;

            $resultado = self::$conexion->query($query);
            while ($fila = $resultado->fetch_assoc()) {
                $noticia = new Noticia($fila['ID_noticia'],$fila['Titular'],$fila['Contenido'],$fila['Fecha_publicacion'],$fila['Autor'],$fila['Foto']);
                $noticias[$i] = $noticia;
                $i++;
            }
            $resultado->close();
        } catch (Exception $ex) {
            echo 'Error al sacar los festivales.';
        }

        return $noticias;
    }

}
