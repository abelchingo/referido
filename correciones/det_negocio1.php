<?php
@session_start();
require_once(dirname(__FILE__).'/librerias/xajax/xajax_core/xajax.inc.php');
$xajax = new xajax();
$xajax->configure('javascript URI','librerias/xajax/');
require_once('xajax/xlogeo.php');
require_once('xajax/xcomentario.php');
require_once('xajax/xregusuario.php');
require_once('xajax/xregasociado.php');
require_once('xajax/xregnegocio.php');
require_once('xajax/xsubcategoria.php');
require_once('xajax/xregEmail.php');
require_once(dirname(__FILE__).'/ajax/funcgenerales.php');
$xajax->processRequest();
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::MiReferido::DatNegocio');
Aplicacion::clase('Core::datos::MiReferido::DatCupon');
Aplicacion::clase('Core::datos::MiReferido::DatCategoria');
Aplicacion::clase('Core::datos::MiReferido::DatComentario');
Aplicacion::clase('Core::datos::MiReferido::DatUsuario');
Aplicacion::clase('Core::datos::MiReferido::DatCalificacionNegocio');
$oCalificacionNegocio = new DatCalificacionNegocio;
$oNegocio = new DatNegocio;
$oCupon = new DatCupon;
$oCategoria = new DatCategoria;
$oComentario = new DatComentario;
$oUsuario = new DatUsuario;
$idioma="ES";
if(is_numeric(@$_GET["dn"])){
	$negd=$oNegocio->getxCod(@$_GET["dn"],$idioma);
	if(!empty($negd[0]))
		$negd=$negd[0];
	else
	 	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=lis_negocio.php">';
}
else{
 $negd=0;
 echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=lis_negocio.php">';
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--<title>Mi Referido.com Busca Comparte y Gana � gana premios y descuentos � Recibe cupones � registra negocios y gana dinero </title>-->
<!--<meta name="Description" content="Somos la mejor empresa de mercadeo en l�nea. Mireferido.com es un producto nuevo e innovador que ayudara a encontrar los mejores descuentos en cupones, a tener un trabajo a tiempo parcial o completo ganando comisiones por referenciar negocios y a promover tu negocio en las mejores plataformas de sociales como FACEBOOK, TWITTER, YOU TUBE y dem�s. BUSCA COMPARTE Y GANA" ><meta name="keywords" content="mireferido, mi referido, mi referido.com, referido, cupones en linea,  cupones online, cupones de descuento, descuentos en cupones, directorio de negocios, directorio de negocio, directorio de negocios online, directorio de negocios en linea, publicidad para negocios, marketing para negocios, publicidad para negocios, publicidad en l�nea, asociados independientes, asociados, gana comisiones por referencia, gana dinero por referencia,  gana premios por referencia , facebook, twitter, youtube, busca comparte y gana.">-->
<title><?php echo $negd["neg_nom"];?></title>
<meta name="Description" content="<?php echo $negd["neg_desc"];?>">


<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4247000-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<link href="css/estilosPES.css" rel="stylesheet" type="text/css">
<?php $xajax->printJavascript( "librerias/xajax/" )?>
<script type="text/javascript" src="js/funciones.js"></script>
<script type="text/javascript">
  function cargandofuncion(){
     document.getElementById('cargando').style.display='block';
      document.getElementById('cargando').innerHTML='<img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Cargando....';
   }
   function funcioncargada(){
	  
      document.getElementById('cargando').innerHTML='';
      document.getElementById('cargando').style.display='none';
   }
   xajax.callback.global.onResponseDelay = cargandofuncion;
   xajax.callback.global.onComplete = funcioncargada;
</script>
</head>
<body>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%" align="center" valign="top"><table width="953" border="0" cellpadding="0" cellspacing="0">
        
        <tr>
          <td width="1028" align="left" valign="top"><div align="center">
		  <?php
		  include('cabecera.php');
		  ?>
		  
		  </div></td>
        </tr>
        <tr>
          <td><table width="953" border="0" align="center" cellpadding="0" cellspacing="5">
              <tr>
                <td width="188" align="left" valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="263" align="left" valign="top"><table width="188" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="182" align="left">
                          <?php 
						  if(is_file('media/negocios/'.@$negd["neg_logo"])){?>
						   <img src="media/negocios/<?php echo @$negd["neg_logo"];?>" width="180"  />
                          <?php }
						  else{ 
                          ?>
							 <img src="media/negocios/logodefault2.jpg" width="180"  />  
						  <?php }?>
                 
                         
                          
                          </td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="15">&nbsp;</td>
                    </tr>
                    
                    <tr>
                      <td align="center" valign="top" >
                      <table cellpadding="0" border="0" cellspacing="0" width="180" align="center">
                      <tr><td bgcolor="#FFFFFF">
                      <div id="fb-root"></div>

<?php 
 $enl=$oNegocio->enlaceNegocio($negd["neg_cod"],'FACEBOOK');
 if(!empty($enl[0])){
	 $enl=$enl[0];
	// echo $enl['enl_refer'];
	 ?>
    
<div class="fb-like-box" data-href="<?php echo $enl['enl_refer'] ?>" data-width="180" data-show-faces="true" data-stream="true" data-header="true"></div>	 
 <?php }else{?>
	<div class="fb-like-box" data-href="http://www.facebook.com/pages/Mi-Referidocom/118564078232642" data-width="180" data-show-faces="true" data-stream="true" data-header="true"></div> 
<?php }
?>



<!--<div id="fb-root"></div>

<script>(function(d){

  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}

  js = d.createElement('script'); js.id = id; js.async = true;

  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";

  d.getElementsByTagName('head')[0].appendChild(js);

}(document));</script>

