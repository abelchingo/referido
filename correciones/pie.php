<?php
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::Sistema::DatBannerinferior');
$oDatBannerinferior = new DatBannerinferior;
$idioma="ES";
?>


<head>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jqueryTooltip.js" type="text/javascript"></script>

<style>
/* Tooltips */
#tooltip {
	position: absolute;
	padding: 4px;
	color: #FFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size: 12px;
	display: none;
	text-align: left;
	background-color: #003399;
	opacity: 0.95;
	-moz-opacity: 0.95;
	filter: alpha(opacity=100);
}
 
.tooltipTitle {
	font-size: 14px;
	font-weight: bold;
	color:#A2DE29;
}

</style>

</head>



<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%" height="157" align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0">
        
        <tr>
          <td><table width="152" border="0" cellspacing="5" cellpadding="0">
            <tr>
              <td><?php 
			  $ban=$oDatBannerinferior->listarAleatorio($idioma);			  
			 if(!empty($ban)){
			  ?>
              
              <a href="<?php echo $ban["ban_enlace"];?>" ><img border="0" src="<?php echo BASE_REL;?>media/bannerinterior/<?php echo $ban["ban_imagen"];?>" width="961" height="147"></a>
               <?php }?>
              </td>
            </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="105" align="center" valign="top" bgcolor="#00104A"><table width="967" height="239" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="894" valign="top"><table width="965" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="687" align="left" valign="top" background="<?php echo BASE_REL;?>img/pie_opciones_izquierda.jpg"><table width="686" height="214" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="164" align="left" valign="top"><table width="191" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="204">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="19"><table width="70" border="0" cellspacing="3" cellpadding="0">
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                        </table></td>
                      </tr>
					  

					  <script language="javascript">
					  function enviarcomentario(){
							window.open("contactus.php" , "Contáctanos" , "toolbar=no,Location=no,scrollbars=No,status=yes,width=427,height=570") ;					  
					  }
					  </script>
					  
					  
                      <tr>
                        <td><div align="left"><a href="#" class="tooltip" title="[!]&iquest;Quienes Somos? [/!]
Somos una p&aacute;gina web vers&aacute;til y din&aacute;mica donde encontraras productos y servicios con promociones diarias, puedes &lt;br&gt;
ganar premios y regalos por referirnos con tu red de amigos, y si  lo deseas puedes registrarte como asociado &lt;br&gt;
independiente y ganar comisiones por registrar negocios y como due&ntilde;o de negocio podr&aacute;s utilizar  los modelos de &lt;br&gt;
mercadeo m&aacute;s efectivos hoy en d&iacute;a. MiReferido.com Busca, Comparte y Gana!"><img src="<?php echo BASE_REL;?>img/quienes_somos.jpg" width="190" height="39" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td><div align="left"><a href="#"  class="tooltip" title="[!]&iquest;Que Hacemos? [/!] 
&bull; Exposici&oacute;n y promoci&oacute;n diaria de tu negocio &amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp &bull; Incrementa tu marca y mercadeo &lt;br&gt;
&bull; Modelo efectivo, r&aacute;pido e innovador &amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp &bull; Experimenta el crecimiento y resultados de tu negocio &lt;br&gt;
&bull; Aplicaci&oacute;n del mercadeo social &amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp &bull; Llegamos a tu p&uacute;blico objetivo &lt;br&gt;
&bull; Plataforma en dos idiomas, espa&ntilde;ol e ingles &amp;nbsp&amp;nbsp &bull; Enlace con promoci&oacute;n agresiva y efectiva"><img src="<?php echo BASE_REL;?>img/que_hacemos.jpg" width="190" height="37" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td><div align="left"><a href="#" onclick="enviarcomentario(); return false" class="tooltip" title="[!]Contáctanos [/!]
						<B>Dirección:</B> 10900 NE 8th Street Suite 1000 <br>
                        &amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp Bellevue, WA 98004 <br>
						<B>Email:</B> &amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp info@mireferido.com"><img src="<?php echo BASE_REL;?>img/como_funciona.jpg" width="190" height="39" border="0" /></a></div></td>
                      </tr>
                  </table></td>
                  <td width="522"><img src="<?php echo BASE_REL;?>img/pie_opciones_centro.jpg" width="494" height="240" border="0" usemap="#Map" /></td>
                </tr>
              </table>
                <map name="Map" id="Map">
                  <area shape="rect" coords="115,131,215,157" href="http://www.facebook.com/pages/Mi-Referidocom/118564078232642" target="_blank" />
                  <area shape="rect" coords="243,131,348,158" href="http://twitter.com/#!/mireferido/" target="_blank" />
                  <area shape="rect" coords="362,133,450,161" href="http://www.youtube.com/mireferido/" target="_blank"/>
                </map>
                </td>
              <td width="278" align="center" valign="top" background="<?php echo BASE_REL;?>img/pie_registra_email.jpg"><table width="226" border="0" cellspacing="3" cellpadding="0">
                <tr>
                  <td width="221">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                
                <tr>
                  <td height="29">&nbsp;</td>
                </tr>
                <tr>
                  <td>
                    <div align="left">
                      <input name="txtEmail1" id="txtEmail1" type="text" class="opaco" size="26" style="border: 0px solid #1e1977; width:170px;"  onFocus=" opacar(this.id,1); completartxt1(this.id,'INGRESAR EMAIL'); " onBlur=" opacar(this.id,0); completartxt0(this.id,'INGRESAR EMAIL');" value="INGRESAR EMAIL" />
                      </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="left"><a href="javascript:void(null)" onclick="registrarEmail('txtEmail1','si')"><img src="<?php echo BASE_REL;?>img/enviar2.jpg" width="75" height="29" border="0"></a></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td bgcolor="#00104A">&nbsp;</td>
    </tr>
  </table>
</div>

