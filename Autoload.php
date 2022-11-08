<?php
//function autoload()
//{
//    require_once $class.".php";
//}
//$class1=new Class1();
//$class2=new Class2();

sql_autoload_register(function ($class){
   $class1=new Class1();
});
