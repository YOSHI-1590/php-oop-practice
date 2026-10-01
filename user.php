<?php 

class User
{
    public string $name;
    public int $age;

    //コンストラクタを定義
    public function __construct(string $name, int $age)
    {
        //引数で受け取った値を、プロパティに設定する
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() { //自己紹介を表示
        echo "こんにちは、私は" . $this->name . "です。" . $this->age . "歳です。<br>";
    }
}

echo "<h2>ユーザー管理プログラム</h2>";
echo "<h3>自己紹介</h3>";

//newする際に、コンストラクタの引数を渡す
$user1 = new User ("田中　太郎" , 25);
//インスタンス生成と同時に、プロパティが初期化されている
echo $user1->introduce();

$user2 = new User ("佐藤　花子" , 17);
echo $user2->introduce();

$user3 = new User ("鈴木　一郎" , 30);
echo $user3->introduce();

echo "<h3>成人判定</h3>";

{
    public function isAdult()
    {
        return $this->age >= 18;
    }
}

public function isAdult  {
    $status = $user->isAdult() ? '成人' : '未成年';
    echo "{$user->name}さんは{$status}です。\n";
}

?>
