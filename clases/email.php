<?php
include_once 'bd.php';
class email {
	/*protected $table = "usuarios_amigos";
	protected $table_fav = "usuarios_favoritos";
	private $fecha;
	private $usuarios_id;
	private $amigos_id;
	private $result;
	*/

	
	function __construct(){
      
    } 
	
	function sendEmail($destinatario,$link){
		//$to = "cdodesarrollo4@gmail.com";
$subject = "electronicseshop.com";
		$txt = "<!DOCTYPE html>
      <html lang='es'>
		<body>			
		<div style=' padding 20px; text-align:left; margin: 20px;'>
		
		
		
		<div style='width:500px;background:#fff; color:#666; padding:20px; margin-left:30px; margin-right:30px;'>
		
		<div style='text-align:left; padding-bottom:10px; border-bottom: 1px solid #CCC;'><img src='http://electronicseshop.com/galeria/img/logos/logo-header2.png' ></div>
		<br>
		
		<div style='text-align:left; margin-left:10px; 	font-size: 18px; '>
			<p><b>Hola,</b></p>
	 		<p>Hemos recibido una petici&oacute;n para restablecer la contrase&ntilde;a de tu cuenta.</p>
			<p>Si hiciste esta petici&oacute;n, haz clic en el boton, si no hiciste esta petici&oacute;n puedes ignorar este correo.</p>
		</div>
		
		<br>		
		
		<div style='text-align:left; padding-bottom:10px; border-bottom: 1px solid #ccc;' >
		<a href=".$link." style='text-decoration:none;'>
		<button style='background:#36A7E1;
		 text-align:center;  color:#FFF; padding:10px; margin:10px; border: 1px solid #1e8dc6; cursor: pointer; font-size: 18px;'>Restablecer Contrase&ntilde;a</button>
		</a>
		<br>
		</div>
		
		<div style='font-size: 12px; text-align:left; margin-left:10px; color:#999;  margin-top:5px;'>
		Vistete a la moda con la mejor tecnologia 
		</div>
		
		</div>
		
		</div>	
		
					
		</body>
		</html>
		";	
	
		$headers = 'From: Electronics Eshop <no-responder@electronicseshop.com> '  . "\r\n" . 'Reply-To: '  . "no-responder@electronicseshop.com" . "\r\n" . 'X-Mailer: PHP/' . phpversion ();
		$headers .= "MIME-Version: 1.0\r\n";		
		$headers .= "Content-type: text/html; charset=UTF-8.";

		mail($destinatario,$subject,$txt,$headers);
	}
	
}
