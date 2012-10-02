<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?=$_REQUEST['nomcup'];?></title>
<link href="css/estilosPEN.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo7 {
	font-size: 16px;
	font-weight: bold;
}
.Estilo8 {
	color: #336699;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 10px;
}
.Estilo9 {
	font-size: 34px;
	color: #000000;
}
.Estilo14 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: #333333; }
.Estilo15 {color: #FFFFFF}
.Estilo16 {font-size: 9px}
-->
</style>
</head>

<?

$nomneg=$_REQUEST['nomneg'];
$nomcup=$_REQUEST['nomcup'];
$precio=$_REQUEST['precio'];
$valor=$_REQUEST['valor'];
$descuento=$_REQUEST['descuento'];
$ahorro=$_REQUEST['ahorro'];
$vencimiento=$_REQUEST['vencimiento'];
$especificaciones=$_REQUEST['especificaciones'];
$indicaciones=$_REQUEST['indicaciones'];
$codigocup=$_REQUEST['codigocup'];
$codigoneg=$_REQUEST['codigoneg'];



?>

<body>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100%" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center">
      <br>
      <table width="600" height="326" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="631" align="left" valign="top" background="img/cupon_blanco_EN.png" style="background-repeat: no-repeat"><div align="center">
              <table width="467" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><table width="339" height="106" border="0" align="left" cellpadding="0" cellspacing="3">
                      <tr>
                        <td height="16"><div align="center" class="t_TITULO_1"><strong>
                          <?=$nomneg?>
                        </strong></div></td>
                      </tr>
                      <tr>
                        <td height="72"><table width="331" height="63" border="0" align="left" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="103"><div align="center" class="slogan_pie_registro Estilo9">$
                                    <?=$precio?>
                              </div></td>
                              <td width="228"><table width="223" border="0" align="left" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td height="43" class="Tit_form_usuraio text_pre_unicamente Estilo7"><div align="left">
                                      <?=$nomcup?>
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><table width="163" height="38" border="0" align="left" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="40" height="38"><table width="40" border="0" cellspacing="2" cellpadding="0">
                                              <tr>
                                                <td width="42"><div align="center" class="Estilo8">Value</div></td>
                                              </tr>
                                              <tr>
                                                <td><div align="center" class="Estilo2">$
                                                      <?=$valor?>
                                                </div></td>
                                              </tr>
                                          </table></td>
                                          <td width="2"><img src="img/separador_cupon_det.jpg" width="1" height="29" /></td>
                                          <td width="73"><table width="73" border="0" cellspacing="2" cellpadding="0">
                                              <tr>
                                                <td width="69"><div align="center" class="Estilo8"><strong>Discount</strong></div></td>
                                              </tr>
                                              <tr>
                                                <td><div align="center" class="Estilo2">
                                                  <?=$descuento?>
                                                  %</div></td>
                                              </tr>
                                          </table></td>
                                          <td width="10"><img src="img/separador_cupon_det.jpg" width="1" height="29" /></td>
                                          <td width="47"><table width="48" border="0" align="center" cellpadding="0" cellspacing="2">
                                              <tr>
                                                <td><div align="center" class="Estilo8"><strong>Saving</strong></div></td>
                                              </tr>
                                              <tr>
                                                <td><div align="center" class="Estilo2">$
                                                      <?=$ahorro?>
                                                </div></td>
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
                  <td align="left" valign="top"><table width="451" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="166" align="left" valign="top"><table width="443" border="0" align="left" cellpadding="0" cellspacing="8">
                            <tr>
                              <td width="436" class="t_det_envia"><div align="left" class="Estilo16">Valid through
                                <?=$vencimiento?>
                              </div></td>
                            </tr>
                            <tr>
                              <td ><div align="left">
                                  <?
					if(trim($especificaciones)!="" and $especificaciones!=NULL){
					?>
                                  <span class="Estilo14"><strong>Specs:</strong>
                                  <?=$especificaciones?>
                                    </span> <br />
                                <br />
                                  <?
					}
					?>
                                  <?
					if(trim($indicaciones)!="" and $indicaciones!=NULL){
					?>
                                  <span class="Estilo14"><strong>Directions:</strong>
                                  <?=$indicaciones?>
                                    </span>
                                  <?
					}
					?>
                              </div></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td height="23"><div align="right">
                            <table width="149" border="0" align="right" cellpadding="0" cellspacing="2">
                              <tr>
                                <td width="145" class="t_det_envia Estilo15"><div align="right">code:
                                  <?=$codigoneg?>
                                  -
                                  <?=$codigocup?>
                                </div></td>
                              </tr>
                            </table>
                        </div></td>
                      </tr>
                  </table></td>
                </tr>
              </table>
          </div></td>
        </tr>
      </table>
      <p class="t_mes_gratis"><a href="javascript:window.print()" class="submenu_cuenta_usuario"><strong>PRINT COUPON </strong></a></p>
    </div></td>
  </tr>
</table>
</body>
</html>
