<!DOCTYPE Html>
<Html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/Html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XERO| </title>
    <!-- Bootstrap -->
    <base href="{{asset( '' )}}">
    <link href="bower_components/demo-bower/assets/admin/vendors_style/bootstrap/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <!-- Font Awesome -->
    <link href="bower_components/demo-bower/assets/admin/vendors_style/font-awesome/css/font-awesome.min.css"
          rel="stylesheet">
    <!-- NProgress -->
    <link href="bower_components/demo-bower/assets/admin/vendors_style/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="bower_components/demo-bower/assets/admin/vendors_style/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="bower_components/demo-bower/assets/admin/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="login">
<div>
    @if (Session::has( 'danger' ))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Title!</strong> {{Session::get( 'danger' )}}
        </div>
    @endif
    <div class="clearfix"></div>
    <div class="login_wrapper">
        <div id="register" class="animate form">
            <section class="login_content">
                {!! Form::open(['method'=> 'POST', 'route' => 'store']) !!}
                <h1>Create Account</h1>
                <div>
                    {!! Form::text('name', old('name'), [ 'class'=>'form-control','placeholder'=>'Username','required'=>'' ]) !!}
                </div>
                <div>
                    {!! Form::email('email', old('email'), [ 'class'=>'form-control','placeholder'=>'email','required'=>'' ]) !!}
                </div>
                <div>
                    {!! Form::text('address',old('address'), [ 'class'=>'form-control','placeholder'=>'address','required'=>'' ]) !!}
                </div>
                <div>
                    {!! Form::text('phone', old('phone'), [ 'class'=>'form-control','placeholder'=>'phone','required'=>'' ]) !!}
                </div>
                <div>
                    {!! Form::password('password', [ 'class'=>'form-control','placeholder'=>'password','required'=>'' ]) !!}
                </div>
                <div>
                    {!! Form::submit('Submit', [ 'class'=>'btn btn-default submit' ]) !!}
                </div>
                <div class="clearfix"></div>
                <div class="separator">
                    <p class="change_link">Already a member ?
                        <a href="{!! route( 'login' ) !!}" class="to_register"> Log in </a>
                    </p>
                    <div class="clearfix"></div>
                    <br/>
                    <div>
                        {!! Html::image( 'assets/upload/logos/black-logo.png', 'All Laravel Logo' ) !!}
                        <p>©2018 {{ trans('config.AllRightsReserved') }}. XERO! </p>
                    </div>
                </div>
                {!! Form::close() !!}
            </section>
        </div>
    </div>
</div>
</body>
</Html>
