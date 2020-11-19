
<?php
foreach (range(1, 10) as $n) {
    $input = 'XXXXXXXXRandCode.ashx';
    $output = "$n.png";
    file_put_contents($output, file_get_contents($input));
    echo "<h2>$input</h2>";
    echo "$n\n";
}

?>
