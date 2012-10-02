<table border="0" cellspacing="3" cellpadding="2" align="center" >
<tr>
<?php
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::Sistema::DatBannerspecials');
$oBannerspecials = new DatBannerspecials;
$_conbans_=!empty($_conbans_)?$_conbans_:20;
$idioma=!empty($idioma)?$idioma:'ES';
$bannerss=$oBannerspecials->listarSpecials($idioma,'S',0, $_conbans_);
$i=0;
	foreach($bannerss as $ban){
	$i++;	
		?> 
                    <td valign="top"><table border="1" cellspacing="0" cellpadding="0" align="center" bordercolor="#000099" bgcolor="#E6E6E6">
                        <tr>
                          <td align="center">
                         <?php echo str_replace("\'","'",str_replace('\"','"',html_entity_decode($ban["ban_archivo"])));?></td>
                        </tr>
                    </table>                 
                    </td>
                 <?php if($i%4==0){?>
                  </tr><tr> 
                <?php }}?>
                </tr>
               </table>