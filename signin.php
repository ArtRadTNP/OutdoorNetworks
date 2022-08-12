<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="login-pf">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="icon" href="img/favicon.ico">
    <title>Log in to brestoblgas</title>
</head>
<body>
<div id="kc-container" class="">
        <div id="kc-container-wrapper" class="">

            <div id="kc-header" class="col-xs-12 col-sm-8 col-md-8 col-lg-7">
                <div id="kc-header-wrapper" class="">        brestoblgas
</div>
            </div>


            <div id="kc-content" class="col-sm-12 col-md-12 col-lg-12 container">
                <div id="kc-content-wrapper" class="row">


                    <div id="kc-form" class="col-xs-12 col-sm-8 col-md-8 col-lg-7 login">
                        <div id="kc-form-wrapper" class="">
            <form id="kc-form-login" class="form-horizontal" method="post">
                <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <label for="username" class="control-label">Username</label>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                            <input tabindex="1" id="username" class="form-control" name="username" value="" type="text" autofocus autocomplete="off" required="required" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <label for="password" class="control-label">Password</label>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                        <input tabindex="2" id="password" class="form-control" name="password" type="password" autocomplete="off"  required="required" />
                    </div>
                </div>

                <div class="form-group">
                    <div id="kc-form-options" class="col-xs-4 col-sm-5 col-md-offset-4 col-md-4 col-lg-offset-3 col-lg-5">
                        <div class="">
                        </div>
                    </div>

                    <div id="kc-form-buttons" class="col-xs-8 col-sm-7 col-md-4 col-lg-4 submit">
                        <div class="">
                            <input tabindex="4" class="btn btn-primary btn-lg" name="login" id="kc-login" type="submit" value="Log in"/>
                        </div>
                        <?php include("login.php"); ?>
                     </div>
                </div>
            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="author" >
        <a id="author" href="https://vk.com/artradtnp" target="new">
        © ArtRadTNP
        </a>    
    </div>
</body>
</html>