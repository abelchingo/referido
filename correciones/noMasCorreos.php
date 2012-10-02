<?php
@session_start();

require_once("librerias/xajax/xajax_core/xajax.inc.php");
$xajax = new xajax();
$xajax->configure('javascript URI','librerias/xajax/');
require_once('solicitudcuenta.php');
require_once('solicitudclave.php');
$xajax->processRequest();

require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');

Aplicacion::iniciar();
Aplicacion::clase('Core::datos::MiReferido::DatCategoria');
Aplicacion::clase('Core::datos::MiReferido::DatSubCategoria');
$oDatCategoria = new DatCategoria;
$oSubDatCategoria = new DatSubCategoria;

if(!in_array(@$_REQUEST['idi'], array('ES', 'EN'))) {
	$idi = 'ES';
} else {
	$idi = $_REQUEST['idi'];
}

$_REQUEST['idi'] = ('EN' == @$_REQUEST['idi']) ? $_REQUEST['idi'] : 'ES';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MI Referido.com - Mas que un directorio Billingue - Gana Premios - Imprime Cupones - Ahorra Dinero - Incrementa tus Ventas</title>

<script src="js/funciones.js" language="javascript"></script>

<link href="css/estilosPES.css" rel="stylesheet" type="text/css">
<?php $xajax->printJavascript( "librerias/xajax/" )?>
<style type="text/css">
img, div { behavior: url(js/iepngfix.htc) }
</style>
</head>

<body>
<div id="superior">
	<a id="logoSup" name="logoSup" href="index.php"></a>
    
</div>

<div id="contenMenu">
    <div id="menu">
    <table border="0" cellpadding="0" cellspacing="0" align="left" width="100%">
      <tr>
        <td width="154"><img src="css/img/pestBusqNeg_a.jpg"></td>
        <td width="154"></td>
        <td width="154"></td>
        <td align="right">
       <?php 
	     if(NegSesionMiembro::existeSesion('adMiembros.1.0')==0){;?>
        <a class="lnkAccion" href="miembros/index.php">Entrar</a>
        <a class="lnkAccion" href="javascript:void(null)" onClick="mostrarFormRegistro(1)">Reg&iacute;strate</a>
        <?php } else { ?>
        <a class="lnkAccion" href="miembros/index.php">Mi Cuenta</a>
        <a class="lnkAccion" href="miembros/salir.php">Salir</a>
        <?php }?>
        <a class="lnkAccion" href="buscarPregunta.php">Preguntas y Respuestas</a>
        </td>
      </tr>
    </table>
    <div style="clear:both;"></div>
    </div>
</div>

<div id="contenBusqueda">
    <div id="busqueda">
    
    <div id="idioma" style="position:absolute">
    	<table>
        <tr>
        	<td>Pa&iacute;s:</td>
            <td><img onClick="alert('Opción no habilitada por este momento')" src="img/us.gif" width="20" height="15"></td>
            <td><img onClick="alert('Opción no habilitada por este momento')" src="img/mx.gif" width="20" height="15"></td>
            <td><img onClick="alert('Opción no habilitada por este momento')" src="img/pe.gif" width="20" height="15"></td>
        </tr>
        <tr>
        	<td colspan="4">
            <a href="http://www.myreferred.com/">English version</a>
            </td>
        </tr>
        </table>
    </div>
    
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr>
        <td width="16"><img src="css/img/busq_izq_bg.jpg"></td>
        <td class="med" valign="top">
        <div style="padding:10px 5px 5px 38px;">
            <form name="formBusqueda" method="post" action="buscar.php">
            <input type="hidden" name="idi" value="ES">
            <table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td class="lbl">Que buscas?</td>
                <td>&nbsp;</td>
                <td class="lbl">En donde?</td>
                <td width="20" rowspan="2">&nbsp;</td>
                <td><input type="hidden" name="ordenPrior" value="1"></td>
                <td rowspan="2" class="lbl">
                <div style="padding-left:10px;">
                <!--<a href="javascript:alert('Opción no habilitada por este momento')">B&uacute;squeda avanzada</a>-->
                </div>
                </td>
            </tr>
            <tr>
              <td>
              <input type="text" class="txtBusq ayudaA" id="txtDesc" name="txtDesc" style="width:330px;" value="" onFocus="quitarClase(this, 'ayudaA')" onBlur="cambiarClase(this, 'ayudaA')">
              </td>
              <td>&nbsp;</td>
              <td>
              <input type="text" class="txtBusq ayudaB" id="txtUbic" name="txtUbic" style="width:330px;" value="" onFocus="quitarClase(this, 'ayudaB')" onBlur="cambiarClase(this, 'ayudaB')">
              </td>
              <td><input type="image" src="img/btnBuscar.png" onClick="this.form.submit()"></td>
              </tr>
            </table>
            </form>
        </div>
        </td>
        <td width="16"><img src="css/img/busq_der_bg.jpg"></td>
      </tr>
    </table>
    </div>
