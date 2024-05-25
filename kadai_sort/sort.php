<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        function sort_2way($array, $order) {
            if ($order === '昇順') {
                echo '昇順にソートします。<br>';
                sort($array);
                foreach ($array as $num) {
                    echo $num. '<br>';
                }
            } else {
                echo '降順にソートします。<br>';
                    rsort($array);
                foreach ($array as $num) {
                    echo $num. '<br>';
                }
            }
        }
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        sort_2way($nums, '昇順');
        sort_2way($nums, '降順');

        ?>
    </p>
</body>

</html>