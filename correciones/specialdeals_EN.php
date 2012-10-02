<?php
@session_start();
require_once(dirname(__FILE__).'/librerias/xajax/xajax_core/xajax.inc.php');
$xajax = new xajax();
$xajax->configure('javascript URI','librerias/xajax/');
require_once(dirname(__FILE__).'/ajax/funcgenerales.php');
require_once('xajax/xlogeo_EN.php');
require_once('xajax/xregusuario_EN.php');
require_once('xajax/xregasociado_EN.php');
require_once('xajax/xregnegocio_EN.php');
require_once('xajax/xregEmail_EN.php');
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
$idioma="EN";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>MR Referrals.com Search Share and Win – Win prizes and discounts – Receive coupons – receive commissions for every business that you register</title>
<meta name="description" content="We are the best online marketing company. Mireferido.com is a new and innovative products to help you find the best discount coupons, to have a part-time work or full reference earning commissions for business and promote your business in the best social platforms like Facebook, Twitter, YouTube and others. SEARCH SHARE  AND WIN">
<meta name="keywords" content="mrreferrals, mrreferrals, mrreferrals.com, referrals, print coupons, buy coupons, online coupons, discount coupons, best discount coupons, business directory, business directory online, online  business directory, advertising for business, business marketing, business advertising, online advertising, independent associated, associates, earn referral fees, earn money by reference, win prizes by reference, facebook, twitter, youtube, search shares and win. "><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4247000-3']);
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
      document.getElementById('cargando').innerHTML='<img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Loading....';
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
		  include('cabecera_EN.php');
		  ?>
		  
		  </div></td>
        </tr>
        <tr>
          <td><div align="center">
            <table width="961" border="0" cellspacing="10" cellpadding="0">
              <tr>
                <td width="588" bgcolor="#FFFFFF"><table width="961" border="0" cellspacing="10" cellpadding="0">
                  <tr>
                    <td width="921">
                    <?php 
					$_conbans_=20;
					require_once("_bannerspecials_.php");
					?>
                    
                    </td>
                  </tr>
                </table></td>
              </tr>
            </table>
          </div></td>
        </tr>
        
      </table></td>
    </tr>
    <tr>
      <td align="center" valign="top">
	  
	  <?php	  
	  include("pie_EN.php");
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
