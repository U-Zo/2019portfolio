<?php
include("db.php");
$table_no = $_POST["table_no"];
session_start();
?>
<script>
    $(document).ready(function () {
        $("#main-dish").click(function () {
            $(this).addClass("selected");
            $("#side-dish").removeClass("selected");
            $("#drink").removeClass("selected");
            $("#list-main_dish").addClass("visible");
            $("#list-side_dish").removeClass("visible");
            $("#list-drink").removeClass("visible");
        });

        $("#side-dish").click(function () {
            $(this).addClass("selected");
            $("#main-dish").removeClass("selected");
            $("#drink").removeClass("selected");
            $("#list-main_dish").removeClass("visible");
            $("#list-side_dish").addClass("visible");
            $("#list-drink").removeClass("visible");
        });

        $("#drink").click(function () {
            $(this).addClass("selected");
            $("#main-dish").removeClass("selected");
            $("#side-dish").removeClass("selected");
            $("#list-main_dish").removeClass("visible");
            $("#list-side_dish").removeClass("visible");
            $("#list-drink").addClass("visible");
        });
        
        $(".list-food td").each(function () {
            $(this).click(function () {
                var item_name = $(this).text();
                if (item_name == "")
                    return;
                $.ajax({
                    url: "add.php",
                    type: "post",
                    data: {
                        table_no: "<?=$table_no?>",
                        item_name: item_name
                    },
                    success: function (data) {
                        $(".order-list").append(data);
                    }
                });
            });
        });
    });
</script>
<div class="store-table" style="width: 96%; height: 96%;">
    <div class="table-header">
        <a href="javascript:window.location.reload(true);" style="position:absolute; left: 5%; font-size: 25px; text-decoration: none; color: inherit;">
            ◀
        </a>
        Table No. <?= $table_no + 1 ?>
    </div>
    <div class="table-body">
        <div class="table-order">
            <div class="order-left">
                <table class="order-list">
                    <tr style="font-weight: 600;">
                        <td>Item</td>
                        <td>Price</td>
                        <td>EA</td>
                    </tr>
                </table>
            </div>
            <div class="order-right">
                <table>
                    <tr style="font-weight: 600;">
                        <td id="main-dish" class="selected">Main Dish</td>
                        <td id="side-dish">Side Dish</td>
                        <td id="drink">Drink</td>
                        <td></td>
                    </tr>
                </table>
                <table id="list-main_dish" class="list-food visible">
                    <?php
                    $sql = "select * from tbl_item where category_name = 'Main Dish'";
                    $rs = $db->query($sql);
                    $count = 0;
                    while ($row = $rs->fetch_array()) {
                    if ($count % 4 == 0 || $count == 0) { ?>
                    <tr>
                        <?php
                        } ?>
                        <td><?= $row['item_name'] ?></td>
                        <?php
                        $count++;
                        }
                        while ($count % 4 != 0) { ?>
                            <td></td>
                            <?php
                            $count++;
                        }
                        ?>
                </table>
                <table id="list-side_dish" class="list-food">
                    <?php
                    $sql = "select * from tbl_item where category_name = 'Side Dish'";
                    $rs = $db->query($sql);
                    $count = 0;
                    while ($row = $rs->fetch_array()) {
                    if ($count % 4 == 0 || $count == 0) { ?>
                    <tr>
                        <?php
                        } ?>
                        <td><?= $row['item_name'] ?></td>
                        <?php
                        $count++;
                        }
                        while ($count % 4 != 0) { ?>
                            <td></td>
                            <?php
                            $count++;
                        }
                        ?>
                </table>
                <table id="list-drink" class="list-food">
                    <?php
                    $sql = "select * from tbl_item where category_name = 'Drink'";
                    $rs = $db->query($sql);
                    $count = 0;
                    while ($row = $rs->fetch_array()) {
                    if ($count % 4 == 0 || $count == 0) { ?>
                    <tr>
                        <?php
                        } ?>
                        <td><?= $row['item_name'] ?></td>
                        <?php
                        $count++;
                        }
                        while ($count % 4 != 0) { ?>
                            <td></td>
                            <?php
                            $count++;
                        }
                        ?>
                </table>
            </div>
        </div>
        <div class="table-functions">

        </div>
    </div>
</div>