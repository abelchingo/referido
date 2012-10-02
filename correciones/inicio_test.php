<?php
@session_start();
require_once(dirname(__FILE__).'/librerias/xajax/xajax_core/xajax.inc.php');
$xajax = new xajax();
$xajax->configure('javascript URI','librerias/xajax/');
require_once(dirname(__FILE__).'/ajax/funcgenerales.php');
require_once('xajax/xlogeo.php');
require_once('xajax/xregusuario.php');
require_once('xajax/xregasociado.php');
require_once('xajax/xregnegocio.php');
require_once('xajax/xregEmail.php');
require_once('xajax/xsubcategoria.php');
$xajax->processRequest();
require_once('xajax/validaciones.php');
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::MiReferido::DatCategoria');
Aplicacion::clase('Core::datos::MiReferido::DatSubCategoria');
Aplicacion::clase('Core::datos::MiReferido::DatCupon');
$oDatCategoria = new DatCategoria;
$oSubDatCategoria = new DatSubCategoria;
$oCupon = new DatCupon;
$idioma="ES";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Mi Referido.com Busca Comparte y Gana – gana premios y descuentos – Recibe cupones – registra negocios y gana dinero </title>
<meta name="Description" content="Somos la mejor empresa de mercadeo en línea. Mireferido.com es un producto nuevo e innovador que ayudara a encontrar los mejores descuentos en cupones, a tener un trabajo a tiempo parcial o completo ganando comisiones por referenciar negocios y a promover tu negocio en las mejores plataformas de sociales como FACEBOOK, TWITTER, YOU TUBE y demás. BUSCA COMPARTE Y GANA" ><meta name="keywords" content="mireferido, mi referido, mi referido.com, referido, cupones en linea,  cupones online, cupones de descuento, descuentos en cupones, directorio de negocios, directorio de negocio, directorio de negocios online, directorio de negocios en linea, publicidad para negocios, marketing para negocios, publicidad para negocios, publicidad en línea, asociados independientes, asociados, gana comisiones por referencia, gana dinero por referencia,  gana premios por referencia , facebook, twitter, youtube, busca comparte y gana."><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4247000-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<link href="css/estilos_n_centrado.css" rel="stylesheet" type="text/css">
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
<div align="center">
<a name="arriba" style="border:0; height:0px;"></a>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%" align="center" valign="top"><table width="966" border="0" cellpadding="0" cellspacing="0">
        
        <tr>
          <td width="970" align="left" valign="top"><div align="center">
		  <?php
		  include_once('cabecera.php');
		  ?>
		  
		  </div></td>
        </tr>
       <!-- <tr>
          <td align="left" valign="top"><table width="965" border="0" align="center" cellpadding="0" cellspacing="5">
            <tr>
              <td width="235"><a href="javascript:void(null);" onclick="frmRegNegocio('si');"><img src="img/bt_home_1_sp.png" width="235" height="97" border="0" /></a></td>
              <td width="235"><a href="http://www.tripleclicks.com/11531449 " target="_blank"><img src="img/bt_home_2_sp.png" width="235" height="97" border="0" /></a></td>
              <td width="199"><a href="http://myapprovalwarehouse.com/?id=mrreferrals" target="_blank"><img src="img/bt_home_3_sp.png" width="235" height="97" border="0" /></a></td>
              <td width="244"><a href="#"><img src="img/bt_home_4_sp.png" width="235" height="97" border="0" /></a></td>
            </tr>
          </table></td>
        </tr>-->
        <tr>
          <td align="center" valign="top"><iframe src="animacion.php?idioma=ES" width="956" height="245" scrolling="No" frameborder="0" class="Estilo1" marginheight="0" marginwidth="0" allowtransparency="true"></iframe></td>
        </tr>
        <tr>
          <td><table border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left" valign="top"><table width="294" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="294" align="left" valign="top"><table width="263" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td><table width="232" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td><table width="294" height="44" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="294" height="44" background="img/barra_categorias.png" style="background-repeat: no-repeat"><div align="center">
                                          <table width="238" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td><div align="left" class="t_TITULO_1">PROMOCIONES ESPECIALES</div></td>
                                            </tr>
                                          </table>
                                      </div></td>
                                    </tr>
                                </table></td>
                              </tr>
                              <tr>
                                <td height="750" align="left" valign="top" bgcolor="#FFFFFF"><?php 
					$_conbanh_=50;					
					require_once("_bannershome_.php");
					?>
                                    <div align="center" class="t_TITULO_1"> <a href="specialdeals.php" style="text-decoration:none; color:#009"><strong>Ver Mas Promociones Especiales...</strong></a></div></td>
                              </tr>
                          </table></td>
                        </tr>
                      </table></td> 
                    </tr>
                    <tr>
                      <td>
                      <script>
					  function verfacebook(){
						  window.open('http://www.facebook.com/pages/Mi-Referidocom/118564078232642');
					  }
					  
					  </script>
                      
                      
                      <table border="0" align="center" cellpadding="0" cellspacing="0" background="img/like.png" width="293" height="323">
                          <tr>
                           <td onclick="verfacebook()" style="cursor:pointer;"> </td>
                          </tr>
                          <tr>
                            <td height="50" valign="top" align="center">
                            <div align="center" style="width:280px; text-align:right">
                            <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style" style="text-align:center;">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
