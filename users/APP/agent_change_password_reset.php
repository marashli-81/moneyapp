


<?php  
 include "conn.php";  



 if (isset($_POST['submit'])  && !empty($_POST['pass1'])&& !empty($_POST['pass2'])) { 
 
 $emails=($_GET['email_f']);
 $emails = preg_replace('/\s+/', '', $emails);

 
 //This makes sure they did not leave any fields blank

 if ( !$_POST['pass1'] | !$_POST['pass2'])  {
  	echo "<script>alert(\"You did not complete all of the required fields. \");</script>";}
 	
	

 	if ($_POST['pass1'] != $_POST['pass2']) {
	
	echo "<script>alert(\"The two password did not match.\");</script>";

 		die(" <font color='red'>Your passwords did not match</font>");

 	}


 else 

 { 

$_POST['pass1'] = md5($_POST['pass2']);

 	if (!get_magic_quotes_gpc()) {

 		$pass1 = addslashes($_POST['pass1']);

	
 
 //$pass=$_POST['pass2'];
 //$use=$_POST['username'];

 $emails=($_GET['email_f']);
  $email=($_POST['email']);
  $id=($_GET['id']);
 $emails = preg_replace('/\s+/', '', $emails);
 
 mysql_query("UPDATE agent SET password = '$pass1' WHERE email = '$email' ");


 }



		
 												echo" <script type='text/javascript'>
 
													 {
													 window.alert('Reset Succesful')
													window.location='../index.php';
													 }
												</script> ";


 

 } 
}


?>


<html >
<head>
	<title><?php include "info.php"; echo $name1;?>  Sign up</title> 
	<link href="acti.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<!-- start header div -->
	<div id="header">
		<h3><?php include "info.php"; echo $name1;  ?> > Password Reset<strong></strong></h3>
	
	
</div>
	<!-- end header div -->	

	<!-- start wrap div -->
	<div id="wrap"><table width="611" height="249" border="0" align="center">
        <tr>
          <td width="462" height="50"><div align="center"><strong>Password Modification :
          <?php session_start();
echo $_GET['email_f']; ?></strong></div></td>
        </tr>
        <tr>
          <td height="168"><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div align="center"></div>
            </label>
            <div align="center">
              <table width="200" border="1" cellpadding="0" cellspacing="0" bordercolor="#F0F0F0">
                <tr>
                  <th scope="row"><table width="319" height="314" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="36" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="36" valign="top"><div align="center" style="font-weight: bold"><span style="color: #FF0000">*</span>Email</div></td>
                    </tr>
                    <tr>
                      <td height="36" valign="top"><div align="center">
                        <input name="email" type="text" id="email" value="<?php echo $_GET['email_f'] ; ?>" size="40" readonly />
                      </div></td>
                    </tr>
                    <tr>
                      <td><div align="center"><span class="style2" style="font-weight: bold"><span style="color: #FF0000">*</span>New Password</span></div></td>
                    </tr>
                    <tr>
                      <td><div align="center">
                        <input name="pass1" type="password" id="pass1" />
                      </div>
                        <div align="center"></div></td>
                    </tr>
                    <tr>
                      <td height="28"><div align="center"><span class="style3" style="font-weight: bold"><span class="style2" style="font-weight: bold"><span style="color: #FF0000">*</span></span>Confirm Password</span><br />
                        <br />
                      </div>
                        <div align="left"></div></td>
                    </tr>
                    <tr>
                      <td height="25"><div align="center"><span class="style3">
                        <input name="pass2" type="password" id="pass2" />
                      </span></div></td>
                    </tr>
                    <tr>
                      <td><div align="center"></div></td>
                    </tr>
                    <tr>
                      <td><div align="center">
                        <input name="submit" type="submit" id="submit" value="submit" />
                      </div></td>
                    </tr>
                  </table></th>
                </tr>
              </table>
            </div>
          </form></td>
        </tr>
      </table></div>
	<!-- end wrap div -->
</body>
</html>

