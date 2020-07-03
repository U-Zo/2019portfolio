<?php
include("db.php");
include("session_check.php");
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Your WPoS</title>
    <link rel="stylesheet" type="text/css" href="css/wpos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<header>
    <div class="logo">
        <p>Your WPoS</p>
    </div>
    <div class="now">
        <p>Total price: ## / Using tables: ##</p>
    </div>
</header>
<section>
    <div class="sidebar">
        <a href="index.php">
            <div class="sidebar-menu">
                STORE
            </div>
        </a>
        <a href="tables.php">
            <div class="sidebar-menu">
                TABLES
            </div>
        </a>
        <div class="sidebar-menu selected">
            ITEMS
        </div>
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
        <div class="content-wrapper">
            <div class="content-header">
                Items
            </div>
            <div class="content-body">
                <?php
                $sql = "select * from tbl_item";
                $rs = $db->query($sql);
                $count = 0;
                ?>

                <table class="content-body-table">
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Add</th>
                    </tr>
                    <?php
                    while ($row = $rs->fetch_array()) { ?>
                        <tr>
                            <td><?= $row['item_no'] ?></td>
                            <td><?= $row['item_name'] ?></td>
                            <td><?= $row['category_name'] ?></td>
                            <td><?= $row['item_price'] ?>$</td>
                            <td></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>