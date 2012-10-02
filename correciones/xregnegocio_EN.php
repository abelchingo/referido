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
	$categoria=$categ->getxIdioma('EN');
	$scategoria=$scateg->listarxCategoriaxIdioma("EN",$categoria[0][0]);
	$estados=$estad->listarEstados('US');
	$transaccion='10001';
	$promocion='CODMR0001';
	$tarifario=$otar->listarxPk($transaccion.$promocion);
		$xAjax = new xajaxResponse();
		
		//diseño negocio 1
		$html='
<form action="javascript:void(null)" name="frmRNegocio" id="frmRNegocio" method="post" onSubmit="return false;">
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
                      <td width="100%"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/logo_registro_EN.jpg" width="268" height="152" /></div></td>
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
                                <td width="100%"><div align="justify"><span class="text_registro_gris_14_negrita">Use MeReferrals. com to promote your business with the best online marketing strategies! </span></div></td>
                              </tr>
                              <tr>
                                <td><div align="center" class="t_mes_gratis">
                                  <div align="right" class="Estilo10"><strong>Search, Share and Win!</strong></div>
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
                                  <td align="center" valign="top" style="background-repeat: no-repeat"><div align="right"><a href="javascript:void(null)" onClick="frmRegNegocio(\'no\');"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/cerrar_registro_EN.jpg" width="66" height="21" border="0" /></a></div></td>
                                </tr>
                                <tr>
                                  <td width="522" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/cuadro_form_registrate.png" style="background-repeat: no-repeat"><table height="394" width="479" border="0" cellspacing="13" cellpadding="0">
                                      <tr>
                                        <td width="464" class="TITULO_CAB_USUARIO"><div align="left">USER REGISTRATION</div></td>
                                      </tr>
                                      <tr>
                                        <td height="300" valign="top"><table width="462" border="0" align="left" cellpadding="0" cellspacing="0">
                                            <tr>
                                           <td colspan="2"><div id="msjErrorRNegocio1">
										   <div align="left" class="submenu_cuenta_usuario">Personal Information</div>
										   </div></td>
                                            </tr>											
											<tr>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td width="112" class="submenu_cuenta_usuario"><div align="left">Name </div></td>
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
                                                          <td><input name="txtEmail" id="txtEmail" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;"  onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$email.'"/></td>
                                                        </tr>
                                                    </table>
													Your e-mail will be your username
													</td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">Password</div></td>
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
                                              <td><div align="left" class="submenu_cuenta_usuario">Repeat password </div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="5">
                                                  <tr>
                                                    <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td><input name="txtRClave" id="txtRClave" type="password" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$rclave.'" /></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">Zip code  </div></td>
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
                                              <td><div align="left" class="submenu_cuenta_usuario">Gender</div></td>
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
                                                          <td width="77"><div align="left" class="submenu_cuenta_usuario">Female</div></td>
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
                                                          <td width="191"><div align="left" class="submenu_cuenta_usuario">Male</div></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr><tr>
                                            <td>
											<div align="left" class="submenu_cuenta_usuario">Associate Code </div></td>
                                              <td>
											  <table width="350" height="36" border="0" cellpadding="0" cellspacing="5">
                                                  <tr>
                                                    <td width="350" align="left" valign="top">
													<table width="339" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td>
                                                          <input name="txtCodAzociadoN" id="txtCodAzociadoN" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:50px;" value="'.@$codazociado.'" readonly />
                                                          <input name="txtNomAzociadoN" id="txtNomAzociadoN" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:150px;" value="'.@$nomazociado.'" readonly /><input type="button"
 name="btnAsociado" value="Search" onclick="lisAsociado(\'N\');">                                                          
                                                          </td>
                                                        </tr>
                                                    </table>
													</td>
                                                  </tr>
                                              </table>
											  </td>
											  </tr>
                                        </table></td>
                                      </tr>
                                      
                                      
                                      
                                  </table></td>
                                </tr>
                                
                            </table></td>
                          </tr>
                          <tr>
                            <td><table width="505" border="0" cellspacing="5" cellpadding="0">
                              <tr>
                                <td class="t_mes_gratis" width="185" height="122"><div align="center"><strong>3 Months of ads <br>
                                  +<br>
                                  1 Month <br>
                                  FREE </strong></div></td>
                                <td width="120"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/unicamente_EN.jpg" width="120" height="122"></td>
                                <td width="180" valign="middle"><table width="153" border="0" cellspacing="5" cellpadding="0">
                                    <tr>
                                      <td align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/paso1de3_EN.png" width="170" height="36" /></td>
                                    </tr>
                                  </table>
                                    <table width="142" border="0" align="center" cellpadding="0" cellspacing="10">
                                      <tr>
                                        <td width="132"><a href="javascript:void(null)" onClick="guardarRegistro(\'RNegocio\',\'msjErrorRNegocio1\',\'div3\',\'div4\');"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/siguienteregistro_EN.png" width="130" height="42" border="0" /></a></td>
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
              <td>&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td align="left" valign="top"><div align="center"></div></td>
        </tr>
      </table></div>';
		
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
                      <td width="100%"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/logo_registro_EN.jpg" width="268" height="152" /></div></td>
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
                                <td width="100%"><div align="justify" class="text_registro_gris_14_negrita">MrReferrals.com is a promotional and marketing system that uses social media and traditional marketing </div></td>
                              </tr>
                              <tr>
                                <td><div align="center" class="t_mes_gratis">
                                  <div align="right" class="Estilo10">Search, Share and Win!</div>
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
                            <td width="500"><table width="500" height="472" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td align="center" valign="top" style="background-repeat: no-repeat">
                                  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="52%"><div align="left"><a href="javascript:void(null)" onClick="siguienteDiv(\'div4\',\'div3\')"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/regresar_registro_EN.jpg" width="74" height="16" border="0" /></a></div></td>
                                        <td width="48%"><div align="right"><a href="javascript:void(null)" onClick="frmRegNegocio(\'no\');"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/cerrar_registro_EN.jpg" width="66" height="22" border="0" /></a></a></div></td>
                                      </tr>
                                    </table>
                                 </td>
                                </tr>
                                <tr>
                                  <td width="522" height="373" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/cuadro_form_registrate.png" style="background-repeat: no-repeat"><table height="410" width="479" border="0" cellspacing="13" cellpadding="0">
                                      <tr>
                                        <td width="464" class="TITULO_CAB_USUARIO"><div align="left">BUSINESS REGISTRATION </div></td>
                                      </tr>
									  <tr>
                                           <td ><div id="msjErrorRNegocio2"></div></td>
                                      </tr>
                                      <tr>
                                        <td valign="top"><table width="448" border="0" align="left" cellpadding="0" cellspacing="0">
                                            
                                            <tr>
                                              <td width="98" class="submenu_cuenta_usuario"><div align="left">Business name </div></td>
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
                                              <td><div align="left" class="submenu_cuenta_usuario">Address</div></td>
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
                                              <td><div align="left" class="submenu_cuenta_usuario">City</div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="3">
                                                  <tr>
                                                    <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td><input name="txtNCiudad" id="txtNCiudad" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$nciudad.'"/></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            
                                            <tr>
                                              <td><div align="left" class="submenu_cuenta_usuario">Zip code </div></td>
                                              <td align="left"><table width="350" height="36" border="0" cellpadding="0" cellspacing="3">
                                                <tr>
                                                  <td width="146" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_3.jpg" style="background-repeat: no-repeat"><table width="146" border="0" cellspacing="6" cellpadding="0">
                                                      <tr>
                                                        <td width="134"><input name="txtNZip" id="txtNZip" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:130px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$nzip.'" /></td>
                                                      </tr>
                                                  </table></td>
                                                  <td width="50" align="left" valign="middle" style="background-repeat: no-repeat"><div align="left" class="submenu_cuenta_usuario">
                                                      <div align="center">State</div>
                                                  </div></td>
                                                  <td width="142" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_3.jpg" style="background-repeat: no-repeat"><table width="139" border="0" cellspacing="6" cellpadding="0">
                                                      <tr>
                                                        <td width="127">
														<div id="pnlEstado">
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
                                              <td><div align="left" class="submenu_cuenta_usuario">Phone</div></td>
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
                                              <td><div align="left" class="submenu_cuenta_usuario">Category</div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="2">
                                                <tr>
                                                  <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                      <tr>
                                                        <td>
														<div id="pnlcategoria">
              <select name="txtNCategoria" class="t_textbox_1" style="border: 0px solid #08637B; width:330px;" onChange="xajax_versubcategoria(\'pnlCmbSubCategoria\', \'txtNSubCategoria\',this.value, \'EN\',\'\',\'t_textbox_1\',330);" id="txtNCategoria" >
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
                                              <td><div align="left" class="submenu_cuenta_usuario">Sub Category </div></td>
                                              <td><table width="350" height="36" border="0" cellpadding="0" cellspacing="3">
                                                <tr>
                                                  <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                      <tr>
                                                        <td><div id="pnlCmbSubCategoria">
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
                                      <td width="428"> <div align="left" class="submenu_cuenta_usuario">I do accept  <a href="javascript:void(null)"  onClick="verTerminos()">Terms &amp; Conditions </a> and <a href="javascript:void(null)"  onClick="verPoliticas()"> Privacy Policy </a> of '.$_SERVER['HTTP_HOST'].' </div>
                                      </div></td>
                                    </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td align="center" valign="top" style="background-repeat: no-repeat"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/paso2de3_EN.png" width="175" height="36" /></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td><div align="center">
                              <table width="130" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="130"><a href="javascript:void(null)" onClick="guardarRegistro(\'RNegocio\',\'msjErrorRNegocio2\',\'div4\',\'div5\');"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/siguienteregistro_EN.png" width="130" height="42" border="0" /></a></td>
                                </tr>
                              </table>
                              <input type="hidden" name="guardar" id="guardar" value="si"></div></td>
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
		</div></form>';
		
		//diseño negocio 3
		
		$msjtar='';
		if(!empty($tarifario[0])){
		$tarifario=$tarifario[0];
		$msjtar="Lo Sentimos transaccion en desarollo";
		}
		
		$html.='<div id="div5" style="display:none;">
