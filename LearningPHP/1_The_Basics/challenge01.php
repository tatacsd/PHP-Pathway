<?php
$name= "Teresa"; // Heading 1
$city = "NYC";
$movie = "Star Wars"; //Italics
$friend = "George"; //Bold
$candy = "Sour Patch Kids";

echo '<h1>' . $name . "</h1>";
echo '<p>'
. $name
. ' is a girl that lives in '. $city
. ' and loves <i>'. $movie
. '</i>.<br> She likes to hangout with <b>'. $friend
. '</b> and eat lots of ' . $candy;
?>
<br>;
<!-- using double quotes you can add the varables without concatanation -->
<p> Another way</p><br>;
<?php
echo "<p> $name is a girl that lives in $city and loves <i>$movie</i>.<br>
She likes to hangout with <b>$friend</b> and eat lots of $candy </p>";

?>
