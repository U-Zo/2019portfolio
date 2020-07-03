<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 500px;
            height: auto;
            text-align: center;
            margin: 0 auto;
        }

        td {
            border: 1px solid black;
            font-size: 20px;
            overflow: hidden;
        }

        .td {
            transform: translateY(30%);
            transition: transform 0.5s;
        }

        td span {
            opacity: 0;
            transition: opacity 0.5s;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $().ready(function () {
            $("span").each(function (index) {
                var that = index;
                setTimeout(function () {
                    $("span").eq(that).css({
                        opacity: 1
                    });
                    $("td").eq(that + 2).css({
                        transform: "translateY(0)"
                    })
                }, 150 * index);
            });
        });
    </script>
</head>
<body>
<table>
    <tr>
        <td>섭씨</td>
        <td>화씨</td>
    </tr>
    <?php
    for ($c = -15; $c <= 35; $c += 5) {
        $f = $c * 9 / 5 + 32;
        ?>
        <tr>
            <td class="td"><span><?= $c ?>˚C</span></td>
            <td class="td"><span><?= $f ?>˚F</span></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>