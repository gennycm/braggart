<?php
include_once('correo.php');
include_once('progresomailing.php');
include_once('correo1.php');


class tempcorreo5 extends correo
{
	var $mailing;

	function tempcorreo5($idMailing)
    {
		$this->correo();
        $this -> mailing = new ProgresoMailing($idMailing);
        $this -> mailing  -> obtenerProgresoMailing();
     	
    }
    
    function genera_asunto()
    {
        $this->correo->Subject = "Notificación de Envío de Correos";
    }
    
    function genera_destino()
    {
        $this->correo->AddAddress("brent@locker.com.mx");
    }
    
    function genera_mensaje()
    {
         $correo = null;
      
        switch($this -> mailing -> tipoCorreo){
            case "1":
                $correo = new correo1($this -> mailing -> idCorreo);
                $correo -> obtenerCorreo1();
                break;

        }

        //$usuario= $this->usuariocliente;
       	$this->correo->Body = '<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Responsive Email Template</title>
                                                                                                                                                                                                                                                                                                                                                                                                        
<style type="text/css">
	.ReadMsgBody {width: 100%; background-color: #ffffff;}
	.ExternalClass {width: 100%; background-color: #ffffff;}
	body	 {width: 100%; background-color: #ffffff; margin:0; padding:0; -webkit-font-smoothing: antialiased;font-family: Georgia, Times, serif}
	table {border-collapse: collapse;}
	
	@media only screen and (max-width: 640px)  {
					body[yahoo] .deviceWidth {width:440px!important; padding:0;}	
					body[yahoo] .center {text-align: center!important;}	 
			}
			
	@media only screen and (max-width: 479px) {
					body[yahoo] .deviceWidth {width:280px!important; padding:0;}	
					body[yahoo] .center {text-align: center!important;}	 
			}

</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix" style="font-family: Georgia, Times, serif">

<!-- Wrapper -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td width="100%" valign="top" bgcolor="#ffffff" style="padding-top:20px">
		
			<!-- Start Header-->
			<table width="580" border="0" cellpadding="0" cellspacing="0" align="center" class="deviceWidth">
				<tr>
					<td width="100%" bgcolor="#ffffff">

                            <!-- Logo -->
                            <table border="0" cellpadding="0" cellspacing="0" align="left" class="deviceWidth">
                                <tr>
                                    <td style="padding:10px 20px" class="center">
                                        <a title="" href="'.$this -> correo1 -> linklogo.'" style="color:#337ff1">
                                            <img src="http://clientes.locker.com.mx/panelTemplate/panel/correos/correo1/'.$this->correo1->logo.'" width="230" height="auto" alt="logo" />
                                        </a>
                                    </td>
                                </tr>
                            </table><!-- End Logo -->
                            
                            <!-- Nav -->
                            <table border="0" cellpadding="0" cellspacing="0" align="right" class="deviceWidth">
                                <tr>
                                    <td class="center" style="font-size: 24px; color: #272727; font-weight: light; text-align: right; font-family: Georgia, Times, serif; line-height: 20px; vertical-align: middle; padding:10px 20px; font-style:italic">
                                        <p>'.$correo->titulo.'</p>
                                    </td>
                                </tr>
                            </table><!-- End Nav -->

					</td>
				</tr>
			</table><!-- End Header -->
			<table width="580"  class="deviceWidth" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">
				<tr>
					<td>
						<table style="border-bottom: 3px solid #'.$correo -> color.'">
                        	<tr>
                        		<td width="580"></td>
                            </tr>
                        </table>
					</td>
				</tr>
				<tr>
					<td style="font-size: 13px; color: #000; font-weight: normal; text-align: left; font-family: Georgia, Times, serif; line-height: 24px; vertical-align: top; padding:10px 8px 10px 8px">
						'.$correo -> nomemp.'
					</td>
				</tr>
			</table>
			<!-- One Column -->
			<table width="580"  class="deviceWidth" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff">
				<tr>
					<td valign="top" style="padding:0" bgcolor="#ffffff">
											
					</td>
				</tr>
                <tr>
                    <td style="font-size: 13px; color: #000; font-weight: normal; text-align: left; font-family: Georgia, Times, serif; line-height: 24px; vertical-align: top; padding:10px 8px 10px 8px" bgcolor="#ffffff">
                        
                        <table>
                            <tr>                    
                                <td valign="middle" style="padding:0 10px 10px 0"><a href="#" style="text-decoration: none; color: #272727; font-size: 16px; color: #272727; font-weight: bold; font-family:Arial, sans-serif ">
                                </td>
                            </tr>
                        </table>
                        Este correo tiene como propósito notificar el estado del envío de correos. La siguiente información puede serle de utilidad:
                        <br><br>

                        Titulo Mailing: '.$correo -> titulo.'<br>
                        Número de correos activos: '.$this -> mailing -> numCorreos.'<br>
                        Número de correos enviados: '.$this -> mailing -> enviados.'<br>
                        Fecha de Inicio: '.$this -> mailing -> fechaYHoraInicio.'<br>
                        Fecha de Finalización: '.$this -> mailing -> fechaYHoraFinal.'<br>
													
                    </td>
                </tr>              
			</table><!-- End One Column -->
			
			
			
		</td>
	</tr>
</table> <!-- End Wrapper -->

</body>
</html>';                                       
    }
}
?>