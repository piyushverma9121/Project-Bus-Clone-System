<!doctype html>
<html>
<head>
<style>
#div1
{
	height:308px;
	width:415px;
	position: absolute;
	left:470px;
	background:#C4C4C4;
	top:160px;
	box-shadow: 0px 0px 10px green;

	border-radius: 20px;
		
}
#sub
	{
		width:250px;
		height:40px;
		background-color:dodgerblue;
		border: none;
		border-radius: 20px;
		font-weight: 700px;
	}
#username
	{
		height: 35px;
		width:335px;
		border:none;
		border-radius: 20px;
		outline: none;
		padding-left: 10px;
	}
	#pwd
	{
		height: 35px;
		width:335px;
		border:none;
		border-radius: 20px;
		outline: none;
padding-left: 10px;
	}
</style>
<meta charset="utf-8">
<title>Teacher Login</title>
</head>
<body background="images/bg.jpg">
<div id="div1">
<form id="form1" name="form1" method="post" action="teacherlog.php">
  <table width="415" height="208" border="0"  align="center">
    <tbody>
      <tr>
        <th colspan="2" scope="row"><h1><u>Teacher Login</u></h1></th>
      </tr>
      <tr>
        <th width="160" scope="row">&nbsp;</th>
        <td width="157">&nbsp;</td>
      </tr>
      <tr>
        <th colspan="2" scope="row"><input name="username" type="text" required="required" id="username" placeholder="teacherid" size="30"></th>
        </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th colspan="2" scope="row"><input name="pwd" type="password" required="required" id="pwd" placeholder="Password" size="30"></th>
        </tr>
      <tr>
        <th height="25" scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th height="25" colspan="2" scope="row"><input id="sub" type="submit" name="submit" id="submit" value="Submit"></th>
      </tr>
    </tbody>
  </table>
</form>
	</div>
</body>
</html>
