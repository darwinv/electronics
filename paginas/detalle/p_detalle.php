<?php
include_once "clases/publicaciones.php";
include_once "clases/usuarios.php";
include_once "clases/fotos.php";

//la variable $publicacion es una instancia de la clase publicaciones y se instancia en el archivo padre de este;
$fotos = $publicacion -> getFotos();
$publicacion -> updateVisitas();
$usuario = new usuario($publicacion -> usuarios_id);
$foto = new fotos();
$preguntas = $publicacion->getPreguntasPublicacion();
if (isset($_SESSION["id"])) {
	$actualUsua = $_SESSION["id"];
} else {
	$actualUsua = "";
}
 ?>
  <div class="row center-block" style="width:100%" data-cantidad="2">
 	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
 		
                        <div class="marB10 marT10 text-center"> 
                            <span class="t30 negro"><?php echo $publicacion -> titulo; ?></span> 
                            <br> 
                            <span class="t16"></span>  
                        </div>
                        
 	</div>
 	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
 		<div class="contenedor row" style="margin:20px;" >  
 			<div class=" col-xs-12 col-sm-12 col-md-7 col-lg-7 ">   
 				<div style="padding-top: 30px; padding-bottom: 30px; padding-left: 40px;">
 		<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>        
        <?php
		$i = 0;
		foreach ($fotos as $f) {
			echo "<li><img src='$fotos[$i]' alt='Img$i' title='Img$i' id='wows1_$i'></li>";
			$i++;
		}
        ?>
	</ul></div>
	<div class="ws_thumbs">
<div>
        <?php
		$i = 0;
		foreach ($fotos as $f) {
			echo "<a href='#wows1_$i' title='ip6_$i'><img src='$fotos[$i]' alt='' /></a>";
			$i++;
		}
        ?>
	</div>
</div>

