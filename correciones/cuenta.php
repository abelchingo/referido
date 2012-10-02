<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>MI REFERIDO.COM</title>


<script language="javascript">
function buscar1(tipo){
	if(tipo=="negocio"){
		document.getElementById('bt_b_negocio').src="img/bt_buscar_negocio_off.png";
		document.getElementById('bt_b_cupon').src="img/bt_buscar_cupon_on.png";
		//document.getElementById('f1').src="images/loading_blanco.jpg";					
	}
	if(tipo=="cupon"){
		document.getElementById('bt_b_negocio').src="img/bt_buscar_negocio_on.png";
		document.getElementById('bt_b_cupon').src="img/bt_buscar_cupon_off.png";	
	}
	//alert("busca "+tipo);	
}

function opacar(t){	
	document.fbusca.elements[t].className='opaco1';
}

function opacar1(t){	
	if(document.elments[t].value==""){
	document.fbusca.elements[t].className='opaco';
	}
}

</script>


<link href="css/estilosPES.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo7 {
	color: #000066;
	font-size: 14px;
}
.Estilo9 {color: #000066}
.Estilo10 {
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
	color: #000066;
}
.Estilo12 {color: #000066; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
</head>

<body>
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%" align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0">
        
        <tr>
          <td width="965" align="left" valign="top"><div align="center">
		  <?
		  include('cabecera.php');
		  ?>
		  
		  </div></td>
        </tr>
        <tr>
          <td align="left" valign="top"><table width="971" border="0" cellspacing="5" cellpadding="0">
            <tr>
              <td width="231" height="19"><table width="231" height="44" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="231" align="center" valign="middle" background="img/barra_micuenta.png" style="background-repeat: no-repeat"><table width="170" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="170"><div align="left" class="t_TITULO_1">MI CUENTA </div></td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
              <td width="718"><table width="724" height="44" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="724" align="left" valign="middle" background="img/barra_micuenta2.png" style="background-repeat: no-repeat"><table width="340" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="32">&nbsp;</td>
                        <td width="308"><div align="left" class="t_TITULO_1">MI CUENTA </div></td>
                      </tr>
                  </table></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="87" align="center" valign="top" bgcolor="#C4ECFF" class="opaco50"><table width="169" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td width="159">&nbsp;</td>
                </tr>
                <tr>
                  <td class="t_empresa_cupon"><div align="left" class="t_textbox_1"><a href="#" class="vinculonegro">Mi Perfil </a></div></td>
                </tr>
                <tr>
                  <td><table width="166" border="0" cellspacing="3" cellpadding="0">
                    <tr>
                      <td width="15"><img src="img/vineta.png" width="10" height="17" /></td>
                      <td width="151" class="t_categorias"><div align="left" class="t_titulo_cupon Estilo9"><a href="#">Modificar datos </a></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td class="t_categorias"><div align="left" class="t_titulo_cupon Estilo9"><a href="#">Cambiar imagen </a></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td class="t_categorias"><div align="left" class="t_titulo_cupon Estilo9"><a href="#">Cambiar clave </a></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td class="t_categorias"><div align="left" class="t_titulo_cupon Estilo9"><a href="#">Mi cuenta paypal </a></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td class="t_categorias"><div align="left" class="t_titulo_cupon Estilo9"><a href="#">Mi URL de promotor </a></div></td>
                    </tr>

                  </table></td>
                </tr>
                <tr>
                  <td class="t_empresa_cupon"><div align="left" class="t_titulo_cupon"><a href="#">Mis Negocios </a></div></td>
                </tr>
                <tr>
                  <td class="t_empresa_cupon"><div align="left" class="t_titulo_cupon"><a href="#">Mis Asociados </a></div></td>
                </tr>
                <tr>
                  <td class="t_empresa_cupon">&nbsp;</td>
                </tr>
                <tr>
                  <td class="t_empresa_cupon"><div align="left" class="Tit_form_usuraio"><a href="#">Salir</a></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
              <td align="left" valign="top" bgcolor="#FFFFFF" class="opaco50"><table width="713" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td width="52">&nbsp;</td>
                  <td width="594">&nbsp;</td>
                  <td width="47">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="Estilo10"><div align="left">Modifica y/o actualiza tus datos recuerda mientras mas reales sean, mas clientes tendras  </div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td align="left" valign="top"><table width="260" border="0" cellspacing="2" cellpadding="0">
                    <tr>
                      <td><table width="574" border="0" cellspacing="5" cellpadding="0">
                        <tr>
                          <td width="101"><div align="left" class="t_titulo_cupon Estilo7">
                            <div align="right" class="t_det_envia">* Nombre</div>
                          </div></td>
                          <td width="312"><div align="left">
                              <input name="xt_enviar_1" type="text" class="t_textbox_1" size="26" style="border: 1px solid #1e1977; width:300px;" />
                          </div></td>
                          <td width="63">&nbsp;</td>
                          <td width="73">&nbsp;</td>
                        </tr>
                        <tr>
                          <td><div align="right"><strong><span class="Estilo12">* </span><span class="t_det_envia">Apellido</span></strong></div></td>
                          <td><input name="xt_enviar_12" type="text" class="t_textbox_1" size="26" style="border: 1px solid #1e1977; width:300px;" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><div align="right"><span class="t_det_envia"><strong>Alias</strong></span></div></td>
                          <td><input name="xt_enviar_13" type="text" class="t_textbox_1" size="26" style="border: 1px solid #1e1977; width:300px;" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><div align="right"><span class="t_det_envia"><strong>* Pa&iacute;s</strong></span></div></td>
                          <td><select name="select" style="border: 1px solid #1e1977; width:300px;">
                              <option value="1">Estados Unidos</option>
                              <option value="2">Per&uacute;</option>
                            </select>                          </td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><div align="right"><span class="t_det_envia"><strong>* Estado</strong></span></div></td>
                          <td><input name="xt_enviar_15" type="text" class="t_textbox_1" size="26" style="border: 1px solid #1e1977; width:300px;" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><div align="right"><span class="t_det_envia"><strong>* Direcci&oacute;n</strong></span></div></td>
                          <td><input name="xt_enviar_16" type="text" class="t_textbox_1" size="26" style="border: 1px solid #1e1977; width:300px;" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><div align="right"><span class="t_det_envia"><strong>* Ciudad</strong></span></div></td>
                          <td><input name="xt_enviar_17" type="text" class="t_textbox_1" size="26" style="border: 1px solid #1e1977; width:300px;" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><div align="right"><span class="t_det_envia"><strong>C&oacute;digo postal </strong></span></div></td>
                          <td><input name="xt_enviar_18" type="text" class="t_textbox_1" size="26" style="border: 1px solid #1e1977; width:100px;" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><div align="right"><span class="t_det_envia"><strong>Tel&eacute;fono</strong></span></div></td>
                          <td><input name="xt_enviar_19" type="text" class="t_textbox_1" size="26" style="border: 1px solid #1e1977; width:150px;" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><div align="right"><span class="t_det_envia"><strong>Movil</strong></span></div></td>
                          <td><input name="xt_enviar_110" type="text" class="t_textbox_1" size="26" style="border: 1px solid #1e1977; width:150px;" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        
                      </table></td>
                      </tr>
                    <tr>
                      <td><table width="138" border="0" align="left" cellpadding="0" cellspacing="4">
                        <tr>
                          <td width="78"><a href="#"><img src="img/cancelar_login.png" width="78" height="29" border="0" /></a></td>
                          <td width="48"><a href="#"><img src="img/btguardarusuario.png" width="78" height="29" border="0" /></a></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td><div align="left"><span class="t_det_envia"><strong>* Datos obligatorios </strong></span></div></td>
                    </tr>
                  </table></td>
                  <td>&nbsp;</td>
                </tr>
                
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
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
	  
	  <?
	  
	  include("pie.php");
	  ?>	  </td>
    </tr>
  </table>
</div>

</body>
</html>
