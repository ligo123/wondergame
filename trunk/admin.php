<?php
require_once "header.php";
admin_check();
?>
<form action="#">
	<input type="checkbox" name="todo[]">Post Editing with date information.
	<input type="checkbox" name="todo[]">Private Messages
	<input type="checkbox" name="todo[]">Account Hierarchy
</form>
<?php
require_once "footer.php";
?>