</div>

<div style="text-align:center; min-width:1003px;">
<div id="conten">
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
  	<td valign="top">
    <div class="seccion" style="width:330px;">
    	<div class="titulo">Busqueda por estado</div>
    	<div><img src="css/img/mapaEU.jpg" usemap="#Map"></div>
    </div>
    
    <div class="seccion" style="width:330px;">
    	<div class="titulo">Busqueda por categoria</div>
    	<div>
        	<div style="padding:5px 5px 5px 30px;">
            	<ul class="listaA">
                	<?php
				$i=0;
					$categorias = $oDatCategoria->getxIdioma($idi);
					foreach($categorias as $cat) {
						if('S' == $cat['en_inicio'])
						$i+=1;{
					?>
                    <li><a href="javascript:mostrardiv('<?php echo "div".$i;?>'); " onClick="javascript:setEstadoBusq2('<?php echo $cat['cat_nom'];?>');"><?php echo utf8_encode($cat['cat_nom'])?></a>
			<div style="padding:5px 2px 5px 25px; visibility:hidden; display:none;" id="<?php echo "div".$i;?>">
            	<ul class="listaA">
                	<?php
					$subcategorias = $oSubDatCategoria->listarxCategoria($cat['cat_cod']);
					foreach($subcategorias as $subcat) {?>
                    <li> <a href="#logoSup" onClick="javascript:setEstadoBusq2('<?php echo utf8_encode($subcat['scat_nom']);?>')"><?php echo utf8_encode($subcat['scat_nom'])?></a>
							
</li>
                    <?php }	?>
              	</ul>
        	</div>				
</li>
                    <?php
						}
					}
					?>
              	</ul>
        	</div>
        </div>
    </div>
    </td>
    <td width="7">&nbsp;</td>
    <td valign="top">
    	<div style="width:616px;">
        <?php
		@session_start();
		
		if(!empty($_SESSION['emailDA'])) {
			$email = $_SESSION['emailDA'];
			unset($_SESSION['emailDA']);
		?>
        	<div style="border:solid 1px #C90; background-color:#FFC; font-size:12px; padding:4px;">
            Su email <?php echo $email?> a sido desafiliado
            </div>
        <?php
		} else {
		?>
        <form name="formNoCorreo" action="desafiliarEmail.php" method="post" onSubmit="return validarFrmNoCorreo()">
        <table>
        <tr><th colspan="4"><h3>
        <?php if ($_REQUEST['idi']=='ES'){?>
        ¿Estás seguro de que deseas cerrar su cuenta con nosotros?</h3>
<div align="left">
Importante: para eliminar su cuenta de nuestro sitio web o a cualquier otro sitio relacionado a nuestros servicios y  en el que uses esta cuneta debera llenar los datos solicitados en el formulario..</div><br>
<div align="left">Nota: una vez eliminada no podrás tener acceso a dichos sitios gracias ...</div>
<?php }elseif ($_REQUEST['idi']=='EN'){?>
¿Are you sure you want to close your account with us?</h3>
<div align="left">
Important: To delete your account from our website or any other sites linked to our services and to use this ditch must fill out the information requested on the form ..</div><br>
<div align="left">Note: Once removed you can not access those sites using ...</div>
<?php }?> 
<br><hr> 


</th></tr>
        	<tr>
            	<td width="150"><?php if ($_REQUEST['idi']=='ES'){?>Ingrese su email<?php } elseif($_REQUEST['idi']=='EN'){?>Enter your Email
<?php }?></td>
            	<td width="2">:</td>
            	<td colspan="2"><input type="text" name="txtEmail" style="width:250px;" maxlength="150"></td>
</tr>
            <tr>
            	<td><?php if ($_REQUEST['idi']=='ES'){?> Ingrese caracteres mostrados en la imagen Solo letras<?php } elseif($_REQUEST['idi']=='EN'){ ?> Enter characters shown in the image <?php } ?></td>
            	<td>:</td>
            	<td width="98"><input type="text" name="txtCodigo" style="width:100px;" maxlength="5"></td>
            	<td width="150">
                <?php
				$serie = "";
				$codigo="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
				for($i=0;$i<5;$i++) {
					$serie=$serie.$codigo{rand(1,25)}." ";
				}
				?>
                <input type="hidden" name="hdCodigo" value="<?php echo str_replace(' ', '', $serie)?>">
                <img src="imagenseg.php?serie=<?php echo $serie?>">                </td>
            </tr>
            <tr>
            	<td colspan="4" align="center"><input type="submit" value="<?php if ($_REQUEST['idi']=='ES'){?> desafiliarse <?php } elseif($_REQUEST['idi']=='EN'){ ?>unsubscribed<?php } ?>"></td>
</tr>
        </table>
        </form>
        <?php
		}
		?>
        </div>
    </td>
  </tr>
