<?php
	echo md5('123456')."<br>";
	echo password_hash('123456',PASSWORD_DEFAULT);
?>