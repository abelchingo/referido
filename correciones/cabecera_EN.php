<?php 
@session_start();
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
$sesion=NegSesionMiembro::existeSesion('adMiembros.1.0');
?>
<link href="http://<?php echo $_SERVER['HTTP_HOST'];?>/css/estilosPEN.css" rel="stylesheet" type="text/css">
<div align="center">
  <table border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="997" height="71" align="left" valign="top"><table width="972" border="0" align="center" cellpadding="0" cellspacing="5">
          <tr>
            <td width="271" height="56" align="left" valign="top"><table width="188" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/incio_EN.php"><img src="<?php echo BASE_REL;?>img/logo2_EN.png" alt="I referred logo" width="271" height="153" border="0" /></a></td>
                </tr>
            </table></td>
            <td width="686" align="right" valign="top"><table width="414" height="124" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="422" height="124" align="left" valign="top" background="<?php echo BASE_REL;?>img/barra_opciones_3.png" style="background-repeat: no-repeat"><table width="404" height="93" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="321" align="left" valign="top"><table width="321" height="127" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="334" height="32">&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="25"><table width="298" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="215"><div align="center">
                                        <input name="txtEmail2" id="txtEmail2" type="text" class="opaco" size="26" style="border: 0px solid #1e1977; width:190px;" onFocus=" opacar(this.id,1); completartxt1(this.id,'Enter Email'); " onBlur=" opacar(this.id,0); completartxt0(this.id,'Enter Email');" value="Enter Email"/>
                                    </div></td>
                                    <td width="83"><div align="right"><a href="javascript:void(null)" onclick="registrarEmail('txtEmail2','si')"><img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/img/enviar1_EN.jpg" width="75" height="29" border="0" /></a></div></td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td height="39"><table width="282" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td width="273"><div align="left" class="cabeceraAzul" > Receive coupons&nbsp;with prizes&nbsp;and discounts </div></td>
                                </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td height="19">&nbsp;</td>
                            </tr>
                        </table></td>
                        <td width="83"><table width="90" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="85"><div align="center"><a href="http://www.mireferido.com/inicio.php"><img src="<?php echo BASE_REL;?>img/ver_spanish.jpg" width="54" height="35" border="0" /></a></div></td>
                          </tr>
                          <tr>
                            <td><div align="center"><span class="englisVersion">Spanish version</span></div></td>
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
      <td align="left" valign="top"><table width="966" border="0" align="center" cellpadding="0" cellspacing="1">
          <tr>
            <td width="964" align="left" valign="top" background="<?php echo BASE_REL;?>img/buscar_cabecera_EN.png" style="background-repeat: no-repeat"><table width="864" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="44"><table width="962" height="44" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="974" style="background-repeat: no-repeat"><table width="960" height="44" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="161" background="<?php echo BASE_REL;?>/img/bt_buscar_negocio_off_EN.png"><a href="javascript:void(null);" onclick="buscar1('negocio'); enviarAbuscar(); "><img src="<?php echo BASE_REL;?>img/bt_buscar_negocio_off_EN.png" name="bt_b_negocio" id="bt_b_negocio" width="161" height="44" border="0" /></a></td>
                              <td width="143"><div align="left"><a href="javascript:void(null)" onclick="buscar1('cupon'); enviarAbuscar();"><img id="bt_b_cupon" name="bt_b_cupon" src="<?php echo BASE_REL;?>img/bt_buscar_cupon_on_EN.png" width="142" height="44" border="0" /></a></div></td>
                              <td width="656"><div align="right">
                                <table width="173" border="0" align="right" cellpadding="0" cellspacing="5">
                                  <tr>
                                    <td width="50">
                                    
                                    
                                    <?php if(!$sesion){?>
                                    <a href="javascript:void(null);" onclick="formRegistro('si');"><img src="<?php echo BASE_REL;?>img/registrate_EN.jpg" width="68" height="17" border="0" /></a><?php }else{ ?>
									<a href="<?php echo BASE_REL;?>miembros/index.php?idi=<?php echo $idioma;?>"><img src="<?php echo BASE_REL;?>img/micuenta_EN.jpg" width="68" height="17" border="0" />
									<?php }?></a>
										
                                    
                                    </td>
                                    <td width="117">
                                     <?php if(!$sesion){?>
                                    <a href="javascript:void(null);" onclick="formSesion('si');"><img src="<?php echo BASE_REL;?>img/btiniciarsesion_EN.png" width="117" height="32" border="0" /></a><?php }else{ ?>
                                 <a href="<?php echo BASE_REL;?>miembros/salir.php?idi=<?php echo $idioma ?>"><img src="<?php echo BASE_REL;?>img/btcerrarsesion_EN.png" width="110" height="30" border="0" /></a> <?php }?>
                                    
                                    </td>
                                  </tr>
                                </table>
                              </div></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td><table width="961" height="82" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="571" align="left" valign="top"><table width="572" height="82" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="572" height="82" align="left" valign="top" style="background-repeat: no-repeat" >
                              <form action="list_negocio.php" method="post" name="formBusqueda" id="formBusqueda" style="border:0;">
                              <input type="hidden" name="idioma" value="EN">
                              <input type="hidden" name="ordenPrior" value="1">
                              <input type="hidden" name="pg" value="1">
                              <input type="hidden" name="pgbase" value="1">
							  <input type="hidden" name="tipobusqueda" value="negocio" >
							  <?php
                              $pg = empty($_REQUEST['pg']) ? 1 : $_REQUEST['pg'];
			$pg_base = empty($_REQUEST['pgbase']) ? $pg : $_REQUEST['pgbase'];			
			$mostrar = 5;
			$pg_vis = 10;	
			
			$desde = ($pg-1) * $mostrar;
			$hasta = $desde + $mostrar - 1;?>
                                  <table width="564" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="249" height="36">&nbsp;</td>
                                      <td width="211">&nbsp;</td>
                                      <td width="104" rowspan="2" valign="top">
                                      <div style="height:33px;">&nbsp;</div>
                                      <div align="center"><a href="javascript:void(null)" onclick="enviarAbuscar();"><img src="<?php echo BASE_REL;?>img/buscar1_EN.jpg" width="91" height="29" border="0" /></a></div></td>
                                    </tr>
                                    <tr align="center" valign="middle">
                                      <td  align="center" valign="top" height=""><div align="center">
                                          <input name="txtDesc" id="txtDesc" onFocus="opacar(this.id,1); completartxt1(this.id,'DESCRIPTION, CATEGORY, BUSINESS');" onBlur="completartxt0(this.id,'DESCRIPTION, CATEGORY, BUSINESS'); opacar(this.id,0);" type="text" class="opaco" size="26" style="border: 0px solid #1e1977; width:200px;" value="<?php echo trim(@$_REQUEST["txtDesc"]);?>"  onKeyUp="activarSugerencias()" maxlength="35" autocomplete="off" onKeyDown="selSug(event)" />
                                      </div>
              	<div id="cnt_al_bq" style="border:solid 0px #B8DC7C; z-index:25">&nbsp;</div>
                                      </td>
                                      <td align="left" valign="top"><div>
                                          <input name="txtUbic" id="txtUbic" onFocus=" opacar(this.id,1); completartxt1(this.id,'STATE, CITY, ZIP'); " onBlur=" opacar(this.id,0); completartxt0(this.id,'STATE, CITY, ZIP');" type="text" class="opaco" size="26" style="border: 0px solid #1e1977; width:200px;" value="<?php echo @$_REQUEST["txtUbic"]?>" />
                                      </div></td>
                                    </tr>
                                  </table>
                              </form></td>
                            </tr>
                        </table></td>
                        <td width="390">&nbsp;</td>
                      </tr>
                  </table></td>
                </tr>
            </table></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
