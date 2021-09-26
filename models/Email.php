<?php
/* librerias necesarias para que el proyecto pueda enviar emails */
require('class.phpmailer.php');
include("class.smtp.php");

/* llamada de las clases necesarias que se usaran en el envio del mail */
require_once("../config/conexion.php");
require_once("../Models/Ticket.php");

class Email extends PHPMailer{

    //variable que contiene el correo del destinatario
    protected $gCorreo = 'aqui tu correo@dominio.com';
    protected $gContrasena = 'aqui tu pass';
    //variable que contiene la contraseña del destinatario

    public function ticket_abierto($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $usu = $row["usu_nom"];
            $titulo = $row["tick_titulo"];
            $categoria = $row["cat_nom"];
            $correo = $row["usu_correo"];
        }

        //IGual//
        $this->IsSMTP();
        $this->Host = 'smtp.office365.com';//Aqui el server
        $this->Port = 587;//Aqui el puerto
        $this->SMTPAuth = true;
        $this->Username = $this->gCorreo;
        $this->Password = $this->gContrasena;
        $this->From = $this->gCorreo;
        $this->SMTPSecure = 'tls';
        $this->FromName = $this->tu_nombre = "Ticket Abierto ".$id;
        $this->CharSet = 'UTF8';
        $this->addAddress($correo);
        $this->WordWrap = 50;
        $this->IsHTML(true);
        $this->Subject = "Ticket Abierto";
        //Igual//
        $cuerpo = file_get_contents('../public/NuevoTicket.html'); /* Ruta del template en formato HTML */
        /* parametros del template a remplazar */
        $cuerpo = str_replace("xnroticket", $id, $cuerpo);
        $cuerpo = str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo = str_replace("lblTitu", $titulo, $cuerpo);
        $cuerpo = str_replace("lblCate", $categoria, $cuerpo);

        $this->Body = $cuerpo;
        $this->AltBody = strip_tags("Ticket Abierto");
        return $this->Send();
    }

    public function ticket_cerrado($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $usu = $row["usu_nom"];
            $titulo = $row["tick_titulo"];
            $categoria = $row["cat_nom"];
            $correo = $row["usu_correo"];
        }

        //IGual//
        $this->IsSMTP();
        $this->Host = 'smtp.office365.com';//Aqui el server
        $this->Port = 587;//Aqui el puerto
        $this->SMTPAuth = true;
        $this->Username = $this->gCorreo;
        $this->Password = $this->gContrasena;
        $this->From = $this->gCorreo;
        $this->SMTPSecure = 'tls';
        $this->FromName = $this->tu_nombre = "Ticket Cerrado ".$id;
        $this->CharSet = 'UTF8';
        $this->addAddress($correo);
        $this->WordWrap = 50;
        $this->IsHTML(true);
        $this->Subject = "Ticket Cerrado";
        //Igual//
        $cuerpo = file_get_contents('../public/CerradoTicket.html'); /* Ruta del template en formato HTML */
        /* parametros del template a remplazar */
        $cuerpo = str_replace("xnroticket", $id, $cuerpo);
        $cuerpo = str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo = str_replace("lblTitu", $titulo, $cuerpo);
        $cuerpo = str_replace("lblCate", $categoria, $cuerpo);

        $this->Body = $cuerpo;
        $this->AltBody = strip_tags("Ticket Cerrado");
        return $this->Send();
    }

    public function ticket_asignado($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $usu = $row["usu_nom"];
            $titulo = $row["tick_titulo"];
            $categoria = $row["cat_nom"];
            $correo = $row["usu_correo"];
        }

        //IGual//
        $this->IsSMTP();
        $this->Host = 'smtp.office365.com';//Aqui el server
        $this->Port = 587;//Aqui el puerto
        $this->SMTPAuth = true;
        $this->Username = $this->gCorreo;
        $this->Password = $this->gContrasena;
        $this->From = $this->gCorreo;
        $this->SMTPSecure = 'tls';
        $this->FromName = $this->tu_nombre = "Ticket Asignado ".$id;
        $this->CharSet = 'UTF8';
        $this->addAddress($correo);
        $this->WordWrap = 50;
        $this->IsHTML(true);
        $this->Subject = "Ticket Asignado";
        //Igual//
        $cuerpo = file_get_contents('../public/AsignarTicket.html'); /* Ruta del template en formato HTML */
        /* parametros del template a remplazar */
        $cuerpo = str_replace("xnroticket", $id, $cuerpo);
        $cuerpo = str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo = str_replace("lblTitu", $titulo, $cuerpo);
        $cuerpo = str_replace("lblCate", $categoria, $cuerpo);

        $this->Body = $cuerpo;
        $this->AltBody = strip_tags("Ticket Asignado");
        return $this->Send();
    }

}

?>