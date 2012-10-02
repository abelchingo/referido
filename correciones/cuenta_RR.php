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


<link href="css/estilosPEN.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.Estilo7 {color: #4AADCE}
.Estilo8 {color: #08637B}
.Estilo10 {font-size: 13px}
.submenu_cuenta_usuario {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #08637B;
	font-weight: bold;
}


.linksubmenu {COLOR: #08637B; FONT-FAMILY: Arial, Helvetica, sans-serif; FONT-SIZE: 13px}
A.linksubmenu:link {TEXT-DECORATION: none; COLOR: #08637B; FONT-FAMILY: Arial, Helvetica, sans-serif; FONT-SIZE: 13px}
A.linksubmenu:active {TEXT-DECORATION: none; COLOR: #08637B; FONT-FAMILY: Arial, Helvetica, sans-serif; FONT-SIZE: 13px}
A.linksubmenu:visited {TEXT-DECORATION: none; COLOR: #08637B; FONT-FAMILY: Arial, Helvetica, sans-serif; FONT-SIZE: 13px}
A.linksubmenu:hover {TEXT-DECORATION: underline; COLOR:#08637B; FONT-WEIGHT: bold} 
.Estilo11 {font-size: 18px}
.TITULO_CAB_USUARIO {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FFFFFF;
}





-->
</style>
</head>

<body>
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%" align="center" valign="top"><table width="985" border="0" cellpadding="0" cellspacing="0">
        
        <tr>
          <td width="985" align="left" valign="top"><div align="center">
		  <?
		  include('cabecera.php');
		  ?>
		  
		  </div></td>
        </tr>
        <tr>
          <td align="left" valign="top"><table width="968" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="776" align="left" valign="top"><table width="776" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td width="231" height="19"><table width="231" height="44" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="231" align="center" valign="middle" bgcolor="#4AADCE" style="background-repeat: no-repeat"><table width="170" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="170"><div align="left" class="TITULO_CAB_USUARIO">MI CUENTA </div></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table></td>
                  <td width="530"><table width="100%" height="44" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="537" align="left" valign="middle" bgcolor="#4AADCE" style="background-repeat: no-repeat"><table width="340" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="32">&nbsp;</td>
                              <td width="308"><div align="left" class="TITULO_CAB_USUARIO">Modificar datos </div></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table></td>
                  </tr>
                <tr>
                  <td height="87" align="center" valign="top" bgcolor="#A5DEEF" ><table width="169" border="0" cellspacing="5" cellpadding="0">
                      <tr>
                        <td width="159">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="t_empresa_cupon"><div align="left" class="nombre_campos_form"><a href="#">Mi Perfil </a></div></td>
                      </tr>
                      <tr>
                        <td><table width="166" border="0" cellspacing="5" cellpadding="0">
                            <tr>
                              <td width="20"><img src="img/CHECK.png" width="20" height="20" /></td>
                              <td width="131" ><div align="left" class="submenu_cuenta_usuario"><a href="#" class="linksubmenu">Modificar datos </a></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td class="t_categorias"><div align="left" class="submenu_cuenta_usuario">Cambiar imagen </div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td class="t_categorias"><div align="left" class="submenu_cuenta_usuario"><a href="#" class="linksubmenu">Cambiar clave </a></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td class="t_categorias"><div align="left" class="submenu_cuenta_usuario"><a href="#" class="linksubmenu">Mis comentarios </a></div></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td class="t_empresa_cupon"><div align="left" class="nombre_campos_form"><a href="#">Mis Negocios </a></div></td>
                      </tr>
                      <tr>
                        <td class="t_empresa_cupon"><table width="166" border="0" cellspacing="3" cellpadding="0">
                            <tr>
                              <td width="21">&nbsp;</td>
                              <td width="136" class="t_categorias"><div align="left" class="linksubmenu"><a href="#" class="linksubmenu">Ver mis negocios </a></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td class="t_categorias"><div align="left" class="submenu_cuenta_usuario"><a href="#" class="linksubmenu">Agregar negocio </a></div></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td class="t_empresa_cupon"><div align="left" class="nombre_campos_form"><a href="#">Mis Cupones </a></div></td>
                      </tr>
                      <tr>
                        <td class="t_empresa_cupon"><table width="166" border="0" cellspacing="3" cellpadding="0">
                          <tr>
                            <td width="21">&nbsp;</td>
                            <td width="136" class="t_categorias"><div align="left" class="submenu_cuenta_usuario"><a href="#" class="linksubmenu">Ver mis cupones </a></div></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td class="t_categorias"><div align="left" class="submenu_cuenta_usuario"><a href="#" class="linksubmenu">Agregar cupon </a></div></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td class="t_empresa_cupon"><div align="left"><span class="nombre_campos_form"><a href="#">Mis Cuenta Asociada </a></span></div></td>
                      </tr>
                      <tr>
                        <td class="t_empresa_cupon"><table width="166" border="0" cellspacing="3" cellpadding="0">
                          <tr>
                            <td width="21">&nbsp;</td>
                            <td width="136" class="t_categorias"><div align="left" class="submenu_cuenta_usuario"><a href="#" class="linksubmenu">Mi cuenta paypal </a></div></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td class="t_categorias"><div align="left" class="submenu_cuenta_usuario"><a href="#" class="linksubmenu">Mi URL asociado </a></div></td>
                          </tr>
                        </table></td>
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
                  <td align="left" valign="top" bgcolor="#FFFFFF" ><table width="528" border="0" align="center" cellpadding="0" cellspacing="5">
                      <tr>
                        <td width="16">&nbsp;</td>
                        <td width="482">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td class="Estilo10"><div align="left" class="submenu_cuenta_usuario">Modifica y/o actualiza tus datos recuerda mientras mas reales sean, mas clientes tendras </div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td align="left" valign="top"><table width="461" border="0" align="center" cellpadding="0" cellspacing="2">
                            <tr>
                              <td width="471"><table width="457" border="0" cellspacing="5" cellpadding="0">
                                  <tr>
                                    <td width="128"><div align="left" class="t_titulo_cupon Estilo7">
                                        <div align="right" class="submenu_cuenta_usuario">* Nombre</div>
                                    </div></td>
                                    <td width="302"><div align="left">
                                        <input name="xt_enviar_1" type="text" class="t_textbox_1" size="26" style="border: 1px solid #08637B; width:300px;" />
                                    </div></td>
                                    </tr>
                                  <tr>
                                    <td><div align="right" class="submenu_cuenta_usuario">Apellido</div></td>
                                    <td><input name="xt_enviar_12" type="text" class="t_textbox_1" size="26" style="border: 1px solid #08637B; width:300px;" /></td>
                                    </tr>
                                  <tr>
                                    <td><div align="right"><span class="submenu_cuenta_usuario"><strong>Alias</strong></span></div></td>
                                    <td><input name="xt_enviar_13" type="text" class="t_textbox_1" size="26" style="border: 1px solid #08637B; width:300px;" /></td>
                                    </tr>
                                  <tr>
                                    <td><div align="right"><span class="submenu_cuenta_usuario"><strong>* Pa&iacute;s</strong></span></div></td>
                                    <td><select name="select" style="border: 1px solid #08637B; width:300px;">
                                        <option value="1">Estados Unidos</option>
                                        <option value="2">Per&uacute;</option>
                                      </select>                                    </td>
                                    </tr>
                                  <tr>
                                    <td><div align="right"><span class="submenu_cuenta_usuario"><strong>* Estado</strong></span></div></td>
                                    <td><input name="xt_enviar_15" type="text" class="t_textbox_1" size="26" style="border: 1px solid #08637B; width:300px;" /></td>
                                    </tr>
                                  <tr>
                                    <td><div align="right"><span class="submenu_cuenta_usuario"><strong>* Direcci&oacute;n</strong></span></div></td>
                                    <td><input name="xt_enviar_16" type="text" class="t_textbox_1" size="26" style="border: 1px solid #08637B; width:300px;" /></td>
                                    </tr>
                                  <tr>
                                    <td><div align="right"><span class="submenu_cuenta_usuario"><strong>* Ciudad</strong></span></div></td>
                                    <td><input name="xt_enviar_17" type="text" class="t_textbox_1" size="26" style="border: 1px solid #08637B; width:300px;" /></td>
                                  </tr>
                                  <tr>
                                    <td><div align="right"><span class="submenu_cuenta_usuario"><strong>C&oacute;digo postal </strong></span></div></td>
                                    <td><input name="xt_enviar_18" type="text" class="t_textbox_1" size="26" style="border: 1px solid #08637B; width:100px;" /></td>
                                    </tr>
                                  <tr>
                                    <td><div align="right"><span class="submenu_cuenta_usuario"><strong>Tel&eacute;fono</strong></span></div></td>
                                    <td><input name="xt_enviar_19" type="text" class="t_textbox_1" size="26" style="border: 1px solid #08637B; width:150px;" /></td>
                                    </tr>
                                  <tr>
                                    <td><div align="right"><span class="submenu_cuenta_usuario"><strong>Movil</strong></span></div></td>
                                    <td><input name="xt_enviar_110" type="text" class="t_textbox_1" size="26" style="border: 1px solid #08637B; width:150px;" /></td>
                                    </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td><table width="138" border="0" align="center" cellpadding="0" cellspacing="4">
                                  <tr>
                                    <td width="78"><a href="#"><img src="img/cancelar_login.png" width="78" height="29" border="0" /></a></td>
                                    <td width="48"><a href="#"><img src="img/btguardarusuario.png" width="78" height="29" border="0" /></a></td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td><div align="left"><span class="nombre_campos_form Estilo8"><strong>* Datos obligatorios </strong></span></div></td>
                            </tr>
                        </table></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                  </table>
                    </td>
                  </tr>
              </table></td>
              <td width="192" valign="top"><table width="0" border="0" cellspacing="3" cellpadding="0">
                <tr>
                  <td width="134"><table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="left" valign="top"><table width="50" border="0" cellpadding="0" cellspacing="3">
                          <tr>
                            <td><img src="img/sponsor1.jpg" width="180" height="180" /></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="center" valign="top"><table width="94" border="0" cellspacing="3" cellpadding="0">
                          <tr>
                            <td width="88"><img src="img/sponsor2.jpg" width="180" height="180" /></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table width="94" border="0" cellspacing="3" cellpadding="0">
                          <tr>
                            <td width="88"><img src="img/sponsor1.jpg" width="180" height="180" /></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table width="94" border="0" cellspacing="3" cellpadding="0">
                          <tr>
                            <td width="88"><img src="img/sponsor2.jpg" width="180" height="180" /></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table width="94" border="0" cellspacing="3" cellpadding="0">
                          <tr>
                            <td width="88"><img src="img/sponsor1.jpg" width="180" height="180" /></td>
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
	  
	  <?
	  
	  include("pie.php");
	  ?>	  </td>
    </tr>
  </table>
</div>

</body>
</html>
