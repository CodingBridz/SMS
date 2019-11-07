<!DOCTYPE html>
<html>
<head>
	<title>Color Registration Form</title>
	<style>
		body{
			background-color:#76E2E9;
		}
		.center{
			height:500px;
			width:700px;
			margin:auto; 
			 margin-top:50px;
			 border-top-left-radius:5px;
			 border-top-left-radius:5px;
		}
		.content{
			background-color:#3686BD;
			height:500px;
			width:350px;
			float:left;
			border-radius: 5px 0px 0px 5px;
		}
		.content h2{
			color:#F7FDFD;
			font-family: arial;
			float:left;
			padding:30px;
			margin-bottom:0px;
		}
		.form {
			background-color:#FFFFFF;
			height:500px;
			width:350px;
			float:left;
			border-radius: 0px 5px 5px 0px;	
		}
		.content p{
			float:left;
			margin-top:-5px;
			margin-left:30px;
   			font-family:arial;
   			font-size:14px;
   			color:#CCF8FF;
   			line-height:20px;

		}
		.content p strong{
			color:#FFFFFF;
		}
		.content input{
			float:left;
			color:#323234;
			font-family:arial;
			padding:12px;
			font-weight:bold;
			font-size:14px;
			border-radius:5px 0px 5px 0px;
			margin-left:30px;
			background-color:#FFFFFF;
			margin-top:15px;
			border:1px solid #FFFFFF;
		}
		#h1{
			color:#4486B1;
			font-family: arial;
			float:left;
			padding:30px;
			margin-bottom:0px;
		}
		.Regform{
         float:left;
         padding-left:21px;
         color:#999999;
         font-family:arial;
         font-size:14px;
         margin-top:-15px;
         font-weight:bold;
		}
		#tb input{
			height:35px;
			width:130px;
			border:1px solid #ECECEC;
		}
		#tb1 input{
		border:1px solid #ECECEC;	
		height:35px;
		width:275px;
		}
		#tb3 input{
		height:35px;
			width:130px;
			border:1px solid #ECECEC;	
			border-radius:6px 0px 6px 0px;
		}
		#tb4 a{
			color:#5388AD;
		}
		#tb4 {
			color:#454545;
			font-family:arial;
			font-size:13px;
		
		}
		.but input{
			padding:13px;
			font-weight:bold;
			font-size:14px;
			color:white;
			background-color:#3587BD;
			width:150px;
			border-radius: 5px 0px 5px 0px;
			border:1px solid #3587BD;
		}
	</style>
</head>
<body>
	<div class="center">
		<div class="content">
			<h2>INFORMATION</h2>
            <p>Lorem ipsub dolor sit amet, consectetur adipisc-<br/>ing elit sed do eiusmod tempor incididunt ut <br/>
            labore et dolore magna aliqua.Et molestie ac<br/>feugiat sed.Diam volutpat commodo. 
			</p>
			<p><strong>Eu ultrices:</strong> Vitae aucor eu augue ut,Malesuada<br/>nunc vel risus commodo viverra.Praesent ele-<br/>mentum favilisis leo vel.</p>
			<input type="button" value="Have An Account">
		</div>

		<div class="form">
			<h2 id="h1">REGISTER FORM</h2>
		<table class="Regform" cellspacing="10">
				<tr>
					<td>First Name</td>
					<td>Last Name</td>
				</tr>
				<tr id="tb">
				<td><input type="textbox"></td>
				<td><input type="textbox"></td>
				</tr>
				<tr >
					<td>Your Email</td>
		            </tr>
					<tr id="tb1">
					<td colspan="2"><input type="text"></td>
					</tr>
					<br/>
					<tr>
						<td>Password</td>
						<td> Confirm Password</td>
					</tr>
					<tr id="tb3">
						<td colspan="1"><input type="password" name=""></td>
						<td><input type="password" name=""></td>
					</tr>
					<tr id="tb4">
						<td colspan="2"><input type="checkbox">I agree to the <a href="#">Terms and Conditions<a/></td>
					</tr>
					<tr class="but">
						<td colspan="2">
							<input type="button" value="Register">
						</td>
					</tr>
			</table>
		</div>
	</div>
</body>
</html>