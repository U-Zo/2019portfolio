<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>자바 스크립트 달력</title>
    <style>
        *, *::after, *::before {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            background: #7b979f;
        }

        header {
            display: flex;
            height: 130px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            align-items: center;
            justify-content: center;
            text-shadow: 1px 1px 3px black;
        }

        section {
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.8);
            width: 550px;
            align-items: center;
            margin: 0 auto;
            margin-top: 20px;
            overflow: hidden;
        }

        #calendar {
            position: relative;
            display: flex;
            justify-content: center;
            height: 330px;
            font-size: 1.5rem;
        }

        .cal-bottom {
            margin: 0 auto;
            width: 433px;
            display: flex;
            justify-content: space-between;
        }

        button {
            font-family: 'Open Sans Condensed', sans-serif;
            text-decoration: none;
            display: block;
            position: relative;
            width: 80%;
            margin: 0 auto;
            border: 1px solid #ddd;
            text-align: center;
            background: #fff;
            color: #000;
            font-size: 0.9rem;
        }

        .sunday {
            color: red;
        }

        .saturday {
            color: blue;
        }

        .calendar td {
            width: 60px;
            height: 40px;
            text-align: center;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        var today = new Date();
        $(document).ready(function () {
            displayCalendar();
            $("#pre").click(function () {
                today = new Date(today.getFullYear(), today.getMonth() - 1);
                $("#calendar").animate({
                    opacity: 0,
                    left: 300
                }, "nomal", function () {
                    $(this).css("left", -300);
                    displayCalendar();
                    $(this).animate({
                        opacity: 1,
                        left: 0
                    }, "nomal");
                });
            });
            $("#next").click(function () {
                today = new Date(today.getFullYear(), today.getMonth() + 1);
                $("#calendar").animate({
                    opacity: 0,
                    left: -300
                }, "nomal", function () {
                    $(this).css("left", 300);
                    displayCalendar();
                    $(this).animate({
                        opacity: 1,
                        left: 0
                    }, "nomal");
                });
            });

            function displayCalendar() {
                var calBody = "";
                var leepYearDay = "";
                var dayCount = 1;
                var month = today.getMonth();
                var year = today.getFullYear();
                var monthName = ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"];
                var nextDate = new Date(year, month);
                var blankDay = nextDate.getDay();
                var weekday = blankDay;

                if (month == 1) {
                    if ((year % 100 != 0) && (year % 4 == 0) || (year % 400 == 0)) {
                        leepYearDay = 29;
                    } else {
                        leepYearDay = 28;
                    }
                }

                var lastDay = ["31", "" + leepYearDay + "", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31"];
                var numOfDays = lastDay[month];

                while (blankDay > 0) {
                    calBody += "<td></td>";
                    blankDay--;
                }

                while (dayCount <= numOfDays) {
                    if (weekday > 6) {
                        weekday = 0;
                        calBody += "</tr><tr>";
                    }

                    if (weekday == 0)
                        calBody += "<td class='sunday'>" + dayCount + "</td>";
                    else if (weekday == 6)
                        calBody += "<td class='saturday'>" + dayCount + "</td>";
                    else
                        calBody += "<td>" + dayCount + "</td>";

                    weekday++;
                    dayCount++;
                }

                var calendarBody =
                    "<table class='calendar'>" +
                    "<tr>" +
                    "<th colspan='7'>"
                    + year + "년 " + monthName[month] +
                    "</th>" +
                    "</tr>" +
                    "<tr>" +
                    "<td class='sunday'>일</td>" +
                    "<td>월</td>" +
                    "<td>화</td>" +
                    "<td>수</td>" +
                    "<td>목</td>" +
                    "<td>금</td>" +
                    "<td class='saturday'>토</td>" +
                    "</tr>" +
                    "<tr>" +
                    calBody +
                    "</tr>" +
                    "</table>";

                $("#calendar").html(calendarBody);
            }
        });
    </script>
</head>
<body">
<header>
    <h2>Calendar</h2>
</header>
<section>
    <div id="calendar"></div>
    <div class="cal-bottom">
        <button id="pre"><</button>
        <button id="next">></button>
    </div>
</section>
</body>
</html>