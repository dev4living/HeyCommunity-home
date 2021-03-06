<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" contents="dev4living.com">
    <title>HeyCommunity | 免费开源的线上社区解决方案</title>
    <meta name="keywords" content="HeyCommunity, hey-community, SNS, 社区, 社交网络, 开源社区, 开源社交, 社群">
    <meta name="description" content="HeyCommunity 是为中小社群量身打造的线上社区解决方案，其构建的 app 可适用于 iOS / android / windowPhone / Browser 等终端。让人欣喜的是其 app 是开源的 GPLv3 授权，我们为有需要的用户提供定制开发和运营服务">

    <link href="{{ asset('/bower-assets/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower-assets/bootswatch/flatly/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower-assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="{{ asset('bower-assets/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower-assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/javascript/helps.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @include('layouts.common')
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">Hey Community</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav hidden">
                <li class="{{ Request::is('admin') ? 'active' : ''}}"><a href="{{ url('admin.home') }}">Home</a></li>
                <li class="{{ Request::is('admin/timeline*') ? 'active' : ''}}"><a href="{{ url('admin.timeline.index') }}">Timeline</a></li>
                <li class="hide {{ Request::is('admin/activity*') ? 'active' : ''}}"><a href="{{ url('admin.activity.index') }}">Activity</a></li>
                <li class="{{ Request::is('admin/topic*') ? 'active' : ''}}"><a href="{{ url('admin.topic.index') }}">Topic</a></li>
                <li class="{{ Request::is('admin/system*') ? 'active' : ''}}"><a href="{{ url('admin/system/index') }}">System Setting</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <li class="{{ Request::is('sign-up') ? 'active' : ''}}"><a href="{{ url('/sign-up') }}">SignUp</a></li>
                <li class="{{ Request::is('log-in') ? 'active' : ''}}"><a href="{{ url('/log-in') }}">Login</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->site_name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a target="_blank" href="http://{{ Auth::user()->domain }}">Go to domain WebApp</a></li>
                        <li><a target="_blank" href="http://{{ Auth::user()->sub_domain }}">Go to sub_domain WebApp</a></li>
                        <li><a href="{{ url('/log-out') }}">Logout</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>


@yield('content')

</body>
</html>