</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script-apdp1.js"></script>
<!-- End WOWSlider.com BODY section -->
</div>
	</div>
	<div class=" col-xs-12 col-sm-12 col-md-5 col-lg-5 ">
	<div class=" marL20 ">
                                    <br>	
                                    <br>
                                    <div style="width:90%" class="">
                                        <br>
                                        <br>
                                        <br>


                                        <p class="text-left"><span class="red t30 marL30 "><b><?php echo $publicacion -> getMonto(); ?></b></span></p>

                                        <p class="text-left marL30" style="width:100%; line-height:2">
                                            <span>
                                                <i class="fa fa-check-square t22 grisC" style="width:30px;"></i> 
                                                <span class="t16"><?php echo $publicacion -> getTiempoGarantia(); ?></span>
                                            </span>
                                        

                                        </p>
                                        <br>
                                        <div class="text-left marL30">
                                        	<span class="opacity t10">Cantidad</span>
                                        	<br>
                                        	<div style="display: inline; padding-top: -10px;" ><input type="text" value="1"  style="width:40px; height: 40px; text-align: center;" /></div>
                                        	<?php
											if ($usuario -> id != $actualUsua) {
												echo "<button data-toggle='modal' data-target='#info-comprar' type='button' class='btn3 btn-primary2 btn-block center-block' style='width:50%; display: inline; margin-top: 0px;' id='btnComprar' name='btnComprar'>Comprar</button>";
											} else {
												echo "<button data-toggle='modal' type='button' class='btn3 btn-primary2 btn-block center-block' style='width:50%; display: inline; margin-top: 0px;' id='btnComprar' name='btnComprar'>Comprar</button>";
											}
                                        	?> 
                                        	<br class="hidden-lg hidden-md hidden-sm">
                                        	<br class="hidden-lg hidden-md hidden-sm">
                                        	<?php
											if ($actualUsua == "") {
												echo "<div style='display: inline;' class='marL10 iconos'  ><span id='spanFav' data-count='" . $publicacion -> getFavoritos() . "'>" . "</span> <a><i class='fa fa-heart ' ></i></a></div>";
											} else {
												if ($publicacion -> isFavorito()) {
													echo "<div style='display: inline;' class='marL10 iconos-fav' id='corazon' data-id=$publicacion->visitas_publicaciones_id> <span id='spanFav' data-count='" . $publicacion -> getFavoritos() . "'>" . " </span><a><i class='fa fa-heart ' ></i></a></div>";
												} else {
													echo "<div style='display: inline;' class='marL10 iconos' id='corazon' data-id=$publicacion->visitas_publicaciones_id><span id='spanFav' data-count='" . $publicacion -> getFavoritos() . "'>" . "</span><a><i class='fa fa-heart ' ></i></a></div>";
												}
											}
											?>
                                        	<div style="display: inline;" class="marL5 iconos"><a href="#"><i class="fa fa-facebook-square "></i></a></div>
                                        	<div style="display: inline;" class="marL5 iconos"><a href="#"><i class="fa fa-twitter-square "></i></a></div>
                                        	
                                        </div>

                                        <hr style="width:100%" class="marB5">
										<div class="text-center">
                                        <span class="t14 vin-blue"><a href="#">Recomendaciones</a> <br> <a href="#">T&eacute;rminos y condiciones</a> </span>
                                        </div> 
                                        <br>
                                        <span class="t14 vin-blue"></span>
                                        <br>
                                        <br>
                                    </div>


                                </div>
                               </div>
                              </div>
                              <!-- <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">  
                        <div class="marB10 marT10 text-center"> 
                           <span class="t30 negro">Informaci&oacute;n</span>
                            <br> 
                            <span class="t16"></span>   
                        </div>
                        </div> -->
                        
                        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">  
                    <?php /*   <div class="contenedor row" style="margin: 20px; padding: 20px;" >

                         
                            <div class="pull-left  col-xs-12 col-sm-6 col-md-3 col-lg-3 marB10 ">
                            	
                            	<div class="text-center">
                            	<a href="perfil.php?id=<?php echo $usuario -> id; ?>" ><img src="<?php echo $foto -> buscarFotoUsuario($usuario -> id); ?>" width="80px" height="80px;" class="img-thumbnail" ></a>
                            	<br>
                            	<br>
                            	
                                <span class="t16  vin-blue"><b><a href="perfil.php?id=<?php echo $usuario -> id; ?>"  > <?php echo $usuario -> a_seudonimo; ?></a></b></span> 
                                <br> 
                                <span class="t14" ><?php echo $usuario -> n_nombre . " " . $usuario -> n_apellido . $usuario -> j_razon_social; ?> </span>   
                                <br>
                                <!-- <span class="t12 orange-apdp" > <b><?php echo $usuario -> getTiempo(); ?></b> vendiendo en A Precio De Pana </span>                               
                                <!--<br>
                                <span class="t14" >0414-7435485</span>
                                <br>
                                <span class="t14" >cdodesarrollo@gmail.com</span>-->
                                </div>

                            </div> 
                         <div class="col-xs-12 col-sm-6 col-md-9 col-lg-9 marB10">
                                <div class="marR20 marL5 text-justify pad15" >
                                <div class="t16  blueO-apdp"><b>Biograf&iacute;a </b></div> 
                                <br> 
                                <div class="t12 " ><i class="fa fa-quote-left"></i> <span class="grisC"> Proveedor de servicios autorizado Apple </span> <i class="fa fa-quote-right"></i></div>
								</div>
                            </div>
                           <!-- <div class="pull-left  col-xs-12 col-sm-12 col-md-5 col-lg-5 marB10">
                                <div style="background: #FAFAFA;  padding: 15px;" class="sombra-div borderS opacity ">
                                    <span class="t16  blueO-apdp"><b>Reputacion</b> <span class=" red">Proximamente</span></span>
                                    <br>
                                    <div class="progress marT5 marB5">
                                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> 
                                        </div>
                                    </div>
                                    <p class="t14 negro text-left marL5 marR5  mar0 pad10 eti-grisC" > 
                                        <span class="green t14 marR10"><i class="fa fa-plus-square "></i> <span class="grisO">0</span></span>
                                        <span class="red2 t14 marR10"><i class="fa fa-minus-square "></i> <span class="grisO">0</span></span>
                                        <span class="grisO t14 marR10"><i class="fa fa-circle "></i> <span class="grisO">0</span></span>
                                    </p>
                                    <p class="text-left">
                                    	<span class="marL10"> <i class="fa fa-shopping-cart"></i> 00 Ventas concretadas</span> <span class=" pull-right vin-blue marR10"><a  >Ver todas las calificaciones</a></span>
									</p>
                                   


                                </div>

                            </div> -->
                        </div> */ ?>

                </div>

                    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12  marB10  "   >  

                       
                        <div class="marB10 marT10 text-center"> 
                            <span class="t30 negro">Descripci&oacute;n de la publicaci&oacute;n</span> 
                            <br>
                            <span class="t16">-- <i class="fa fa-tags"></i> <?php echo $publicacion -> stock; ?> Und. --</span> 
                        </div>
                    </div>
                    
                    
                    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12  marB10  "   > 

                        <div class=" contenedor pad20  t16 text-justify" style="margin: 20px;">
                        	<!--
                        	<p class=" opacity t14">
                        		 A Precio De Pana, C.A. no asume ninguna responsabilidad por la informaci�n contenida en este anuncio, 
                        		 ya que ha sido suministrada en su totalidad por el usuario aqu� identificado. A Precio De Pana, C.A. no es el propietario
                        		 ni vende los art�culos aqu� ofrecidos y no participa en ninguna negociaci�n, venta o perfeccionamiento de operaciones, 
                        		 sino que s�lo se limita a la publicaci�n y/o alojamiento de anuncios de sus usuarios. A Precio De Pana, C.A. no asume 
                        		 responsabilidad por da�os o perjuicios que pudiere sufrir el usuario o visitante por operaciones sobre anuncios publicados en el sitio.
                        		 </p>
                        		 <hr>
                        		 <br> 
									--></br>
							<?php echo ($publicacion -> descripcion); ?>

                        </div>

                    </div>
