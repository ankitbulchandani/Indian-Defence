
<html lang="en">
<head>
    <title>Register form with HTML5 using placeholder and CSS3</title>
</head>
<style type="text/css">
    #wrapper {
        width:450px;
        margin:0 auto;
        font-family:Verdana, sans-serif;
    }
	

    legend {
        color:#0481b1;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    fieldset {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); /
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:20px;
        border-color:rgba(4, 129, 177, 0.4);
    }
    input,
    textarea {
        color: #373737;
        background: #fff;
        border: 1px solid #CCCCCC;
        color: #aaa;
        font-size: 14px;
        line-height: 1.2em;
        margin-bottom:15px;

        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
    }
    input[type="text"],
    input[type="password"]{
        padding: 8px 6px;
        height: 40px;
        width:280px;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
        background:#f5fcfe;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        -webkit-transition-duration: 400ms;
        -webkit-transition-property: width, background;
        -webkit-transition-timing-function: ease;
        -moz-transition-duration: 400ms;
        -moz-transition-property: width, background;
        -moz-transition-timing-function: ease;
        -o-transition-duration: 400ms;
        -o-transition-property: width, background;
        -o-transition-timing-function: ease;
        width: 380px;
        
        border-color:#ccc;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        opacity:0.6;
    }
    input[type="submit"]{
        background: #222;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:uppercase;
        color: #eee;
        cursor: pointer;
        font-size: 15px;
        margin: 5px 0;
        padding: 5px 22px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-border-radius:4px;
        -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
    }
    textarea {
        padding:3px;
        width:96%;
        height:100px;
    }
    textarea:focus {
        background:#ebf8fd;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        opacity:0.6;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        border-color:#ccc;
    }
    .small {
        line-height:14px;
        font-size:12px;
        color:#999898;
        margin-bottom:3px;
    }
	
	
	
	body {
    background: url("reg.jpg");
    background-size: 1920px 1080px;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</style>
<body>
    <div id="wrapper">
        <form method='POST' action='registration.php'>
            <fieldset>
                <legend>Register Form</legend>
                <div>
                    <input type='text' name='name' placeholder=' Name'/>
                </div>
				
                <div>
                    <input type='password' name='pass' placeholder='Password'/>
                </div>
				<div>
                    <input type='password' name='cpass' placeholder='Confirm Password'/>
                </div>
				<div>
                    <input type='text' name='mnum' placeholder=' Mobile Number' pattern='[7-9]{1}[0-9]{9}'/>
                </div>
				
                <div>
                    <input type='text' name='email' placeholder='Email'/>
                </div>
				 <div >
                    <input  type='text' name='address' placeholder='Address'/>
				</div>
				
                <div>
                       
                <input type='submit' name='submit' value="Register"/>
            </fieldset>    
        </form>
    </div>
	
	<center><b> Already Registered </b> <a href='login6.php'><br> Login here</a></center>


</body>
</html>


<?php

mysql_connect("localhost","root","ankit");
mysql_select_db("users_db");

if(isset($_POST['submit']))
{
	 $user_name = $_POST['name'];
	 $user_pass = $_POST['pass'];
	 $user_email = $_POST['email'];
	 $confirm_pass = $_POST['cpass'];
	 $mobilenumber = $_POST['mnum'];
	 $user_address = $_POST['address'];
	 if($user_name=='')
	 {
		 echo "<script>alert('please enter your username')</script>";
		 
		 exit();
	 }
	 
	 
	 if($user_pass=='')
	 {
		 echo "<script>alert('please enter your password')</script>";
		 exit();
		 
	 }
	 if($confirm_pass=='')
	 {
		 echo "<script>alert('please enter your password')</script>";
		 exit();
		 
	 }
	 
	 if($user_pass != $confirm_pass)
	 {
		 echo "<script>alert('Password Mismatch')</script>";
		 exit();
		 
		 
	 }
	 if($mobilenumber == '')
	 {
		 
			 echo "<script>alert('please enter your mobile number')</script>";
		 exit();
	 
		 
	 }
	if($user_address=='')
	 {
		 echo "<script>alert('please enter your address')</script>";
		 
		 exit();
	 }

	 
	 if($user_email=='')
	 {
		 echo "<script>alert('please enter your email')</script>";
		 exit();
		 
	 }
	 if(filter_var($user_email,FILTER_VALIDATE_EMAIL)== false)
	 {
		 echo "<script> alert('please enter valid email address')</script>";
		 exit();
		 
		 
	 }
	 
	 
		 
		 
	
	 
	  $check_email = "select * from users where user_email='$user_email'";

	 $run = mysql_query($check_email);
	 
	 
	if(mysql_num_rows($run) > 0)
	{
		echo "<script> alert('Email $user_email already exists')</script>";
		
		exit();
		
	}
	
	$query = "insert into users (user_name,user_pass,mobileno,user_email,address) values('$user_name','$user_pass','$mobilenumber','$user_email','$user_address')";
     	
	if(mysql_query($query))
	{ 
		echo "<script>window.open('index.php','_self')</script>"; 
		
	}
}

?>


