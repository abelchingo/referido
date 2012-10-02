<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>MI REFERIDO.COM</title>



<link href="css/estilosPES.css" rel="stylesheet" type="text/css">




<script language="javascript">

function cerrar(){ 
window.close() 
} 


function enviar(){							
	xestatus=1;
	if(document.fcontactos.xnombre.value==""){
		document.getElementById('alerta').innerHTML="Debe ingresar su nombre";
		xestatus=0;
	}else{	
		if(document.fcontactos.xempresa.value==""){
			document.getElementById('alerta').innerHTML="Debe ingresar su empresa";
			xestatus=0;
		}else{	
			if(document.fcontactos.xtelefono.value==""){
				document.getElementById('alerta').innerHTML="Debe ingresar su número telefónico";
				xestatus=0;
			}else{		
				if(document.fcontactos.xemail.value==""){
					document.getElementById('alerta').innerHTML="Debe ingresar su cuenta de Email";
					xestatus=0;
				}else{	
					if(document.fcontactos.xcomentario.value==""){
						document.getElementById('alerta').innerHTML="Debe ingresar su comentario";
						xestatus=0;
					}else{	
						document.getElementById('alerta').innerHTML="Enviando...";					
						document.fcontactos.ok.value=1;
						xestatus=1;
						//document.fcontactos.submit();
						enviaremail();
			
					}
				}
			}
		}
	}
}

</script>




<script language="javascript">
function $(id){return document.getElementById(id);} 
function http(){ 
    if(window.XMLHttpRequest){ 
        return new XMLHttpRequest();     
    }else{ 
        try{ 
            return new ActiveXObject('Microsoft.XMLHTTP'); 
        }catch(e){ 
            alert('nop'); 
            return false; 
        }     
    } 
} 

String.prototype.tratarResponseText=function(){ 
    var pat=/<script[^>]*>([\S\s]*?)<\/script[^>]*>/ig; 
    var pat2=/\bsrc=[^>\s]+\b/g; 
    var elementos = this.match(pat) || []; 
    for(i=0;i<elementos.length;i++) { 
        var nuevoScript = document.createElement('script'); 
        nuevoScript.type = 'text/javascript'; 
        var tienesrc=elementos[i].match(pat2) || []; 
        if(tienesrc.length){ 
            nuevoScript.src=tienesrc[0].split("'").join('').split('"').join('').split('src=').join('').split(' ').join(''); 
        }else{ 
            var elemento = elementos[i].replace(pat,'$1',''); 
            nuevoScript.text = elemento; 
        } 
        document.getElementsByTagName('body')[0].appendChild(nuevoScript); 
    } 
    return this.replace(pat,''); 
} 

function SetContainerHTML(id_contenedor,responseText){ 
    var mydiv = $(id_contenedor); 
    mydiv.innerHTML = responseText.tratarResponseText(); 
} 


function enviaremail(){
	var ajax=new http(); 
	//divResultado = document.getElementById('calculo');
	ajax.open("GET", 'enviaemail.php'+"?xnom="+document.fcontactos.xnombre.value+"&xemp="+document.fcontactos.xempresa.value+"&xtel="+document.fcontactos.xtelefono.value+"&xemail="+document.fcontactos.xemail.value+"&xcomentario="+document.fcontactos.xcomentario.value,true);	
	ajax.onreadystatechange=function() {
		if(ajax.readyState==1){
		}else{
			if (ajax.readyState==4) {
				SetContainerHTML('alerta',ajax.responseText); 
				ajax.onreadystatechange=null; 				
			}
		}
	}
	ajax.send(null)		

}

</script>







<style type="text/css">
<!--
.Estilo7 {
	color: #00FF00;
	font-weight: bold;
}
.Estilo8 {font-size: 16px}
-->
</style>
</head>

