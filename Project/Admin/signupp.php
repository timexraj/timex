<?php
//include_once("lib/function.php");
//include_once("lib/function.php");
?>
<form method="post" action="next.php">
	<input type="text" name="username" placeholder="UserName" pattern="[A-Za-z]{2,}" title="At Least 2 Alphabets.">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Login">
</form>