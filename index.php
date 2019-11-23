<?php
$articleText = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi earum amet officia recusandae quae doloribus repellendus atque ipsam eveniet magnam, explicabo nostrum labore non facere delectus dolor voluptate suscipit. Et.Vel dolorum inventore sunt! Labore illum sit accusamus, harum repudiandae ipsam in culpa temporibus eius delectus, provident perspiciatis minus pariatur impedit vero ratione tenetur, quaerat dicta dolore eos numquam fuga!";

$articleLink = "./article_full.php";

if (strlen($articleText) > 200) {
    $articlePreview = mb_strimwidth($articleText, 0, 200, "");
    $thirdWord = strrpos(substr($articlePreview, 0, strrpos(substr($articlePreview, 0, strrpos($articlePreview, ' ')-1), ' ')-1), ' ');

    $lastThreeWords = substr($articlePreview, $thirdWord+1);
    $articlePreview = substr($articlePreview, 0, $thirdWord+1);

    $articlePreview = $articlePreview."<a href=\"".$articleLink."\">".$lastThreeWords."..."."</a>";
    echo "<p>".$articlePreview."</p>";
}
else {
    echo "<p>".$articleText."</p>";
}
?>