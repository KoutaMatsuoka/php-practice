<?php
// Q1 tic-tac問題
function tic_tac($count = 0){
    for ($count = 0; $count <= 100; $count++) {
        if ($count === 0) {echo "1から100までのカウントを開始します\n\n";
            continue;
        }elseif ($count % 4 === 0 && $count % 5 === 0) {
            echo "tic-tac\n";
            continue;
        }elseif ($count % 4 === 0) {
            echo "tic\n";
            continue;
        }elseif ($count % 5 === 0) {
            echo "tac\n";
            continue;
        }{
            echo $count. "\n";
        }
    }
}

tic_tac();

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

var_dump($personalInfos);

//問題1
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel']."です。\n";

//問題2
$count = 0;

foreach($personalInfos as $person){
    $count = $count + 1;
    echo $count . '番目の' . $person['name'] . 'のメールアドレスは' . $person['mail'] . 'で、電話番号は' .$person['tel'] . "です。\n";
}
unset($person);

//問題3
$ageList = [25, 30, 18];
foreach($personalInfos as $person => &$ageNumber){
    $ageNumber['age'] = $ageList[$person];
}
unset($person);

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo "授業に出席しました。\n";
    }
}

$stu120= new Student(120, '山田');

echo '学籍番号'.$stu120->studentId.'番の生徒は'.$stu120->studentName."です。\n";

// Q4 オブジェクト-2
class Student2
//「attendメソッド以外は書き換えないでください。」との指定でしたが、同一ファイル内で二回同一クラスを定義するとエラーが発生するため暫定的にクラス名を変更しています
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lecture)
    {
        echo $this->studentName.'は'.$lecture.'の授業に参加しました。学籍番号：'.$this->studentId."\n";
    }
}

$yamada = new Student2(120, '山田');
$yamada -> attend('PHP');

// Q5 定義済みクラス

date_default_timezone_set("Asia/Tokyo");
$datetime = new DateTime();

//問題1
echo $datetime -> modify('-1 month')
               -> format('Y-m-d')."\n";

//問題2
$date1 = new DateTime();
echo $date2 = (new DateTime('1992-04-25')) -> diff($date1)
                                           -> format('あの日から%a日経過しました。') . "\n";

?>