<!--<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>-->
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e67cc206d4ae200"></script>
<!-- AddThis Button END -->
</div></td>
                          </tr>
                      </table></td>
                    </tr>
                    
                </table></td>
                <td valign="top"><table width="665" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table width="181" border="0" cellspacing="1" cellpadding="0">
                      <tr>
                        <td><div style="width:660px; overflow:hidden;"></div></td>
                      </tr>
                    </table></td>
                  </tr>
                  
                  <tr>
                    <td height="334" align="left" valign="top">
                    <!--listado de cupones-->
                    <!--<table border="0" cellpadding="0" cellspacing="0">
                    <tr>-->
                   <!-- <td>-->
                    <table width="221" height="333" border="0" cellpadding="0" cellspacing="0">
                      <tr>
					  
					  <script language="javascript">
					  function vercuponp(QFORM,NFORM){
							win = window.open('','myWin1','width=640, height=400'); 
							//window.open('', 'popup', 'width = 200, height = 100')
							document.forms[QFORM].target='myWin1';
							document.forms[QFORM].submit();
					  }
					  </script>
					  					  
					  
                      <?php 
					$i=0;
					$QNF=0;					
					$cupones=$oCupon->BuscarVCupones(null,null,$idioma,0,' cup_fecha_envio ASC, cup_fecha_reg','DESC',0,6,null);				
					foreach($cupones as $cup){?>
                        <td align="center" valign="bottom"><table width="220" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="275" valign="bottom"><div align="center">
                              <table width="217" border="0" align="right" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td valign="top"><img src="img/cabeza_cupon.png" width="216" height="102" /></td>
                                </tr>
                                <tr>
                                  <td width="217" valign="top"><a href="det_cupon.php?dc=<?php echo $cup["cup_cod"]; ?>"><img border="0" src="media/cupones/<?php echo $cup["cup_imagen"]; ?>" width="216" height="176" /></a></td>
                                </tr>
                                <tr>
                                  <td bgcolor="#A2DE29"><table width="59" height="59" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td><div align="center">
                                        <table width="179" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="216"><span class="t_titulo_cupon" style=" <?php echo strlen($cup["cup_titulo"])>25?'font-size:12px;':''?>"><?php echo $cup["cup_titulo"]; ?> </span></td>
                                          </tr>
                                          <tr>
                                            <td><span class="t_empresa_cupon" style=" <?php 
											$cnti=strlen($cup["cup_subtitulo"]);
											echo ($cnti>42)?'font-size:10px;':(($cnti>25)?'font-size:11px;':'')?>" ><?php echo $cup["cup_subtitulo"]; ?> </span></td>
                                          </tr>
                                        </table>
                                      </div></td>
                                    </tr>
                                  </table></td>
                                </tr>
                              </table>
                            </div></td>
                          </tr>
                          <tr>
                            <td align="center" valign="top"><table width="220" height="48" border="0" align="left" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td width="242" height="48" align="center" valign="top" style="background-repeat: no-repeat"><table width="220" height="90" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="226" align="center" valign="top" background="img/pie_cupon_inicio2.png" style="background-repeat: no-repeat"><table width="221" height="66" border="0" align="left" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="233" height="31"><div align="center">
                                            <table width="78" height="37" border="0" cellpadding="0" cellspacing="0">
                                              <tr>
                                                <td><table width="166" height="45" border="0" cellpadding="0" cellspacing="0">
                                                  <tr>
                                                    <td width="36" height="38"><table width="65" border="0" cellspacing="2" cellpadding="0">
                                                        <tr>
                                                          <td><div align="center"><span class="Estilo1">Valor</span></div></td>
                                                        </tr>
                                                        <tr>
                                                          <td><div align="center" class="Estilo2">$ <?php echo $cup["cup_valor"]; ?></div></td>
                                                        </tr>
                                                    </table></td>
                                                    <td width="1"><img src="img/separador_cupon_det.jpg" width="1" height="29" /></td>
                                                    <td width="65"><table width="80" border="0" cellspacing="2" cellpadding="0">
                                                        <tr>
                                                          <td><div align="center"><span class="Estilo1">Descuento</span></div></td>
                                                        </tr>
                                                        <tr>
                                                          <td><div align="center" class="Estilo2"><?php
														  $porc=ceil((($cup["cup_valor"] - $cup["cup_costo"])*100)/$cup["cup_valor"]);
														  echo $porc;?> %</div></td>
                                                        </tr>
                                                    </table></td>
                                                    <td width="1"><img src="img/separador_cupon_det.jpg" width="1" height="29" /></td>
                                                    <td width="57"><table width="65" border="0" align="center" cellpadding="0" cellspacing="2">
                                                        <tr>
                                                          <td><div align="center"><span class="Estilo1">Ahorro</span></div></td>
                                                        </tr>
                                                        <tr>
                                                          <td><div align="center" class="Estilo2">$<?php echo $cup["cup_valor"] - $cup["cup_costo"]; ?></div></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                                </table></td>
                                              </tr>
                                            </table>
                                          </div></td>
                                        </tr>
                                        <tr>
                                          <td><div align="center">
                                            <table width="38" height="31" border="0" cellpadding="0" cellspacing="0">
                                              <tr>
                                                <td><div align="center">
                                                  <table width="220" border="0" align="left" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                      <td width="75"><div align="center" class="t_precio_cupon">$<?php echo $cup["cup_costo"]; ?></div></td>
                                                      <td width="76" valign="top">
													  

													  <?
													  
													  $QNF=$QNF+1;
													  ?>
													  <form name="imprimircupon_<?=$QNF?>" id="imprimircupon_<?=$QNF?>" action="cupon.php" method="post">
													  <input name="codigocup" type="hidden" value="<?php echo $cup["cup_cod"];?>" />
													  <input name="codigoneg" type="hidden" value="<?php echo 0;?>" />										
													  <input name="nomneg" type="hidden" value="<?php echo $cup["cup_subtitulo"];?>" />
													  <input name="nomcup" type="hidden" value="<?php echo $cup["cup_titulo"];?>" />																										 					 								  <input name="precio" type="hidden" value="<?php echo $cup["cup_costo"];?>" />  
													  <input name="valor" type="hidden" value="<?php echo $cup["cup_valor"];?>" />													  													  <input name="descuento" type="hidden" value="<?php
														  $valor=!empty($cup["cup_valor"])?$cup["cup_valor"]:1;
														  $costo=$cup["cup_costo"];
														  $porc=ceil((($valor - $costo)*100)/$valor);
														  echo $porc;?>" />
													  <input name="ahorro" type="hidden" value="<?php 
															$valor=$cup["cup_valor"];
															$costo=$cup["cup_costo"];
															echo $valor -$costo ; ?>" />													  													  													  <input name="vencimiento" type="hidden" value="<?php echo $cup["cup_fecha_ven"];?>" />
													  <input name="especificaciones" type="hidden" value="<?php echo $cup["cup_especificaciones"];?>" />																										 	 												  													  <input name="indicaciones" type="hidden" value="<?php echo $cup["cup_indicaciones"];?>" />  
													  
													  
													  
													  <div align="center"><a href="#" onclick="vercuponp('imprimircupon_<?=$QNF?>','<?=$QNF?>'); return false"><img src="img/imprimir_cupon_verde.jpg" width="59" height="18" border="0" /></a></div>
													</form>													  </td>
                                                      <td width="69" valign="top"><div align="center"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/det_cupon.php?dc=<?php echo $cup["cup_cod"]; ?>"><img src="img/comparte_gana.jpg" width="55" height="22" border="0" /></a></div></td>
                                                    </tr>
                                                  </table>
                                                </div></td>
                                              </tr>
                                            </table>
                                          </div></td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                  </table></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>                        </td>
                       <?php
					$i++;
					if($i%3==0) echo "</tr><tr>";
					 }
					 
					?> 
                      </tr>
                    </table>
                 <!--   </td>-->
                    
                    <!--</tr>
                    </table>-->                    </td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><table width="662" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><table width="656" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="328" height="260"><script language="JavaScript" type="text/javascript">