<!-- seccion de preguntas  --------------------------------------------------------------------------------------------------------------->
                    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12  marB10 "   >  
  
                        	<div class="marB10 marT10 text-center"> 
                            <span class="t30 negro">Preguntas sobre la publicaci&oacute;n</span> 

                        </div>
                        
                        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12  marB10 "   >  

                        <div class=" contenedor pad20  t14 " style="margin: 40px;">
                        	
                        	<div style="background:#D8DFEA; padding:10px; padding: 20px; border:1px solid #ccc">
                        	<div style="background: #FFF">
                        		<textarea lang="5" class="form-textarea-msj2 preguntas "  placeholder="Indica tu duda o pregunta ... " id="txtPregunta" name="txtPregunta"></textarea>            
                        		<p class="text-right marR10 t10" id="restante" name="restante">240</p>
                        	</div>
							<div style="text-align: left;">
								<button class="btn2 btn-default marT5 marL10" id="cmdLimpiar" name="cmdLimpiar">Limpiar</button> 
								<button class="btn2 btn-primary2 marT5 marL5" id="cmdPreguntar" name="cmdPreguntar"  data-id=" <?php echo $publicacion->id;?> " data-usr_id=" <?php echo $usuario -> id; ?> " data-usuario=" <?php echo $actualUsua;?> " 
									<?php 
									if(!isset($_SESSION["id"]))
									{ echo "disabled";
									}else {
										 if($publicacion->usuarios_id==$_SESSION["id"])echo "disabled"; } ?>> Preguntar</button> 
								 <span class="marL5 t10 grisC">no uses lenguaje vulgar por que sera supendida tu cuenta.</span>
								</div>
						</div>	
						<br>
						<div class="contenedor" id="preguntas" name="preguntas">
							<div style="background: #FFF; margin-top: -10px; width: 140px;" class="marR20 text-center pull-right"> <span>Ultimas Preguntas</span></div>
							<div class="alert alert-info hidden" style="padding: 4px; margin: 5px; margin-left: 20px; margin-right:10px;">hola</div>
							<?php
							foreach ($preguntas as $key => $valor):
								$respuesta=$publicacion->getRespuestaPregunta($valor["id"])[0];
								$claseR=$respuesta==""?"hidden":"";
								?>							
							<p class="t14 marL20 marR20" style="border-bottom: #ccc 1px dashed;">
								<br>
								<i class="fa fa-comment blueO-apdp marL10"></i> <span class="marL5"><?php echo $valor["pregunta"]; ?></span>
								<br>
								<i class="fa fa-comments-o marL20 blueC-apdp <?php echo $claseR;?>" >
									
								</i> <span class="marL5 <?php echo $claseR;?>"><?php echo $publicacion->getRespuestaPregunta($valor["id"])[0]; ?> </span> <span class="opacity t12">  <?php echo $publicacion->getRespuestaPregunta($valor["id"])[1]; ?> </span>
								<br>	
								<br>						
							</p>
							<?php
							endforeach;
							?>
							<br><br>
						</div>
                        </div>

                    </div>
                              
	</div>
	
	<!-- FIN de seccion de preguntas ------------------------------->
 	
 </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      