<form action="https://'.$paypalurl.'/cgi-bin/webscr" name="frmPago" method="post" >
        <input type="hidden" name="codNegocio" id="codNegocio" value="">
		<input type="hidden" name="cmd" value="_xclick">
		<input type="hidden" name="business" value="'.$paypalcuenta.'">
		<input type="hidden" name="lc" value="US">
		<input type="hidden" name="amount" id="amount" value="'.@$tarifario["trf_monto"].'">
		<input type="hidden" name="return" value="http://'.$_SERVER['HTTP_HOST'].'/incio_EN.php">
		<input type="hidden" name="cancel_return" value="http://'.$_SERVER['HTTP_HOST'].'/incio_EN.php" />
		<input type="hidden" name="button_subtype" value="services">
		<input type="hidden" name="no_note" value="0">
		<input type="hidden" name="currency_code" value="USD">
		<input type="hidden" name="item_name" id="item_name" value="'.@$tarifario["trf_tra_desc_en"].'">		
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
                                <td width="100%"><div align="justify" class="text_registro_gris_14_negrita">Enjoy the incredible opportunity to join us and raise the level of your business sales </div></td>
                              </tr>
                              <tr>
                                <td><div align="center" class="t_mes_gratis">
                                  <div align="right" class="Estilo10"><strong>Search, Share and Win!</strong></div>
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
                      <td width="540"><table width="540" border="0" align="center" cellpadding="0" cellspacing="5">
                          <tr>
                            <td width="500"><table width="520" height="287" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td height="26" align="center" valign="top" style="background-repeat: no-repeat">
                                  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="52%"><div align="left"><a href="javascript:void(null)" onClick="siguienteDiv(\'div5\',\'div4\')"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/regresar_registro_EN.jpg" width="74" height="16" border="0" /></a></div></td>
                                        <td width="48%"><div align="right"><a href="javascript:void(null)" onClick="frmRegNegocio(\'no\');"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/cerrar_registro_EN.jpg" width="66" height="22" border="0" /></a></div></td>
                                      </tr>
                                    </table> </td>
                                </tr>
                                <tr>
                                  <td width="522" height="261" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/cuadro_form_registrate_gris.png" style="background-repeat: no-repeat"><table width="498" border="0" cellspacing="15" cellpadding="0">
                                      <tr>
                                        <td width="468" height="19" valign="bottom" class="TITULO_CAB_USUARIO"><div align="left">BUSINESS REGISTRATION </div></td>
                                      </tr>
                                      
                                      <tr>
                                        <td height="57" valign="top" ><div align="justify" class="text_registro_gris_14_negrita"><span >PayPal is the most widely recognized and respected<br />
                                          independent third party company, based in the United States, which specializes in processing online credit card transactions. </span></div></td>
                                      </tr>
                                      <tr>
                                        <td><div align="left">
                                          <table width="364" border="0" cellspacing="4" cellpadding="0">
                                            
                                            <tr>
                                              <td width="15" valign="top"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/vineta_registro.jpg" width="11" height="10" /></div></td>
                                              <td width="337" class="text_registro_gris_14_negrita">Free one month advertidsing </td>
                                            </tr>
                                            <tr>
                                              <td valign="top"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/vineta_registro.jpg" width="11" height="10" /></div></td>
                                              <td class="text_registro_gris_14_negrita">Free Mini Website </td>
                                            </tr>
                                            <tr>
                                              <td valign="top"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/vineta_registro.jpg" width="11" height="10" /></div></td>
                                              <td class="text_registro_gris_14_negrita">Promotion of your business to several social networks </td>
                                            </tr>
                                            <tr>
                                              <td valign="top"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/vineta_registro.jpg" width="11" height="10" /></div></td>
                                              <td class="text_registro_gris_14_negrita">Promote coupons and discount </td>
                                            </tr>
                                            <tr>
                                              <td valign="top"><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/vineta_registro.jpg" width="11" height="10" /></div></td>
                                              <td class="text_registro_gris_14_negrita">And much more... </td>
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
                              <table width="228" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><table border="0" cellspacing="3" cellpadding="0">
                                    <tr>
                                      <td><table width="107" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="20"><input name="radiobutton" type="radio" onClick="xajax_generarTrama(\'10001CODMR0001\',document.getElementById(\'codNegocio\').value)" value="radiobutton" ></td>
                                            <td width="87"><div align="left" class="submenu_cuenta_usuario">For 3 Months </div></td>
                                          </tr>
                                      </table></td>
                                      <td><table width="104" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="20"><input name="radiobutton" type="radio" value="radiobutton" onClick="xajax_generarTrama(\'10002CODMR0001\',document.getElementById(\'codNegocio\').value)"></td>
                                            <td width="84"><div align="left" class="submenu_cuenta_usuario">For 6 Months </div></td>
                                          </tr>
                                      </table></td>
                                      <td><table width="113" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="20"><input name="radiobutton" type="radio" value="radiobutton" onClick="xajax_generarTrama(\'10003CODMR0001\',document.getElementById(\'codNegocio\').value)"></td>
                                            <td width="93"><div align="left" class="submenu_cuenta_usuario">For 12 Months </div></td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td><img src="http://'.$_SERVER['HTTP_HOST'].'/img/por4meses_EN.jpg" width="122" height="122"></td>
                                      <td><img src="http://'.$_SERVER['HTTP_HOST'].'/img/por6meses_EN.jpg" width="122" height="122"></td>
                                      <td><img src="http://'.$_SERVER['HTTP_HOST'].'/img/por12meses_EN.jpg" width="122" height="122"></td>
                                    </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td><table width="130" border="0" align="center" cellpadding="0" cellspacing="5">
                                    <tr>
                                      <td width="110"><table width="119" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td><img src="http://'.$_SERVER['HTTP_HOST'].'/img/paso3de3_EN.png" width="173" height="37" /></td>
                                        </tr>
                                        <tr>
                                          <td><table width="110" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                              <td ><input name="image" type="image" src="http://'.$_SERVER['HTTP_HOST'].'/img/pay_now_en.JPG" width="110" height="42" border="0" /></td>
                                            </tr>
                                          </table></td>
                                        </tr>
                                      </table></td>
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
      </table></form>
		</div>		
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
		if(validarTexto_php($nombre,2)==false){
		$oError1="Enter your true full name";
		$oAjax->call('siguienteDiv','div4','div3');
		}elseif(validarCorreo_php($email,5)==false){
		$oError1="The Email entered is not valid".$email;	
		$oAjax->call('siguienteDiv','div4','div3');
		}elseif(validarClave_php($clave,$rclave,5)==false){
		$oError1="The entered password is not accepted";
		$oAjax->call('siguienteDiv','div4','div3');
		}elseif(validarTexto_php($zip,5)==false){
		$oError1="The Zip Code is invalid";
		$oAjax->call('siguienteDiv','div4','div3');
		}elseif(validarTexto_php($sexo,1)==false){
		$oError1="Select your gender ";
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
			$idioma='EN';
			if($contaremail==0){
				@session_start();
				$proCodigo=$codpromotor;
				$proNombre=$nompromotor;			
				$link="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];				
				$cod=$oOpe->insertar(null,'',"NEW",'',$proCodigo,null,null,$nombre,$email,$clave,$zip,$sexo,$negocio,$ndireccion,$nciudad,$nzip,$nestado,$nfono,$nemail,$ncategoria,$nsubcategoria,$link,'P',date("Y/m/d"),$proNombre,$idioma,'','','','','','','','','','','','','',date("Y/m/d"),'Pendiente','','','');
				
				if(!empty($cod)){
					$oAjax->assign("guardar","value","no");
					$oAjax->assign("codNegocio","value",$cod);
					$oAjax->call('siguienteDiv','div4','div5');			
				}
			}else{
				
				$oError1="This email address is already registered user";
				$oAjax->call('siguienteDiv','div4','div3');
			}
		}
	} catch(Exception $e) {
		 $oError2=$e->getMessage();
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
		$oDtar =new DatTarifario;
		$oOpe = new DatOperaciones;	
		$tarifario=$oDtar->listarxPk($transaccionPromocion);			
		
		if(!empty($tarifario[0])){
		
		$tarifario=$tarifario[0];
		$serie='MR'.$tarifario["tra_codigo"].$tarifario["trf_promo"].'OP'.$opepk.date('YmdHis').$opepk;		
		$reg=$oOpe->actualizarTransaccion($opepk,$serie,$transaccionPromocion,$tarifario["trf_monto"]);
		//$oAjax->alert($opepk."-".$serie."-".$transaccionPromocion."-".$tarifario["trf_monto"]);
		$oAjax->assign("amount","value",$tarifario["trf_monto"]);		
		$oAjax->assign("item_name","value",$tarifario["trf_tra_desc_en"]);		
		$oAjax->assign("item_number","value",$serie);
		
		//$oAjax->alert($serie);
	
		}else{
		$error="Sorry developing transaction";	
		}
		
		} catch(Exception $e) {		
		$oAjax->alert("Unexpected error try again");
	}
	return $oAjax;
}
?>