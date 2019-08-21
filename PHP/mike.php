<?php
function my_callback(){
	echo 'hello world';
}
class MyClass{
	static function mycallmethod(){
		echo 'hello world';
	}
}
// Type 1: Simple callback
call_user_func('my_callback');
// Type 2: Static class method call
call_user_func(array('MyClass','mycallmethod'));
// Type 3: Object method call
$obj=new MyClass();
call_user_func(array($obj,'mycallmethod'));
// Type 4: Static class method call (As of PHP 5.2.3)
call_user_func('MyClass::mycallmethod');
// Type 5: Relative static class method call (As of PHP 5.3.0)
class A{
	public static function who(){
		echo "A\n";
	}
}
class B extends A{
    public static function who(){
    	echo "B\n";
    }
}
call_user_func(array('B','parent::who'));
call_user_func(array('B','who'));
class mc{
	public function go(array $arr){
		
	}
}
?>