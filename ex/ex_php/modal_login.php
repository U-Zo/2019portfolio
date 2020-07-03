<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Modal Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        .modal-header, h4, .close {
            background-color: #5cb85c;
            color: white !important;
            text-align: center;
            font-size: 30px;
        }

        .modal-footer {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Modal Login Example</h2>
    <button class="btn btn-default btn-lg" id="myBtn">Login</button>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="padding: 35px 50px;">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4>
                        <span class="glyphicon glyphicon-lock"></span>
                        <span>Login</span>
                    </h4>
                </div>
                <div class="modal-body" style="padding: 40px 50px;">
                    <form role="form">
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user">Username</span></label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open">Password</span></label>
                            <input type="password" class="form-control" id="psw" placeholder="Enter password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="" checked>Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off">Login</span></button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
                    <p>Not a member?</p>
                    <p>Forgot<a href="#">Password?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $().ready(function () {
        $("#myBtn").click(function () {
            $("#myModal").modal();
        });
    });
</script>
</body>
</html>