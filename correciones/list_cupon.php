<?php
@session_start();
require_once(dirname(__FILE__).'/librerias/xajax/xajax_core/xajax.inc.php');
$xajax = new xajax();
$xajax->configure('javascript URI','librerias/xajax/');
require_once(dirname(__FILE__).'/ajax/funcgenerales.php');
require_once('xajax/xlogeo.php');
require_once('xajax/xcupones.php');
require_once('xajax/xregusuario.php');
require_once('xajax/xregasociado.php');
require_once('xajax/xregnegocio.php');
require_once('xajax/xsubcategoria.php');
require_once('xajax/xregEmail.php');
$xajax->processRequest();
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::MiReferido::DatCupon');
$oCupon = new DatCupon;
$idioma="ES";
$order=!empty($_REQUEST["order"])?$_REQUEST["order"]:'';
$formaorder=!empty($_REQUEST["formaorder"])?$_REQUEST["formaorder"]:'';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mi Referido.com Busca Comparte y Gana � gana premios y descuentos � Recibe cupones � registra negocios y gana dinero </title>
<meta name="Description" content="Somos la mejor empresa de mercadeo en l�nea. Mireferido.com es un producto nuevo e innovador que ayudara a encontrar los mejores descuentos en cupones, a tener un trabajo a tiempo parcial o completo ganando comisiones por referenciar negocios y a promover tu negocio en las mejores plataformas de sociales como FACEBOOK, TWITTER, YOU TUBE y dem�s. BUSCA COMPARTE Y GANA" ><meta name="keywords" content="mireferido, mi referido, mi referido.com, referido, cupones en linea,  cupones online, cupones de descuento, descuentos en cupones, directorio de negocios, directorio de negocio, directorio de negocios online, directorio de negocios en linea, publicidad para negocios, marketing para negocios, publicidad para negocios, publicidad en l�nea, asociados independientes, asociados, gana comisiones por referencia, gana dinero por referencia,  gana premios por referencia , facebook, twitter, youtube, busca comparte y gana."><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4247000-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<link href="css/estilosPES.css" rel="stylesheet" type="text/css">
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
function vercuponp(QFORM,NFORM){
							win = window.open('','myWin1','width=640, height=400'); 
							document.forms[QFORM].target='myWin1';
							document.forms[QFORM].submit();
					  }   
</script>
</head>
<body>
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%" align="center" valign="top"><table width="953" border="0" cellpadding="0" cellspacing="0">
        
        <tr>
          <td width="1028" align="left" valign="top"><div align="center">
		  <?php
		  include('cabecera.php');
		  ?>
		  
		  </div></td>
        </tr>
        <tr>
          <td><table width="967" border="0" align="center" cellpadding="0" cellspacing="5">
              <tr>
                <td width="186" align="left" valign="top">
                <?php 
					$_conban_=10;
					require_once("_banners_.php");
					?>
                    <div style="background-color:#FFF">
                    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-href="http://www.facebook.com/pages/Mi-Referidocom/118564078232642" data-width="180" data-show-faces="true" data-stream="true" data-header="true"></div> 
</div>
                </td>
                <td width="766" align="left" valign="top">
                <div id="pnlListadoCupon">
                <img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/img/cargando.gif">Cargando....
                <script language="javascript">
                xajax_buscarCupones('<?php echo @$_REQUEST["txtDesc"]?>','<?php echo @$_REQUEST["txtUbic"]?>','<?php echo $idioma ?>','<?php echo @$_REQUEST["neg"]?>',0);
                </script>
                </div>
                </td>
                
          </table></td>
        </tr>
        
      </table></td>
    </tr>
    <tr>
      <td align="center" valign="top">
	  
	  <?php
	  
	  include("pie.php");
	  ?>	  </td>
    </tr>
  </table>
</div>


<map name="Map" id="Map"><area shape="rect" coords="4,6,62,27" href="#" /><area shape="rect" coords="72,8,132,26" href="#" /><area shape="rect" coords="143,8,175,26" href="#" /></map></body>
</html>