</table>
</div>
</div>

<div id="pie">
<a href="">T&eacute;rminos de uso </a> | <a href="buscarPregunta.php"> Preguntas y Respuestas </a> |<a href="contactanos.php"> Cont&aacute;ctenos</a> | <a href="">Pol&iacute;ticas de privacidad</a>
</div>
<div id="pnlMascara" style="display:none;"></div>
<div id="pnlContenMascara" style="display:none;"></div>
<map name="Map">
<area shape="poly" coords="58,28,61,8,38,3,37,10,29,6,25,13,27,11,30,19,32,23" href="javascript:setEstadoBusq('WA')"alt="Washington">
<area shape="poly" coords="25,19,30,24,59,31,52,56,16,47,16,39" href="javascript:setEstadoBusq('OR')"alt="Oregon">
<area shape="poly" coords="15,45,36,52,31,71,54,104,56,110,50,122,38,119,31,109,20,99,15,79,12,60" href="javascript:setEstadoBusq('CA')" alt="California">
<area shape="poly" coords="59,27,63,7,68,8,67,19,72,27,70,30,74,40,77,43,86,44,83,62,52,54" href="javascript:setEstadoBusq('ID')"alt="">
<area shape="poly" coords="37,54,67,60,62,94,54,105,32,72" href="javascript:setEstadoBusq('NV')"alt="NV">
<area shape="poly" coords="68,61,84,63,85,70,93,72,89,97,85,98,62,95" href="javascript:setEstadoBusq('UT')"alt="Utah">
<area shape="poly" coords="61,96,87,100,85,122,85,136,72,137,59,131,51,123,57,114,54,107" href="javascript:setEstadoBusq('AZ')"alt="Arizona">
<area shape="poly" coords="70,9,123,16,123,38,122,45,108,44,97,42,88,41,78,42,71,31,71,24,68,19,68,13" href="javascript:setEstadoBusq('MT')" alt="Montana">
<area shape="poly" coords="88,41,122,47,120,73,95,72,86,69,85,62" href="javascript:setEstadoBusq('WY')"alt="Wyoming">
<area shape="poly" coords="94,72,129,77,129,102,110,100,97,99,90,98" href="javascript:setEstadoBusq('CO')"alt="Colorado">
<area shape="poly" coords="89,100" href="javascript:setEstadoBusq('')"alt="">
<area shape="poly" coords="120,139,87,141,88,99,123,104" href="javascript:setEstadoBusq('NM')"alt="Minnesota">
<area shape="poly" coords="125,18,157,19,159,27,161,37,125,38" href="javascript:setEstadoBusq('ND')"alt="North Dakota">
<area shape="poly" coords="125,38,124,46,123,57,145,59,161,63,161,40" href="javascript:setEstadoBusq('SD')"alt="South Dakota">
<area shape="poly" coords="122,59,159,64,168,83,131,81,131,76,121,73" href="javascript:setEstadoBusq('NE')"alt="Nebraska">
<area shape="poly" coords="131,83,167,84,171,90,172,104,144,103,130,102" href="javascript:setEstadoBusq('KS')"alt="Kansas">
<area shape="poly" coords="124,104,170,105,172,127,141,122,139,108" href="javascript:setEstadoBusq('OK')"alt="Oklahoma">
<area shape="poly" coords="124,107,138,109,140,121,148,125,158,127,168,127,173,130,173,140,175,144,176,157,169,160,162,164,155,170,153,180,154,183,147,182,139,170,134,159,128,155,121,155,115,158,109,151,103,142,100,141,119,140,122,138,122,124" href="javascript:setEstadoBusq('TX')" alt="Texas">
<area shape="poly" coords="158,19,181,25,190,25,180,35,178,42,179,48,186,56,161,57" href="javascript:setEstadoBusq('NM')"alt="Minnesota">
<area shape="poly" coords="162,58,186,57,193,65,192,72,190,79,167,77,162,65" href="javascript:setEstadoBusq('IA')"alt="Iowa">
<area shape="poly" coords="168,79,189,80,197,93,203,102,200,110,185,107,172,107,173,90,168,84" href="javascript:setEstadoBusq('MO')"alt="Missouri">
<area shape="poly" coords="173,108,197,111,193,125,192,129,194,134,174,134,174,128,172,127" href="javascript:setEstadoBusq('AR')"alt="Arkansas">
<area shape="poly" coords="175,137,193,137,192,144,198,149,201,154,206,154,200,158,191,157,185,157,177,156" href="javascript:setEstadoBusq('LA')"alt="Louisiana">
<area shape="poly" coords="184,34,181,44,186,54,191,61,193,64,207,63,206,57,208,47,205,49,206,43,202,39,194,35" href="javascript:setEstadoBusq('WI')"alt="Wisconsin">
<area shape="poly" coords="194,65,192,78,192,82,204,102,210,97,212,90,210,78,209,70,207,64"href="javascript:setEstadoBusq('IL')"alt="Illinois">
<area shape="poly" coords="198,119,210,118,209,127,210,141,212,149,200,152,196,145,193,143,195,134,193,128" href="javascript:setEstadoBusq('MS')"alt="Mississippi">
<area shape="poly" coords="215,66,215,55,215,45,220,45,222,39,228,44,227,54,231,51,235,56,233,63,223,67" href="javascript:setEstadoBusq('MI')"alt="Michigan">
<area shape="poly" coords="210,69,222,68,226,85,221,92,211,95,210,79" href="javascript:setEstadoBusq('IN')"alt="Indiana">
<area shape="poly" coords="225,68,232,66,235,68,240,67,245,63,248,74,244,81,240,88,233,88,228,86,225,75" href="javascript:setEstadoBusq('OH')"alt="OH">
<area shape="poly" coords="204,105,211,96,219,95,227,87,239,90,242,97,238,101" href="javascript:setEstadoBusq('KY')"alt="Kentucky">
<area shape="poly" coords="241,90,244,82,248,79,255,77,260,79,253,90,247,95,243,95" href="javascript:setEstadoBusq('WV')"alt="Wyoming">
<area shape="poly" coords="199,117,202,107,243,102,234,110,229,114,225,115" href="javascript:setEstadoBusq('TN')"alt="Tennessee">
<area shape="poly" coords="212,118,225,118,231,143,217,144,217,149,212,149,211,140" href="javascript:setEstadoBusq('AL')"alt="Alabama">
<area shape="poly" coords="226,117,238,116,255,132,253,144,232,143" href="javascript:setEstadoBusq('GA')"alt="Georgia">
<area shape="poly" coords="220,149,220,145,254,144,258,153,266,165,268,176,266,181,255,172,250,162,246,155,244,152" href="javascript:setEstadoBusq('FL')"alt="FL">
<area shape="poly" coords="240,115,251,113,267,118,260,127,255,131" href="javascript:setEstadoBusq('SC')"alt="South Carolina">
<area shape="poly" coords="232,114,245,102,277,98,280,102,274,109,274,110,267,117,259,112" href="javascript:setEstadoBusq('NC')"alt="North Carolina">
<area shape="poly" coords="242,101,245,97,251,95,255,88,261,81,266,79,270,85,274,86,275,90,274,94,278,94,279,99,263,98,253,100" href="javascript:setEstadoBusq('VA')"alt="VA">
<area shape="poly" coords="247,61,262,57,274,57,278,60,275,65,277,70,267,73,256,75,248,75,247,67" href="javascript:setEstadoBusq('PN')"alt="Pennsylvania">
<area shape="poly" coords="251,59,253,51,262,50,266,44,269,37,278,33,280,42,282,49,283,57,283,62,276,59,266,57" href="javascript:setEstadoBusq('NY')"alt="New York">
<area shape="rect" coords="251,15,268,25" href="javascript:setEstadoBusq('VT')"alt="VT">
<area shape="poly" coords="290,29,293,45,298,36,307,29,308,24,303,17,300,12,294,12" href="javascript:setEstadoBusq('ME')"alt="Maine">
<area shape="rect" coords="272,6,289,17" href="javascript:setEstadoBusq('NH')"alt="New Hampshire">
<area shape="rect" coords="291,72,308,83" href="javascript:setEstadoBusq('RI')"alt="Rhode Island">
<area shape="rect" coords="291,117,309,129" href="javascript:setEstadoBusq('DE')"alt="Delaware">
<area shape="rect" coords="292,129,309,140" href="javascript:setEstadoBusq('MD')"alt="Maryland">

