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
        <div class="sidebar-menu selected">
            REPORT
        </div>
        <a href="sign_out.php">
            <div class="sidebar-menu">
                SIGN OUT
            </div>
        </a>
    </div>
    <div class="main-wrapper">
        <div class="content-wrapper">
            <div class="content-header">
                Report
            </div>
            <div class="content-body">
                <table>
                    <tr>
                        <td class="report-left">Sales</td>
                        <td class="report-right">
                            <a href="report_days.php">Days</a>
                            <a href="report_months.php">Months</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="report-left">Items</td>
                        <td class="report-right">
                            <a href="report_tops.php">Top Selling</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="report-left">Employees</td>
                        <td class="report-right">
                            <a href="report_attendance.php">Attendance</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>