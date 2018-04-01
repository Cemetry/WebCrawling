//get title from spider man(from given link))
<?php


//echo file_get_contents("http://www.imdb.com/title/tt0944947/");

include("getData.php");

$content = getData('http://www.imdb.com/title/tt2250912/');

$exploded_content = explode('<h1 itemprop="name" class="">', $content);


$title_exploded_content = explode('<span id="titleYear">',$exploded_content[1]);
$title = $title_exploded_content[0];

echo $title;








?>