<area shape="rect" coords="291,83,308,93" href="javascript:setEstadoBusq('MA')"alt="Massachusetts">
<area shape="rect" coords="291,105,309,116" href="javascript:setEstadoBusq('NJ')"alt="New Jersey">
<area shape="rect" coords="291,93,309,104" href="javascript:setEstadoBusq('CT')"alt=" Connecticut ">
<area shape="rect" coords="19,144,38,155" href="javascript:setEstadoBusq('HI')"alt="Hawaii">
<area shape="poly" coords="64,166,57,162,62,159,65,161,65,157,60,153,66,148,79,147,88,148,91,157,94,168,96,175,101,178,95,179,85,178,78,179,76,187,70,192,62,196,68,186,64,183,60,179,58,174,59,170,63,171,67,169,65,166" href="javascript:setEstadoBusq('AK')"alt="Alaska">

</map>
<script language="javascript">
function mostrarMascara()
{
	displayTag('pnlMascara', true);
	displayTag('pnlContenMascara', true);
	xajax.$('pnlMascara').style.height = screen.availHeight + 'px';
}

function quitarMascara()
{
	innerHtml('pnlContenMascara', '');
	displayTag('pnlMascara', false);
	displayTag('pnlContenMascara', false);
}

function cancelarRegistro()
{
	quitarMascara();	
}

