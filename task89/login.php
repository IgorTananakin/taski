<?php
session_start();
require __DIR__.'/mysql.php';
include __DIR__.'/functions.php';



if(isset($_POST['submit']))
{
    // getRequesUserBd(db(),$_POST['login']);
    $sql = "SELECT * FROM user WHERE login= '". $_POST['login']."'";
    $sth = $db->prepare($sql);//подготовить
    $sth->execute();//выполнить
    $data = $sth->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $row) {
        $password = $row['password'];
    }
    
    

    // Сравниваем пароли
    if (password_verify( $_POST['password'],$password,)) {
        if (isset($_POST['login']) && isset($_POST['password'])) {
            $_SESSION['user'] = $_POST['login'];
            //var_dump($_SESSION);
            header("Location: /task/task89/index.php");
            exit();
        }
    } else
    {
        echo "Вы ввели неправильный логин/пароль";
    }
    
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/dist/css/adminlte.min.css">
    <title>Document</title>
</head>
<body>

<section class="container">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Форма аторизации</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="/task/task89/login.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Login</label>
                                <input type="text" name="login" class="form-control" id="exampleInputEmail1" placeholder="login">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Пароль</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input class="btn btn-primary" name="submit" type="submit" value="Войти">
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>



<!-- jQuery -->
<script src="css/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="css/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="css/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="css/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="css/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
        $.validator.setDefaults({
            submitHandler: function () {
                alert( "Form successful submitted!" );
            }
        });
        $('#quickForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 5
                },
                terms: {
                    required: true
                },
            },
            messages: {
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
</body>
</html>
