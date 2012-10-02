<?php
@session_start();
require_once(dirname(__FILE__).'/librerias/xajax/xajax_core/xajax.inc.php');
$xajax = new xajax();
$xajax->configure('javascript URI','librerias/xajax/');
require_once(dirname(__FILE__).'/ajax/funcgenerales.php');
require_once('xajax/xlogeo_EN.php');
require_once('xajax/xregusuario_EN.php');
require_once('xajax/xregasociado_EN.php');
require_once('xajax/xregnegocio_EN.php');
require_once('xajax/xregEmail_EN.php');
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
$idioma="EN";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>MR Referrals.com Search Share and Win – Win prizes and discounts – Receive coupons – receive commissions for every business that you register</title>
<meta name="description" content="We are the best online marketing company. Mireferido.com is a new and innovative products to help you find the best discount coupons, to have a part-time work or full reference earning commissions for business and promote your business in the best social platforms like Facebook, Twitter, YouTube and others. SEARCH SHARE  AND WIN">
<meta name="keywords" content="mrreferrals, mrreferrals, mrreferrals.com, referrals, print coupons, buy coupons, online coupons, discount coupons, best discount coupons, business directory, business directory online, online  business directory, advertising for business, business marketing, business advertising, online advertising, independent associated, associates, earn referral fees, earn money by reference, win prizes by reference, facebook, twitter, youtube, search shares and win. "><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4247000-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>



