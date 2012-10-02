<table border="0" cellspacing="3" cellpadding="2" align="center" >
<?php
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::Sistema::DatBannerhome');
$oBannerhome = new DatBannerhome;
$_conbanh_=!empty($_conbanh_)?$_conbanh_:5;
$idioma=!empty($idioma)?$idioma:'ES';
					$bannersh=$oBannerhome->listarHome($idioma,'S',0, $_conbanh_);			
					foreach($bannersh as $ban){?>                
                
                  <tr>
                    <td valign="top"><table border="1" cellspacing="0" cellpadding="0" align="center" width="270" bordercolor="#000099" bgcolor="#E6E6E6">
                        <tr>
                          <td align="center">
                          <!--<a href="<?php //echo !empty($ban["ban_enlace"])?('http://'.$ban["ban_enlace"]):'#';?>">-->
                         <!-- <img border="0" src="<?php //echo BASE_REL;?>media/bannerhome/--><?php echo str_replace("\'","'",str_replace('\"','"',html_entity_decode($ban["ban_archivo"])));?><!--" width="270" height="140" /></a>--></td>
                        </tr>
                    </table>                 
                    </td>
                  </tr> 
                <?php }?>
               </table>