<div class="fb-like-box" data-href="http://www.facebook.com/#!/pages/Mi-Referidocom/118564078232642" data-width="180" data-show-faces="true" data-stream="true" data-header="true"></div>--></td></tr></table>
</td>
                    </tr>
                    
                    <tr>
                      <td height="15">&nbsp;</td>
                    </tr>
                    <script>
					  function verfacebook(){
						  window.location='http://www.facebook.com/pages/Mi-Referidocom/118564078232642';
					  }
					  
					  </script>
                    <tr><!--background="img/unete_club_fans.jpg"-->
                      <td align="center"><table width="180px" cellpadding="0" cellspacing="0" style="background:url(img/like2.jpg) no-repeat; "  height="198" border="0"  >
                      <tr>
                          <td valign="top" style="height:85px; min-height:85px; cursor:pointer;" onClick="verfacebook()"></td>
                        </tr>
                        
                        <tr>
                          <td height="23" >
                          <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style "
ddthis:url="http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>?dn=12"	
        addthis:title="<?php echo $negd["neg_nom"];?>"
		addthis:description="<?php echo $negd["neg_desc"];?>">
>
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_preferred_5"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e67cc206d4ae200"></script>
<!-- AddThis Button END -->
</td>
                          
                        </tr>
                      </table></td>
                    </tr>
                </table></td>
                <td width="579" valign="top"><table width="581" border="0" cellspacing="3" cellpadding="0">
                  <tr>
                    <td width="575"><table width="573" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="573" align="center" valign="top" background="img/fondo_detalle.jpg"><table width="548" border="0" cellspacing="10" cellpadding="0">
                          
                          <tr>
                            <td class="TIT_DET_NEGOCIO"><div align="left">
                              <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td class="TIT_DET_NEGOCIO" width="400"><div align="left"><?php echo @$negd["neg_nom"];?></div></td>
                                  <td align="right" ><table border="0" cellspacing="5" cellpadding="0">
                                                    <tr>
                                                    <?php 
                                                     $calf=floor(@$negd["calif_nivel"]);
												 for($i=1;$i<=$calf;$i++){?>
                                                 
											<td ><img src="img/ranking1.jpg" width="17" height="17" /></td>
												<?php 	 }
												 for($i=1;$i<=(5-$calf);$i++){ ?>
										  <td><img src="img/ranking0.jpg" width="17" height="17" /></td>
													 <?php } ?>
                                                     </tr>
                                                </table></td>
                                </tr>
                              </table>
                            </div></td>
                          </tr>
                          <tr>
                            <td><img src="img/linea_detalle_negocio.jpg" width="533" height="6" /></td>
                          </tr>
                          <tr>
                            <td><table width="527" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="269" valign="top"><div align="left">
                                  <p class="text_gris_negrita">
                                  <?php
								  $cats='';
								  $vercats=array();
								  $i=0;
                                  $negcat=$oNegocio->getCategorias(@$negd["neg_cod"], $idioma);
								  foreach($negcat as $ncat){
									
									 $categorias=$oCategoria->getxCodIdioma($ncat["cat_cod"].$idioma);
									  foreach($categorias as $cat_){
										  $cats.=$cat_["cat_nom"].',';										  
									  }								  
								  }
								  echo substr($cats,0,-1);
								  ?>
                                  </p>
                                  <p class="text_gris_negrita">Tel&eacute;fono: <?php echo @$negd["neg_fono"];?></p>
                                  <p class="text_gris_negrita">Email: <?php echo @$negd["neg_email1"];?></p>
                                  <p class="text_gris_negrita">Website: <?php echo @$negd["neg_web"];?></p>
                                  <p class="text_gris_negrita">Descripci&oacute;n</p>
                                  <p class="text_gris_detalle"><?php echo @$negd["neg_desc"];?></p>
                                 </div></td>
                                <td width="258" valign="top"><table width="247" border="0" align="right" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td valign="top"><?php
												$zaddress=@$negd["neg_dir"]." ".@$negd["neg_ciu"]." ".@$negd["est_abrev"]." ".@$negd["neg_zip"];
												?>
                                      <iframe width="247" height="248" frameborder="0" scrolling="No" marginheight="0" marginwidth="0" src="geo/georef.php?zaddress=<?=$zaddress?>"></iframe></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><span class="text_gris_detalle">Direcci&oacute;n:</span></div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><span class="text_gris_detalle"><?php echo @$negd["neg_dir"];?></span></div></td>
                                  </tr>
                                  <tr>
                                            <td><div align="left"><span class="text_gris_detalle"><strong><?php echo @$negd["neg_ciu"].', '.@$negd["est_abrev"].' '.@$negd["neg_zip"];?></strong></span></div></td>
                                          </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td valign="top">&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="left"><span class="TIT_DET_NEGOCIO">Comparte este Negocio y Gana! </span></div></td>
                                <td valign="top"></td>
                              </tr>
                              <tr>
                                <td><div align="left">
                               <!-- AddThis Button BEGIN  addthis:url="http://www.seattlewebmedia.com/inicio.php-->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style"
		addthis:url="http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>?dn=<?php echo $negd["neg_cod"];?>"	
        addthis:title="<?php echo $negd["neg_nom"];?>"
		addthis:description="<?php echo $negd["neg_desc"];?>">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e67cc206d4ae200"></script>

