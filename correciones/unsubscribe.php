<?php
@session_start();
require_once(dirname(__FILE__).'/librerias/xajax/xajax_core/xajax.inc.php');
$xajax = new xajax();
$xajax->configure('javascript URI','librerias/xajax/');
require_once(dirname(__FILE__).'/ajax/funcgenerales.php');
require_once('xajax/xlogeo.php');
require_once('xajax/xregusuario.php');
require_once('xajax/xregasociado.php');
require_once('xajax/xregnegocio.php');
require_once('xajax/xregEmail.php');
require_once('xajax/xsubcategoria.php');
$xajax->processRequest();
require_once('xajax/validaciones.php');
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::MiReferido::DatCategoria');
Aplicacion::clase('Core::datos::MiReferido::DatSubCategoria');
Aplicacion::clase('Core::datos::MiReferido::DatCupon');
$oDatCategoria = new DatCategoria;
$oSubDatCategoria = new DatSubCategoria;
$oCupon = new DatCupon;
$idioma=!empty($_REQUEST["idi"])?$_REQUEST["idi"]:'ES';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Mi Referido.com Busca Comparte y Gana – gana premios y descuentos – Recibe cupones – registra negocios y gana dinero </title>
<meta name="Description" content="Somos la mejor empresa de mercadeo en línea. Mireferido.com es un producto nuevo e innovador que ayudara a encontrar los mejores descuentos en cupones, a tener un trabajo a tiempo parcial o completo ganando comisiones por referenciar negocios y a promover tu negocio en las mejores plataformas de sociales como FACEBOOK, TWITTER, YOU TUBE y demás. BUSCA COMPARTE Y GANA" ><meta name="keywords" content="mireferido, mi referido, mi referido.com, referido, cupones en linea,  cupones online, cupones de descuento, descuentos en cupones, directorio de negocios, directorio de negocio, directorio de negocios online, directorio de negocios en linea, publicidad para negocios, marketing para negocios, publicidad para negocios, publicidad en línea, asociados independientes, asociados, gana comisiones por referencia, gana dinero por referencia,  gana premios por referencia , facebook, twitter, youtube, busca comparte y gana."><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4247000-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<link href="css/estilosPEN.css" rel="stylesheet" type="text/css">
<?php $xajax->printJavascript( "librerias/xajax/" )?>
<script type="text/javascript" src="js/funciones.js"></script>
<script type="text/javascript">
  function cargandofuncion(){
     document.getElementById('cargando').style.display='block';
      document.getElementById('cargando').innerHTML='<img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Cargando....';
   }
   function funcioncargada(){
	  
      document.getElementById('cargando').innerHTML='';
      document.getElementById('cargando').style.display='none';
   }
   xajax.callback.global.onResponseDelay = cargandofuncion;
   xajax.callback.global.onComplete = funcioncargada;
</script>


</head>