<div id="fondotransparente" style="display:none; position:fixed; z-index:1000;left:0px;   top: 0px;    height: 100%;
	min-height:1500px;	width:100%;	filter: alpha(opacity=30); opacity: .3;	background:#000;"></div>
<div id="pnlIniciarSesion" class="pnlIniciarSesion" style="display:none; position: fixed;
	z-index:3000;   left: 50%;    top: 50%;    height: 400px;    margin-top: -200px;   width: 450px;  margin-left: -225px;" >
<img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Loading....
</div>
<div id="pnlRegistro" class="pnlRegistro" style="display:none; position: fixed;
	z-index:3000;   left: 50%;    top: 50%;    height: 400px;    margin-top: -200px;   width: 450px;  margin-left: -225px;" >
<img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Loading....
</div>
<div id="cargando" style=" text-align:center; vertical-align:middle; border: thin 1px #000; background:#060;position:fixed;width:180px; height:32px;top:100%;left:0%;margin-top:-20px;margin-left:0px; display:none; z-index:3000;"></div>
<div id="pnlRegUsuario" class="pnlRegUsuario" style="display:none; position: fixed;
	z-index:3000;   left: 50%;    top: 50%;  height: 620px;     margin-top: -330px;   width: 986px;  margin-left: -493px;" >