<!-- AddThis Button END -->
                                <!--<img src="img/share.jpg" width="179" height="34" border="0" usemap="#Map" />--></div></td>
                                <td valign="top">&nbsp;</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td height="43" align="left" valign="top" background="img/divisor_detalle.png"><img src="img/divisor_detalle.png" width="573" height="45" /></td>
                      </tr>
                      <tr>
                        <td align="left" valign="top" background="img/fondo_detalle.jpg"><table width="548" border="0" align="center" cellpadding="0" cellspacing="10">
                          <tr>
                            <td class="TIT_DET_NEGOCIO"><div align="left"><a href="javascript:void(null);" onClick="formComentar();" style="text-decoration:none">CLICK AQUI Y DEJA TU COMENTARIO </a></div></td>
                          </tr>
                          <tr>
                            <td><img src="img/linea_detalle_negocio.jpg" width="533" height="6" /></td>
                          </tr>
                                                   
                          <tr>
                            <td align="center" valign="top">
                            <div id="frmcomenatar" style="display:<?php echo $sesion?'block':'none'?>;">
							<?php if($sesion){?>
                            <form name="formComentario" method="post" onSubmit="return false;">
                            <input type="hidden" name="hdNegCod" value="<?php echo @$negd["neg_cod"];?>">
                            <table width="532" border="0" cellspacing="10" cellpadding="0" bgcolor="#DEDEEF">
                      <tr>
                       <td width="112" align="left" valign="top"><table border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td align="center">
                                          <?php 
										  $codusu=NegSesionMiembro::getVar('adMiembros.1.0', 'usuCod');	
										  $usu=$oUsuario->getxPK($codusu);
										  if(!empty($usu[0])){
											  $usu=$usu[0];
										  if(is_file('media/usuarios/'.@$usu["usu_foto"])){ ?>
                                          <img src="media/usuarios/<?php echo @$usu["usu_foto"]?>" width="80" />
                                          	<?php }else{ ?>
                                          <img src="media/usuarios/Userdefaul.png" width="80" />
                                          <?php } ?>
                                          <div style=" font-size:11px;">
										  <?php echo @$usu["usu_nom"].' '.@$usu["usu_ape"]?></div>
										  <?php } ?>
                                          </td>
                                        </tr>
                                    </table></td>
                                    <td width="390" valign="top"><table width="360" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="389"><table width="300" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="59" height="38"><span class="text_gris_detalle_negrita">Ranking</span>&nbsp;</td>
                                                <td width="99" style="margin:5px;" class="text_gris_detalle_negrita"><select name="cmbCalificacion" class="inputTxt" style="width:235px;">
                                                  <?php
		$califs = @$oCalificacionNegocio->listar();
		foreach($califs as $calif) {
			if('0' != @$calif['calif_nivel']) {?> 
            <option value="<?php echo @$calif['calif_cod']?>">
			<?php echo @$calif['calif_desc']?></option>
             <?php 	}
			 } ?>
             </select></td> 
            </tr>
                                          </table></td>
                                        </tr>
                                                                               <tr>
                                          <td>Comentario:<br>
                                          <textarea name="txtComentario" cols="150" class="inputTxt" style="width:300px; height:100px;"></textarea></td>
                                        </tr>
                                        <tr><td align="center" class="label"><input type="button" class="inputsubmit" value="Guardar" onClick="guardarComentario()"></td></tr>
                                    </table></td>
                                  </tr></table>                             
                             </form>                           
                            <?php }?>
                            </div>
                            </td>
                          </tr>
                          <tr>
                            <td align="left" valign="top">
                            <div id="pnlListadoComentario" >
                            <img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Cargando....
                            <script language="javascript">
                            xajax_listarComentario('','<?php echo @$negd["neg_cod"];?>',0,6);
                            </script>
                            </div>                            
                            </td>
                          </tr>
                        </table>
                          <map name="MapMap" id="MapMap">
                            <area shape="rect" coords="4,6,62,27" href="#" />
                            <area shape="rect" coords="72,8,132,26" href="#" />
                            <area shape="rect" coords="143,8,175,26" href="#" />
                          </map>
                          </td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
                <td width="261" valign="top"><table width="186" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="96"><table width="186" height="46" border="0" cellpadding="0" cellspacing="3">
                      <tr>
                        <td background="img/bg_como_funciona.jpg"><table width="169" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="20">&nbsp;</td>
                              <td width="169" class="t_TITULO_1"><div align="left">CUPONES</div></td>
                            </tr>
                          </table>
                            <div align="center"></div></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                    <?php 
					$_concup_=2;
					$_negocio_=@$negd["neg_cod"];
					include("_cupones_.php");
					?>
                    </td>
                  </tr>
                  
                  <tr>
                    <td><table width="186" height="46" border="0" cellpadding="0" cellspacing="3">
                      <tr>
                        <td background="img/bg_como_funciona.jpg"><table width="169" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="20">&nbsp;</td>
                              <td width="169" class="t_TITULO_1"><div align="left">OTROS CUPONES</div></td>
                            </tr>
                          </table>
                            <div align="center"></div></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><?php 
					$_concup_=2;
					$_negocio_='';
					$_noneg_=@$negd["neg_cod"];
					
					include("_cupones_.php");
				?>
                    </td>
                   
                  </tr>
                  
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
              
          </table></td>
        </tr>
        
      </table></td>
    </tr>
    <tr>
      <td align="center" valign="top">  
	  <?php	  
	  include("pie.php");
	  ?>	  </td>
    </tr>
  </table>
