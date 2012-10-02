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
          <td><table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="490" align="left" valign="top">&nbsp;</td>
                </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top"><table width="490" height="211" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="531" align="center" valign="top" background="img/fondo_frm_login.jpg"><table width="484" border="0" cellspacing="15" cellpadding="0">
                      
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
                        <td><table width="448" border="0" cellspacing="16" cellpadding="0">
                          <tr>
                            <td width="53"><div align="left"><span class="t_det_envia">usuario</span></div></td>
                            <td width="347"><div align="left">
                              <input name="xt_usuario" id="xt_quebuscas" type="text" size="26" style="border: 0px solid #1e1977; width:330px;" />
                            </div></td>
                          </tr>
                          <tr>
                            <td><div align="left"><span class="t_det_envia">clave</span></div></td>
                            <td><div align="left">
                              <input name="xt_clave" id="xt_usuario" type="password" size="26" style="border: 0px solid #1e1977; width:330px;" />
                            </div></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><table width="139" border="0" align="right" cellpadding="0" cellspacing="5">
                              <tr>
                                <td><a href="#"><img src="img/cancelar_login.jpg" width="85" height="29" border="0" /></a></td>
                                <td><img src="img/ingresar_login.jpg" width="84" height="29" border="0" /></td>
                              </tr>
                            </table></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><div align="center" class="t_det_envia"><a href="#">Recuperar clave </a></div></td>
                      </tr>

                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top">&nbsp;</td>
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
