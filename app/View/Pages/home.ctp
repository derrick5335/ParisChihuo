<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <script type="text/javascript">
//<![CDATA[

    $(document).ready(function(){  
        
        $('#myCarousel').carousel({
          interval: 2000
        });
                
    }); 


    /*
    ** google analytics
    */
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28041840-1']);
    _gaq.push(['_setDomainName', 'chihuo.fr']);
    _gaq.push(['_trackPageview']);

    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();



    //]]>
    </script>

    <title></title>
</head>

<body>
    <div class="modal fade" id="loginWin">
        <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>

            <h3>登陆</h3>
        </div>

        <div class="modal-body">
            <form>
            
                <input type="text" placeholder="电子邮件" />
                <input type="password" placeholder="密码" />
                
            </form>
        </div>

        <div class="modal-footer">
            <a href="#" class="btn btn-primary">登陆</a> <a onclick="$('#loginWin').modal('hide');" class="btn">取消</a>
        </div>
    </div>

    <div id="container">
        <div id="header">
            <div class="navbar navbar-fixed-top">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <ul class="nav">
                                <li style="list-style: none"><a class="brand" href="#">巴黎吃货</a></li>

                                <li class="active"><a href="#">主页</a></li>

                                <li><a href="#">订位</a></li>

                                <li><a href="#">寻找餐馆</a></li>

                                <li style="list-style: none; display: inline">
                                    <form class="navbar-search pull-left">
                                        <input type="text" class="search-query" placeholder="搜索" />
                                    </form>
                                </li>
                            </ul>

                            <ul class="nav pull-right">
                                <li class="pull-right"><a data-toggle="modal" href="#loginWin">登陆</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="body">
            <center>
                <div class="hero-unit">
                    <h1>巴黎吃货网</h1>

                    <p>旨在为巴黎留学生提供最全面的中餐馆信息服务</p>
                </div>

                <div id="myCarousel" class="carousel slide" style="width: 800px;">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="http://media.xineurope.com/forum/day_081212/20081212_e7c3f5cf42306df7abaax95RzuNYfjbe.jpg" alt="" />

                            <div class="carousel-caption">
                                <h4>绝代MIX拼盘</h4>

                                <p>四种美味，一网打尽!</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="http://media.xineurope.com/forum/day_081212/20081212_44075b0784452942f03cf0wDgaoc4PS7.jpg" alt="" />

                            <div class="carousel-caption">
                                <h4>四川著名小吃：伤心凉面！</h4>

                                <p>在炎热的夏天，吃一碗正宗的四川伤心凉面简直巴适的很嘛！凉面虽用料普通，但制作及调味精细，筋斗的面条加上鲜嫩豆芽，配以独家SAUCE，清凉滑润，爽口不腻，咸甜酸辣俱全，吃后满嘴生香，是夏季消暑佳品。</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="http://media.xineurope.com/forum/day_081211/20081211_6a4dbb51a3637381d96bJJyU2E2wCtHv.jpg" alt="" />

                            <div class="carousel-caption">
                                <h4>绝代凉拌鸡</h4>

                                <p>辣子鸡干香麻辣,开胃下饭,配上冰啤酒，让你享受“冰火两重天”！！！ 绝对带劲，入口不忘，吃完睡觉那是相当的稳当！ 本店精选成都优良香料---爆辣朝天辣椒面，正宗汉源花椒。用料十足！分量十足！丰富的口感，带给你家乡的味道！</p>
                            </div>
                        </div>
                    </div><a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a> <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                </div>
            </center>
        </div>
    </div><script type="text/javascript">
//<![CDATA[

    $('#myCarousel').carousel({
      interval: 6500
    },"cycle")
    //]]>
    </script>
</body>
</html>
