<html>
<head>
<meta http-equiv="Content-Type" content=" charset=uft-8"/>
</head>
<body>
<form>
请输入商品原价：<input type="text" name="price"/>
折扣：<select name="discount">
<option>九折</option>
<option>八五折</option>
<option>八折</option>
<option>七五折</option>
<option>七折</option>
<select>
<input type="submit" name="s" value="计算"/>
</form>
</body>
<ml>
<?php

error_
  //商场打折小程序
  // if (isset($_GET["s"]))
  // $Original_price=$_GET["price"];//原价为500元
  // $discount=$_GET["discount"];   //促销期间85折
  // if ($discount=="九折"){
  // $Current_price=$Original_price*90/100;
  // }  //促销后价格
  // elseif ($discount=="八五折"){
  // $Current_price=$Original_price*85/100;
  // }
  // elseif ($discount=="八折"){
  // $Current_price=$Original_price*80/100;
  // }
  // elseif ($discount=="七五折"){
  // $Current_price=$Original_price*75/100;
  // }
  // else{$Current_price=$Original_price*70/100;
  // }
  // echo "商品原价是：".$Original_price."元<br>";
  // echo "打".$discount."折后促销价是：".$Current_price."元";

  switch ($discount){
    case "九折"
      $Current_price=$Original_price*90/100
      break;
    case "八五折"
      $Current_price=$Original_price*85/100
      break;
    case "八折"
      $Current_price=$Original_price*80/100
      break;
    case "七五折"
      $Current_price=$Original_price*75/100
      break;
    default
      $Current_price=$Original_price*70/100
  }
  echo "商品原价是：".$Original_price."元<br>"
  echo "打".$discount."打折后主销价".$Current_price."远"
?>