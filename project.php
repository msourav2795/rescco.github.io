<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_POST['signup']) && !empty($_POST['remail']) 
               && !empty($_POST['id']) && !empty($_POST['cpassword'])) {
				
               if ($_POST['cpassword'] != ""
			   ) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                 
                  
                  header("location:new.php");
               }
            }}
?><?php
			$msg="";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['login']) && !empty($_POST['email']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['email'] == 'sourav' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                 
                  
                  header("location:new.php");
               }else {
                  $msg='Wrong Hint: sourav 1234';
				  	
               }
            }
			else{
				$msg='Enter username and password';
			}}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Rescco</title>
		<meta charset="utf-8">
		<meta name="viewport" content="user-scalable=yes, width=device-width, initial-scale=1">
		<link rel="stylesheet" href="material.min.css">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
		<script src="jquery-1.10.2.js" type="text/javascript"></script>
		<script src="material.min.js" type="text/javascript"></script>
		<script src="material.min.js"></script>
		<script type="text/javascript">
		function validate(){
			if(document.loginform.id.value==""){				
				loginform.id.focus();
				return(false);
			}
			else if(document.loginform.remail.value==""){				
				loginform.remail.focus();
				return(false);
			}
			else if(document.loginform.cpassword.value==""){				
				loginform.cpassword.focus();
				return(false);
			}
			else{
				return (true);
			}
		}
		</script>
	</head>
	<style>
		.effect
		{
			position:relative;       
			-webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
			-moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
		}
		.effect:before, .effect:after
		{
			content:"";
			position:absolute; 
			z-index:-1;
			-webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
			-moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
			box-shadow:0 0 20px rgba(0,0,0,0.8);
			top:0;
			bottom:0;
			left:10px;
			right:10px;
			-moz-border-radius:100px / 10px;
			border-radius:100px / 10px;
		} 
		.effect:after
		{
			right:10px; 
			left:auto;
			-webkit-transform:skew(8deg) rotate(3deg); 
			-moz-transform:skew(8deg) rotate(3deg);     
			-ms-transform:skew(8deg) rotate(3deg);     
			-o-transform:skew(8deg) rotate(3deg); 
            transform:skew(8deg) rotate(3deg);mdl-button--accent
		}
		.hover:hover
		{			
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
	</style>
	<body style="height:90%;padding:10px;width:95%;background-color:#ECEDEF">
	<div></div>
		<div style="margin:0 auto;padding-bottom: 20px;height:40px;width:110px;"><h3>LOGO</h3></div>
		<div class="effect" style="background-color:white;border:2px solid black;margin:auto;height:79%;width:50%;min-height:480px;min-width:300px;position:relative;">
		 <main class="mdl-layout__content" style="width:100%;position:relative">    
			<div class="mdl-tabs mdl-js-tabs" >
				<div class="mdl-tabs__tab-bar"  >
					<a href="#tab1-panel" class="mdl-tabs__tab is-active" id="tab" >SIGN IN</a>
					<a href="#tab2-panel" class="mdl-tabs__tab" id="tab">REGISTER</a>
               
			   
				</div>
							
					<div class="mdl-tabs__panel  is-active " id="tab1-panel">
						<div style="padding-top:12px"><p style="text-align:center;color:red"><?php echo $msg; ?></p>
							<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" accept-charset="UTF-8" >
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin:0% 15%;width:70%">
								<input class="mdl-textfield__input" type="text" id="text4" name="email">
								<label class="mdl-textfield__label" for="text4">Username or Email</label>
								</div>
							
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin:0% 15%;width:70%">
								<input class="mdl-textfield__input" type="password" id="text1" name="password" style="">
								<label class="mdl-textfield__label" for="text1">Password</label>
								</div>
							
							<div style="width:84px;margin:5% auto">
							<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent hover" name="login">SIGN IN</button>
							</div>
							</form>
							<div style="min-height:15px;height:7%;background-color:white"></div><p style="text-align:center;font-size:20px">Or connect with</p>
							<div style="margin:auto;width:230px">
							<div class="social" >
									<div class="hover" style="height:50px;width:54px;float:left;margin:4%;background-color:#1DA1F2;padding-top:8px;padding-left:4px;border-radius:50%">
										<a  href="#" style="font-size:40px;color:white;">
											<i class="fa fa-twitter fa-fw"></i>
										</a>
									</div>	
									<div  class="hover " style="height:46px;width:46px;float:left;margin:4%;background-color:#D73D32;padding:6px;border-radius:50%">
										<a  href="#" style="font-size:40px;color:white;">
											<i class="fa fa-google-plus fa-fw z-depth-5"></i>
										</a>
									</div>
									<div class="hover" style="height:50px;width:54px;float:left;margin:4%;background-color:#3B5998;padding-top:8px;padding-left:4px;border-radius:50%">
										<a href="#" style="font-size:40px;color:white;">
											<i class="fa fa-facebook fa-fw"></i>
										</a>
									</div>
							</div>
							</div>
						</div>
						
					</div>
				
					<div class="mdl-tabs__panel" id="tab2-panel" >
						<div style="padding-top:3px"><p style="text-align:center;color:red"></p>
						<form  name="loginform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method="post" onsubmit="return(validate())">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin:0% 15%;width:70%">
								<input class="mdl-textfield__input" type="text" id="text1" name="id" style="">
								<label class="mdl-textfield__label" for="text1">Full Name</label>
								</div>
							
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin:0% 15%;width:70%">
								<input class="mdl-textfield__input" type="text" id="text4" name="remail">
								<label class="mdl-textfield__label" for="text4">Username or Email</label>
								</div>
							
								
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin:0% 15%;width:70%">
								<input class="mdl-textfield__input" type="password" id="text1" name="cpassword" style="">
								<label class="mdl-textfield__label" for="text1">Password</label>
								</div>
							
							<div style="width:84px;margin:3% auto">
							<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent hover" name="signup">REGISTER</button>
							</div>
							</form>
							<p style="text-align:center;font-size:20px">Or connect with</p>
							<div style="margin:auto;width:230px">
							<div class="social" >
									<div class="hover" style="height:50px;width:54px;float:left;margin:4%;background-color:#1DA1F2;padding-top:8px;padding-left:4px;border-radius:50%">
										<a  href="#" style="font-size:40px;color:white;">
											<i class="fa fa-twitter fa-fw"></i>
										</a>
									</div>	
									<div  class="hover " style="height:46px;width:46px;float:left;margin:4%;background-color:#D73D32;padding:6px;border-radius:50%">
										<a  href="#" style="font-size:40px;color:white;">
											<i class="fa fa-google-plus fa-fw z-depth-5"></i>
										</a>
									</div>
									<div class="hover" style="height:50px;width:54px;float:left;margin:4%;background-color:#3B5998;padding-top:8px;padding-left:4px;border-radius:50%">
										<a href="#" style="font-size:40px;color:white;">
											<i class="fa fa-facebook fa-fw"></i>
										</a>
									</div>
							</div>
							</div>
						</div>
						
					</div>

			</div>
		 </main>

		</div>
		
	</body>
</html>
		