<img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Loading....
</div>
<div id="pnlRegEmail" class="pnlRegEmail" style="display:none; position: fixed;
	z-index:3000;   left: 50%;    top: 50%;    height: 400px;    margin-top: -200px;   width: 450px;  margin-left: -225px;" >
<img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Loading....
</div>
<div id="pnlRegAsociado" class="pnlRegAsociado" style="display:none; position: fixed;
	z-index:3000;   left: 50%;    top: 50%;   height: 620px;     margin-top: -330px;   width: 986px;  margin-left: -493px;" >
<img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Loading....
</div>
<div id="pnlRegNegocio" class="pnlRegNegocio" style="display:none; position: fixed;
	z-index:3000;   left: 50%;    top: 50%;    height: 620px;     margin-top: -330px;   width: 986px;  margin-left: -493px;" >
<img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Loading....
</div>


<script type="text/javascript">
var textBsqO = '';
var opcAct = -1;
var ult_ing = -1;
frm=document.formBusqueda;
function activarSugerencias()
{
	var hora = new Date();
	minutos = hora.getMinutes();
	segundos = hora.getSeconds();
	ult_ing = minutos + segundos;
	
	if(textBsqO != xajax.$("txtDesc").value && 40 != k && 38 != k) {
		setTimeout("mostrarSugerencias()", 1000);//1=1000 segundo
	}	
	textBsqO = xajax.$("txtDesc").value;
}

function mostrarSugerencias()
{
	var hora = new Date();
	minutos = hora.getMinutes();
	segundos = hora.getSeconds();
	actual = minutos + segundos;	
	if(0 < (actual - ult_ing)) {
		xajax_listarOpcBusqueda(xajax.$("txtDesc").value, 'EN');
	}
}

function selSug(e){//abajo=40, arriba=38
	k = (document.all) ? window.event.keyCode : e.which;
	
	if(xajax.$('nListOpcBq')) {
		if(40 != k && 38 != k) {
			return;
		}		
		m = 4 > (xajax.$('nListOpcBq').value - 1) ? (xajax.$('nListOpcBq').value - 1) : 4;		
		if(0 <= opcAct && opcAct <= m) {
			//quitarClase(xajax.$('opcBsq_' + opcAct), 'f_bq_a');
		} else {
			xajax.$("txtDesc").value = textBsqO;
		}		
		if(40 == k) {
			if(4 == opcAct || opcAct >= (xajax.$('nListOpcBq').value - 1)) {
				opcAct = -1;
			} else {
				++opcAct;
			}
		} else if(38 == k) {
			if(0 < opcAct) {
				--opcAct;
			} else {
				opcAct = m;
			}
		}		
		if(opcAct >= 0) {
			agregarClase(xajax.$('opcBsq_' + opcAct), 'f_bq_a');
			xajax.$("txtDesc").value = getPropxId('opcBsq_' + opcAct, 'valopcbsq');
		}
	}
}

