<?php
include 'header.php';
?>


<html>
<head>
<meta charset="utf-8">
<title>Bus Information</title>
</head>

<body>
	<br><br>
<form id="form1" name="form1" method="post" action="busreportbk.php">
  <table width="391" border="4" align="center">
    <tbody>
      <tr>
		  <th colspan="2" scope="row"><h1><strong><u>Search A Bus</u></strong></h1></th>
      </tr>
      <tr>
        <th width="169" scope="row">&nbsp;</th>
        <td width="200">&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Source</th>
        <td><input name="source" type="text" required="required" id="source" size="35"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Destination</th>
        <td><input name="destination" type="text" id="destination" size="35"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th colspan="2" scope="row"><input type="submit" name="submit" id="submit" value="Submit"> <input type="reset" name="reset" id="reset" value="Reset"></th>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>

<?php
	include 'footer.php';
	?>

