<html>
<head>
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>

<script>
function countLines(theArea){
  var theLines = theArea.value.replace((new RegExp(".{"+theArea.cols+"}","g")),"\n").split("\n");
  if(theLines[theLines.length-1]=="") theLines.length--;
  theArea.form.lineCount.value = theLines.length;
}
</script>
<script>
$(document).ready(function()
{
$("#ajaxform").change(function(e)
{
	var postData = $(this).serializeArray();
	var formURL = $(this).attr("action");
	$.ajax(
	{
		url : formURL,
		type: "POST",
		data : postData,
		success:function(data, textStatus, jqXHR) 
		{

		},
		error: function(jqXHR, textStatus, errorThrown) 
		{
		}
	});
    e.preventDefault();	//STOP default action
})
};
	
$("#ajaxform")..change(function(e); //SUBMIT FORM
</script>
<script>
var int=self.setInterval(function(){showUser(str)},10);

function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>
<script>


function redirect() {
    document.test.submit();
}
</script>

</head>

<?php if(isset($_POST['lineCount']))
{
echo $line_count = $_POST['lineCount'];
$mytext = $_POST['myText'];
if($line_count > 5)
{
$tprice=1000;
$price=100;
echo $line=$line_count-5;
echo $update_price=$price*$line+$tprice;
}
}
?>
<body >
<form name="test" id="test" method="POST" action="" >
<textarea name="myText" onKeyUp="countLines(this)" onChange="redirect()" cols="30" rows="10" ><?php echo $mytext ?>
</textarea>
<br>
Lines:
<input type="text" name="lineCount" size="2" value=" " onChange="setInterval('showUser(this.value)',100)">
<?php echo $td = '<td></td>'; ?>
</form>
<?php echo $td; ?>
<form name="ajaxform" id="ajaxform" action="ajax-form-submit.php" method="POST">
First Name: <input type="text" name="fname" value ="andmkjsn" onKeyPress="showUser(this.value)"> <br/>
Last Name: <input type="text" name="lname" value ="" /> <br/>
Email : <input type="text" name="email" value=""/> <br/>
<div id="txtHint"><b>Person info will be listed here.</b></div>

</form>

</body>
</html>