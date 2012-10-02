<?php
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::MiReferido::DatCupon');
$oCupon = new DatCupon;
$_concup_=!empty($_concup_)?$_concup_:5;
$_negocio_=!empty($_negocio_)?$_negocio_:null;
$_noneg_=!empty($_noneg_)?$_noneg_:null;
					$i=0;
					//$cupones=$oCupon->listarCupones('S',$idioma,0,$_negocio_,'cup_fecha_reg','DESC',0,$_concup_,$_noneg_);
					
					$cupones=$oCupon->BuscarVCupones('','',$idioma,0 ,'cup_fecha_reg','DESC',0,$_concup_,$_negocio_);
					
					?>
<link href="css/estilos_n.css" rel="stylesheet" type="text/css" />

                    <table border="0" cellpadding="0" cellspacing="0" width="186">
					<?php			
					foreach($cupones as $cup){?> 
                    <tr>
                    <td>     
                <table width="186" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="275" valign="bottom"><div align="center">
                            <table width="180" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td valign="top"><img src="<?php echo BASE_REL;?>img/cabeza_cupon_det.png" width="180" height="85" /></td>
                              </tr>
                              <tr>
                                <td width="217" valign="top">
                                <?php if ($idioma=='ES'){?>
                                <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/det_cupon.php?dc=<?php echo $cup["cup_cod"]; ?>">
                                <?php }else{ ?>
                                <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/det_cupon_EN.php?dc=<?php echo $cup["cup_cod"]; ?>">
                                <?php }?>
                                <img src="<?php echo BASE_REL;?>media/cupones/<?php echo $cup["cup_imagen"]; ?>" width="180" height="144" border="0" /></a></td>
                              </tr>
                              <tr>
                                <td bgcolor="#A2DE29"><table width="151" height="59" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="151"><div align="center">
                                          <table width="152" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                              <td width="152"><div align="left"><span class="t_titulo_cupon"><?php echo $cup["cup_titulo"]; ?></span></div></td>
                                            </tr>
                                            <tr>
                                              <td><div align="left"><span class="t_empresa_cupon"><?php echo $cup["cup_subtitulo"]; ?> </span></div></td>
                                            </tr>
                                          </table>
                                      </div>
                                          <div align="left"></div>
                                        <div align="left"></div></td>
                                    </tr>
                                </table></td>
                              </tr>
                            </table>
                        </div></td>
                      </tr>
                      <tr>
                        <td align="center" valign="top"><table width="186" height="48" border="0" align="left" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="242" height="48" align="center" valign="top" style="background-repeat: no-repeat"><table width="186" height="44" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="226" align="center" valign="top" background="<?php echo BASE_REL;?>img/pie_cupon_detalle.png" style="background-repeat: no-repeat"><table width="185" height="30" border="0" cellpadding="0" cellspacing="7">
                                        <tr>
                                          <td width="77" valign="middle" class="t_TITULO_1"><div align="center" class="t_precio_cupon">$<?php echo $cup["cup_costo"]; ?></div></td>
                                          <td width="93" valign="middle" class="t_TITULO_1"><div align="center">
                                          <?php if ($idioma=='ES'){?>
                                <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/det_cupon.php?dc=<?php echo $cup["cup_cod"]; ?>"><img src="<?php echo BASE_REL;?>img/comparteyganedet.jpg" width="58" height="22" border="0" /></div>
                               
                               
                               
                                <?php }else{ ?>
                                <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/det_cupon_EN.php?dc=<?php echo $cup["cup_cod"]; ?>"><img src="<?php echo BASE_REL;?>img/comparteyganedet_EN.jpg" width="58" height="22" border="0" /></a>
                                <?php }?>
                               
                                            
                                          <a href="#"></a></div></td>
                                        </tr>
                                    </table></td>
                                  </tr>
                              </table></td>
                            </tr>
                        </table></td>
                      </tr>
                    </table>
                    </td></tr>
                <?php }?>
				</table>