<?php

$acceso = "";   
$mensaje ="";
$tipoAlerta="";
if (!empty($_POST)) {
    $nombre             = $_POST["nombre"];
    $telefono           = $_POST["telefono"];
    $texto              = $_POST["mensaje"];
    $correo             = $_POST["correo"];
    //$archivo = $_FILES['adjunto'];
    $recaptchaPrueba    = '22222222';
        //if (!empty($_POST['captcha'])) {
        if (!empty($recaptchaPrueba)) {
            if ($nombre == "" || $telefono== "" || $correo == "" || $texto == "" || strlen($telefono) != 10 || is_valid_email($correo) != true ) 
            {
                //echo "datos no llenados";
                $acceso= "Error!";
                $mensaje = "<b>Faltan o llene correctamente los datos indicados</b></br>";
                $mensaje .= "<b>Estas son las causas que impiden el correcto llenado del formulario:</b></br>";
                
                if ($nombre == "") 
                {
                    $mensaje .="-Falta llenar <b>Nombre</b>.</br>";
                }
                if ($telefono == "" || strlen($telefono) != 10) 
                {
                    if ($telefono == "") 
                    {
                        $mensaje .="-Falta llenar <b>Teléfono</b>.</br>";
                    }
                    if (strlen($telefono) != 10) 
                    {
                        $mensaje .="-Ponga 10 dígitos como mínimo en <b>Teléfono</b>.</br>";
                    }
                    
                }
                if ($correo == "" || is_valid_email($correo) != true) 
                {
                    if ($correo == "") 
                    {
                        $mensaje .="-Falta llenar <b>Correo</b>.</br>";
                    }
                    if (is_valid_email($correo) != true) 
                    {
                        $mensaje .="-Ingreso un <b>Correo</b> valido!.</br>";
                    }
                }
                if ($texto == "") 
                {
                    $mensaje .="-Falta llenar <b>Mensaje</b>.</br>";
                    $tipoAlerta="warning";            
                }
            }
            else
            {
                enviarMail($nombre,$telefono,$correo,$texto);    
                $acceso= "Exito!";
                $mensaje = "Mensaje enviado exitosamente";
                $tipoAlerta="success";
            
            }      
        }
        else
        {
            //2 
            $acceso= "Error!";
            $mensaje = "Llene el recaptcha";
            $tipoAlerta="warning";
        }
}
else
{
    //1
    $acceso= "Error!";
    $mensaje = "Llene los datos";
    $tipoAlerta="warning";
}
function enviarMail($nombre,$telefono,$correo,$texto){
              
    $remitente = $correo;
    $destinatario = 'vicmont@prodigy.net.mx,despacho@vmyasc.com.mx '; // en esta línea va el mail del destinatario.
    $asunto = 'E-mail enviado desde la página web vmyasc.com.mx. Contestar a la brevedad.'; // acá se puede modificar el asunto del mail
    
      $cuerpo =  "Nombre:   " . $nombre    . "\r\n"; 
      $cuerpo .= "Teléfono: " . $telefono  . "\r\n";
      $cuerpo .= "Email:    " . $correo    . "\r\n";
      $cuerpo .= "Mensaje:  " . $texto   . "\r\n";

      //las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir
      // con el "name" de cada campo del formulario.
	    // Si se agrega un campo al formulario, hay que agregarlo acá.

      $headers  = "MIME-Version: 1.0\n";
      $headers .= "Content-type: text/plain; charset=utf-8\n";
      $headers .= "X-Priority: 3\n";
      $headers .= "X-MSMail-Priority: Normal\n";
      $headers .= "X-Mailer: php\n";
      $headers .= "From: \"".$nombre."\" <".$remitente.">\n";

      mail($destinatario, $asunto, $cuerpo, $headers);        
      
       
}
function is_valid_email($str)
{
  return (false !== strpos($str, "@") && false !== strpos($str, "."));
}
$return_arr = array("acceso" => $acceso,
                    "mensaje" => $mensaje,
                    "tipoAlerta" => $tipoAlerta);
echo json_encode($return_arr);

?>