<body>
<div align="center">
<a name="arriba" style="border:0; height:0px;"></a>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%" align="center" valign="top"><table width="966" border="0" cellpadding="0" cellspacing="0">
        
        <tr>
          <td width="970" align="left" valign="top"><div align="center">
		  <?php
		  if($idioma=='ES')
		  include_once('cabecera.php');
		  else
		  include_once('cabecera_EN.php');
		  ?>
		  
		  </div></td>
        </tr>
        <tr>
          <td align="center"><br />
          <table bgcolor="#FFFFFF" >
          <tr><td>
        
        <?php
		@session_start();
		
		if(!empty($_SESSION['emailDA'])) {
			$email = $_SESSION['emailDA'];
			unset($_SESSION['emailDA']);
		?>
        	<div style="border:solid 1px #C90; background-color:#FFC; padding:4px;">
           <?php if($idioma=='ES') {?>
           Su email <?php echo $email?> a sido cancelada la suscripcion
            <?php }else { ?> 
           Your email  <?php echo $email?> has been unsubscribed
            <?php } ?>
            </div>
        <?php
		} else {
		?>
        <form name="formNoCorreo" action="desafiliarEmail.php" method="post" onSubmit="return validarFrmNoCorreo()">
        <input type="hidden" name="idi" id="idi" value="<?php echo $_REQUEST['idi'];?>" />
        <table width="500" border="2" align="center" cellpadding="0" cellspacing="0" bordercolor="#66CCFF">
        <tr><th colspan="4" bgcolor="#66CCFF">
        <?php if ($_REQUEST['idi']=='ES'){?>
        <h2>&iquest;Seguro de que desea cancelar su suscripci&oacute;n ?</h2>
Dejará de recibir todos los correos electrónicos de promoción de  MrReferrals.com MiReferido.com.
<?php }elseif ($_REQUEST['idi']=='EN'){?>
<h2>Are you sure you want to unsubscribe ?</h2>
You will stop receiving all  MiReferido.com & MrReferrals.com promotional emails.
<?php }?> 
<hr> 
</th></tr>
<tr><td><table>
        	
            <tr>
            	<td width="333"><?php if ($_REQUEST['idi']=='ES'){?>Ingrese su email<?php } elseif($_REQUEST['idi']=='EN'){?>Enter your Email
<?php }?></td>
            	<td width="10">:</td>
            	<td colspan="2"><input type="text" name="txtEmail" style="width:250px;" maxlength="150"></td>
</tr>
            <tr>
            	<td><?php if ($_REQUEST['idi']=='ES'){?> Ingrese caracteres mostrados en la imagen Solo letras<?php } elseif($_REQUEST['idi']=='EN'){ ?> Enter characters shown in the image <?php } ?></td>
            	<td>:</td>
            	<td width="105"><input type="text" name="txtCodigo" style="width:100px;" maxlength="5"></td>
            	<td width="373">
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
            </table>
            </td></tr>
            <tr>
            	<td colspan="4" align="center" bgcolor="#66CCFF"><input type="submit" value="<?php if ($_REQUEST['idi']=='ES'){?> Si, cancelar mi subscripcion <?php } elseif($_REQUEST['idi']=='EN'){ ?>Yes, Unsubscribe Me <?php } ?>">
                &nbsp;<input type="button" onclick="window.location.href='<?php  echo $idioma=='ES'?'inicio.php':'inicio_EN.php';?>';" value="<?php if ($_REQUEST['idi']=='ES'){?> No, Mantener suscripcion <?php } elseif($_REQUEST['idi']=='EN'){ ?> No, I Like Getting Email <?php } ?>">
                
                </td>
</tr>
        </table>
        </form>
        <?php
		}
		?>
      
		</td></tr></table><br />
        
        </td>
        </tr>
        
      </table></td>
    </tr>
    <tr>
      <td align="center" valign="top">
	  
	  <?php	 
	   if($idioma=='ES')
	  include_once("pie.php");
	  else
	  include_once("pie_EN.php");
	  ?>	  </td>
    </tr>
  </table>
</div>
<script  language="javascript">
function setEstadoBusq(estado)
{
	document.formBusqueda.txtUbic.value = estado;
	//quitarClase(document.getElementById('txtUbic'), 'ayudaB');
}
function setEstadoBusq2(estado)
{
	document.formBusqueda.txtDesc.value = estado+"*";
	//quitarClase(document.getElementById('txtDesc'), 'ayudaA');
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
	}else{
	document.getElementById(obj).style.visibility="visible";
	document.getElementById(obj).style.display="block";
	divscat=obj;
	}
	
}
var formNoCorreo = document.formNoCorreo;
function validarFrmNoCorreo()
{
	if('' == formNoCorreo.txtEmail.value) {
		<?php if($idioma=='ES'){?>
		alert('Por favor ingrese su email');
		<?php } else { ?>
		alert('Please enter your email');
		<?php } ?>
		formNoCorreo.txtEmail.focus();
		return false;
	} else if(formNoCorreo.hdCodigo.value.toUpperCase() != formNoCorreo.txtCodigo.value.toUpperCase()) {
		<?php if($idioma=='ES'){?>
		alert('Codigo ingresado es incorrecto');
		<?php } else { ?>
		alert('Code entered is incorrect');
		<?php } ?>
		formNoCorreo.txtCodigo.focus();
		return false;
	}
	
	if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(formNoCorreo.txtEmail.value)) {
		formNoCorreo.txtEmail.focus();
		return true;
	} else {
		<?php if($idioma=='ES'){?>
		alert('Email no valido');
		<?php } else { ?>
		alert('Email not valid');
		<?php } ?>
		return false;
	}
}
</script>
</body>
</html>
