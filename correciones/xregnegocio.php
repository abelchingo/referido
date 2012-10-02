<?php
//$xajax->register(XAJAX_FUNCTION, "iniciarSesion");
$xajax->register(XAJAX_FUNCTION,"guardarNegocio");
$xajax->register(XAJAX_FUNCTION,"regNegocio");
$xajax->register(XAJAX_FUNCTION,"generarTrama");
function regNegocio($nombre,$email,$clave,$rclave,$zip,$sexo,$negocio,$ndireccion,$nciudad,$nzip,$nest,$nfono,$nemail,$ncat,$nscat){
	@session_start();
	$codazociado=!empty($_SESSION['PrOmOtOr_CoD'])?$_SESSION['PrOmOtOr_CoD']:'0';
	$nomazociado=!empty($_SESSION['PrOmOtOr_NoM'])?$_SESSION['PrOmOtOr_NoM']:'';
	sleep(2);
	require_once(dirname(dirname(__FILE__)).'/Core/cls.Aplicacion.php');
	Aplicacion::iniciar();
	Aplicacion::clase('Core::datos::MiReferido::DatCategoria');
	Aplicacion::clase('Core::datos::MiReferido::DatSubCategoria');
	Aplicacion::clase('Core::datos::MiReferido::DatPais');
	Aplicacion::clase('Core::datos::Sistema::DatConfiguracion');
	Aplicacion::clase('Core::datos::Sistema::DatTarifario');
	$otar =new DatTarifario;
    $oConf = new DatConfiguracion;
	$paypalcuenta=$oConf->getPropiedad('paypal_cuenta');
	$paypalurl=$oConf->getPropiedad('paypal_url');	
	$categ=new DatCategoria;	
	$scateg=new DatSubCategoria;
	$estad=new DatPais;
	$categoria=$categ->getxIdioma('ES');
	$scategoria=$scateg->listarxCategoriaxIdioma("ES",$categoria[0][0]);
	$estados=$estad->listarEstados('US');
	$transaccion='10001';
	$promocion='CODMR0001';
	$tarifario=$otar->listarxPk($transaccion.$promocion);
	
		$xAjax = new xajaxResponse();
		//diseño negocio 1
		$html='<form action="javascript:void(null)" name="frmRNegocio" id="frmRNegocio" method="post" onSubmit="return false;">
		<div id="div3" style="display:block;">
		<table width="985" border="0" cellpadding="0" cellspacing="0">        
        <tr>
          <td width="985" height="19" align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td align="left" valign="top"><table width="954" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="954"><table width="954" height="617" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="378" height="617" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/registrate_panel_izquierdo.png" style="background-repeat: no-repeat"><table width="331" border="0" align="left" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="100%"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/logo_registro_ES.jpg" width="268" height="153" /></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table width="208" border="0" cellspacing="2" cellpadding="0">
                        <tr>
                          <td><img src="http://'.$_SERVER['HTTP_HOST'].'/img/foto_registro_negocio.jpg" width="374" height="250" /></td>
                        </tr>
                        <tr>
                          <td background="http://'.$_SERVER['HTTP_HOST'].'/img/fondo_pie_foto_reg.jpg">&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td><div align="right">
                            <table width="348" border="0" align="right" cellpadding="0" cellspacing="10">
                              <tr>
                                <td width="100%"><div align="justify"><span class="text_registro_gris_14_negrita">Promociona tu negocio con las mejores estrategias de mercadeo! </span></div></td>
                              </tr>
                              <tr>
                                <td><div align="center" class="t_mes_gratis">
                                  <div align="right" class="Estilo10">&iexcl;Busca, Comparte y Gana!</div>
                                </div></td>
                              </tr>
                            </table>
                            </div></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    
                  </table></td>
                  <td width="29" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/registrate_panel_central.png" style="background-repeat: no-repeat">&nbsp;</td>
                  <td width="547" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/registrate_panel_derecho.png" style="background-repeat: no-repeat"><table width="540" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="540"><table width="540" border="0" align="center" cellpadding="0" cellspacing="20">
                          <tr>
                            <td width="500"><table width="500" height="368" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td align="center" valign="top" style="background-repeat: no-repeat"><div align="right"><a href="javascript:void(null)" onClick="frmRegNegocio(\'no\');"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/cerrar_registro.jpg" width="66" height="21" border="0" /></a></div></td>
                                </tr>
                                <tr>
                                  <td width="522" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/cuadro_form_registrate.png" style="background-repeat: no-repeat"><table height="394" width="479" border="0" cellspacing="13" cellpadding="0">
                                      <tr>
                                        <td width="464" class="TITULO_CAB_USUARIO"><div align="left">REGISTRO DE NEGOCIO </div></td>
                                      </tr>
                                      <tr>
                                        <td height="300" valign="top"><table width="462" border="0" align="left" cellpadding="0" cellspacing="0">
										   <tr>
                                              <td colspan="2"><div id="msjErrorRNegocio1">
                                                <div align="left" class="submenu_cuenta_usuario">Ingrese sus datos personales</div>
                                                
                                              </div></td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td width="112" class="submenu_cuenta_usuario"><div align="left">Nombre </div></td>
                                              <td width="350"><table width="350" height="36" border="0" cellpadding="0" cellspacing="5">
                                                  <tr>
                                                    <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td><input name="txtNombre" id="txtNombre" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$nombre.'"/></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">Email</div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="5">
                                                  <tr>
                                                    <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td><input name="txtEmail" id="txtEmail" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;"  onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$email.'"/>														  
														  </td>
                                                        </tr>
                                                    </table>
													Su E-mail ser&aacute; su nombre de usuario
													</td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">Contrase&ntilde;a</div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="5">
                                                  <tr>
                                                    <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td><input name="txtClave" id="txtClave" type="password" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$clave.'"/></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">Ingrese otra vez tu contrase&ntilde;a </div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="5">
                                                  <tr>
                                                    <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td><input name="txtRClave" id="txtRClave"type="password" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$rclave.'"/></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">C&oacute;digo postal </div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="5">
                                                  <tr>
                                                    <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td><input name="txtZip" id="txtZip" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$zip.'"/></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">Sexo</div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="0">
                                                  <tr>
                                                    <td width="350" align="left" valign="top" style="background-repeat: no-repeat"><table width="342" border="0" cellspacing="5" cellpadding="0">
                                                        <tr>
                                                          <td width="32"><table width="28" height="32" border="0" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                              <td width="28"><div align="center">
                                                                <table width="0" height="31" border="0" cellpadding="0" cellspacing="0" background="http://'.$_SERVER['HTTP_HOST'].'/img/optionbutton.jpg">
                                                                  <tr>
                                                                    <td width="30" valign="middle"><div align="center">
                                                                      <input name="rsexo" id="rsexo" type="radio" value="F" style="border: 0px solid #08637B;" />
                                                                    </div></td>
                                                                  </tr>
                                                                </table>
                                                              </div></td>
                                                            </tr>
                                                          </table></td>
                                                          <td width="77"><div align="left" class="submenu_cuenta_usuario">Femenino</div></td>
                                                          <td width="32"><table width="28" height="32" border="0" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                              <td><div align="center">
                                                                  <table width="0" height="31" border="0" cellpadding="0" cellspacing="0" background="http://'.$_SERVER['HTTP_HOST'].'/img/optionbutton.jpg">
                                                                    <tr>
                                                                      <td width="30" valign="middle"><div align="center">
                                                                        <input name="rsexo" id="rsexo" type="radio" value="M" style="border: 0px solid #08637B;" />
                                                                      </div></td>
                                                                    </tr>
                                                                  </table>
                                                              </div></td>
                                                            </tr>
                                                          </table></td>
                                                          <td width="191"><div align="left" class="submenu_cuenta_usuario">Masculino</div></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
											<tr>
											<td><div align="left" class="submenu_cuenta_usuario">C&oacute;digo Asociado </div></td>
											<td>
											<table width="339" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td>
                                                          <input name="txtCodAzociadoN" id="txtCodAzociadoN" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:50px;" value="'.@$codazociado.'" readonly />
                                                          <input name="txtNomAzociadoN" id="txtNomAzociadoN" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:150px;" value="'.@$nomazociado.'" readonly /> 
														  <input type="button"
 name="btnAsociado" value="Buscar Asociado" onclick="lisAsociado(\'N\');">                                                          
                                                          </td>
                                                        </tr>
                                                    </table>
											
											</td>
											</tr>									
											
                                        </table></td>
                                      </tr>                                      
                                  </table>
								  </td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td><div align="center">
                              <table width="496" border="0" cellspacing="10" cellpadding="0">
                                <tr>
                                  <td class="t_mes_gratis" width="186" height="122"><div align="center"><strong>1 Mes Gratis <br>
                                    +<br>
                                    3 Meses <br>
                                    de Anuncios </strong></div></td>
                                  <td width="118"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/unicamente.jpg" width="120" height="122"></td>
                                  <td width="152" valign="middle"><table width="153" border="0" cellspacing="5" cellpadding="0">
                                      <tr>
                                        <td align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/paso1de3.png" width="170" height="36" /></td>
                                      </tr>
                                    </table>
                                      <table width="142" border="0" align="center" cellpadding="0" cellspacing="10">
                                        <tr>
                                          <td width="132"><a href="javascript:void(null)" onClick="guardarRegistro(\'RNegocio\',\'msjErrorRNegocio1\',\'div3\',\'div4\');"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/siguienteregistro.png" width="130" height="42" border="0" /></a></td>
                                        </tr>
                                    </table></td>
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
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td align="left" valign="top"><div align="center"></div></td>
        </tr>
      </table>
	  	</div>';
		
		//diseño negocio 2
		
		$html.='<div id="div4" style="display:none;">
		<table width="985" border="0" cellpadding="0" cellspacing="0">        
        <tr>
          <td width="985" height="19" align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td align="left" valign="top"><table width="954" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="954"><table width="954" height="617" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="378" height="617" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/registrate_panel_izquierdo.png" style="background-repeat: no-repeat"><table width="331" border="0" align="left" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="100%"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/logo_registro_ES.jpg" width="268" height="153" /></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table width="208" border="0" cellspacing="2" cellpadding="0">
                        <tr>
                          <td><img src="http://'.$_SERVER['HTTP_HOST'].'/img/foto_registro_negocio_2.jpg" width="374" height="250" /></td>
                        </tr>
                        <tr>
                          <td background="http://'.$_SERVER['HTTP_HOST'].'/img/fondo_pie_foto_reg.jpg">&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td><div align="right">
                            <table width="348" border="0" align="right" cellpadding="0" cellspacing="10">
                              <tr>
                                <td width="100%"><div align="justify" class="text_registro_gris_14_negrita">Utiliza el potencial de los medios sociales para la promoci&oacute;n efectiva de tu negocio  </div></td>
                              </tr>
                              <tr>
                                <td><div align="center" class="t_mes_gratis">
                                  <div align="right" class="Estilo10">&iexcl;Busca, Comparte y Gana!</div>
                                </div></td>
                              </tr>
                            </table>
                            </div></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    
                  </table></td>
                  <td width="29" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/registrate_panel_central.png" style="background-repeat: no-repeat">&nbsp;</td>
                  <td width="547" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/registrate_panel_derecho.png" style="background-repeat: no-repeat"><table width="540" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="540"><table width="540" border="0" align="center" cellpadding="0" cellspacing="20">
                          <tr>
                            <td width="500">
                            <table width="500" height="472" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td align="center" valign="top" style="background-repeat: no-repeat">
                                  
                                  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="52%"><div align="left"><a href="javascript:void(null)" onClick="siguienteDiv(\'div4\',\'div3\')"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/regresar_registro.jpg" width="74" height="16" border="0" /></a></div></td>
                                      <td width="48%"><div align="right"><a href="javascript:void(null)" onClick="frmRegNegocio(\'no\');"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/cerrar_registro.jpg" width="66" height="21" border="0" /></a></div></td>
                                    </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td width="522" height="373" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/cuadro_form_registrate.png" style="background-repeat: no-repeat"><table height="410" width="479" border="0" cellspacing="13" cellpadding="0">
                                      <tr>
                                        <td width="464" class="TITULO_CAB_USUARIO"><div align="left">REGISTRO DE NEGOCIO </div></td>
                                      </tr>
									  <tr>
                                           <td ><div id="msjErrorRNegocio2"></div></td>
                                      </tr>
                                      <tr>
                                        <td valign="top"><table width="448" border="0" align="left" cellpadding="0" cellspacing="0">
                                            
                                            <tr>
                                              <td width="98" class="submenu_cuenta_usuario"><div align="left">Nombre del negocio </div></td>
                                              <td width="350"><table width="350" height="36" border="0" cellpadding="0" cellspacing="3">
                                                  <tr>
                                                    <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td><input name="txtNegocio" id="txtNegocio" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$negocio.'"/></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">Direcci&oacute;n</div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="3">
                                                  <tr>
                                                    <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td><input name="txtNDireccion" id="txtNDireccion" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$ndireccion.'"/></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">Ciudad</div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="3">
                                                  <tr>
                                                    <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td><input name="txtNCiudad" id="txtNCiudad" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$nciudad.'" /></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">C&oacute;digo Postal </div></td>
                                              <td align="left"><table width="350" height="36" border="0" cellpadding="0" cellspacing="3">
                                                <tr>
                                                  <td width="146" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_3.jpg" style="background-repeat: no-repeat"><table width="146" border="0" cellspacing="6" cellpadding="0">
                                                      <tr>
                                                        <td width="134"><input name="txtNZip" id="txtNZip" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:130px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$nzip.'" /></td>
                                                      </tr>
                                                  </table></td>
                                                  <td width="50" align="left" valign="middle" style="background-repeat: no-repeat"><div align="left" class="submenu_cuenta_usuario">
                                                      <div align="center">Estado</div>
                                                  </div></td>
                                                  <td width="142" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_3.jpg" style="background-repeat: no-repeat"><table width="139" border="0" cellspacing="6" cellpadding="0">
                                                      <tr>
                                                        <td width="127"><div id="pnlEstado">
											  <select name="txtNEstado" id="txtNEstado" class="t_textbox_1" style="border: 0px solid #08637B; width:130px;"  >
											 <!-- <option value="00">SELECCIONE UN CATEGORIA</option>-->';
											  
										foreach($estados as $estado)
										{
										$html.='<option value="'.$estado['pk'].'" ';
										$html.=$nest == $estado['pk'] ? 'selected' : '';
										$html.= '>'.$estado['est_abrev'].'</option>';
										}
										$html.='</select>
										  </div></td>
                                                      </tr>
                                                  </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">Tel&eacute;fono</div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="3">
                                                  <tr>
                                                    <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td><input name="txtNFono" id="txtNFono" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$nfono.'"/></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">Email</div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="3">
                                                <tr>
                                                  <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                      <tr>
                                                        <td><input name="txtNEmail" id="txtNEmail" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$nemail.'"/></td>
                                                      </tr>
                                                  </table></td>
                                                </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">Categor&iacute;a</div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="2">
                                                <tr>
                                                  <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                      <tr>
                                                        <td>
														<div id="pnlcategoria">
              <select name="txtNCategoria" class="t_textbox_1" style="border: 0px solid #08637B; width:330px;" onChange="xajax_versubcategoria(\'pnlCmbSubCategoria\', \'txtNSubCategoria\',this.value, \'ES\',\'\',\'t_textbox_1\',330);" id="txtNCategoria" >
             <!-- <option value="00">SELECCIONE UN CATEGORIA</option>-->';
              
		foreach($categoria as $id)
		{
		$html.='<option value="'.$id['cat_cod'].'" ';
		$html.=$ncat == $id['cat_cod'] ? 'selected' : '';
		$html.= '>'.$id['cat_nom'].'</option>';
		}
		$html.='</select>
          </div></td>
                 </tr>
                                                  </table></td>
                                                </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">Sub Categor&iacute;a </div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="3">
                                                <tr>
                                                  <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                      <tr>
                                                        <td>
														<div id="pnlCmbSubCategoria">
              <select name="txtNSubCategoria" class="t_textbox_1" style="border: 0px solid #08637B; width:330px;" id="txtNSubCategoria">
              <!--<option value="00">SELECCIONE UN SUB-CATEGORIA</option>-->';
              
	    foreach($scategoria as $id)
		{
		$html.='<option value="'.$id['scat_cod'].'" ';
		$html.= $nscat == $id['scat_cod'] ? 'selected' : '';
		$html.='>'.utf8_encode($id['scat_nom']).'</option>';
		}
		
              $html.='</select>
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
                                <tr>
                                  <td align="center" valign="top" style="background-repeat: no-repeat"><table width="470" border="0" align="left" cellpadding="0" cellspacing="5">
                                    <tr>
                                      <td width="27"><table width="24" height="25" border="0" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="24" height="23" align="center" valign="middle" background="http://'.$_SERVER['HTTP_HOST'].'/img/check.jpg"><input type="checkbox" name="chkTerminos" value="S" style="border: 0px solid #08637B;" /></td>
                                          </tr>
                                      </table></td>
                                      <td width="428"><div align="left" class="submenu_cuenta_usuario">Yo acepto los <a href="javascript:void(null)"  onClick="verTerminos()">t&eacute;rminos de uso</a> y <a href="javascript:void(null)"  onClick="verPoliticas()">pol&iacute;ticas de privacidad</a> de '.$_SERVER['HTTP_HOST'].' </div></td>
                                    </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td align="center" valign="top" style="background-repeat: no-repeat"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/paso2de3.png" width="173" height="36" /></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td><table width="130" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="130"><a href="javascript:void(null)" onClick="guardarRegistro(\'RNegocio\',\'msjErrorRNegocio2\',\'div4\',\'div5\');"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/siguienteregistro.png" width="130" height="42" border="0" /></a></td>
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
              <td> <input type="hidden" name="guardar" id="guardar" value="si"></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td align="left" valign="top"><div align="center"></div></td>
        </tr>
        
      </table>
		</div>
		</form>
		';
		
		$msjtar='';
		if(!empty($tarifario[0])){
		$tarifario=$tarifario[0];
		//$msjtar="Lo Sentimos transaccion en desarollo";
		}
		
		
		//DISEÑO PANTALLA 3
		
		$html.='
		<div id="div5" style="display:none;">
		<form action="https://'.$paypalurl.'/cgi-bin/webscr" name="frmPago" method="post" >
		<input type="hidden" name="codNegocio" value="" id="codNegocio">
 		<input type="hidden" name="cmd" value="_xclick">
		<input type="hidden" name="business" value="'.$paypalcuenta.'">
		<input type="hidden" name="lc" value="ES">
		<input type="hidden" name="amount" id="amount" value="'.@$tarifario["trf_monto"].'">
		<input type="hidden" name="return" value="http://'.$_SERVER['HTTP_HOST'].'/incio.php">
		<input type="hidden" name="cancel_return" value="http://'.$_SERVER['HTTP_HOST'].'/incio.php" />
		<input type="hidden" name="button_subtype" value="services">
		<input type="hidden" name="no_note" value="0">
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="item_name" id="item_name" value="'.@$tarifario["trf_trasa_desc"].'">		
		<input type="hidden" name="item_number" id="item_number" value="">
		<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_SM.gif:NonHostedGuest">		
		<table width="985" border="0" cellpadding="0" cellspacing="0">
        
        <tr>
          <td width="985" height="19" align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td align="left" valign="top"><table width="954" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="954"><table width="954" height="617" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="378" height="617" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/registrate_panel_izquierdo.png" style="background-repeat: no-repeat"><table width="378" border="0" align="left" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="100%"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/logo_registro_ES.jpg" width="268" height="153" /></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table width="208" border="0" cellspacing="2" cellpadding="0">
                        <tr>
                          <td><img src="http://'.$_SERVER['HTTP_HOST'].'/img/foto_registro_negocio_3.jpg" width="374" height="250" /></td>
                        </tr>
                        <tr>
                          <td background="http://'.$_SERVER['HTTP_HOST'].'/img/fondo_pie_foto_reg.jpg">&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td><div align="right">
                            <table width="348" border="0" align="right" cellpadding="0" cellspacing="10">
                              <tr>
                                <td width="100%"><div align="justify" class="text_registro_gris_14_negrita">Incrementa tus ventas con el uso de cupones, nuestra forma de distribuci&oacute;n masiva y selectiva!</div></td>
                              </tr>
                              <tr>
                                <td><div align="center" class="t_mes_gratis">
                                  <div align="right" class="Estilo10">&iexcl;Busca, Comparte y Gana!</div>
                                </div></td>
                              </tr>
                            </table>
                            </div></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    
                  </table></td>
                  <td width="29" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/registrate_panel_central.png" style="background-repeat: no-repeat">&nbsp;</td>
                  <td width="547" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/registrate_panel_derecho.png" style="background-repeat: no-repeat"><table width="540" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="540"><table width="540" border="0" align="center" cellpadding="0" cellspacing="15">
                          <tr>
                            <td width="500" height="256"><table width="500" height="260" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td align="center" valign="top" style="background-repeat: no-repeat">
                                  
                                  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="52%"><div align="left"><a href="javascript:void(null)" onClick="siguienteDiv(\'div5\',\'div4\')"><img src="img/regresar_registro.jpg" width="74" height="16" border="0" /></a></div></td>
                                      <td width="48%"><div align="right"><a href="javascript:void(null)" onClick="frmRegNegocio(\'no\');"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/cerrar_registro.jpg" width="66" height="21" border="0" /></a></div></td>
                                    </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td width="522" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/cuadro_form_registrate_gris.png" style="background-repeat: no-repeat"><table width="482" border="0" cellspacing="7" cellpadding="0">
                                      <tr>
                                        <td width="456" height="27" valign="bottom" class="TITULO_CAB_USUARIO"><div align="left">REGISTRO DE NEGOCIO </div></td>
                                      </tr>
                                      
                                      <tr>
                                        <td height="50" valign="bottom" ><div align="justify" class="text_registro_gris_14_negrita"><span >PAYPAL es el medio m&aacute;s seguro de pagos mundialmente. Usted puede hacer su pago e inmediatamente podr&aacute; gozar de los beneficion de: </span></div></td>
                                      </tr>
                                      <tr>
                                        <td><div align="left">
                                          <table width="364" border="0" cellspacing="4" cellpadding="0">
                                            
                                            <tr>
                                              <td width="15" valign="top"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/vineta_registro.jpg" width="11" height="10" /></div></td>
                                              <td width="337" class="text_registro_gris_14_negrita">Crear cupones y ofertas </td>
                                            </tr>
                                            <tr>
                                              <td valign="top"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/vineta_registro.jpg" width="11" height="10" /></div></td>
                                              <td class="text_registro_gris_14_negrita">Tener su mini website </td>
                                            </tr>
                                            <tr>
                                              <td valign="top"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/vineta_registro.jpg" width="11" height="10" /></div></td>
                                              <td class="text_registro_gris_14_negrita">Mostrar comentario de sus clientes </td>
                                            </tr>
                                            <tr>
                                              <td valign="top"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/vineta_registro.jpg" width="11" height="10" /></div></td>
                                              <td class="text_registro_gris_14_negrita">Subir video y fotos </td>
                                            </tr>
                                            <tr>
                                              <td valign="top"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/vineta_registro.jpg" width="11" height="10" /></div></td>
                                              <td class="text_registro_gris_14_negrita">Y conectarse a las redes sociales como Facebook, Twiter y otras. </td>
                                            </tr>
                                          </table>
                                        </div></td>
                                      </tr>
                                      
                                  </table></td>
                                </tr>
                                
                                
                            </table></td>
                          </tr>
                          <tr>
                            <td><div align="center">
                              <table width="221" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><table border="0" cellspacing="3" cellpadding="0">
                                    <tr>
                                      <td><table width="107" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="20"><input name="radiobutton" type="radio" onClick="xajax_generarTrama(\'10001CODMR0001\',document.getElementById(\'codNegocio\').value)" value="radiobutton" ></td>
                                            <td width="87"><div align="left" class="submenu_cuenta_usuario">Por 3 Meses </div></td>
                                          </tr>
                                      </table></td>
                                      <td><table width="104" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="20"><input name="radiobutton" type="radio" value="radiobutton" onClick="xajax_generarTrama(\'10002CODMR0001\',document.getElementById(\'codNegocio\').value)"></td>
                                            <td width="84"><div align="left" class="submenu_cuenta_usuario">Por 6 Meses </div></td>
                                          </tr>
                                      </table></td>
                                      <td><table width="108" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="20"><input name="radiobutton" type="radio" value="radiobutton" onClick="xajax_generarTrama(\'10003CODMR0001\',document.getElementById(\'codNegocio\').value)"></td>
                                            <td width="88"><div align="left" class="submenu_cuenta_usuario">Por 12 Meses </div></td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td><img src="http://'.$_SERVER['HTTP_HOST'].'/img/por4meses.jpg" width="122" height="122"></td>
                                      <td><img src="http://'.$_SERVER['HTTP_HOST'].'/img/por6meses.jpg" width="122" height="122"></td>
                                      <td><img src="http://'.$_SERVER['HTTP_HOST'].'/img/por12meses.jpg" width="122" height="122"></td>
                                    </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td><table width="242" border="0" align="center" cellpadding="0" cellspacing="5">
                                    <tr>
                                      <td width="130" height="132">
                                          <table width="128" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td><img src="http://'.$_SERVER['HTTP_HOST'].'/img/paso3de3.png" width="175" height="37" /></td>
                                            </tr>
                                            <tr>
                                              <td><table width="130" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                  <td width="130"><input name="image" type="image" src="http://'.$_SERVER['HTTP_HOST'].'/img/pagar_ahora.png" width="130" height="42" border="0" /></td>
                                                </tr>
                                              </table></td>
                                            </tr>
                                          </table>
                                          </td>
                                      <td width="97"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/paypal.png" width="154" height="132" /></td>
                                    </tr>
                                  </table></td>
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
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td align="left" valign="top"><div align="center"></div></td>
        </tr>
        
      </table></form></div>
		';
		$xAjax->assign('pnlRegNegocio', 'innerHTML', $html);		
		return $xAjax;
		
}
function guardarNegocio($nombre,$email,$clave,$rclave,$zip,$sexo,$negocio,$ndireccion,$nciudad,$nzip,$nestado,$nfono,$nemail,$ncategoria,$nsubcategoria,$codpromotor,$nompromotor)
{
	require_once(dirname(dirname(__FILE__)).'/xajax/validaciones.php');
	$oAjax = new xajaxResponse();
	try {
		$oError1="";
		$oError2="";
		//$oAjax->alert($nombre);
		if(validarTexto_php($nombre,2)==false){
		$oError1="Escriba su nombre verdadero y completo";
		$oAjax->call('siguienteDiv','div4','div3');
		}elseif(validarCorreo_php($email,5)==false){
		$oError1="El Correo ingresado no es valido";
		$oAjax->call('siguienteDiv','div4','div3');
		}elseif(validarClave_php($clave,$rclave,5)==false){
		$oError1="La Clave ingresada no es aceptada";
		$oAjax->call('siguienteDiv','div4','div3');
		}elseif(validarTexto_php($zip,5)==false){
		$oError1="El Codigo postal no es valido";
		$oAjax->call('siguienteDiv','div4','div3');
		}elseif(validarTexto_php($sexo,1)==false){
		$oError1="Seleccione su sexo";
		$oAjax->call('siguienteDiv','div4','div3');
		}else {
			$oError1="";
			require_once(dirname(dirname(__FILE__)).'/Core/cls.Aplicacion.php');
			Aplicacion::iniciar();
			Aplicacion::clase('Core::datos::MiReferido::DatUsuario');				
			Aplicacion::clase('Core::datos::Sistema::DatOperaciones');
			$ousuario=new DatUsuario;
			$oOpe = new DatOperaciones;
			$contaremail=$ousuario->compruebaRegistroUsuario($email);
			$idioma='ES';			
			if($contaremail==0){
				@session_start();
				$proCodigo=$codpromotor;
				$proNombre=$nompromotor;
				$link="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
				$cod=$oOpe->insertar(null,'',"NEW",'',$proCodigo,null,null,$nombre,$email,$clave,$zip,$sexo,$negocio,$ndireccion,$nciudad,$nzip,$nestado,$nfono,$nemail,$ncategoria,$nsubcategoria,$link,'P',date("Y/m/d"),$proNombre,$idioma,'','','','','','','','','','','','','',date("Y/m/d"),'Pendiente','','','');//$ope_codigo,$ope_serie,$ope_tipo,$tra_codigo,$pro_codigo,$usu_codigo,$neg_codigo,$usu_nombre,$usu_email,$usu_clave,$usu_zip,$usu_sexo,$neg_nombre,$neg_direccion,$neg_ciudad,$neg_zip,$neg_estado,$neg_fono,$neg_email,$neg_categoria,$neg_subcategoria,$neg_link,$rne_estado,$rne_fechaRegistro,$pro_nombre,$idi_codigo,$neg_fechaVenciento,$tra_tipo,$com_nombre,$com_correo,$com_zip,$ven_correo,$ven_nombre,$ven_zip,$tra_pais,$tra_moneda,$tra_tax,$tra_monto,$tra_fee,$tar_fecha,$tra_estado,$tra_numero,$tra_descripcion,$pay_paypal
					if(!empty($cod)){
					$oAjax->assign("guardar","value","no");
					$oAjax->assign("codNegocio","value",$cod);
					$oAjax->call('siguienteDiv','div4','div5');	
				}
			}else{
				$oError1="Esta cuenta de correo de usuario ya esta registrada, por favor inicie sesion";
				$oAjax->call('siguienteDiv','div4','div3');
			}
		}
	} catch(Exception $e) {
		 $oError1=$e->getMessage();
		
	}
	$oAjax->assign("msjErrorRNegocio1","innerHTML", '<span style="color:#F00">'.$oError1.'</span>');
    $oAjax->assign("msjErrorRNegocio2","innerHTML", '<span style="color:#F00">'.$oError2.'</span>');
	return $oAjax;
}

function generarTrama($transaccionPromocion,$opepk){
	
	$oAjax = new xajaxResponse();	
	try{
		
		require_once(dirname(dirname(__FILE__)).'/Core/cls.Aplicacion.php');
		Aplicacion::iniciar();
		
		Aplicacion::clase('Core::datos::Sistema::DatOperaciones');
		Aplicacion::clase('Core::datos::Sistema::DatTarifario');
		$oOpe = new DatOperaciones;	
		$oDtar =new DatTarifario;
		$tarifario=$oDtar->listarxPk($transaccionPromocion);		
				
		if(!empty($tarifario[0])){
		$tarifario=$tarifario[0];
		
		$serie='MR'.$tarifario["tra_codigo"].$tarifario["trf_promo"].'OP'.$opepk.date('YmdHis').$opepk;
		//$oAjax->alert($serie);
		$reg=$oOpe->actualizarTransaccion($opepk,$serie,$transaccionPromocion,$tarifario["trf_monto"]);		
		$oAjax->assign("amount","value",$tarifario["trf_monto"]);
		$oAjax->assign("item_name","value",$tarifario["trf_trasa_desc"]);
		$oAjax->assign("item_number","value",$serie);
			 
		
		}else{
		$error="Lo Sentimos transaccion en desarollo";	
		}
		
		} catch(Exception $e) {
		$oAjax->alert("Error Inesperado vuelva a intentarlo");
	}
	return $oAjax;
}
?>