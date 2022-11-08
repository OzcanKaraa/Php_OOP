<?php

//Autlod php uzantili dosyalari kisayol ile ekleme icin
// class_exits ise sorgulama yapma var mi yok mu
// method_exits method mevcut mu deil mi kontrol etme islemi
function __autload($class){
    require_once $class.".php";
}
if (class_exists("class2")){
    echo "Var";
}else{
        echo "Yok";
}
//$class1 = new class1();
//$class2 = new class2();
//$class1->merhaba();