var ci_cap_scriptId = "36212";
var ci_cap_bid = "1222250001";
var ci_cap_format = "300x250";
var ci_cap_channel = "Homepage";
                          </script>
                                <script language="JavaScript" type="text/javascript" src="http://bc.coupons.com/"></script>                            </td>
                            <td width="328"><script language="JavaScript" type="text/javascript">
var ci_cap_scriptId = "36213";
var ci_cap_bid = "1222250001";
var ci_cap_format = "300x250";
var ci_cap_channel = "Homepage";
                          </script>
                                <script language="JavaScript" type="text/javascript" src="http://bc.coupons.com/"></script>                            </td>
                          </tr>
                        </table></td>
                      </tr>
                      
                    </table></td>
                  </tr>
                  
                </table></td>
              </tr>
              
          </table></td>
        </tr>
        <tr>
          <td><table width="965" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="left">
                <table width="964" height="46" border="0" align="center" cellpadding="0" cellspacing="3">
                  <tr>
                    <td width="958" background="img/bg_como_funciona.jpg"><table width="189" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="18">&nbsp;</td>
                          <td width="171" class="t_TITULO_1">&iquest;COMO FUNCIONA?</td>
                        </tr>
                      </table>
                        <div align="center"></div></td>
                  </tr>
                </table>
              </div></td>
            </tr>
            <tr>
              <td align="center" valign="top"><table width="134" border="0" cellspacing="1" cellpadding="0">
                <tr>
                  <td valign="middle" bgcolor="#E8F8FF"><table width="735" border="0" align="center" cellpadding="0" cellspacing="3">
                    <tr>
                      <td width="216" rowspan="2" align="center" valign="top"><div style="position:relative; z-index:1; height:242; width:293;">
                          <!--<iframe width="293" style="z-index:1" height="243" src="http://www.youtube.com/embed/_xgPtqT0XBY" frameborder="0" allowfullscreen="allowfullscreen"></iframe>-->
                          <object type="application/x-shockwave-flash" style="width:293px;height:248px" data="http://www.youtube.com/v/7KEq-YQWxck">
                            <param name="movie" value="http://www.youtube.com/v/7KEq-YQWxck" />
                            <param name="wmode" value="transparent" />
                          </object>
                      </div></td>
                      <td width="216"><a href="javascript:void(null);" onclick="frmRegUsuario('si');" class="tooltip" title="[!]Como usuario: [/!]Con MiReferido.com todos podemos participar como usuarios/consumidores sin necesidad de inscripci&oacute;n o registro. Podemos buscar promociones o negocios, pero si ingresas tu email entonces podr&aacute;s recibir promociones y descuentos en tu correo diariamente y a&uacute;n hay m&aacute;s&hellip; Si compartes o refieres nuestra p&aacute;gina y  las promociones de los negocios con tu red de amigos y familiares podr&aacute;s ganar premios y descuentos especiales cada semana, solamente por referirnos. Comparte ahora, somos las mejor forma de Ahorrar Buscar y Ganar!"><img src="img/comofunciona1.jpg" width="216" height="230" border="0" /></a></td>
                      <td width="71"><a href="javascript:void(null);" onclick="frmRegAsociado('si');" class="tooltip" title="[!]Como asociado independiente:[/!]Como Asociado Independiente (AI) podr&aacute;s recibir comisiones por cada negocio que invites a nuestra p&aacute;gina, solamente necesitas registrarte como AI sin costo alguno y tendr&aacute;s una p&aacute;gina propia para que registres negocios, lo puedes hacer personalmente o por medio de redes sociales enviando tu link o c&oacute;digo de AI. Tus comisiones son pagadas cada dos semanas. Es muy sencillo lograr el &Eacute;xito con nosotros re&uacute;ne a 10 AI en tu zona y te conviertes en L&iacute;der de Grupo. Puedes participar tiempo parcial o tiempo completo, nuestro sistema de compensaci&oacute;n en &uacute;nico y vers&aacute;til. &Uacute;nete al equipo!"><img src="img/comofunciona2.jpg" width="216" height="230" border="0" /></a></td>
                      <td width="217"><a href="javascript:void(null);" onclick="frmRegNegocio('si');" class="tooltip" title="[!]Como negocio:[/!]Como negocio en nuestra plataforma de MiReferido.com podr&aacute;s promocionar y utilizar las mejores estrategias de mercadeo en l&iacute;nea para que tu negocio crezca y se mantenga en boca de todos. MiReferido.com es un sistema  de promoci&oacute;n y mercadeo que utiliza medios sociales y tradicionales para el beneficio de tu negocio. Goza de la incre&iacute;ble oportunidad de participar con nosotros y eleva el nivel de tus ventas y prep&aacute;rate para iniciar una etapa nueva en el crecimiento de tu empresa. Integramos diferentes formas de mercadeo en l&iacute;nea en un solo lugar! MiReferido.com"><img src="img/comofunciona3.jpg" width="216" height="230" border="0" /></a></td>
                    </tr>
                    <tr>
                      <td><div align="center" class="t_titulo_cupon">Usuarios</div></td>
                      <td><div align="center" class="t_titulo_cupon">Asociados independientes </div></td>
                      <td><div align="center" class="t_titulo_cupon">Negocios</div></td>
                    </tr>
                  </table></td>
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
	  include_once("pie.php");
	  ?>	  </td>
    </tr>
  </table>
</div>
<script  language="javascript">
function setEstadoBusq(estado)
{
	document.formBusqueda.txtUbic.value = estado;
	//quitarClase(document.getElementById('txtUbic'), 'ayudaB');
}
function setEstadoBusq2(estado)
{
	document.formBusqueda.txtDesc.value = estado+"*";
	//quitarClase(document.getElementById('txtDesc'), 'ayudaA');
}

var divscat="";
function mostrardiv(obj)
{
	if (divscat!=""){
	document.getElementById(divscat).style.visibility="hidden";
	document.getElementById(divscat).style.display="none";	
	}
	if(divscat==obj){
	document.getElementById(divscat).style.visibility="hidden";
	document.getElementById(divscat).style.display="none";
	divscat="";
	}else{
	document.getElementById(obj).style.visibility="visible";
	document.getElementById(obj).style.display="block";
	divscat=obj;
	}
	
}
</script>
</body>
</html>
