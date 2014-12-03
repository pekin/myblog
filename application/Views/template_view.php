<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{% block title %}{% endblock %}</title>
	
	<!-- HTML 5 for older browsers -->
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Google Webfonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,300,800" rel="stylesheet" type="text/css" />
	
	<!-- Stylesheets -->
	<link href="/css/reset.css" rel="stylesheet" />
	<link href="/css/main.css" rel="stylesheet" />
	<link href="/css/asyncslider_body.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	
	<!-- JavaScripts -->
	<script src="/js/jquery-1.7.1.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="/js/jquery.asyncslider.min.js"></script>
	<script src="/js/hover.zoom.js"></script>
	<script src="/js/jquery.flip.min.js"></script>
	<script src="/js/main.js"></script>	
	<script type="text/javascript" src="/js/fancybox/jquery.fancybox.pack.js?v=2.0.4"></script>
</head>
<body>
    <div class="background_overlay">
	<div class="background">
            <div class="wrapper">
                <header>

                    LOGO
                    <div class="menu">
                        {% include "main/menu_view.php" %}
                    </div>
                    <div class="clear"></div>

                </header>
                    <div class="line"></div>
                    <div class="clear"></div>
            </div>
                <div class="wrapper">
                    <section>
                        <div class="content">
                            <div class="clear"></div>
                        </div>

                        <ul class="features">
                                {% block content %}{% endblock %}
                        </ul>
                        <div class="gallery">
                            <div class="clear"></div>
                        </div>
                    </section>
                        <div class="blocks">
                        </div>
                        <div class="clear"></div>
                    <footer>
                        Блог Александра Ананьева, 2014.  
                            <div class="right_icons">
                                <a class="facebook" href="#">Facebook</a>
                                <a class="twitter" href="#">Twitter</a>
                                <a class="dribbble" href="#">Dribbble</a>
                            </div>
                            <div class="clear"></div>

                    </footer>
                </div>
			<!-- END OF: Wrapper -->
	</div>
    </div>
</body>
</html>