var accionbuscar;
function buscar1(tipo){
	if(tipo=="negocio"){
		document.getElementById('bt_b_negocio').src="<?php echo BASE_REL;?>img/bt_buscar_negocio_off_EN.png";
		document.getElementById('bt_b_cupon').src="<?php echo BASE_REL;?>img/bt_buscar_cupon_on_EN.png";
		accionbuscar='negocio';
	}
	if(tipo=="cupon"){
		document.getElementById('bt_b_negocio').src="<?php echo BASE_REL;?>img/bt_buscar_negocio_on_EN.png";
		document.getElementById('bt_b_cupon').src="<?php echo BASE_REL;?>img/bt_buscar_cupon_off_EN.png";
		accionbuscar='cupon';	
	}
}
function enviarAbuscar(){
	if(frm.txtDesc.value=='DESCRIPTION, CATEGORY, BUSINESS')
		frm.txtDesc.value='';
	if(frm.txtUbic.value=='STATE, CITY, ZIP')
		frm.txtUbic.value='';
	
	if(accionbuscar=="cupon"){
	frm.action='<?php echo BASE_REL ;?>list_cupon_EN.php';
	frm.tipobusqueda.value='cupon';
	}else{
	frm.action='<?php echo BASE_REL ;?>list_negocio_EN.php';
	frm.tipobusqueda.value='negocio';	
	}
	frm.submit();
	
}


window.onload =function(){
buscar1('<?php echo !empty($_REQUEST["tipobusqueda"])?$_REQUEST["tipobusqueda"]:'negocio';?>');
completartxt0('txtDesc','DESCRIPTION, CATEGORY, BUSINESS');
completartxt0('txtUbic','STATE, CITY, ZIP');
//completartxt0('txtEmail1','ENTER EMAIL');
//completartxt0('txtEmail2','ENTER EMAIL');
}
function formSesion(accion){
	if(accion=='si'){	
	document.getElementById('fondotransparente').style.display='block';
	document.getElementById('pnlIniciarSesion').style.display='block';
	xajax_iniciarSesion(null,null);
	}else{
	document.getElementById('fondotransparente').style.display='none';
	document.getElementById('pnlIniciarSesion').style.display='none';		
	}
}
function formRegistro(accion){
	if(accion=='si'){	
	document.getElementById('fondotransparente').style.display='block';
	document.getElementById('pnlRegistro').style.display='block';
	xajax_registrarse(null,null);
	}else{
	document.getElementById('fondotransparente').style.display='none';
	document.getElementById('pnlRegistro').style.display='none';		
	}
}

function recargarPagina()
{
	window.location.href = window.location.href;
}
function frmRegUsuario(accion){
	if(accion=='si'){	
	document.getElementById('fondotransparente').style.display='block';
	document.getElementById('pnlRegUsuario').style.display='block';
	xajax_regUsuario(null,null,null,null,null);
	//$nombre,$email,$clave,$rclave,$zip
	}else{
	document.getElementById('fondotransparente').style.display='none';
	document.getElementById('pnlRegUsuario').style.display='none';		
	}
}
function frmRegAsociado(accion){
	if(accion=='si'){	
	document.getElementById('fondotransparente').style.display='block';
	document.getElementById('pnlRegAsociado').style.display='block';
	xajax_regAsociado(null,null,null,null,null,null);
	//$nombre,$email,$clave,$rclave,$zip,$paypal
	}else{
	document.getElementById('fondotransparente').style.display='none';
	document.getElementById('pnlRegAsociado').style.display='none';		
	}
}
function frmRegNegocio(accion){
	if(accion=='si'){	
	document.getElementById('fondotransparente').style.display='block';
	document.getElementById('pnlRegNegocio').style.display='block';
	xajax_regNegocio(null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);
	//$nombre,$email,$clave,$rclave,$zip,$sexo,$negocio,$ndireccion,$nciudad,$nzip,$nest,$nfono,$nemail,$ncat,$nscat
	}else{
	document.getElementById('fondotransparente').style.display='none';
	document.getElementById('pnlRegNegocio').style.display='none';		
	}
}
function verPoliticas(){
window.open("http://<?php echo $_SERVER['HTTP_HOST'];?>/politicas_EN.php","","width=650,height=520");
}
function verTerminos(){
window.open("http://<?php echo $_SERVER['HTTP_HOST'];?>/terminos_EN.php","","width=650,height=520");
}


function registrarEmail(obj,accion){	
	if(accion=='si'){	
	var email=document.getElementById(obj).value;
	document.getElementById(obj).value='Enter Email';
	if(validarCorreo(email,5)==false||email=='Enter Email') {
		alert('Enter a valid email address');		
		document.getElementById(obj).focus(); 
		return false;
	}else{
	document.getElementById('fondotransparente').style.display='block';
	document.getElementById('pnlRegEmail').style.display='block';
	xajax_registrarEmail(email);
	}
	}else{
	document.getElementById('fondotransparente').style.display='none';
	document.getElementById('pnlRegEmail').style.display='none';	
	}
	
}
function siguienteDiv(div1,div2){
document.getElementById(div1).style.display='none';
document.getElementById(div2).style.display='block';
}