<body>
<div align="center">
  <table width="427" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="middle"><table width="271" border="0" cellpadding="0" cellspacing="0">
        
        <tr>
          <td width="985" align="left" valign="top"><table width="427" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="427"><table width="409" border="0" cellpadding="0" cellspacing="0">
                  
                  <tr>
                    <td width="409" align="center" valign="top" background="img/fondocontactus.jpg" bgcolor="#FFFFFF" style="background-repeat: no-repeat">
					
					
					
					<form name="fcontactos" id="fcomentario" method="get" action="contactus.php">
					
					<table width="427" height="574" border="0" cellpadding="0" cellspacing="13">
                        
                        <tr>
                          <td width="401" align="center" valign="top"><table width="361" border="0" align="center" cellpadding="0" cellspacing="3" bordercolor="#FFFFFF">
                            <tr>
                              <td width="351" class="t_que_incluye"><div align="left" class="TITULO_CAB_USUARIO"><strong>CONTACTANOS </strong></div></td>
                            </tr>
                            <tr>
                              <td class="t_que_incluye">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="t_que_incluye"><table width="339" border="0" align="left" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td width="84" class="t_TITULO_1"><div align="left"><strong>Direcci&oacute;n:&nbsp;</strong></div></td>
                                  <td width="255"><div align="left"><span class="t_TITULO_1"><strong> 10900 NE   8th Street Suite 1000</strong></span></div></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td class="Estilo7"><p align="left" class="t_TITULO_1"><span lang="ES-PE" xml:lang="ES-PE"> Bellevue,   WA 98004</span></p>                                    </td>
                                </tr>
                                <tr>
                                  <td><div align="left"><span class="t_TITULO_1"><strong>E-mail:&nbsp;&nbsp;&nbsp;</strong></span></div></td>
                                  <td><div align="left"><span class="t_TITULO_1"><strong> info@mireferido.com </strong></span></div></td>
                                </tr>
                              </table></td>
                            </tr>
                            
                            <tr>
                              <td class="t_que_incluye"><table width="350" border="0" align="center" cellpadding="0" cellspacing="8">
                                <tr>
                                  <td width="348" height="25"><div align="center" class="Estilo7 Estilo8" id="alerta" name="alerta"></div></td>
                                </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td class="t_que_incluye"><div align="left">Formulario de Contactos </div></td>
                            </tr>
                            <tr>
                              <td class="Estilo6"></td>
                            </tr>
                            <tr>
                              <td><table width="349" border="0" align="center" cellpadding="0" cellspacing="0">
                                
                                <tr>
                                  <td width="120" class="submenu_cuenta_usuario"><div align="left" class="t_TITULO_1">Nombre </div></td>
                                  <td width="229"><table width="229" height="36" border="0" cellpadding="0" cellspacing="5">
                                      <tr>
                                        <td width="375" align="left" valign="top" background="img/campoformazul.jpg" style="background-repeat: no-repeat"><table width="219" border="0" cellspacing="6" cellpadding="0">
                                            <tr>
                                              <td width="207"><input name="xnombre" id="xnombre" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:200px;" /></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td><div align="left" class="t_TITULO_1"><strong>Empresa</strong></div></td>
                                  <td><table width="229" height="36" border="0" cellpadding="0" cellspacing="5">
                                      <tr>
                                        <td width="375" align="left" valign="top" background="img/campoformazul.jpg" style="background-repeat: no-repeat"><table width="219" border="0" cellspacing="6" cellpadding="0">
                                            <tr>
                                              <td width="207"><input name="xempresa" id="xempresa" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:200px;" /></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td><div align="left" class="t_TITULO_1"><strong>Tel&eacute;fono</strong></div></td>
                                  <td><table width="229" height="36" border="0" cellpadding="0" cellspacing="5">
                                      <tr>
                                        <td width="375" align="left" valign="top" background="img/campoformazul.jpg" style="background-repeat: no-repeat"><table width="219" border="0" cellspacing="6" cellpadding="0">
                                            <tr>
                                              <td width="207"><input name="xtelefono" id="xtelefono" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:200px;" /></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td><div align="left" class="submenu_cuenta_usuario"><span class="t_TITULO_1"><strong>Email</strong></span></div></td>
                                  <td><table width="229" height="36" border="0" cellpadding="0" cellspacing="5">
                                      <tr>
                                        <td width="375" align="left" valign="top" background="img/campoformazul.jpg" style="background-repeat: no-repeat"><table width="219" border="0" cellspacing="6" cellpadding="0">
                                            <tr>
                                              <td width="207"><input name="xemail" id="xemail" type="text" class="t_textbox_1" size="26" style="border: 0px solid #08637B; width:200px;" /></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td valign="top"><div align="left" class="submenu_cuenta_usuario"><span class="t_TITULO_1"><strong>Comentario</strong></span></div></td>
                                  <td><table width="229" height="106" border="0" cellpadding="0" cellspacing="5">
                                      <tr>
                                        <td width="375" height="96" align="left" valign="top" background="img/campoformazuldetalle.jpg" style="background-repeat: no-repeat"><table width="219" border="0" cellspacing="6" cellpadding="0">
                                            <tr>
                                              <td width="207"><textarea name="xcomentario" id="xcomentario"  cols="26" rows="5" class="t_textbox_1" style="border: 0px solid #08637B; width:200px;"></textarea></td>
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
                          <td height="64"><div align="center">
                            <table border="0" cellspacing="5" cellpadding="0">
                              <tr>
                                <td width="77"><a href="#" onclick="enviar(); return false"><img src="img/enviar2.jpg" width="75" height="29" border="0" />
                                  <input name="ok" id="ok" type="hidden" size="5" />
                                </a></td>
                              </tr>
                            </table>
                            <a href="#" onclick="enviar(); return false"></a></div></td>
                        </tr>
                    </table>
					</form>					</td>
                  </tr>
                  
              </table></td>
            </tr>
            
          </table></td>
        </tr>
        

      </table></td>
    </tr>
  </table>
</div>



</body>
</html>