function mostrarFormRegistro(x)
{
	mostrarMascara();
	if(x==1)xajax_frmsolcitudcuenta();
	if(x==2)xajax_frmsolcitudclave();
}

function validarfrmRegistro(x){
	if(x==1)form=document.frmRegistrase;
	if(x==2)form=document.frmRecuperaClave;
	
	var error="";
	var n=0;
	if(!validarEmail(form.email.value))
	{error="\n->El Email es Incorrecto"; 
		if(n==0) n=1;
	}		
	if(form.seguridad.value.toLowerCase()!=form.codseg.value.toLowerCase()){
	error+="\n->Codigo Seguridad Incorrecto ";
	if(n==0)n=2;
	}
	if(error!=""){
		switch(n){
	 	case 1 :
		 form.email.focus();
		 break;
	 	case 2 :
		 form.seguridad.focus();
		  break;
	}
	alert("A Surguido los siguientes Errores\n============================\n"+error)
	xajax_cargarcodseg();
	return;
	}
	if(x==1)xajax_procesarfrmsolcitudcuenta(xajax.getFormValues("frmRegistrase"));
	if(x==2)xajax_procesarfrmrecuperaclave(xajax.getFormValues("frmRecuperaClave"));
}
function frmsesion()
{
	var error="";
	var n=0;
	form=document.frmLogeo;
	if(form.txtUsuario.value==""){
		alert("necesita escribir su Usuario/correo");
		form.txtUsuario.focus(); 
		return false;
	}
	if(form.txtClave.value==""){
		alert("no ha escrito una clave");
		form.txtClave.focus(); return false;
	}
	xajax_procesarfrmsesion(xajax.getFormValues("frmLogeo"));
	}
	
	function newpagina($pag){
		
		window.location.href=$pag;
		
		}
function quitarMascara()
{
	innerHtml('pnlContenMascara', '');
	displayTag('pnlMascara', false);
	displayTag('pnlContenMascara', false);
}
function setEstadoBusq(estado)
{
	document.formBusqueda.txtUbic.value = estado;
	quitarClase(document.getElementById('txtUbic'), 'ayudaB');
}
function setEstadoBusq2(estado)
{
	document.formBusqueda.txtDesc.value = estado;
	quitarClase(document.getElementById('txtDesc'), 'ayudaA');
}

var divscat="";
function mostrardiv(obj)
{
	if (divscat!=""){
	document.getElementById(divscat).style.visibility="hidden";
	document.getElementById(divscat).style.display="none";	
	}
	if(divscat==obj){
	document.getElementById(divscat).style.visibility="hidden";
	document.getElementById(divscat).style.display="none";
	divscat="";
		}
	else{
	document.getElementById(obj).style.visibility="visible";
	document.getElementById(obj).style.display="block";
	divscat=obj;}
	
}

var formNoCorreo = document.formNoCorreo;
function validarFrmNoCorreo()
{
	if('' == formNoCorreo.txtEmail.value) {
		alert('Por favor ingrese su email');
		formNoCorreo.txtEmail.focus();
		return false;
	} else if(formNoCorreo.hdCodigo.value != formNoCorreo.txtCodigo.value) {
		alert('Codigo incorrecto');
		formNoCorreo.txtCodigo.focus();
		return false;
	}
	
	if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(formNoCorreo.txtEmail.value)) {
		formNoCorreo.txtEmail.focus();
		return true;
	} else {
		alert('Email no valido');
		return false;
	}
}
</script>
</body>
</html>