</div>
<map name="Map" id="Map"><area shape="rect" coords="4,6,62,27" href="#" /><area shape="rect" coords="72,8,132,26" href="#" /><area shape="rect" coords="143,8,175,26" href="#" /></map></body>
</html>
<script>
function formComentar()
{
	var sesion = <?php echo NegSesionMiembro::existeSesion('adMiembros.1.0') ? '1' : '0'?>;
	if(1 != sesion) {
		formSesion('si');
	}else{
		mostrarComentar('si');
	}
	
}
function mostrarComentar(ver){
	if(ver='no'){
		document.getElementById('frmcomenatar').style.display='block';
		document.getElementById('frmcomenatar').style.display='block';
	}else{
		document.getElementById('frmcomenatar').style.display='none';
		document.getElementById('frmcomenatar').style.display='none';
	}
}
function guardarComentario()
{
	var form = document.formComentario;
	if('' == form.cmbCalificacion.value) {
		return alert('Por favor, elija una calificaci�n');
	}
	if('' == form.txtComentario.value) {
		return alert('Por favor, ingrese su comentario');
	}
	if(500 < form.txtComentario.value.lenght) {
		return alert('Su comentario ha excedido el m�ximo de caracteres');
	}
	if('' == form.hdNegCod.value) {
		return alert('Por favor, elija un negocio');
	}
	mostrarComentar('no');
	xajax_guardarComentario(form.hdNegCod.value, form.cmbCalificacion.value, form.txtComentario.value);
	
}
</script>