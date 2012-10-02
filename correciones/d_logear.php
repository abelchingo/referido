<form action="javascript:void(null)" name="frmLogeo" id="frmLogeo" method="post" onSubmit="return false;">
		<table width="490" height="211" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="531" align="center" valign="top" background="img/fondo_frm_login.jpg"><table width="484" border="0" cellspacing="14" cellpadding="0">
                      
                      <tr>
                        <td width="454"><div align="left" class="Tit_form_usuraio">
                          <table width="421" border="0" align="center" cellpadding="0" cellspacing="2">
                            <tr>
                              <td width="294"><div align="left" class="Tit_form_usuraio">Control de acceso al sistema </div></td>
                              <td width="127">&nbsp;</td>
                            </tr>
                          </table>
                        </div></td>
                      </tr>
                      
                      <tr>
                        <td class="t_det_envia"><table width="421" border="0" align="center" cellpadding="0" cellspacing="3">
                          <tr>
                            <td><div align="left" class="t_det_envia">Ingrese nombre de usuario y clave correctos  para ingresar<br />
                              al sistema</div></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table width="448" border="0" cellspacing="15" cellpadding="0">
                          <tr>
                            <td width="53"><div align="left"><span class="t_det_envia">usuario</span></div></td>
                            <td width="347"><div align="left">
                              <input name="txtUsuario" id="txtUsuario" onkeypress="return validarSinCaracteresEspeciales(event);" type="text" size="26" style="border: 0px solid #1e1977; width:330px;" />
                            </div></td>
                          </tr>
                          <tr>
                            <td><div align="left"><span class="t_det_envia">clave</span></div></td>
                            <td><div align="left">
                              <input name="txtClave" id="txtClave"  onkeypress="return validarSinCaracteresEspeciales(event);" type="password" size="26" style="border: 0px solid #1e1977; width:330px;" />
                            </div></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><table width="139" border="0" align="right" cellpadding="0" cellspacing="5">
                              <tr>
                                <td><a href="javascript:void(null)" onClick="ocultar('pnlIniciarSesion')"><img src="img/cancelar_login.jpg" width="85" height="29" border="0" /></a></td>
                                <td><a href="javascript:void(null)" onClick="loguear()"><img src="img/ingresar_login.jpg" width="84" height="29" border="0"  /></a></td>
                              </tr>
                            </table></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><div align="center" class="t_det_envia"><a href="javascript:void(null)" onClick="mostrarFormRegistro(1)">Registrase </a>&nbsp;&nbsp;&nbsp; || &nbsp;&nbsp;&nbsp;<a href="javascript:void(null)" onClick="recuperarClave(1)">Recuperar clave </a></div></td>
                      </tr>
                    </table></td>
                  </tr>
</table></form>	