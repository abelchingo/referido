<?php
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::Sistema::DatBannerinferior');
$oDatBannerinferior = new DatBannerinferior;
$idioma="EN";
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
      <td height="105" align="center" valign="top" bgcolor="#00104A"><table width="965" height="239" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="965" valign="top"><table width="965" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="687" align="left" valign="top" background="<?php echo BASE_REL;?>img/pie_opciones_izquierda_EN.jpg"><table width="686" height="214" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="164" align="left" valign="top"><table border="0" align="center" cellpadding="0" cellspacing="0">
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
							window.open("contactus_EN.php" , "Contáctanos" , "toolbar=no,Location=no,scrollbars=No,status=yes,width=427,height=570") ;					
					  }
					  </script>					  
					  
                      <tr>
                        <td><div align="left"><a href="#" class="tooltip" title="[!]Who we are? [/!]
We are a dynamic and versatile website, where you can find products and services with daily promotions, if you search and share <br>
it with your friends and family, you can win special prizes and gifts. You want to make money ?? Sign up as an independent associate <br>
to promote our website with business owners and earn commissions while doing it from your home. As a business owner you can benefit <br>
from the best effective marketing model and drive more sales towards your business. MrReferrals.com Search, Share and Win!"><img src="<?php echo BASE_REL;?>img/quienes_somos_EN.jpg" width="188" height="38" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td><div align="left"><a href="#"  class="tooltip" title="[!]What do we do? [/!] 
• Daily exposure of your business &amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp • Boost your Marketing and Branding <br>
• Effective, fast and affordable advertising &amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp • Expand your business through online marketing strategies <br>
• Social Media Marketing implementation &amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp • Reaching your target market <br>
• Platform in two languages, English and Spanish &amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp • Connection with aggressive and effective promotions <br>					"><img src="<?php echo BASE_REL;?>img/que_hacemos_EN.jpg" width="188" height="37" border="0" /></a></div></td>
                      </tr>
                      <tr>
                        <td><div align="left"><a href="#" onclick="enviarcomentario(); return false" class="tooltip" title="[!]Contact Us [/!]
						<B>Address:</B> &amp;nbsp 10900 NE 8th Street Suite 1000<br>
                        &amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp Bellevue, WA 98004 <br>
						<B>Email:</B> &amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp info@mrreferrals.com"><img src="<?php echo BASE_REL;?>img/como_funciona_EN.jpg" width="188" height="38" border="0" /></a></div></td>
                      </tr>
                  </table></td>
                  <td width="522"><img src="<?php echo BASE_REL;?>img/pie_opciones_centro_EN.jpg" width="496" height="240" border="0" usemap="#Map" /></td>
                </tr>
              </table>
                <map name="Map" id="Map">
                 <area shape="rect" coords="115,131,215,157" href="http://www.facebook.com/pages/MeReferralscom/234836403232726" target="_blank" />
                  <area shape="rect" coords="243,131,348,158" href="http://twitter.com/#!/mrreferrals" target="_blank" />
                  <area shape="rect" coords="362,133,450,161" href="http://www.youtube.com/mireferido/#p/a/u/0/tmPN1ljqnbk" target="_blank"/>
                </map></td>
              <td width="278" align="center" valign="top" background="<?php echo BASE_REL;?>img/pie_registra_email_EN.jpg"><table width="226" border="0" cellspacing="3" cellpadding="0">
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
                      <input name="txtEmail1" id="txtEmail1" type="text" class="opaco" size="26" style="border: 0px solid #1e1977; width:170px;"  onFocus=" opacar(this.id,1); completartxt1(this.id,'Enter Email'); " onBlur=" opacar(this.id,0); completartxt0(this.id,'Enter Email');" value="Enter Email" />
                      </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="left"><a href="javascript:void(null)" onclick="registrarEmail('txtEmail1','si')"><img src="<?php echo BASE_REL;?>img/enviar2_EN.jpg" width="75" height="29" border="0"></a></div></td>
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

