<div style="background:#0CF">
<?php
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::negocio::MiReferido::NegBusquedaNegocio');
$oNegBusquedaNegocio = new NegBusquedaNegocio;
$txtDesc='';
$txtUbic='';
$ordenPrior=1;
$idioma='ES';
$pg =!empty($pg)?(is_numeric($pg) ? $pg : 0):0;
$desp = 4;
$desde = $pg * $desp;
$busqueda = $oNegBusquedaNegocio->buscar($txtDesc, $txtUbic, $desde, $ordenPrior, $desp, $idioma);
$numRegs = $busqueda[0];
$negocios = $busqueda[1];
$numPg = ceil($numRegs / $desp);
$con=(($desde + $desp)>$numRegs)?$numRegs:($desde + $desp);

?>
<table width="581" border="0" cellspacing="3" cellpadding="0" >
                  <tr>
                    <td width="575">
<?php 
foreach($negocios as $neg) {?>
<table width="573" border="0" cellpadding="0" cellspacing="0" >
                      <tr>
                        <td width="573" align="center" valign="top" ><table width="569" border="0" cellspacing="15" cellpadding="0" background="img/fondo_detalle.jpg">
                          
                          <tr>
                            <td width="539"><table width="538" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="263" align="left" valign="top"><table width="247" border="0" align="left" cellpadding="0" cellspacing="8">
                                  <tr>
                                    <td align="left" valign="top" ><table width="213" border="0" cellpadding="0" cellspacing="1">
                                      <tr>
                                        <td><img src="media/negocios/<?php echo !empty($neg["neg_logo"])?$neg["neg_logo"]:'negocio_default.jpg'?>" width="248" height="163" /></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                  </tr>
                                  
                                </table></td>
                                <td width="264" valign="top"><table width="0" border="0" align="center" cellpadding="0" cellspacing="8">
                                  <tr>
                                    <td width="246"><div align="left"><span class="TIT_DET_NEGOCIO"><?php echo $neg["neg_nom"]; ?></span></div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><span class="t_categorias">Restaurant, Pasteler&iacute;a </span></div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><span class="t_categorias"><?php echo @$neg["neg_dir"].','.@$neg["neg_ciu"];?></span></div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><span class="t_categorias">Tel&eacute;fono: <?php echo @$neg["neg_fono"]; ?></span></div></td>
                                  </tr>
								<?php if(@$neg["neg_tieneCupon"]>0){?>
                                  <tr>
                                    <td><div align="right"><a href="lis_cupon.php?neg=<?php echo @$neg["neg_cod"];?>"><img src="img/alerta_cupon.png" width="97" height="30" border="0" /></a></div></td>
                                  </tr>
                                  <?php }?>
                                  <tr>
                                    <td><div align="left"><span class="TIT_DET_NEGOCIO">Comparte y Gane </span></div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><img src="img/share.jpg" width="179" height="34" border="0" usemap="#Map" />
                                        <map name="Map" id="Map">
                                          <area shape="rect" coords="4,6,62,27" href="#" />
                                          <area shape="rect" coords="72,9,132,27" href="#" />
                                          <area shape="rect" coords="143,8,175,26" href="#" />
                                          </map>
                                    </div></td>
                                  </tr>
                                  
                                </table>                                  </td>
                              </tr>
                              
                              
                            </table></td>
                          </tr>
                        </table></td>
                      </tr>                      
                      <tr>
                        <td align="left" valign="top" >&nbsp;</td>
                      </tr>
                    </table>
                
<?php }?>
</td></tr>
<tr><td align="right" background="img/fondo_detalle.jpg" >Paginas : 
<div class="paginacion">
            <table align="left">
            <tr>
            <?php
			$pg_a = $pg;
			$numPgs = ceil($numRegs / $mostrar);
			$i = $pg_base;
			$x = $i + $pg_vis - 1;
			$in = $i;
			 if($pg_base > 1):?>                
                <a class="pgBusq" href="javascript:void(0)" onClick="setPagBase(<?php echo $pg_base - 1?>); cambiarPag(<?php echo $i - 1?>)">Anterior</a>
                 <?php endif;
                for($i = ($in-1); $i < $x; ++$i) {
                    if($i >= $numPgs) {
                        break;
                    }
               	if(($i + 1) == $pg) {
                    	echo '<a class="pgBusq pgBusqAct">'.($i+1).'</a>';
                	} else {
                ?>
                    <a class="pgBusq" href="javascript:void(0)" onClick="cambiarPag(<?php echo $i + 1?>)"><?php echo $i + 1?></a>
                <?php
                	}
                }
                if($numPgs > $pg_vis && ($in+$pg_vis) <= $numPgs):?>
                <a class="pgBusq" href="javascript:void(0)" onClick="setPagBase(<?php echo $pg_base + 1?>); cambiarPag(<?php echo $i+1?>);">Siguiente</a>
                <?php endif;?>
            </tr>
            </table>
            <div style="clear:both;"></div>
            </div>

&nbsp;&nbsp;&nbsp;</td></tr>
</table>
</div>