function loguear()
{
	var error = "";
	var n = 0;
	form = document.frmLogeo;	
	if(form.txtUsuario.value == "") {
		innerHtml('msjErrorLogeo','<span style="color:#F00">Enter your Email</span>');		
		form.txtUsuario.focus(); 
		form.txtClave.value = "";
		return false;
	}
	if(form.txtClave.value == ""){
		innerHtml('msjErrorLogeo','<span style="color:#F00">There have written your password</span>');		
		form.txtClave.focus();
		form.txtClave.value = "";
		return false;
	}	
	innerHtml('msjErrorLogeo','&nbsp;');
	xajax_loguear(form.txtUsuario.value, form.txtClave.value);
}

function guardarRegistro(frm_a,msj,div1,div2){
var error="";
var frm=null;
var codpromotor=0;
var nompromotor='MiReferrals';
if(frm_a=='RUsuario'){
	frm=document.frmRUsuario;
	codpromotor=frm.txtCodAzociadoU.value;
	nompromotor=frm.txtNomAzociadoU.value;
}else
	if(frm_a=='RAsociado'){
		frm=document.frmRAsociado;
		codpromotor=frm.txtCodAzociadoA.value;
		nompromotor=frm.txtNomAzociadoA.value;
	}
	else
		if(frm_a=='RNegocio'){ 
		frm=document.frmRNegocio;
		codpromotor=frm.txtCodAzociadoN.value;
		nompromotor=frm.txtNomAzociadoN.value;
		}
var nombre=frm.txtNombre.value;
var email=frm.txtEmail.value; 
var clave=frm.txtClave.value;
var rclave=frm.txtRClave.value;
var zip=frm.txtZip.value;
var sexos=frm.rsexo;
var sexo='';
var terminos=frm.chkTerminos;
for(i=0;i<sexos.length;i++){
        if(sexos[i].checked) sexo= sexos[i].value;
}
  	if(validarTexto(nombre,2) == false) {
		innerHtml(msj,'<span style="color:#F00">Enter your name correctly</span>');		
		frm.txtNombre.focus(); 
		return false;
	}
	if(validarCorreo(email,5)==false) {
		innerHtml(msj,'<span style="color:#F00">Enter a valid email address</span>');		
		frm.txtEmail.focus(); 
		return false;
	}
	// Poner mensajes diferentes "Clave ingresada no es igual a la otra" y  "Ingrese su clave correctamente. Minimo 6 caracters"
	if(validarTexto(clave,5) == false) {
		innerHtml(msj,'<span style="color:#F00">Enter your password correctly. Minimum 6 characters</span>');		
		frm.txtClave.focus(); 
		return false;
	}
	if(clave!=rclave){
		innerHtml(msj,'<span style="color:#F00">The password entered does not match the other</span>');		
		frm.txtClave.focus(); 
		return false;
	}	
	if(validarClave(clave,rclave,5) == false) {
		innerHtml(msj,'<span style="color:#F00">Enter your password correctly. Minimum 6 characters</span>');
    	frm.txtRClave.value='';	
		frm.txtClave.focus(); 
		return false;
	}
	if(validarTexto(zip,5) == false) {
		innerHtml(msj,'<span style="color:#F00">Enter a correct zip code</span>');
    	frm.txtZip.focus(); 
		return false;
	}
	if(validarTexto(sexo,1) == false) {
		innerHtml(msj,'<span style="color:#F00">Select your gender</span>');
    	return false;
	}
	if(frm_a=='RUsuario'||msj=='msjErrorRAsociado2'||msj=='msjErrorRNegocio2</span>')
	if(!terminos.checked){
		innerHtml(msj,'<span style="color:#F00">Must accept the terms and conditions</span>');
		return false;	
	}
	
	if(frm_a=='RUsuario'){
		innerHtml(msj,'');
		xajax_guardarUsuario(nombre,email,clave,rclave,zip,sexo,codpromotor);
	}
    else
	if(frm_a=='RAsociado'){
		if(msj=='msjErrorRAsociado1'){
			innerHtml('msjErrorRAsociado1','');
			siguienteDiv(div1,div2);
		}else{
			var paypal=frm.txtPaypal.value;
			/*if(validarCorreo(paypal,10) == false){
			innerHtml(msj,'Ingrese el correo de su cuenta de paypal');
			return false;
			}else{
			}*/
			innerHtml(msj,'');
			xajax_guardarAsociado(nombre,email,clave,rclave,zip,sexo,paypal,codpromotor);
		}
	}
	else
	if(frm_a=='RNegocio')
		if(msj=='msjErrorRNegocio1')
			siguienteDiv(div1,div2);
		else{
		var negocio=frm.txtNegocio.value;
		var ndireccion=frm.txtNDireccion.value;
		var nciudad=frm.txtNCiudad.value;
		var nzip=frm.txtNZip.value;
		var nestado=frm.txtNEstado.value;
		var nfono=frm.txtNFono.value;
		var nemail=frm.txtNEmail.value;
		var ncategoria=frm.txtNCategoria.value;
		var nsubcategoria=frm.txtNSubCategoria.value;		
		if(msj=='msjErrorRNegocio2'){
			if(validarTexto(negocio,3) == false){
			innerHtml(msj,'<span style="color:#F00">Enter the name of your business</span>');
			frm.txtNegocio.focus(); 
			return false;
			}
			if(validarTexto(ndireccion,5) == false){
			innerHtml(msj,'<span style="color:#F00">Enter your business address</span>');
			frm.txtNDireccion.focus(); 
			return false;
			}
			if(validarTexto(nciudad,3) == false){
			innerHtml(msj,'<span style="color:#F00">Enter the city where your business is</span>');
			frm.txtNCiudad.focus(); 
			return false;
			}
			if(validarTexto(nzip,5) == false){
			innerHtml(msj,'<span style="color:#F00">Enter the zip code of your business</span>');
			frm.txtNZip.focus(); 
			return false;
			}
			if(validarTexto(nestado,1) == false){
			innerHtml(msj,'<span style="color:#F00">Choose a State</span>');
			frm.txtNEstado.focus(); 
			return false;
			}
			if(validarTexto(nfono,5) == false){
			innerHtml(msj,'<span style="color:#F00">Enter the phone number of your business</span>');
			frm.txtNFono.focus(); 
			return false;
			}
			/*if(validarCorreo(nemail,10) == false){
			innerHtml(msj,'<span style="color:#F00">Enter your business email</span>');
			frm.txtNEmail.focus(); 
			return false;
			}*/
			if(validarTexto(ncategoria,1) == false){
			innerHtml(msj,'<span style="color:#F00">Select a Category</span>');
			frm.txtNCategoria.focus(); 
			return false;
			}
			if(validarTexto(nsubcategoria,1) == false){
			innerHtml(msj,'<span style="color:#F00">Select a subcategory</span>');
			frm.txtNSubCategoria.focus(); 
			return false;
			}
			innerHtml(msj,'');
			if(frm.guardar.value=="si"){
			xajax_guardarNegocio(nombre,email,clave,rclave,zip,sexo,negocio,ndireccion,nciudad,nzip,nestado,nfono,nemail,ncategoria,nsubcategoria,codpromotor,nompromotor);
			}
			else 
			siguienteDiv(div1,div2);
		}
	}
}
function lisAsociado(prefijo){
	var usu=window.open("http://<?php echo $_SERVER['HTTP_HOST'];?>/miembros/lisAsociado.php?idi=EN&Retorna="+prefijo,'Asociados','width=740,scrollbars=yes,location=no,height=600');	
}

function cambiarAsociado(codigo,nombre,prefijo){
if(prefijo=='MIE'){
document.getElementById('txtCodigoPomotor').value = codigo;
document.getElementById('pnlPromotor').innerHTML = nombre;	
}else{	
document.getElementById('txtCodAzociado'+prefijo).value = codigo;
document.getElementById('txtNomAzociado'+prefijo).value = nombre;
}
}
</script>