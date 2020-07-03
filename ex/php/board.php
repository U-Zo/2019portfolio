<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 1000px;
            height: auto;
            text-align: center;
            margin: 0 auto;
        }

        td {
            border: 1px solid white;
            font-size: 20px;
            overflow: hidden;
            background-color: #c8e6ff;
        }

        td:nth-child(2) {
            width: 600px;
        }

        tr:nth-child(2n - 1) td {
            background-color: #efeff9;
        }

        th {
            border: 1px solid white;
            background-color: #0096ff;
            color: #fff;
            font-size: 20px;
        }

        td span {
            opacity: 0;
            transition: opacity 0.5s;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>번호</th>
        <th>제목</th>
        <th>글쓴이</th>
        <th>날짜</th>
    </tr>
    <?php
    $num = 1;
    $name = "김우조";
    $date = "2018/10/02";

    for ($i = 0; $i <= 10; $i++) {
        $title = "게시글 제목 " . $num;
        ?>
        <tr>
            <td><?= $num ?></td>
            <td><?= $title ?></td>
            <td><?= $name ?></td>
            <td><?= $date ?></td>
        </tr>
        <?php
        $num++;
    }
    ?>
</table>
</body>
</html>