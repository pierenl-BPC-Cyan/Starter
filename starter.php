<!DOCTYPE html>
<html>
<body>
<?php
$number = rand(6,1);
echo "You rolled $number ! <br>";

if ($number == 1) {
    echo "Almost Snake Eyes !";
}
elseif ($number == 6) {
    echo "Winner !";
}
else {
    echo "Better luck next time";
}
</body>
</html>
