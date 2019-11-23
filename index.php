<?php
$articleText = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi earum amet officia recusandae quae doloribus repellendus atque ipsam eveniet magnam, explicabo nostrum labore non facere delectus dolor voluptate suscipit. Et.Vel dolorum inventore sunt! Labore illum sit accusamus, harum repudiandae ipsam in culpa temporibus eius delectus, provident perspiciatis minus pariatur impedit vero ratione tenetur, quaerat dicta dolore eos numquam fuga!";

$articleLink = "./article_full.php";

$articlePreview = mb_strimwidth($articleText, 0, 200, "");

$f = strrpos($articlePreview, ' ');
$s = strrpos(substr($articlePreview, 0, $f-1), ' ');
$t = strrpos(substr($articlePreview, 0, $s-1), ' ');

$lastThreeWords = substr($articlePreview, $t+1);
$articlePreview = substr($articlePreview, 0, $t+1);

$articlePreview = $articlePreview."<a href=\"".$articleLink."\">".$lastThreeWords.".."."</a>";

echo "<p>".$articlePreview."</p>";
?>