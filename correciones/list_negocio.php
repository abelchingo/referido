<?php
require_once(dirname(__FILE__).'/librerias/xajax/xajax_core/xajax.inc.php');
$xajax = new xajax();
$xajax->configure('javascript URI','librerias/xajax/');
require_once(dirname(__FILE__).'/ajax/funcgenerales.php');
require_once('xajax/xlogeo.php');
require_once('xajax/xcupones.php');
require_once('xajax/xregusuario.php');
require_once('xajax/xregasociado.php');
require_once('xajax/xregnegocio.php');
require_once('xajax/xsubcategoria.php');
require_once('xajax/xregEmail.php');
$xajax->processRequest();
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::MiReferido::DatNegocio');
Aplicacion::clase('Core::datos::MiReferido::DatBanner');
Aplicacion::clase('Core::negocio::MiReferido::NegBusquedaNegocio');
Aplicacion::clase('Core::datos::MiReferido::DatCategoria');
Aplicacion::clase('Core::datos::MiReferido::DatCupon');
$oCupon = new DatCupon;
$oCategoria = new DatCategoria;
$oNegocio = new DatNegocio;
$oBanner = new DatBanner;
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

<link href="css/estilosPES.css" rel="stylesheet" type="text/css">
<?php $xajax->printJavascript( "librerias/xajax/" )?>
<script type="text/javascript" src="js/funciones.js"></script>
<style type="text/css">
<!--
.Estilo7 {color: #666666}
-->
</style>
</head>
<body>
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
                <td width="188" align="left" valign="top">
                <?php 
					$_conban_=10;
					require_once("_banners_.php");
					?>
                    <div style="background-color:#FFF">
                    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-href="http://www.facebook.com/pages/Mi-Referidocom/118564078232642" data-width="180" data-show-faces="true" data-stream="true" data-header="true"></div> 
</div>
                
                </td>
                <td width="581" valign="top">
                <div class="seccion" style="width:581px;">
   	        <div>
   	          <?php
			$txtDesc = @$_POST['txtDesc'];
			$txtUbic = @$_POST['txtUbic'];
			//if($txtUbic==)
			
			$ordenPrior = 1 == @$_POST['ordenPrior'] ? true : false;
			$oNegBusquedaNegocio = new NegBusquedaNegocio;			
			$busqueda = $oNegBusquedaNegocio->buscar($txtDesc, $txtUbic, $desde,$ordenPrior, $mostrar, $idioma);			
			$numRegs = $busqueda[0];
			$negocios = $busqueda[1];			
			$de_ = $desde + $mostrar;
			$de_ = ($de_ > $numRegs) ? $numRegs : $de_;			
			$ini_ = 0 == $numRegs ? 0 : $desde + 1;
			?>
   	        </div>
            <?php if($numRegs > 0){?>
   	        <table width="540" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><table width="573" border="0" align="center" cellpadding="0" cellspacing="5" background="img/fondo_detalle.jpg">
                  <tr>
                    <td width="560" align="center"><table width="542" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="229">
<div class="t_categorias" style="float:left;">del <?php echo $ini_?> al <?php echo $de_?> de <?php echo $numRegs?> Negocios</div></td>
                          <td width="282" align="right"><div class="seccionOrdenBusq" style="float:right;">
                              <div align="right" class="t_categorias">Ordenar por: <a href="javascript:void(null);" onclick="javascript:document.formBusqueda.ordenPrior.value = 0; enviarAbuscar();">alfabeto</a>&nbsp;| <a href="javascript:void(null)" onclick="javascript:document.formBusqueda.ordenPrior.value = 1; enviarAbuscar();">ranking</a> </div>
                          </div></td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td background="img/divisor_detalle.png"><div align="center">
                  <table width="0" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="49">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                </div></td>
              </tr>
            </table>
			
			<?php }?>
			
			
			
			
   	        <div class="titulo" style="padding:0px 0px 0px 0px; width=534"></div>
            <div>
        	  <div>
        	    <?php
			foreach($negocios as $neg) {
			?>
        	  </div>
        	  <table width="562" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="574"><div class="itemNegBusq <?php echo 1 == $negocio['neg_prior'] ? 'negPag' : ''?>">
				  
				  
				  
				  
                    <table width="562" border="0" align="center" cellpadding="0" cellspacing="0" >
                      <tr>
                        <td width="590" align="center" valign="top" ><table width="573" border="0" cellpadding="0" cellspacing="12" bgcolor="#FFFFFF" >
                            <tr>
                              <td width="539" align="center" valign="top" bgcolor="#DEDEEF"><table width="549" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="127" align="left" valign="top"><table width="127" border="0" align="left" cellpadding="0" cellspacing="8">
                                        <tr>
                                          <td width="134" align="left" valign="top" ><table width="111" border="0" cellpadding="0" cellspacing="1">
                                              <tr>
                                                <td width="109" align="center"><a href="det_negocio.php?dn=<?php echo $neg["neg_cod"];?>">
                                                <?php 
						  if(is_file('media/negocios/'.@$neg["neg_logo"])){?>
                                                <img src="media/negocios/<?php echo !empty($neg["neg_logo"])?$neg["neg_logo"]:'negocio_default.jpg'?>" width="100" height="100" border="0" />
                                                <?php }
						  else{ 
                          ?>
							 <img src="media/negocios/logodefault2.jpg" width="100" height="100" border="0"  />  
						  <?php }?>
                                                
                                                </a><br />  <a href="det_negocio.php?dn=<?php echo $neg["neg_cod"];?>"><img src="img/btvermas.png" width="65" height="24" border="0" /></a>  </td>
                                              </tr>
                                          </table></td>
                                        </tr>
                                        
                                    </table></td>
                                    <td width="422" valign="top"><table width="421" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="260" height="139" align="left" valign="top"><table width="245" border="0" align="center" cellpadding="0" cellspacing="5">
                                          <tr>
                                            <td width="235"><div align="left"><span class="TIT_DET_NEGOCIO"><?php echo substr($neg["neg_nom"],0,25); ?></span></div></td>
                                            </tr>
                                          <tr>
                                            <td><div align="left"><span class="Estilo7 t_categorias"><strong>
                                                <?php
								  $cats='';
								  $vercats=array();
								  $i=0;
                                  $negcat=$oNegocio->getCategorias(@$neg["neg_cod"], $idioma);
								  foreach($negcat as $ncat){
									
									 $categorias=$oCategoria->getxCodIdioma($ncat["cat_cod"].$idioma);
									  foreach($categorias as $cat_){
										  $cats.=$cat_["cat_nom"].',';										  
									  }								  
								  }
								  echo substr($cats,0,30);
								  ?>
                                            </strong></span></div></td>
                                          </tr>
                                          <tr>
                                            <td><div align="left"><span class="Estilo7 t_categorias"><strong><?php echo @$neg["neg_dir"];?></strong></span></div></td>
                                          </tr>
                                          <tr>
                                            <td><div align="left"><span class="Estilo7 t_categorias"><strong><?php echo @$neg["neg_ciu"].', '.@$neg["est_abrev"].' '.@$neg["neg_zip"];?></strong></span></div></td>
                                          </tr>
                                         
                                          <tr>
                                            <td><div align="left" class="text_gris_negrita">Comparte y Gana! </div></td>
                                          </tr>
                                          <tr>
                                            <td><div align="left">
                                               
                                                    <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style "
		addthis:url="http://<?php echo $_SERVER['HTTP_HOST']; ?>/det_negocio.php?dn=<?php echo $neg["neg_cod"];?>"	
        addthis:title="<?php echo $neg["neg_nom"];?>"
		addthis:description="<?php echo $neg["neg_desc"];?>">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e67cc206d4ae200"></script>
<!-- AddThis Button END -->
                                                    
                                                  
                                            </div></td>
                                          </tr>
                                        </table></td>
                                        <td width="161" valign="top"><table width="0" border="0" cellspacing="5" cellpadding="0">
                                          <tr>
                                            <td width="149"><table border="0" align="right" cellpadding="0" cellspacing="0">
                                              <tr>
                                                <td><span class="text_gris_detalle_negrita">Ranking</span></td>
                                                <td><table border="0" cellspacing="5" cellpadding="0">
                                                    <tr>
                                                    <?php 
                                                     $calf=floor(@$neg["calif_nivel"]);
												 for($i=1;$i<=$calf;$i++){?>
                                                 
											<td ><img src="img/ranking1.jpg" width="11" height="11" /></td>
												<?php 	 }
												 for($i=1;$i<=(5-$calf);$i++){ ?>
										  <td><img src="img/ranking0.jpg" width="11" height="11" /></td>
													 <?php } ?>
                                                     </tr>
                                                </table></td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                           <?php 
										  // $concup=0;
										   $concup=$oCupon->BuscarVCupones(null,null,$idioma,1,null,null,0, 1,$neg["neg_cod"]);
										  
										   //listarCuponesXnegocioXusuario($idioma,@$neg["neg_cod"],null,1,0,1,'S'); 
										   
										   
										   
										   
										   
										    //echo $concup."okokok";
										   if($concup>0){?>
                                          <tr>
                                            <td height="72" colspan="2"><div align="right"><a href="lis_cupon.php?neg=<?php echo @$neg["neg_cod"];?>"><img src="img/alerta_cupon2.png" width="120" height="55" border="0" /></a></div></td>
                                          </tr>
                                          <?php }?>
                                        </table></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                              </table></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td align="center" valign="top" background="img/divisor_detalle.png" ><table width="0" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="49">&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                    </table>
					
                  </div></td>
                </tr>
              </table>
        	  <div>
        	    <?php
			}
			?>
                        </div>
            </div>          
          <?php if($numRegs == 0):?>
          <div><h3 class="t_titulo_cupon">Su b&uacute;squeda no obtuvo resultados!!</h3>
          </div>
          <?php endif;?>
          <?php if($numRegs > 0):?>
          <div class="paginacion">
            <table width="155" border="0" align="center" cellpadding="0" cellspacing="0">
              
              <tr>
                <td><table align="center" background="img/fondo_detalle.jpg" width="573">
                  <tr>
                    <td width="231" align="right" class="t_categorias"><div class="t_categorias" style="float:left;">&nbsp;&nbsp;&nbsp;del <?php echo $ini_?> al <?php echo $de_?> de <?php echo $numRegs?> Negocios</div>                      : </td>
                    <td width="330" align="right" class="t_categorias">Ir a la pagina :
                      <?php
			$pg_a = $pg;
			$numPgs = ceil($numRegs / $mostrar);
			$i = $pg_base;
			$x = $i + $pg_vis - 1;
			$in = $i;
			 if($pg_base > 1):?>
                        <a class="pgBusq" href="javascript:void(0)" onclick="setPagBase(<?php echo $pg_base - 1?>); cambiarPag(<?php echo $i - 1?>)">Anterior</a>
                        <?php endif;
                for($i = ($in-1); $i < $x; ++$i) {
                    if($i >= $numPgs) {
                        break;
                    }
               	if(($i + 1) == $pg) {
                    	echo '<a href="javascript:void(0)" class="pgBusq pgBusqAct">'.($i+1).'</a>';
                	} else {
                ?>
                        <a class="pgBusq" href="javascript:void(0)" onclick="cambiarPag(<?php echo $i + 1?>)"><?php echo $i + 1?></a> |
                        <?php
                	}
                }
                ?>
                        <?php if($numPgs > $pg_vis && ($in+$pg_vis) <= $numPgs):?>
                        <a class="pgBusq" href="javascript:void(0)" onclick="setPagBase(<?php echo $pg_base + 1?>); cambiarPag(<?php echo $i+1?>);">Siguiente</a>
                        <?php endif;?>&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
            </table>
            <div style="clear:both;"></div>
            </div>
        <?php endif;?>
    	</div>
                </td>
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
                    <td>
                    <?php 
					$_concup_=3;
					$_negocio_=null;
					require_once("_cupones_.php");
					?>                    </td>
                  </tr>
                </table></td>
              </tr>
              
          </table></td>
        </tr>
        
      </table></td>
    </tr>
    <tr>
      <td align="center" valign="top">
	  <?
	  
	  include("pie.php");
	  ?>	  </td>
    </tr>
  </table>
</div>
<script>
function cambiarPag(pg)
{
	document.formBusqueda.pg.value = pg;
	enviarAbuscar();
}
function setPagBase(pg)
{
	document.formBusqueda.pgbase.value = pg;
}
</script>
</body>
</html>
