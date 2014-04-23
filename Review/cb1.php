

<?php
require('connect.php');
$name = @$_POST['name'];
$comment = @$_POST['comment'];
$submit = @$_POST['submit'];

if($submit)
{

if($name&&$comment)

{
$query=mysql_query("INSERT INTO cmnt VALUES ('','$name','$comment')");
}
}
else
{
echo "please fill in all fields";
}


?>
<html>
<body>
<form action="cb.php" method="POST">
<table>
<tr><td>Name:<input type="text" name="name"></td></tr>
<tr><td colspan="2">Comment:<textarea name="comment"></textarea></td></tr>
<tr><td colspan="2"><input type="submit"  name="submit" value="Comment"></td></tr>
</table>
</form>
<?php
$getquery=mysql_query("SELECT * FROM cmnt ORDER BY id DESC");
while($rows=mysql_fetch_assoc($getquery))
{
$id=$rows['id'];
$name=$rows['name'];
$comment=$rows['comment'];
$dellink="<a href=\"delete.php?id=" . $id . "\">DELETE</a>";
echo $name . '<br />' . $comment . '<br />' .$dellink .'<br />';
}
?>
</body>
</html>

