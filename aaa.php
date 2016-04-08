<?php
echo 'ÇëµÈ´ý';
echo '²âÊÔÒ»ÏÂ';
sleep(5);
		require_once('e/class/q_flash_key.class.php');
		
		$key=new q_flash_key();
		echo $key->get_code('reg',220,20);		
		unset($key);	
?>
