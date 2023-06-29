<php?

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>ブログフォーム</h2>
  <form action="select.php" method="POST">
    <div class="jumbotron">
      <fieldset>
        <p>ブログタイトル:</p>
        <input type="text" name="title">
        <p>ブログ本文:</p>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <br>
        <p>投稿日:</p>
        <input type="date" name="date">
        <br>
        <p>カテゴリ:</p>
        <select name="category">
          <option value="JavaScript">JavaScript</option>
          <option value="PHP">PHP</option>
          <option value="ジーズ">ジーズ</option>
        </select>
        <br>
        <input type="radio" name="publishStatus" value="publish" checked>公開
        <input type="radio" name="publishStatus" value="unpublish">非公開
        <br>
        <input type="submit" value="送信">
      </fieldset>
    </div>
  </form>
</body>
</html>
