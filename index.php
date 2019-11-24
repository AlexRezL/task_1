<?php
$articleLink = "http://localhost/task_1/article_full.php";

$articleText = file_get_contents($articleLink);

$articleText = strip_tags($articleText); //удаляем теги из текста на случай, если они будут в статье

if (mb_strlen($articleText, "utf-8") > 200) {
    $articlePreview = trim(mb_strimwidth($articleText, 0, 200, ""));
    $thirdWord = strrpos(substr($articlePreview, 0, strrpos(mb_substr($articlePreview, 0, strrpos($articlePreview, ' ')-1, "utf-8"), ' ')-1), ' ');

    $lastThreeWords = mb_substr($articlePreview, $thirdWord+1);
    $articlePreview = mb_substr($articlePreview, 0, $thirdWord+1, "utf-8");

    $articlePreview = $articlePreview."<a href=\"".$articleLink."\">".$lastThreeWords."..."."</a>";
    echo "<p>".$articlePreview."</p>";
}
else {
    echo "<p>".$articleText."</p>";
}
?>