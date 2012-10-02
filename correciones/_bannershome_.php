<table border="0" cellspacing="3" cellpadding="2" align="center" >
<?php
require_once(dirname(__FILE__).'/Core/cls.Aplicacion.php');
Aplicacion::iniciar();
Aplicacion::clase('Core::datos::MiReferido::DatCupon');
$oCupon = new DatCupon;
$_conbanh_=!empty($_conbanh_)?$_conbanh_:10;
$idioma=!empty($idioma)?$idioma:'ES';
$cuponesDes=$oCupon->vcupones2(null,null,null,null,"'".$idioma."'",' Ahorro ',' DESC ',true,0,$_conbanh_);				
					
							
					foreach($cuponesDes as $cupD){?>                
                
                  <tr>
                    <td valign="top"><table border="1" cellspacing="0" cellpadding="0" align="center" width="270" bordercolor="#000099" bgcolor="#E6E6E6">
                        <tr>
                          <td align="center">
                          <?php
							$valor=!empty($cupD["cup_valor"])?$cupD["cup_valor"]:1;
							$costo=@$cupD["cup_costo"];
														  
							$porcD=ceil((($valor - $costo)*100)/$valor);
							?>
                          
                          <a href="det_cupon<?php $idioma=='EN'?'_EN':'';?>.php?dc=<?php echo $cupD["cup_cod"]; ?>">
                          <strong><?php echo $porcD.'% '.($idioma=='EN'?'Discount':'Descuento');?></strong>
                          <br>
                          <?php echo $cupD["cup_titulo"]; ?>
                          </a>
                         </td>
                        </tr>
                    </table>                 
                    </td>
                  </tr> 
                <?php }?>
               </table>