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
$idioma="ES";
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
		  include_once('cabecera.php');
		  ?>
		  
		  </div></td>
        </tr>
        <tr>
          <td><div align="center">
            <table width="296" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="148">&nbsp;</td>
                <td width="148">&nbsp;</td>
              </tr>
              <tr>
                <td><script language="JavaScript" type="text/javascript">
var ci_cap_scriptId = "10112";
var ci_cap_bid = "1222250001";
var ci_cap_format = "718x940";
var ci_cap_bannerType = "3";
var ci_cap_channel = "Fullpage";
            </script>
                    <script language="JavaScript" type="text/javascript" src="http://bc.coupons.com/"></script>                </td>
              </tr>
            </table>
          </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        
      </table></td>
    </tr>
    <tr>
      <td align="center" valign="top">
	  
	  <?php	  
	  include_once("pie.php");
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
</script>
</body>
</html>