<link href="css/estilosHEN.css" rel="stylesheet" type="text/css">
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
		  include('cabecera_EN.php');
		  ?>
		  
		  </div></td>
        </tr>
        <!--<tr>
          <td align="left" valign="top"><table width="928" border="0" align="center" cellpadding="0" cellspacing="5">
            <tr>
              <td width="235"><a href="javascript:void(null);" onclick="frmRegNegocio('si');"><img src="img/bt_home_1_en.png" width="235" height="97" border="0" /></a></td>
              <td width="235"><a href="http://www.tripleclicks.com/11531449 " target="_blank"><img src="img/bt_home_2_en.png" width="235" height="97" border="0" /></a></td>
              <td width="199"><a href="http://myapprovalwarehouse.com/?id=mrreferrals" target="_blank"><img src="img/bt_home_3_en.png" width="235" height="97" border="0" /></a></td>
              <td width="244"><a href="#"><img src="img/bt_home_4_en.png" width="235" height="97" border="0" /></a></td>
            </tr>
          </table></td>
        </tr>-->
        <tr>
          <td align="center" valign="top"><iframe src="animacion.php?idioma=EN" width="956" height="245" scrolling="No" frameborder="0" class="Estilo1" marginheight="0" marginwidth="0" allowtransparency="true"></iframe></td>
        </tr>
        <tr>
          <td><table border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left" valign="top"><table width="294" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="294" align="left" valign="top"><table width="162" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                          <td width="162"><table width="263" border="0" cellspacing="1" cellpadding="0">
                            <tr>
                              <td><table width="232" height="95" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td height="44"><table width="294" height="44" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="294" height="44" background="img/barra_categorias.png" style="background-repeat: no-repeat"><div align="center">
                                              <table width="238" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                  <td><div align="left" class="t_TITULO_1">Special Deals</div></td>
                                                </tr>
                                              </table>
                                          </div></td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td height="750" align="left" valign="top" bgcolor="#FFFFFF"><?php 
					$_conbanh_=15;					
					require_once("_bannershome_.php");
					?>
                                        <div align="center" class="t_TITULO_1"><a href="list_cupon_EN.php?order=Ahorro&$formaorder='DESC'" style="text-decoration:none;  color:#009;"><strong>View More Coupons.</strong></a></div></td>
                                  </tr>
                              </table></td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td>
                          <!--
                          <table align="center" border="0" cellpadding="0" cellspacing="0" background="img/like_EN.png" width="293" height="323">
                            <tr>
                              <td onclick="verfacebook()" style="cursor:pointer;"></td>
                            </tr>
                            <tr>
                              <td height="50" valign="top" align="center"><div align="center" style="width:280px; text-align:right">
                                <!-- AddThis Button BEGIN 
                                  <div class="addthis_toolbox addthis_default_style addthis_32x32_style" style="text-align:center;"> <a class="addthis_button_preferred_1"></a> <a class="addthis_button_preferred_2"></a> <a class="addthis_button_preferred_3"></a> <a class="addthis_button_preferred_4"></a> <a class="addthis_button_compact"></a> <a class="addthis_counter addthis_bubble_style"></a>
                                      <!--<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                  </div>
                                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e67cc206d4ae200"></script>
                                  <!-- AddThis Button END 
                              </div></td>
                            </tr>
                          </table>
                          -->
                          </td>
                        </tr>
                        
                      </table></td> 
                    </tr>
                    <tr>
                      <td>
                      <script>
					  function verfacebook(){
						  window.open('http://www.facebook.com/pages/MeReferralscom/234836403232726');
					  }					  
					  </script></td>
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
					$cupones=$oCupon->vcupones2(null,null,null,null,"'".$idioma."'",null,null,true,0,6);					
										
					//listarFiltro(null,null ,null,null ,null,'S',null,0, 6,$idioma);				
					foreach($cupones as $cup){?>
                        <td align="center" valign="bottom"><table width="220" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="275" valign="bottom"><div align="center">
                              <table width="217" border="0" align="right" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td valign="top"><img src="img/cabeza_cupon.png" width="216" height="102" /></td>
                                </tr>
                                <tr>
                                  <td width="217" valign="top"><a href="det_cupon_EN.php?dc=<?php echo $cup["cup_cod"]; ?>"><img border="0" src="media/cupones/<?php echo $cup["cup_imagen"]; ?>" width="216" height="176" /></a></td>
                                </tr>
                                <tr>
                                  <td bgcolor="#A2DE29"><table width="59" height="59" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td><div align="center">
                                        <table width="179" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="216"><span class="t_titulo_cupon" style=" <?php echo strlen($cup["cup_titulo"])>25?'font-size:11px;':''?>" ><?php echo $cup["cup_titulo"]; ?> </span></td>
                                          </tr>
                                          <tr>
                                            <td><span class="t_empresa_cupon"  style=" <?php 
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
                                                          <td><div align="center" class="Estilo1"> Value </div></td>
                                                        </tr>
                                                        <tr>
                                                          <td><div align="center" class="Estilo2">$ <?php echo $cup["cup_valor"]; ?></div></td>
                                                        </tr>
                                                    </table></td>
                                                    <td width="1"><img src="img/separador_cupon_det.jpg" width="1" height="29" /></td>
                                                    <td width="65"><table width="80" border="0" cellspacing="2" cellpadding="0">
                                                        <tr>
                                                          <td><div align="center" class="Estilo1"> Discount </div></td>
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
                                                          <td><div align="center" class="Estilo1"> Saving </div></td>
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
													  <form name="imprimircupon_<?=$QNF?>" id="imprimircupon_<?=$QNF?>" action="cupon_EN.php" method="post">
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
													  
													  
													  
													  <div align="center"><a href="#" onclick="vercuponp('imprimircupon_<?=$QNF?>','<?=$QNF?>'); return false"><img src="img/imprimir_cupon_verde_EN.jpg" width="59" height="18" border="0" /></a></div>
													</form>													  </td>
                                                      <td width="69" valign="top"><div align="center"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/det_cupon_EN.php?dc=<?php echo $cup["cup_cod"]; ?>"><img src="img/comparte_gana_EN.jpg" width="55" height="22" border="0" /></a></div></td>
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
                    <td align="left" valign="top"><!--<table width="662" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><div align="center">
                          <table width="656" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="328" height="260"><script language="JavaScript" type="text/javascript">
var ci_cap_scriptId = "36212";
var ci_cap_bid = "1222250001";
var ci_cap_format = "300x250";
var ci_cap_channel = "Homepage";
                          </script>
                                  <script language="JavaScript" type="text/javascript" src="http://bc.coupons.com/"></script>                              </td>
                              <td width="328"><script language="JavaScript" type="text/javascript">
var ci_cap_scriptId = "36213";
var ci_cap_bid = "1222250001";
var ci_cap_format = "300x250";
var ci_cap_channel = "Homepage";
                          </script>
                                  <script language="JavaScript" type="text/javascript" src="http://bc.coupons.com/"></script>                              </td>
                            </tr>
                          </table>
                        </div></td>
                      </tr>
                    </table>--></td>
                  </tr>
                  
                </table></td>
              </tr>
              
          </table></td>
        </tr>
        <tr>
          <td><table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><table width="963" height="46" border="0" align="center" cellpadding="0" cellspacing="3">
                <tr>
                  <td width="957" align="left" valign="middle" background="img/bg_como_funciona.jpg"><table width="189" border="0" align="left" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="22">&nbsp;</td>
                        <td width="167" class="t_TITULO_1">HOW IT WORKS?</td>
                      </tr>
                    </table>
                      <div align="center"></div></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><table width="962" border="0" align="center" cellpadding="0" cellspacing="3">
                <tr>
                  <td width="956" bgcolor="#E8F8FF"><table width="956" border="0" cellspacing="3" cellpadding="0">
                    <tr>
                      <td width="293" rowspan="2" align="right" valign="top"><span style="position:relative; z-index:1; height:242; width:293;">
                        <object type="application/x-shockwave-flash" style="width:293px;height:248px" data="http://www.youtube.com/v/tmPN1ljqnbk">
                          <param name="movie" value="http://www.youtube.com/v/tmPN1ljqnbk" />
                          <param name="wmode" value="transparent" />
                        </object>
                      </span></td>
                      <td width="216"><a href="javascript:void(null);" onclick="frmRegUsuario('si');" class="tooltip" title="[!]Users: [/!] All of us can participate as users / consumers with MrReferrals.com, without registration. We can search for promotions and businesses, but if you enter your email then you can receive daily promotions and discounts in your inbox and there's more ... If you share or refer our site and business promotions with your network of friends and family you can win prizes and discounts every week. We are the best ways to Search, Share and Win!"><img src="img/comofunciona1_EN.jpg" width="216" height="230" border="0" /></a></td>
                      <td width="216"><a href="javascript:void(null);" onclick="frmRegAsociado('si');" class="tooltip" title="[!]Independent&nbsp;Associate: [/!] As Independent Associate you can receive commissions for every business that you register, you only need to register as Independent Associate at no cost and you will have your own website, you can promote your business personally through social networks by sending your personal link. Your commissions will be paid every two weeks. It is very easy to achieve success! Bring together 10 Independent Associates in your area and you can become a Team Leader. You can participate part-time or full time, our compensation system is unique and versatile. Join our team now!"><img src="img/comofunciona2_EN.jpg" width="216" height="230" border="0" /></a></td>
                      <td width="216"><a href="javascript:void(null);" onclick="frmRegNegocio('si');" class="tooltip" title="[!]Business Owner: [/!] As a business owner you can use our platform MrReferrals.com to promote with  the best online marketing strategies to grow your business. MrReferrals.com is a promotional and marketing system that uses social media and traditional marketing for the benefit of your business. Enjoy the incredible opportunity to join us and raise the level of your business sales and achieve a dramatic growth within your company. "><img src="img/comofunciona3_EN.jpg" width="216" height="230" border="0" /></a></td>
                    </tr>
                    <tr>
                      <td height="16"><div align="center" class="t_titulo_cupon"><strong>Users</strong></div></td>
                      <td><div align="center" class="t_titulo_cupon"><strong>Independent</strong><strong>&nbsp;Associate</strong></div></td>
                      <td><div align="center" class="t_titulo_cupon"><strong>Business Owner</strong></div></td>
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
	  include("pie_EN.php");
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
