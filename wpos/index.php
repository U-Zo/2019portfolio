<?php
include ("db.php");
include ("session_check.php");
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Your WPoS</title>
    <link rel="stylesheet" type="text/css" href="css/wpos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            var len = $(".store-table").length;
            if (len < 13 && len > 4) {
                $(".store-table").css({
                    width: "30%",
                    height: "20%"
                });
            }
            else if (len == 4)
                $(".store-table").css({
                    width: "45%",
                    height: "45%"
                });
            else if (len == 3)
                $(".store-table").css({
                    width: "30%",
                    height: "40%"
                });
            else if (len == 2)
                $(".store-table").css({
                    width: "45%",
                    height: "45%"
                });

            $(".store-table").each(function (index) {
                var that = index;

                $(this).click(function () {
                    $.ajax({
                        url: "store_table.php",
                        type: "post",
                        data: {
                            table_no: that
                        },
                        success: function (data) {
                            $(".store").html(data);
                        }
                    });
                });
            });
        });
    </script>
</head>
<body>
<header>
    <div class="logo">
        <a href="index.php">Your WPoS</a>
    </div>
    <div class="now">
        <p>Total price: ## / Using tables: ##</p>
    </div>
</header>
<section>
    <div class="sidebar">
        <div class="sidebar-menu selected">
            STORE
        </div>
        <a href="tables.php">
            <div class="sidebar-menu">
                TABLES
            </div>
        </a>
        <a href="items.php">
            <div class="sidebar-menu">
                ITEMS
            </div>
        </a>
        <a href="employees.php">
            <div class="sidebar-menu">
                EMPLOYEES
            </div>
        </a>
        <a href="report.php">
            <div class="sidebar-menu">
                REPORT
            </div>
        </a>
        <a href="sign_out.php">
            <div class="sidebar-menu">
                SIGN OUT
            </div>
        </a>
    </div>
    <div class="main-wrapper">
        <div class="store">
            <?php
            $sql = "select * from tbl_table";
            $rs = $db->query($sql);
            $count = 0;

            while ($row = $rs->fetch_array()) {?>
                <div class="store-table">
                    <div class="table-header">
                        Table No. <?=$row['table_no']?> (<?=$row['table_cap']?>)
                    </div>
                    <div class="table-body">
                    </div>
                </div>
                <?php
                $count++;
            }
            ?>
        </div>
    </div>
</section>
</body>
</html>