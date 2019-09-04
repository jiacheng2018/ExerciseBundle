<?php
class Myclass{
	public function __construct(){
		echo 'The class"'.__class__.'"was initiated<br>';
	}
	public function __destruct(){
		echo 'The class"'.__class__.'"was destoryed';
	}
	$obj=new Myclass;
	echo "The end of the file is reached.";
}

?>