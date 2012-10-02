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
$xajax->processRequest();
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
<title>MI REFERIDO.COM</title>
<link href="css/estilos_n.css" rel="stylesheet" type="text/css">
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
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jqueryTooltip.js" type="text/javascript"></script>
<style>
/* Tooltips */
#tooltip {
	position: absolute;
	padding: 4px;
	color: #FFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size: 12px;
	display: none;
	text-align: left;
	background-color: #003399;
	opacity: 0.95;
	-moz-opacity: 0.95;
	filter: alpha(opacity=100);
}
 
.tooltipTitle {
	font-size: 14px;
	font-weight: bold;
	color:#A2DE29;
}

</style>

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
        <tr>
          <td><table border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left" valign="top"><table width="294" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="294" align="left" valign="top"><table width="162" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="162">
                          <div style="position:relative; z-index:1; height:242; width:293;">
                          <!--<iframe width="293" style="z-index:1" height="243" src="http://www.youtube.com/embed/_xgPtqT0XBY" frameborder="0" allowfullscreen="allowfullscreen"></iframe>-->
                          <object type="application/x-shockwave-flash" style="width:293px;height:242px" data="http://www.youtube.com/v/7KEq-YQWxck">
                          <param name="movie" value="http://www.youtube.com/v/7KEq-YQWxck" />
                          <param name="wmode" value="transparent" />
                          </object>
                          
                          
                          </div></td>
                        </tr>
                      </table></td> 
                    </tr>
                    <tr>
                      <td><table border="0" cellpadding="0" cellspacing="0" background="img/like.png" width="293" height="323">
                          <tr>
                            <td> </td>
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
</div>
</td>
                          </tr>
                      </table></td>
                    </tr>
                    
                    <tr>
                      <td align="center" valign="top"><table width="263" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td><table width="232" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td><table width="294" height="44" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="294" height="44" background="img/barra_categorias.png" style="background-repeat: no-repeat"><div align="center">
                                        <table width="238" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td><div align="left" class="t_TITULO_1">BUSQUEDA POR CATEGORIA </div></td>
                                          </tr>
                                        </table>
                                    </div></td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td bgcolor="#FFFFFF"><table width="0" border="0" align="center" cellpadding="0" cellspacing="2">
                                  <tr>
                                    <td width="262">&nbsp;</td>
                                  </tr>
                              <?php  $i=0;
							$categorias = $oDatCategoria->getxIdioma($idioma);
							foreach($categorias as $cat) {
								if('S' == $cat['en_inicio'])
								$i+=1;{
								?> 
                                  <tr>
                                    <td><div align="left" class="t_categorias"><a href="javascript:mostrardiv('<?php echo "div".$i;?>'); " onClick="javascript:setEstadoBusq2('<?php echo $cat['cat_nom'];?>');"><?php echo utf8_encode($cat['cat_nom'])?></a>
                                    <div style="padding:10px 5px 10px 20px; visibility:hidden; display:none;" id="<?php echo "div".$i;?>">
            	<table width="0" border="0" align="center" cellpadding="0" cellspacing="2">
				
				<?php
					$subcategorias = $oSubDatCategoria->listarxCategoriaxIdioma($idioma,$cat['cat_cod']);
					foreach($subcategorias as $subcat) {?>
                    <tr>
                      <td><div align="left" class="t_categorias"><a href="#arriba" onClick="javascript:document.formBusqueda.txtUbic.focus(); setEstadoBusq2('<?php echo utf8_encode($subcat['scat_nom']);?>')"><?php echo utf8_encode($subcat['scat_nom'])?></a></div>
					 </td>
                    </tr>
                    <tr>
                                    <td><img src="img/separador_categorias.jpg" width="245" height="4"></td>
                                  </tr>
                    <?php }	?>
              	</table>
        		</div></div></td>
                                  </tr>
                                  <tr>
                                    <td><img src="img/separador_categorias.jpg" width="262" height="4"></td>
                                  </tr>                                  
                                  <?php 
								  }
								  }
								  ?>
                              </table></td>
                            </tr>
                            <tr>
                              <td bgcolor="#FFFFFF"><table width="0" border="0" align="center" cellpadding="0" cellspacing="2">
                                  <tr>
                                    <td width="262">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><a href="#"><img src="img/bt_enviar_categoria.png" width="89" height="27" border="0"></a></div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
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
                      <td>&nbsp;</td>
                    </tr>
                </table></td>
                <td valign="top"><table width="665" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table width="181" border="0" cellspacing="3" cellpadding="0">
                      <tr>
                        <td><div style="width:660px; overflow:hidden;">
                          <iframe src="animacion.php?idioma=ES" width="660" height="242" scrolling="no" frameborder="0" class="Estilo1" marginheight="0" marginwidth="0" allowtransparency="true"></iframe>
      </div></td>
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
                      <?php 
					$i=0;
					$cupones=$oCupon->listarFiltro(null,null ,null,null ,null,'S',null,0, 6,$idioma);				
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
                                            <td width="216"><span class="t_titulo_cupon"><?php echo $cup["cup_titulo"]; ?> </span></td>
                                          </tr>
                                          <tr>
                                            <td><span class="t_empresa_cupon"><?php echo $cup["cup_subtitulo"]; ?> </span></td>
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
                                                      <td width="76" valign="top"><div align="center"><a href="#"><img src="img/imprimir_cupon_verde.jpg" width="59" height="18" border="0" /></a></div></td>
                                                      <td width="69" valign="top"><div align="center"><a href="#"><img src="img/comparte_gana.jpg" width="55" height="22" border="0" /></a></div></td>
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
                        </table>                 
                        
                        
                        </td>
                       <?php
					$i++;
					if($i%3==0) echo "</tr><tr>";
					 }
					 
					?> 
                      </tr>
                    </table>
                 <!--   </td>-->
                    
                    <!--</tr>
                    </table>-->
                    
                    </td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><table width="662" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><table width="663" height="46" border="0" cellpadding="0" cellspacing="3">
                          <tr>
                            <td background="img/bg_como_funciona.jpg"><table width="189" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="32">&nbsp;</td>
                                <td width="157" class="t_TITULO_1">&iquest;COMO FUNCIONA?</td>
                              </tr>
                            </table>
                              <div align="center"></div></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table width="504" border="0" cellspacing="3" cellpadding="0">
                          <tr>
                            <td width="216"><a href="javascript:void(null);" onclick="frmRegUsuario('si');" class="tooltip" title="[!]Como usuario: [/!]Con MiReferido.com todos podemos participar como usuarios/consumidores sin necesidad de inscripción o registro. Podemos buscar promociones o negocios, pero si ingresas tu email entonces podrás recibir promociones y descuentos en tu correo diariamente y aún hay más… Si compartes o refieres nuestra página y  las promociones de los negocios con tu red de amigos y familiares podrás ganar premios y descuentos especiales cada semana, solamente por referirnos. Comparte ahora, somos las mejor forma de Ahorrar Buscar y Ganar!"><img src="img/comofunciona1.jpg" width="216" height="217" border="0" /></a></td>
                            <td width="71"><a href="javascript:void(null);" onclick="frmRegAsociado('si');" class="tooltip" title="[!]Como asociado independiente:[/!]Como Asociado Independiente (AI) podrás recibir comisiones por cada negocio que invites a nuestra página, solamente necesitas registrarte como AI sin costo alguno y tendrás una página propia para que registres negocios, lo puedes hacer personalmente o por medio de redes sociales enviando tu link o código de AI. Tus comisiones son pagadas cada dos semanas. Es muy sencillo lograr el Éxito con nosotros reúne a 10 AI en tu zona y te conviertes en Líder de Grupo. Puedes participar tiempo parcial o tiempo completo, nuestro sistema de compensación en único y versátil. Únete al equipo!"><img src="img/comofunciona2.jpg" width="216" height="217" border="0" /></a></td>
                            <td width="217"><a href="javascript:void(null);" onclick="frmRegNegocio('si');" class="tooltip" title="[!]Como negocio:[/!]Como negocio en nuestra plataforma de MiReferido.com podrás promocionar y utilizar las mejores estrategias de mercadeo en línea para que tu negocio crezca y se mantenga en boca de todos. MiReferido.com es un sistema  de promoción y mercadeo que utiliza medios sociales y tradicionales para el beneficio de tu negocio. Goza de la increíble oportunidad de participar con nosotros y eleva el nivel de tus ventas y prepárate para iniciar una etapa nueva en el crecimiento de tu empresa. Integramos diferentes formas de mercadeo en línea en un solo lugar! MiReferido.com"><img src="img/comofunciona3.jpg" width="216" height="217" border="0" /></a></td>
                          </tr>
                          <tr>
                            <td><div align="center" class="t_titulo_cupon">USUARIOS</div></td>
                            <td><div align="center" class="t_titulo_cupon">ASOCIADOS <br> INDEPENDIENTES </div></td>
                            <td><div align="center" class="t_titulo_cupon">NEGOCIOS</div></td>
                          </tr>
                        </table></td>
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
