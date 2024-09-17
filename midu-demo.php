<?php
$name = "Diego";
const LAST_NAME = "Vidal";
$isDev = true;
$age = 27;
$outputHeader = "Hola, soy un desarrollador full stack y mi nombre es $name {LAST_NAME} y tengo $age años";
$bestLanguages = ["JavaScript", "Python", "PHP"];
var_dump($name);
var_dump($isDev);
var_dump($age);
?>

<?php
if ($isDev) {
    echo "<br>";
    echo "I am a developer";
}
$outputAge = match (true) {
    $age < 2 => "You are a baby",
    $age < 28 => "You are 27 years old or younger, but more than 2",
    default => "You are not 27 or 30 years old"
};
echo "<br>";
echo $outputAge;
?>

<h1>
    <?= $outputHeader ?>
    <?= "<br>" ?>
    <?= "This is another way to use echo" ?>
</h1>
<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<p>
    <?= "This text is " . "concatenated" ?>
</p>