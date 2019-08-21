<?php
  class MyClass{
  	public $public='Public';
  	protected $protected='Protected';
  	private $private='Private';
  	function printHello(){
  		echo $this->public;
  		echo $this->protected;
  		echo $this->private;
  	}
  }
  $obj=new MyClass();
  echo $obj->public;
  // echo $obj->protected;
  // echo $obj->private;

  class Myclass2 extends MyClass{
  	public $public='Public2';
  	protected $protected='Protected2';
  	function printHello(){
  		echo $this->public;
  		echo $this->protected;
  		echo $this->private;
  	}
  }

  $obj2=new Myclass2();
  echo $obj2->public;
  // echo $obj2->protected;
  echo $obj2->private;
  $obj2->printHello();
  class Demo{
  	 public $a;
  	 public $b;
  	 public static $c=100;
  	 public function __construct($a){
             $this->a=$a;
             $this->funct();
  	 }
  	 public static function func(){
  	 	$newObj=new self(100);
  	 	$newObj->funct();
  	 	self::$c+=100;
  	 	echo self::$c;
  	 }
  	 private function funct(){
  	 	$this->b=$this->a*200;
  	 }
  	 public function getC(){
  	 	echo self::$c."<br/>";
  	 }
  }
  $demo=new Demo(3);
  $demo::func();
  class Foo{
  	public static $my_static='foo';
  	public function staticValue(){
  		return self::$my_static;
  	}
  }
  class Bar extends Foo{
  	public function foostatic(){
  		return parent::$my_static;
  	}
  }
  class parent{
  	 public static $mynum="Mychannel"; 
  	 public function myparent(){
         return self::$my_static; 
  	 }
  }
  class children extends parent{
  	public function children(){
  		return parent::$myparent;
  	}
  }
  $hel=new Foo();
  echo children::$hel."\n";
  // print Foo::$my_static."\n";
?>