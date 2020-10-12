<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 8 PHP</title>
</head>

<body>
    <table>
        <?php
        for ($show = 1; $show <= 9; $show++) {
            echo "<td>";
            // Diamond Atas
            for ($a = 10; $a > 0; $a--) {
                for ($i = 1; $i <= $a; $i++) {
                    echo "_";
                }
                for ($a1 = 10; $a1 > $a; $a1--) {
                    echo "x";
                }
                for ($a2 = 10; $a2 > $a; $a2--) {
                    echo "x";
                }
                echo "<br>";
            }
            for ($b = 0; $b <= 10; $b++) {
                for ($j = 1; $j <= $b; $j++) {
                    echo "_";
                }
                for ($b1 = 10; $b1 > $b; $b1--) {
                    echo "x";
                }
                for ($b2 = 10; $b2 > $b; $b2--) {
                    echo "x";
                }
                echo "<br>";
            }

            // Diamond Bawah
            for ($c = 10; $c > 0; $c--) {
                for ($k = 1; $k <= $c; $k++) {
                    echo "_";
                }
                for ($c1 = 10; $c1 > $c; $c1--) {
                    echo "x";
                }
                for ($c2 = 10; $c2 > $c; $c2--) {
                    echo "x";
                }
                echo "<br>";
            }
            for ($d = 0; $d <= 10; $d++) {
                for ($l = 1; $l <= $d; $l++) {
                    echo "_";
                }
                for ($d1 = 10; $d1 > $d; $d1--) {
                    echo "x";
                }
                for ($d2 = 10; $d2 > $d; $d2--) {
                    echo "x";
                }
                echo "<br>";
            }
        }
        echo "</td>";
        ?>
    </table>
</body>

</html>