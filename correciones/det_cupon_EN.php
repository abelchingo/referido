<?php
@session_start();
require_once(dirname(__FILE__).'/librerias/xajax/xajax_core/xajax.inc.php');
$xajax = new xajax();
$xajax->configure('javascript URI','librerias/xajax/');
require_once('xajax/xlogeo_EN.php');
require_once('xajax/xcomentario_EN.php');
require_once('xajax/xregusuario_EN.php');
require_once('xajax/xregasociado_EN.php');
require_once('xajax/xregnegocio_EN.php');
require_once('xajax/xsubcategoria.php');
require_once('xajax/xregEmail_EN.php');
require_once(dirname(__FILE__).'/ajax/funcgenerales.php');
$xajax->processRequest();
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::MiReferido::DatCupon');
Aplicacion::clase('Core::datos::MiReferido::DatNegocio');
Aplicacion::clase('Core::datos::MiReferido::DatCategoria');
$oCupon = new DatCupon;
$oNegocio = new DatNegocio;
$oCategoria = new DatCategoria;
$idioma="EN";
if(is_numeric(@$_GET["dc"])){
	$cupd=$oCupon->listarxPk($_GET["dc"]);
	if(!empty($cupd[0])){
		$cupd=$cupd[0];
		$negd=$oNegocio->getxCod($cupd["neg_cod"],$idioma);
		$negd=@$negd[0];
	}else
		 echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=lis_cupon_EN.php">';
}else{
 echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=lis_cupon_EN.php">';
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<title>MR Referrals.com Search Share and Win – Win prizes and discounts – Receive coupons – receive commissions for every business that you register</title>
<meta name="description" content="We are the best online marketing company. Mireferido.com is a new and innovative products to help you find the best discount coupons, to have a part-time work or full reference earning commissions for business and promote your business in the best social platforms like Facebook, Twitter, YouTube and others. SEARCH SHARE  AND WIN">-->
<meta name="keywords" content="mrreferrals, mrreferrals, mrreferrals.com, referrals, print coupons, buy coupons, online coupons, discount coupons, best discount coupons, business directory, business directory online, online  business directory, advertising for business, business marketing, business advertising, online advertising, independent associated, associates, earn referral fees, earn money by reference, win prizes by reference, facebook, twitter, youtube, search shares and win. ">
<title><?php echo @$cupd["cup_titulo"]." - ".@$cupd["cup_subtitulo"]." - ".@$negd["neg_nom"];?></title>
<meta name="Description" content="<?php echo @$cupd["cup_especificaciones"];?>">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4247000-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>



<?php $xajax->printJavascript( "librerias/xajax/" )?>
<script type="text/javascript" src="js/funciones.js"></script>
<script type="text/javascript">
  function cargandofuncion(){
     document.getElementById('cargando').style.display='block';
      document.getElementById('cargando').innerHTML='<img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Loading....';
   }
   function funcioncargada(){
	  
      document.getElementById('cargando').innerHTML='';
      document.getElementById('cargando').style.display='none';
   }
   xajax.callback.global.onResponseDelay = cargandofuncion;
   xajax.callback.global.onComplete = funcioncargada;
</script>
<link href="css/estilosPEN.css" rel="stylesheet" type="text/css">

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
		  include('cabecera_EN.php');
		  ?>
		  
		  </div></td>
        </tr>
        <tr>
          <td><table border="0" align="center" cellpadding="0" cellspacing="3">
              <tr>
                <td align="left" valign="top">
                <table width="188" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="263" align="left" valign="top"><table width="188" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="182"><a href="det_negocio_EN.php?dn=<?php echo @$negd["neg_cod"] ?>">
                          <?php 
						  if(is_file('media/negocios/'.@$negd["neg_logo"])){?>
						   <img src="media/negocios/<?php echo @$negd["neg_logo"];?>" width="180" border="0"  />
                          <?php }
						  else{ 
                          ?>
							 <img src="media/negocios/logodefault2_EN.jpg" width="180" border="0"  />  
						  <?php }?>
                          </a>
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
 $enl=$oNegocio->enlaceNegocio(@$negd["neg_cod"],'FACEBOOK');
 if(!empty($enl[0])){
	 $enl=$enl[0];
	// echo $enl['enl_refer'];
	 ?>
<div class="fb-like-box" data-href="<?php echo $enl['enl_refer'] ?>" data-width="180" data-show-faces="true" data-stream="true" data-header="true"></div>	 
 <?php }else{?>
	<div class="fb-like-box" data-href="http://www.facebook.com/pages/MeReferralscom/234836403232726" data-width="180" data-show-faces="true" data-stream="true" data-header="true"></div> 
<?php }
?></td></tr></table>
</td>
                    </tr>
                    
                    <tr>
                      <td height="15">&nbsp;</td>
                    </tr>
                    <tr> 
                    <script>
					  function verfacebook(){
						  window.open('http://www.facebook.com/pages/MeReferralscom/234836403232726');
					  }
					  
					  </script>
                    <!--background="img/unete_club_fans_EN.jpg"-->
                      <td><table width="180px" align="center" cellpadding="0" cellspacing="0"style="background:url(img/like2_EN.jpg) no-repeat; "  height="198" border="0"  >
                      <tr>
                          <td valign="top" style="height:85px; min-height:85px;cursor:pointer;"  onclick="verfacebook()"></td>
                        </tr>
                       
                        <tr>
                          <td height="23" >
                          <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style " 
		addthis:url="http://<?php echo $_SERVER['HTTP_HOST']; ?>/det_negocio_EN.php?dn=<?php echo $negd["neg_cod"];?>"	
        addthis:title="<?php echo $negd["neg_nom"];?>"
		addthis:description="<?php echo $negd["neg_desc"];?>">
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
                </table>
                <?php 
					/*$_conban_=6;
					require_once("_banners_.php");*/
					?>                
                </td>
                <td valign="top"><table width="147" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>&nbsp;</td>
                    <td><table border="0" align="left" cellpadding="0" cellspacing="1">
                      <tr>
                        <td><table width="583" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td align="center" valign="top" background="img/cabecera_tarjeta_det_cupon.png" style="background-repeat: no-repeat"><table width="0" border="0" cellspacing="5" cellpadding="0">
                                  <tr>
                                    <td width="155">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td align="center" valign="top" background="img/fondo_detalle.jpg" style="background-repeat: repeat-y"><table width="548" border="0" cellspacing="10" cellpadding="0">
                                  <tr>
                                    <td class="TIT_DET_NEGOCIO"><div align="left">
                                        <table width="0" border="0" align="left" cellpadding="0" cellspacing="0">
                                          
                                          <tr>
                                            <td width="483" ><div class="TIT_DET_NEGOCIO" align="left" style="font-size:26px"><?php echo @$cupd["cup_titulo"];?></div>
                        <div align="left" class="TIT_DET_NEGOCIO" style="font-size:18px"> <?php echo @$cupd["cup_subtitulo"];?> </div>                  
                                            </td>
                                          </tr>
                                        </table>
                                    </div></td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td align="center" valign="top" background="img/fondo_detalle.jpg" style="background-repeat: repeat-y"><table width="584" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td align="center" valign="top" background="img/estiqueta_detalle_cupon.png" style="background-repeat: no-repeat"><table width="562" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="291" align="left" valign="top"><table width="213" border="0" cellpadding="0" cellspacing="17">
                                              <tr>
                                                <td align="center" valign="middle" width="248">
                                                <?php 
												if(!empty($cupd["cup_imagen"])){
												if(is_file("media/cupones/248".$cupd["cup_imagen"])){?>
                                                <img src="media/cupones/<?php echo '248'.@$cupd["cup_imagen"]; ?>" border="0"/>
                                                <?php }elseif(is_file("media/cupones/".$cupd["cup_imagen"])){ ?>
                                                <img src="media/cupones/<?php echo @$cupd["cup_imagen"]; ?>" border="0"/>
                                                <?php }
												}
												?>
                                                </td>
                                              </tr>
                                          </table></td>
                                          <td width="271" align="left" valign="top"><table width="268" height="143" border="0" align="center" cellpadding="0" cellspacing="0">
                                              <tr>
                                                <td width="259" height="86"><table width="239" height="43" border="0" align="right" cellpadding="0" cellspacing="11">
                                                    <tr>
                                                      <td>&nbsp;</td>
                                                      <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                      <td class="TIT_DET_NEGOCIO">
                                                      <div align="center">
                                                      <span class="est_precio_det_cupon" style="color:#FFF;">$<?php echo @$cupd["cup_costo"];?></span></div></td>
                                                      <td>
													  
													  <script language="javascript">
													  function vercuponp(){
															win = window.open('','myWin','width=640, height=400'); 
															
															//window.open('', 'popup', 'width = 200, height = 100')
															
															document.imprimircupon.target='myWin';
															document.imprimircupon.submit();
													  }
													  </script>
													  <form name="imprimircupon" id="imprimircupon" action="cupon_EN.php" method="post">
													  <input name="codigocup" type="hidden" value="<?php echo @$cupd["cup_cod"];?>" />
													  <input name="codigoneg" type="hidden" value="<?php echo @$negd["neg_cod"];?>" />										
													  <input name="nomneg" type="hidden" value="<?php echo @$negd["neg_nom"];?>" />
													  <input name="nomcup" type="hidden" value="<?php echo @$cupd["cup_titulo"];?>" />																										 					 								  <input name="precio" type="hidden" value="<?php echo @$cupd["cup_costo"];?>" />  
													  <input name="valor" type="hidden" value="<?php echo @$cupd["cup_valor"];?>" />													  													  <input name="descuento" type="hidden" value="<?php
														  $valor=!empty($cupd["cup_valor"])?$cupd["cup_valor"]:1;
														  $costo=@$cupd["cup_costo"];
														  $porc=ceil((($valor - $costo)*100)/$valor);
														  echo $porc;?>" />
													  <input name="ahorro" type="hidden" value="<?php 
															$valor=@$cupd["cup_valor"];
															$costo=@$cupd["cup_costo"];
															echo $valor -$costo ; ?>" />													  													  													  <input name="vencimiento" type="hidden" value="<?php echo @$cupd["cup_fecha_ven"];?>" />
													  <input name="especificaciones" type="hidden" value="<?php echo @$cupd["cup_especificaciones"];?>" />																										 	 												  													  <input name="indicaciones" type="hidden" value="<?php echo @$cupd["cup_indicaciones"];?>" />  													  
													  
													  
													  <div align="right"><a href="#" onClick="vercuponp(); return false"><img src="img/imprimir_cupon_verde_EN.jpg" width="59" height="18" border="0" /></a></div>
													  </form>
													  
													  </td>
                                                    </tr>
                                                    <tr>
                                                      <td width="138">&nbsp;</td>
                                                      <td width="68">&nbsp;</td>
                                                    </tr>
                                                </table></td>
                                              </tr>
                                              <tr>
                                                <td align="center" valign="top"><table width="166" height="57" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                      <td width="36" height="57"><table width="50" border="0" cellspacing="2" cellpadding="0">
                                                          <tr>
                                                            <td><div align="center"><span class="text_gris_negrita">Value</span></div></td>
                                                          </tr>
                                                          <tr>
                                                            <td><div align="center" class="TIT_DET_NEGOCIO">$<?php echo @$cupd["cup_valor"];?></div></td>
                                                          </tr>
                                                      </table></td>
                                                      <td width="1"><img src="img/separador_cupon_det.jpg" width="1" height="29" /></td>
                                                      <td width="65"><table width="80" border="0" cellspacing="2" cellpadding="0">
                                                          <tr>
                                                            <td><div align="center"><span class="text_gris_negrita">Discount</span></div></td>
                                                          </tr>
                                                          <tr>
                                                            <td><div align="center" class="TIT_DET_NEGOCIO"><?php
														  $valor=!empty($cupd["cup_valor"])?$cupd["cup_valor"]:1;
														  $costo=@$cupd["cup_costo"];
														  
														  $porc=ceil((($valor - $costo)*100)/$valor);
														  echo $porc;?>%
                                                          
                                                          </div></td>
                                                          </tr>
                                                      </table></td>
                                                      <td width="1"><img src="img/separador_cupon_det.jpg" width="1" height="29" /></td>
                                                      <td width="57"><table width="48" border="0" align="center" cellpadding="0" cellspacing="2">
                                                          <tr>
                                                            <td><div align="center"><span class="text_gris_negrita">Saving</span></div></td>
                                                          </tr>
                                                          <tr>
                                                            <td><div align="center" class="TIT_DET_NEGOCIO">$<?php 
															$valor=@$cupd["cup_valor"];
															$costo=@$cupd["cup_costo"];
															
															echo $valor -$costo ; ?></div></td>
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
                              <td align="center" valign="top" background="img/fondo_detalle.jpg" style="background-repeat: repeat-y"><table width="527" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td align="left" valign="top"><div align="left"><span class="TIT_DET_NEGOCIO">Directions</span></div></td>
                                    <td valign="top"><div align="left"><span class="TIT_DET_NEGOCIO">Specifications</span></div></td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top">&nbsp;</td>
                                    <td valign="top">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td width="273" align="left" valign="top"><table width="244" border="0" align="left" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="244" valign="top"><div align="left"><span class="text_gris_detalle">
                                          <?php echo @$cupd["cup_indicaciones"];?>
                                          </span></div></td>
                                        </tr>
                                    </table></td>
                                    <td width="254" align="left" valign="top"><table width="244" border="0" align="left" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="244" valign="top"><div align="left"><span class="text_gris_detalle"><?php echo @$cupd["cup_especificaciones"];?></span></div></td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td valign="top">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><span class="TIT_DET_NEGOCIO">Share this  Coupon and  Win!</span></div></td>
                                    <td valign="top">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">
                                    <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style" 
		addthis:url="http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>?dc=<?php echo @$_REQUEST["dc"];?>"	
        addthis:title="<?php echo @$cupd["cup_titulo"].' - '.$negd["neg_nom"];?>"
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
                                    <!--<img src="img/share.jpg" width="179" height="34" border="0" usemap="#MapMap3" />--></div></td>
                                    <td valign="top">&nbsp;</td>
                                  </tr>
                                </table>
                                 <!-- <map name="MapMap3" id="MapMap3">
                                    <area shape="rect" coords="4,6,62,27" href="#" />
                                    <area shape="rect" coords="72,8,132,26" href="#" />
                                    <area shape="rect" coords="143,8,175,26" href="#" />
                                  </map>-->
                              </td>
                            </tr>
                            <tr>
                              <td width="583" align="center" valign="top" background="img/fondo_detalle.jpg" style="background-repeat: repeat-y">&nbsp;</td>
                            </tr>
                            <tr>
                              <td align="left" valign="top" background="img/divisor_detalle.png" style="background-repeat: no-repeat"><div align="center">
                                <table width="98" border="0" cellspacing="9" cellpadding="0">
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                </table>
                              </div></td>
                            </tr>
                            <tr>
                              <td align="left" valign="top" background="img/fondo_detalle.jpg" style="background-repeat: repeat-y"><table width="548" border="0" align="center" cellpadding="0" cellspacing="10">
                                  <tr>
                                    <td align="left" valign="top"><table width="527" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="270" align="left" valign="top"><table width="263" border="0" align="left" cellpadding="0" cellspacing="0">
                                              <tr>
                                                <td width="263"><span class="TIT_DET_NEGOCIO"><?php echo @$negd["neg_nom"];?></span></td>
                                              </tr>
											   <p class="text_gris_negrita"  style="size:12px; font-size:12px;">
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
											  $cats= substr($cats,0,-1);
											  ?>
											  </p>											  
                                              <tr>
                                                <td><div align="left"><p class="text_gris_negrita"><br><?php echo $cats;?></p></div></td>
                                              </tr>
                                              <tr>
                                                <td><div align="left"></div></td>
                                              </tr>
                                              <tr>
                                                <td><span class="text_gris_detalle">
                                                <br>
                                                <div align="left">
                                  <p class="text_gris_negrita">Phone: <a href="javascript:void(0)"><?php echo @$negd["neg_fono"];?></a></p>
                                  <p class="text_gris_negrita">Email: <a href="mailto:<?php echo @$negd["neg_email1"];?>" target="_blank"><?php echo @$negd["neg_email1"];?></a></p>
                                  <p class="text_gris_negrita">Website: <a href="http://<?php echo eregi_replace("http://","",@$negd["neg_web"]);?>" target="_blank"><?php echo @$negd["neg_web"];	  
								  
								  ?></a>
                                  
                                  </p>
                                  <p class="text_gris_negrita">Description</p>
                                  <p class="text_gris_detalle"><?php echo @$negd["neg_desc"];?></p>
                                 </div>
                                                </span></td>
                                              </tr>
                                              
                                              
                                          </table></td>
                                          <td width="257" valign="top"><table width="247" border="0" align="right" cellpadding="0" cellspacing="0">
                                              <tr>
                                                <td><table width="158" border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                      <td width="59"><span class="text_gris_detalle_negrita">Ranking</span></td>
                                                      <td width="99"><table border="0" cellspacing="5" cellpadding="0">
                                                          <tr>
                                                          
                                                          <?php 
                                                     $calf=floor(@$negd["calif_nivel"]);
												 for($i=1;$i<=$calf;$i++){?>
                                                 
											<td ><img src="img/ranking1.jpg" width="17" height="17" /></td>
												<?php 	 }
												 for($i=1;$i<=(6-$calf);$i++){ ?>
										  <td><img src="img/ranking0.jpg" width="17" height="17" /></td>
													 <?php } ?>
                                                          
                                                          
                                                          </tr>
                                                          
                                                          
                                                      </table></td>
                                                    </tr>
                                                </table></td>
                                              </tr>
                                              <tr>
                                                <td><a href="det_negocio_EN.php?dn=<?php echo @$negd["neg_cod"]; ?>"><span class="text_gris_detalle_negrita">View comments </span></a></td>
                                              </tr>
                                              <tr>
                                                <td>&nbsp;</td>
                                              </tr>
                                              <tr>
                                                <td><?
												$zaddress=@$negd["neg_dir"]." ".@$negd["neg_ciu"]." ".@$negd["est_abrev"]." ".@$negd["neg_zip"];
												?>
                                                  <iframe width="247" height="248" frameborder="0" scrolling="No" marginheight="0" marginwidth="0" src="geo/georef.php?zaddress=<?=$zaddress?>"></iframe></td>
                                              </tr>
                                              <tr>
                                                <td><div align="left"><span class="text_gris_detalle">Address:</span></div></td>
                                              </tr>
                                              <tr>
                                                <td><div align="left"><span class="text_gris_detalle"><?php echo @$negd["neg_dir"]?></span></div></td>
                                              </tr>
                                              <tr>
                                            <td><div align="left"><span class="text_gris_detalle"><strong><?php echo @$negd["neg_ciu"].', '.@$negd["est_abrev"].' '.@$negd["neg_zip"];?></strong></span></div></td>
                                          </tr>
                                              <tr>
                                                <td><div align="left"><span class="text_gris_detalle_negrita">
                                                
                                                <a href="det_negocio_EN.php?dn=<?php echo @$negd["neg_cod"]; ?>">Go to page</a> </span></div></td>
                                              </tr>
                                          </table></td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td valign="top">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td><div align="left"><span class="TIT_DET_NEGOCIO">Share  this Business and Win! </span></div></td>
                                          <td valign="top">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td><div align="left">
                                          <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style" 
		addthis:url="http://<?php echo $_SERVER['HTTP_HOST']; ?>/det_negocio_EN.php?dn=<?php echo $negd["neg_cod"];?>"	
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
                                          
                                          <!--<img src="img/share.jpg" width="179" height="34" border="0" usemap="#MapMap2" />--></div></td>
                                          <td valign="top">&nbsp;</td>
                                        </tr>
                                      </table>
                                       <!-- <map name="MapMap2" id="MapMap2">
                                          <area shape="rect" coords="4,6,62,27" href="#" />
                                          <area shape="rect" coords="72,8,132,26" href="#" />
                                          <area shape="rect" coords="143,8,175,26" href="#" />
                                        </map>-->
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left" valign="top">&nbsp;</td>
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
                  </tr>
                </table></td>
                <td valign="top"><table width="186" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="96"><table width="186" height="46" border="0" cellpadding="0" cellspacing="3">
                      <tr>
                        <td background="img/bg_como_funciona.jpg"><table width="169" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="20">&nbsp;</td>
                              <td width="169" class="t_TITULO_1"><div align="left">COUPONS</div></td>
                            </tr>
                          </table>
                            <div align="center"></div></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr><td>
                  <?php 
					$_concup_=3;
					require_once("_cupones_.php");
					?>
                    </td>
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
	  
	  include("pie_EN.php");
	  ?>	  </td>
    </tr>
  </table>
</div>


<map name="Map" id="Map"><area shape="rect" coords="4,6,62,27" href="#" /><area shape="rect" coords="72,8,132,26" href="#" /><area shape="rect" coords="143,8,175,26" href="#" /></map></body>
</html>
