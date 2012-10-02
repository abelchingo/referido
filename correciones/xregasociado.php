<?php
//$xajax->register(XAJAX_FUNCTION, "iniciarSesion");
$xajax->register(XAJAX_FUNCTION,"guardarAsociado");
$xajax->register(XAJAX_FUNCTION,"regAsociado");
function regAsociado($nombre,$email,$clave,$rclave,$zip,$paypal){
	@session_start();
	$codazociado=!empty($_SESSION['PrOmOtOr_CoD'])?$_SESSION['PrOmOtOr_CoD']:'0';
	$nomazociado=!empty($_SESSION['PrOmOtOr_NoM'])?$_SESSION['PrOmOtOr_NoM']:'';
	sleep(2);
		$xAjax = new xajaxResponse();
		$html='
		<form action="javascript:void(null)" name="frmRAsociado" id="frmRAsociado" method="post" onSubmit="return false;">
		<div id="div1" style="display:block;">
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
                      <td width=""><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/logo_registro_ES.jpg" width="268" height="153" /></div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><table width="208" border="0" cellspacing="2" cellpadding="0">
                        <tr>
                          <td><img src="http://'.$_SERVER['HTTP_HOST'].'/img/foto_registro_asociado.jpg" width="374" height="250" /></td>
                        </tr>
                        <tr>
                          <td background="http://'.$_SERVER['HTTP_HOST'].'/img/fondo_pie_foto_reg.jpg">&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td><div align="right">
                            <table width="348" border="0" align="right" cellpadding="0" cellspacing="10">
                              <tr>
                                <td width="100%"><div align="justify" class="text_registro_gris_14_negrita">Recibe comisiones por registrar negocios, es totalmente gratis y tus ganancias ilimitadas </div></td>
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
                                  <td align="center" valign="top" style="background-repeat: no-repeat"><div align="right"><a href="javascript:void(null)" onClick="frmRegAsociado(\'no\');"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/cerrar_registro.jpg" width="66" height="21" border="0" /></a></div></td>
                                </tr>
                                <tr>
                                  <td width="522" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/cuadro_form_registrate_asociado.png" style="background-repeat: no-repeat"><table width="479" border="0" cellspacing="13" cellpadding="0">
                                      <tr>
                                        <td width="464" class="TITULO_CAB_USUARIO"><div align="left">REGISTRO DE ASOCIADO INDEPENDIENTE </div></td>
                                      </tr>
                                      <tr>
                                        <td><table width="462" border="0" align="left" cellpadding="0" cellspacing="0">
                                            <tr>
                                              <td colspan="2"><div id="msjErrorRAsociado1"></div></td>
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
                                                          <td><input name="txtNombre" id="txtNombre" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;"  onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$nombre.'" /></td>
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
                                                          <td><input name="txtEmail" id="txtEmail" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$email.'" /></td>
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
                                                          <td><input name="txtClave" id="txtClave" type="password" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;" onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$clave.'" /></td>
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
                                                          <td><input name="txtRClave" id="txtRClave" type="password" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;"  onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$rclave.'" /></td>
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
                                                          <td><input name="txtZip" id="txtZip" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;"  onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$zip.'"/></td>
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
                                            <td>
											<div align="left" class="submenu_cuenta_usuario">C&oacute;digo Asociado </div></td>
                                              <td>
											  <table width="350" height="36" border="0" cellpadding="0" cellspacing="5">
                                                  <tr>
                                                    <td width="350" align="left" valign="top">
													<table width="339" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td>
                                                          <input name="txtCodAzociadoA" id="txtCodAzociadoA" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:50px;" value="'.@$codazociado.'" readonly />
                                                          <input name="txtNomAzociadoA" id="txtNomAzociadoA" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:150px;" value="'.@$nomazociado.'" readonly/><input type="button"
 name="btnAsociado" value="Buscar Asociado" onclick="lisAsociado(\'A\');">                                                          
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
                                <tr>
                                  <td align="center" valign="top" style="background-repeat: no-repeat"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/paso1de2.png" width="177" height="36" /></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="javascript:void(null)" onClick="guardarRegistro(\'RAsociado\',\'msjErrorRAsociado1\',\'div1\',\'div2\');"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/siguienteregistro.png" width="130" height="42" border="0" /></a></div></td>
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
		
		//asociado 2
		
		$html.='<div id="div2" style="display:none;">
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
                          <td><img src="http://'.$_SERVER['HTTP_HOST'].'/img/foto_registro_asociado_2.jpg" width="374" height="250" /></td>
                        </tr>
                        <tr>
                          <td background="http://'.$_SERVER['HTTP_HOST'].'/img/fondo_pie_foto_reg.jpg">&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td><div align="right">
                            <table width="348" border="0" align="right" cellpadding="0" cellspacing="10">
                              <tr>
                                <td width="100%"><div align="justify"><span class="text_registro_gris_14_negrita"><span class="Estilo6">Como asociado independiente obtendr&aacute;s tu propia p&aacute;gina web y la oportunida de ganar dinero!</span></span></div></td>
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
                            <td width="500"><table width="500" height="273" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td align="center" valign="top" style="background-repeat: no-repeat"><div align="right">
                                  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="52%"><div align="left"><a href="javascript:void(null)" onClick="siguienteDiv(\'div2\',\'div1\')"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/regresar_registro.jpg" width="74" height="16" border="0" /></a></div></td>
                                        <td width="48%"><div align="right"><a href="javascript:void(null)" onClick="frmRegAsociado(\'no\');"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/cerrar_registro.jpg" width="66" height="21" border="0" /></a></div></td>
                                      </tr>
                                    </table>
                                  </div></td>
                                </tr>
                                <tr>
                                  <td width="522" height="186" align="center" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/cuadro_form_registrate_asociado_2.png" style="background-repeat: no-repeat"><table width="479" border="0" cellspacing="13" cellpadding="0">
                                      <tr>
                                        <td width="464" class="TITULO_CAB_USUARIO"><div align="left">REGISTRO DE ASOCIADO INDEPENDIENTE </div></td>
                                      </tr>
                                      <tr>
                                        <td><table width="462" border="0" align="left" cellpadding="0" cellspacing="0">
                                            <tr>
                                              <td colspan="2"><div id="msjErrorRAsociado2"></div></td>
                                            </tr>
											<tr>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td width="112" class="submenu_cuenta_usuario"><div align="left">Ingresa tu cuenta Paypal </div></td>
                                              <td width="350"><table width="350" height="36" border="0" cellpadding="0" cellspacing="5">
                                                  <tr>
                                                    <td width="350" align="left" valign="top" background="http://'.$_SERVER['HTTP_HOST'].'/img/campo_form_1.jpg" style="background-repeat: no-repeat"><table width="283" border="0" cellspacing="6" cellpadding="0">
                                                        <tr>
                                                          <td><input name="txtPaypal" id="txtPaypal" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:330px;"  onKeyPress="return validarSinCaracteresEspeciales(event);" value="'.$paypal.'"/></td>
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
                                      
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td><div align="left" class="text_registro_gris_14_negrita"><span >Su cuenta PAYPAL es importante porque es el medio de pago que utilizamos para recibir sus comisiones. Si no tienes una cuenta PAYPAL puedes agregarla en otro momento. </span></div></td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td><div align="center"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/paso2de2.png" width="171" height="36" /></div></td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
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
                            </table></td>
                          </tr>
                          
                          <tr>
                            <td><table width="130" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="130"><a href="javascript:void(null)" onClick="guardarRegistro(\'RAsociado\',\'msjErrorRAsociado2\',0,0);"><img src="http://'.$_SERVER['HTTP_HOST'].'/img/REGISTRARME.jpg" width="130" height="42" border="0" /></a></td>
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
        
      </table>
		</div> </form>
		';
		$xAjax->assign('pnlRegAsociado', 'innerHTML', $html);		
		return $xAjax;
		
}
function guardarAsociado($nombre, $email,$clave,$rclave,$zip,$sexo,$paypal,$codpromotor)
{
	require_once(dirname(dirname(__FILE__)).'/xajax/validaciones.php');
	$oAjax = new xajaxResponse();
	$oError1="";
	$oError2="";
	try {
		//$oAjax->alert($nombre);
		if(validarTexto_php($nombre,10)==false){
		$oError1="Escriba su nombre verdadero y completo";
		$oError2="Escriba su nombre verdadero y completo";
		}elseif(validarCorreo_php($email,10)==false){
		$oError1="El Correo ingresado no es valido";
		$oError2="El Correo ingresado no es valido";
		}elseif(validarClave_php($clave,$rclave,5)==false){
		$oError1="La Clave ingresada no es aceptada";
		$oError2="La Clave ingresada no es aceptada";
		}elseif(validarTexto_php($zip,5)==false){
		$oError1="El Codigo postal no es valido";
		$oError2="El Codigo postal no es valido";
		}elseif(validarTexto_php($sexo,1)==false){
		$oError1="Seleccione su sexo";
		$oError2="Seleccione su sexo";
		}/*elseif(validarCorreo_php($paypal,10)==false){
		$oAjax->assign("msjErrorRAsociado1","innerHTML","Ingrese su correo de su cuenta paypal");
		$oAjax->assign("msjErrorRAsociado2","innerHTML","Ingrese su correo de su cuenta paypal");
		}*/else {
			require_once(dirname(dirname(__FILE__)).'/Core/cls.Aplicacion.php');
			Aplicacion::iniciar();
			Aplicacion::clase('Core::datos::MiReferido::DatUsuario');				
			Aplicacion::clase('Core::negocio::Miembros::NegSesionMiembro');
			Aplicacion::clase('Core::datos::MiReferido::DatEmailMarketing');
			Aplicacion::clase('Core::datos::MiReferido::DatMensajeAdmin');
			$ousuario=new DatUsuario;
			$oEmailMarketing=new DatEmailMarketing;
			$oNegSesionMiembro = new NegSesionMiembro;
			$oMsj=new DatMensajeAdmin;
			//$oAjax->alert("ok");
			$contaremail=$ousuario->compruebaRegistroUsuario($email);
			$idioma='ES';
			if($contaremail==0){
				@session_start();
				$promotor=$codpromotor;
				$codusuario=$ousuario->insertar($nombre,'','','','',$zip,'','','',$clave,$email,$sexo,'AC','',$paypal,'',$promotor);
				$oEmailMarketing->insertar($email,'','', $nombre, 'AF', $zip, '',$idioma , 2, 'ASSOCIATE',$codusuario);
				if(!empty($paypal))
				$oEmailMarketing->insertar($paypal,'','', $nombre, 'AF', $zip, '',$idioma , 2, 'ASSOCIATE',$codusuario);
				$datomsqj=$oMsj->getxPk("MSJCUENTAASOOK".$idioma);
				$enviarA = $email;
				$remitente = $email;
				$asunto = trim($datomsqj[0]['men_asu']);
				$headers="From: Mi Referido <info@referidos.com>\nReply-To:".$email."\nContent-Type: text/html; charset=iso-8859-1";
				$message ="<html><head><meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
				<style type='text/css'>
				<!--
				.Nav_01 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #3B4742;}
				-->
				</style></head>
				<body class= 'Nav_01'><hr>";				
				$user=ereg_replace("_user_",$email,utf8_encode($datomsqj[0]['men_conten']));
				
				$link=ereg_replace("_linkWebMiReferido_",'<a href="http://'.$_SERVER['HTTP_HOST'].'/inicio.php">'.$_SERVER['HTTP_HOST'].'</a>',$user);
				$message .=$link."<hr></body></html>";
				 
				$ver=@mail($enviarA, $asunto, $message, $headers);			
				$ver=$oNegSesionMiembro->iniciar('adMiembros.1.0', $email, $clave);			
				
				if(!empty($ver)){ 
				$oError2='<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://'.$_SERVER['HTTP_HOST'].'/miembros/index.php?idi='.$idioma.'">';
				$oAjax->alert('Su cuenta se a guardado correctamente');
				$oAjax->call('recargarPagina');
				
				}
			}else{
				$oError1="Esta cuenta de correo de usuario ya esta registrada, por favor inicie sesion";
				$oError2="Esta cuenta de correo de usuario ya esta registrada, por favor inicie sesion";
			}
			
			
		}
	} catch(Exception $e) {
		$oError1=$e->getMessage();
		$oError2=$e->getMessage();
	}
	$oAjax->assign("msjErrorRAsociado1","innerHTML",'<span style="color:#F00">'.$oError1.'</span>');
	$oAjax->assign("msjErrorRAsociado2","innerHTML",'<span style="color:#F00">'.$oError2.'</span>');
	return $oAjax;
}
?>