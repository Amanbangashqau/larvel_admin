<!DOCTYPE html>
<html>

<head>
    <title>Admin Login | Josh Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="{{URL::asset('css/pages/login2.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('vendors/iCheck/css/minimal/blue.css')}}" rel="stylesheet" />
    <!-- styles of the page ends-->
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form accept-charset="UTF-8" method="post" action="/login" role="form">
                           @csrf
                            <fieldset>
                                <div class="form-group input-group">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="mail" data-size="18" data-c="#484848" data-hc="#484848" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" required>
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="key" data-size="18" data-c="#484848" data-hc="#484848" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me" class="minimal-blue" required> Remember Me
                                    </label>
                                </div>
                                <input type="submit" value="Sign In" class="btn btn-lg btn-primary btn-block"/>
                                <!-- <a href="index.html" class="btn btn-lg btn-primary btn-block"></a> -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{URL::asset('js/app.js')}}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js-->
    <script src="{{URL::asset('js/TweenLite.min.js')}}"></script>
    <script src="{{URL::asset('vendors/iCheck/js/icheck.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/pages/login2.js')}}" type="text/javascript"></script>
    <!-- end of page level js-->
</body>

</html>
