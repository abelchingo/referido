<?php
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::MiReferido::DatBanner');
$oBanner = new DatBanner;
$_conban_=!empty($_conban_)?$_conban_:5;
					$banners=$oBanner->listarBanners(1,$idioma ,0,0, $_conban_);				
					foreach($banners as $ban){?>                
                <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" valign="top"><table border="0" cellspacing="1" cellpadding="0">
                        <tr>
                          <td>
                          <a href="<?php echo !empty($ban["ban_enlace"])?('http://'.$ban["ban_enlace"]):'#';?>">
                          <img border="0" src="<?php echo BASE_REL;?>media/banner/<?php echo $ban["ban_archivo"];?>" width="180" /></a></td>
                        </tr>
                    </table>                    
                    </td>
                  </tr> 
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                <?php }?>