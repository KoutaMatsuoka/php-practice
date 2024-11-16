<?php
// Q1 変数と文字列
$name = "松岡";
$newName = "私の名前は「$name"."」です。\n";

echo $newName;

// Q2 四則演算
$x = 5;
$y = 4;
$num = $x * $y;
var_dump($num);
var_dump($num/2);

// Q3 日付操作
date_default_timezone_set("Asia/Tokyo");

$today = date("Y年m月d日 H時i分s秒");
$time = "現在時刻は、 $today"." です。\n";

echo $time;

// Q4 条件分岐-1 if文
$device = "Linux";

if ($device === "windows" || $device === "mac") {echo "使用OSは、$device"."です。\n";}else {echo "どちらでもありません。\n";}

// Q5 条件分岐-2 三項演算子
$age = 20;
$message = ($age > 18) ? "成人です。\n" :" 未成年です。\n";

echo $message;

// Q6 配列
$kanto = ["東京都" , "神奈川県" , "埼玉県" , "千葉県" , "茨城県" , "栃木県" , "群馬県"];

echo "$kanto[2]と$kanto[3]は関東地方の都道府県です。\n";

// Q7 連想配列-1
$kanto2 = ["東京都" => "新宿区" , "神奈川県" => "横浜市" , "埼玉県" => "さいたま市" , "千葉県" => "千葉市" , "茨城県" => "水戸市" , "栃木県" => "宇都宮市" , "群馬県" => "前橋市"];

foreach ($kanto2 as $capital) {
    echo $capital. "\n";
}

// Q8 連想配列-2
foreach ($kanto2 as $prefecture => $capital) {
    if($prefecture !== "埼玉県"){
        continue;
    }
    echo $prefecture."の県庁所在地は、$capital"."です。\n";
    break;
}

// Q9 連想配列-3
$capitalArea = [ "東京都" => "新宿区" , "神奈川県" => "横浜市" , "埼玉県" => "さいたま市" , "千葉県" => "千葉市" , "茨城県" => "水戸市" , "栃木県" => "宇都宮市" , "群馬県" => "前橋市" , "静岡県" => "静岡市" , "山梨県" => "甲府市" ];

foreach ($capitalArea as $prefecture => $capital) {
    switch ($prefecture){
        case "東京都":echo $prefecture."の県庁所在地は、$capital"."です。\n";
        break;
        case "神奈川県":echo $prefecture."の県庁所在地は、$capital"."です。\n";
        break;
        case "埼玉県":echo $prefecture."の県庁所在地は、$capital"."です。\n";
        break;
        case "千葉県":echo $prefecture."の県庁所在地は、$capital"."です。\n";
        break;
        case "茨城県":echo $prefecture."の県庁所在地は、$capital"."です。\n";
        break;
        case "栃木県":echo $prefecture."の県庁所在地は、$capital"."です。\n";
        break;
        case "群馬県":echo $prefecture."の県庁所在地は、$capital"."です。\n";
        break;
        default:echo $prefecture."は関東地方ではありません。\n";
    }
}

// Q10 関数-1
function hello($name)
{
    echo $name."さん、こんにちは。\n";
}

hello("金谷");
hello("安藤");

// Q11 関数-2
function calcTaxInPrice($price)
{
    $taxInPrice = $price*1.1;
    echo $price."円の商品の税込価格は$taxInPrice"."円です。\n";
}
calcTaxInPrice(1000);

// Q12 関数とif文
function distinguishNum($number){
    if($number % 2 == 0){
        echo $number."は偶数です。\n";
    }else{
        echo $number."は奇数です。\n";
    }
}
distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrate($grade = "E"){
    switch ($grade) {
        case "A":
            echo "合格です。\n";
            break;
        case "B":
            echo "合格です。\n";
            break;
        case "C":
            echo "合格ですが追加課題があります。\n";
            break;
        case "D":
            echo "不合格です。\n";
            break;
        default:
            echo "判定不明です。講師に問い合わせてください。\n";
            break;
    }
}
evaluateGrate("B");
evaluateGrate();

?>