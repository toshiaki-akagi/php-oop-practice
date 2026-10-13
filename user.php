<?php
declare(strict_types=1);

// Userクラスの定義
class User
{
    // プロパティの定義
    public string $name;
    public int $age;

    // コンストラクタメソッドの定義
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // 自己紹介メソッドの定義
    public function introduce(): string
    {
        return "こんにちは、私は{$this->name}です。{$this->age}歳です。<br>";
    }

    // 成人判定メソッドの定義
    public function isAdult(): bool
    {
        return $this->age >= 18;
    }
}

// 各ユーザーのインスタンス生成
$user1 = new User("田中太郎", 25);
$user2 = new User("佐藤花子", 17);
$user3 = new User("鈴木一郎", 30);

// ユーザーの配列定義
$users_array = [$user1, $user2, $user3];

// 各ユーザーの自己紹介表示
foreach ($users_array as $user) {
    echo $user->introduce();
}

echo "<br>";

// 各ユーザーの成人判定・表示
foreach ($users_array as $user) {
    if ($user->isAdult()) {
        echo $user->name . "さんは成人です。<br>";
    } else {
        echo $user->name . "さんは未成年です。<br>";
    }
}