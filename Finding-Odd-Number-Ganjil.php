<!-- CARA KE 1  -->

<?php
$number = 51;

if ($number > 50) {
    echo "Max input is 50";
} else {
    for ($i = 1; $i <= $number; $i++) {
        $str = '';
        if ($i % 2 !== 0) {
            echo $str .= 'Odd ';
        } else {
            echo  $str .= $i . ' ';
        }
    }
}



?>
<!-- ------------------- -->

<!-- GANTI BARIS -->
<?php
echo "<br>";
?>
<!-- ------------------- -->


<!-- CARA KE 2 -->
<?php

function get(int $number): string
{
    if ($number > 50) {
        return 'Max input is 50';
    }

    $str = '';
    for ($i = 1; $i < $number; $i++) {
        if ($i % 2 !== 0) {
            $str .= 'Odd ';
        } else {
            $str .= $i . ' ';
        }
    }
    return $str;
}
echo get(5);

?>
<!-- ------------------- -->