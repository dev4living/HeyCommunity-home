<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <link rel="stylesheet" type="text/css" href="bower-assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bower-assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style/home.css">
    <script src="bower-assets/jquery/dist/jquery.min.js"></script>
    <script src="bower-assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>HeyCommunity | 免费开源的线上社区解决方案,致力社群多样精彩社交</title>
    <meta name="keywords" content="HeyCommunity, hey-community, SNS, 社区, 嘿社区, HEY社区, 社交网络, 开源社区, 开源社交, 社群">
    <meta name="description" content="HeyCommunity 是为中小社群量身打造的线上社区解决方案，其构建的 app 可适用于 iOS / android / windowPhone / Browser 等终端。让人欣喜的是其 app 是开源的 GPLv3 授权，我们为有需要的用户提供定制开发和运营服务">
</head>

<body>
    <div class="main-background"></div>

    @include('layouts.common')

    <nav id="nav-xs" class="visible-xs-block text-center" style="max-width:90%; margin:0 auto;">
        <h1 class="h3">HeyCommunity</h1>
        <a href="#home" onclick="$('#main-carousel').carousel(0)">首页</a>
        <a href="#cases" onclick="$('#main-carousel').carousel(1)">场景和案例</a>
        <a href="#prod" onclick="$('#main-carousel').carousel(2)">产品与服务</a>
        <a href="#about" onclick="$(#main-carousel').carousel(3)">关于我们</a>
        <a href="/bbs"><i class="glyphicon glyphicon-fire"></i> 用户社区</a>
        <a target="_blank" href="https://github.com/dev4living/HeyCommunity">Open Sources</a>
    </nav>

    <div id="main-body">
        <div class="section-body container-fluid">
            @yield('content')
        </div>

        <div id="footer" class="container-fluid">
            <div class="row" style="margin-bottom:10px;">
                <div class="col-xs-12 hidden-xs">
                    <div class="pull-right">
                    </div>
                    <nav id="nav-sm">
                        <span>HeyCommunity</span> &nbsp;&nbsp;&nbsp;
                        <a href="#home" onclick="$('#main-carousel').carousel(0)">首页</a>
                        <a href="#cases" onclick="$('#main-carousel').carousel(1)">场景和案例</a>
                        <a href="#prod" onclick="$('#main-carousel').carousel(2)">产品与服务</a>
                        <a href="#about" onclick="$(#main-carousel').carousel(3)">关于我们</a>
                        <a target="_blank" href="/bbs"><i class="glyphicon glyphicon-fire"></i> 用户社区</a>
                        <a target="_blank" href="https://github.com/dev4living/HeyCommunity">Open Sources</a>

                        <div class="pull-right hidden-xs hidden-sm" style="height:20px; margin-left:30px;">
                            <iframe src="https://ghbtns.com/github-btn.html?user=dev4living&repo=HeyCommunity&type=fork&count=true" frameborder="0" scrolling="0" width="82px" height="20px"></iframe>
                        </div>
                        <div class="pull-right" style="height:20px;">
                            <iframe src="https://ghbtns.com/github-btn.html?user=dev4living&repo=HeyCommunity&type=star&count=true" frameborder="0" scrolling="0" width="82px" height="20px"></iframe>
                        </div>
                    </nav>

                    <div class="pull-right sns">
                        <span>
                            <i class="fa fa-qq" aria-hidden="true"></i>
                            <a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=f9ee4a4ca4a3e44c2bd6d6c5da9423fa63f46f150205d468299cdcce32606b71">QQ群: (242078519)</a>
                        </span>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a target="_blank" href="http://mp.weixin.qq.com/s?__biz=MzIwNjM5MDQ5NA==&mid=100000001&idx=1&sn=dd2021fc926d7dc32fe83feeadf396d3&scene=1&srcid=0908kgRYlY7AoVbgxrfzi3bq#rd" class="wechat-a">
                            <i class="fa fa-weixin" aria-hidden="true"></i> 微信公众号: HEY社区
                            <div class="wechat-box">
                                <img src="http://v1.hey-community.com/images/wechat-qrcode.jpg">
                            </div>
                        </a>
                    </div>
                    <div>
                        &copy;2015 - 2016 Protobia.tech
                        &nbsp;&nbsp;&nbsp;
                        ICP: 15015443-8
                    </div>
                </div>

                <div class="section-nav col-xs-12 visible-xs-block text-center">
                    <hr style="margin-top:0; margin-bottom:10px; border-color:#fefefe;">
                    <div>
                        <span>
                            <i class="fa fa-qq" aria-hidden="true"></i>
                            <a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=f9ee4a4ca4a3e44c2bd6d6c5da9423fa63f46f150205d468299cdcce32606b71">QQ群: (242078519)</a>
                        </span>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a target="_blank" href="http://mp.weixin.qq.com/s?__biz=MzIwNjM5MDQ5NA==&mid=100000001&idx=1&sn=dd2021fc926d7dc32fe83feeadf396d3&scene=1&srcid=0908kgRYlY7AoVbgxrfzi3bq#rd" class="wechat-a">
                            <i class="fa fa-weixin" aria-hidden="true"></i> 微信公众号: HEY社区
                        </a>
                    </div>
                    <div>
                        <span>HeyCommunity</span> &nbsp;&nbsp;&nbsp;
                        &copy;2015 - 2016 Protobia.tech
                    </div>
                    <div class="" style="height:20px; margin-top:8px;">
                        <iframe src="https://ghbtns.com/github-btn.html?user=dev4living&repo=HeyCommunity&type=star&count=true" frameborder="0" scrolling="0" width="100px" height="20px"></iframe>
                        <iframe src="https://ghbtns.com/github-btn.html?user=dev4living&repo=HeyCommunity&type=fork&count=true" frameborder="0" scrolling="0" width="82px" height="20px"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    window.onhashchange = function() {
        setCarouselItem();
    }

    $(function() {
        setCarouselItem();
    });

    function setCarouselItem() {
        var currentHash = location.hash;
        $('#nav-sm a').removeClass('active');
        $('#nav-xs a').removeClass('active');
        $('.main-carousel-bg').removeClass('isHomePage');

        switch (currentHash) {
            case '#home':
                $('.main-carousel-bg').addClass('isHomePage');
                $('#nav-sm a[href*="home"]').addClass('active');
                $('#nav-xs a[href*="home"]').addClass('active');
                $('#main-carousel').carousel(0)
                break;
            case '#cases':
                $('#nav-sm a[href*="cases"]').addClass('active');
                $('#nav-xs a[href*="cases"]').addClass('active');
                $('#main-carousel').carousel(1)
                break;
            case '#prod':
                $('#nav-sm a[href*="prod"]').addClass('active');
                $('#nav-xs a[href*="prod"]').addClass('active');
                $('#main-carousel').carousel(2)
                break;
            case '#about':
                $('#nav-sm a[href*="about"]').addClass('active');
                $('#nav-xs a[href*="about"]').addClass('active');
                $('#main-carousel').carousel(3)
                break;
            case '#jobs':
                $('#nav-sm a[href*="jobs"]').addClass('active');
                $('#nav-xs a[href*="jobs"]').addClass('active');
                $('#main-carousel').carousel(4)
                break;
            default:
                $('.main-carousel-bg').addClass('isHomePage');
        }
    }
    </script>
</body>
</html>
