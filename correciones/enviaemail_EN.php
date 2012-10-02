<?	
function quita_xss()
{
	foreach ($_REQUEST as $indi=>$check_url) {
		if ((eregi("<[^>]*script*\"?[^>]*>", $check_url)) || (eregi("<[^>]*object*\"?[^>]*>", $check_url)) ||
			(eregi("<[^>]*iframe*\"?[^>]*>", $check_url)) || (eregi("<[^>]*applet*\"?[^>]*>", $check_url)) ||
			(eregi("<[^>]*meta*\"?[^>]*>", $check_url)) || (eregi("<[^>]*style*\"?[^>]*>", $check_url)) ||
			(eregi("<[^>]*form*\"?[^>]*>", $check_url)) || (eregi("\([^>]*\"?[^)]*\)", $check_url)) ||
			(eregi("\"", $check_url))) {
		unset($_REQUEST[$indi]); 
		}
	}
}
quita_xss();
	$flag=0; 
	$sendTo = "info@mereferrals.com" ;
	$subject = "MeReferrals - ContactUs"; 
	$remitente=$_REQUEST["xemail"];
	
	if (eregi("\r",$remitente) || eregi("\n",$remitente) || eregi("\r",$asunto) || eregi("\n",$asunto)){ 
     $flag=1; 
	} 
	
	if ($flag == 0) {
	
		if ($remitente!="" && $_REQUEST["xnom"]!=""){
		
			$nombre = $_REQUEST["xnom"];
			$empresa = $_REQUEST["xemp"];
			$mensaje = $_REQUEST["xcomentario"];
			$email = $_REQUEST["xemail"];
			$fono = $_REQUEST["xtel"];
			
			$headers = "From: $remitente\nReply-To: $remitente\nBCC: \nContent-Type: text/html; charset=iso-8859-1";
			$message ="
			<b>Name:</b> ".$nombre."<br>
			<b>Company:</b> ".$empresa."<br>
			<b>Email:</b> ".$email."<br>			
			<b>Phone:</b> ".$fono."<br>	
			<b>Comment:</b> ".$mensaje;		
			if(mail ($sendTo, $subject, $message, $headers)){
				echo "Thanks for writing";	
				?>
				<script language="javascript">
				function cerrar(){ 
					window.close() 
				} 
				
				setTimeout("cerrar()",3000); 
				</script>
				
				
				
				<?
				
			}
			
			
		}
	}
?>
