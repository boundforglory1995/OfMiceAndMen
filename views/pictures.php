<div id="pictures">
<ul id="grid">
<?php
while($row = mysql_fetch_array($sql)){
$imgPath = $row['path'];
echo "<li><a href=><img src=Images/{$imgPath}></a></li>";
}

?>
</ul>
</div>