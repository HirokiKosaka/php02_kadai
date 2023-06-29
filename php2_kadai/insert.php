
<?php

//1. POSTデータ取得
$blogTitle = $_POST['title'];
$blogContent = $_POST['content'];
$blogDate = $_POST['date'];

//2. DB接続します
try {
  //ID:'root', Password: xamppは 空白 ''
  // $pdo = new PDO('mysql:dbname=******;charset=utf8;host=localhost','******','******');
  // 上のやつが下になる
  $pdo = new PDO('mysql:dbname=gs_kadai2;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成

// ↓からSQLを記述していく
// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO 
                      gs_bm_table(id, title, content, date, category) 
                      VALUES (NULL, :title, :content, sysdate(), :category
                      )");

// $stmt->bindValue('******', *****, ****************);
// $stmt->bindValue('******', *****, ****************);
// $stmt->bindValue('******', *****, ****************);

$stmt->bindValue(':title', $blogTitle, PDO::PARAM_STR);
$stmt->bindValue(':content', $blogContent, PDO::PARAM_STR);
$stmt->bindValue(':date', $blogDate, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．登録が成功した場合の処理 index.phpへリダイレクト
  header('Location: form.html');


}
?>
