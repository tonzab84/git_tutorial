<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Tinker Template
http://www.templatemo.com/tm-506-tinker
-->
        <title>LED</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/lightbox.css">

        


        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand scroll-top"><em>L</em>ED MATRIX</a>
                </div>
                <!--/.navbar-header-->
                
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->
    <section>
    <div class="parallax-content baner-content" id="home">
    <div class="container">

    <form class="well form-horizontal" action="mqtt.php" method="POST"  id="contact_form" target="iframe_target">
    <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
<fieldset>

<!-- Form Text -->
<body style="background: #e0e0d1">
<nav class="navbar navbar-default" ">
  <div class="container-fluid"  style="background: #e0e0d1">

<legend>ข้อความ สำหรับขึ้นหน้าจอ </legend>

<!-- Text input-->
    <div class="form-group" >
  <label class="col-md-4 control-label">ข้อความ:</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group" >
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="text" id="text" placeholder="กรอกข้อความสำหรับขึ้นหน้าจอ" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- radio checks mode-->
 <div class="form-group" ">
                        <label class="col-md-4 control-label">ภาษา:</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="ln" id="dln" value="EN1" checked/> อังกฤษ
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="ln" id="dln" value="TH1" /> ไทย
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="ln" id="dln" value="L1" /> ลาว
                                </label>
                            </div>
                        </div>
                    </div>

                    
<!-- radio checks mode-->
 <div class="form-group" style="background: #e0e0d1;">
                        <label class="col-md-4 control-label">โหมด:</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="mode" id="mode" value="0" checked /> ภาพพักหน้าจอ
                                    <br>
                                     <strong><mark>(￣▽￣)(￣▽￣)(￣▽￣)</mark></strong>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="mode" id="mode" value="1" /> ข้อความเลื่อนไปข้างหน้า
                                    <marquee  behavior="slide" direction="right" loop="30" >Example</marquee>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="mode" id="mode" value="2" /> ข้อความเลื่อนย้อนหลัง
                                    <marquee  behavior="slide" direction="left" loop="30" >Example</marquee>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="mode" id="mode" value="3" /> ข้อความนิ่ง
<br>
                                      <mark  direction="right" >Example</mark>

                              </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input  type="radio" name="mode" id="mode" value="4"    /> ข้อความกระพริบ
                                        <p ><blink>Example</blink></p>

                              </label>

                            </div>
                        </div>
                    </div>

<!-- color -->
  
<div class="form-group" >
  <label class="col-md-4 control-label">สี:</label>
       <div class="col-md-4">
        <div class="containWidget">
        <img class="colorWidget" src="images/custom/select.png" border="0" />
        <input name="color" type="hidden" id="color" value="#00FF00" />
        </div>

  </div>
</div>

<!-- Button -->
<div class="form-group" style="background: #e5e5cc;">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <input type="submit" value="Send" id="send" class="btn btn-warning">
  </div>
</div>

</fieldset>
</form>
</div>

        
    </section>     
    </div>
        <div id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>Contact Us</h4>
                        <div class="line-dec"></div>
                        <p><p> มหาวิทยาลัยแม่โจ้ 63 หมู่4 
          ต.หนองหาร อ.สันทราย 
          จ.เชียงใหม่ 50290<br>
          สาขาวิชาวิทยาการคอมพิวเตอร์ 
          คณะวิทยาศาสตร์<br>
        Call: +6653873890-3 <br>
        Fax : +6653873898 </p></p>
                        
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    <div id="map">
    	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
        -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.3904993035062!2d99.01196171521106!3d18.896794342689045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da234acab26d49%3A0x673310a15bca3d4a!2z4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmMIOC4oeC4q-C4suC4p-C4tOC4l-C4ouC4suC4peC4seC4ouC5geC4oeC5iOC5guC4iOC5iQ!5e0!3m2!1sth!2sth!4v1516196248379" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="logo">
                        
                        <p>Copyright &copy; 2018 CSMJU[422]
                      | Design: <span>CSMJU</span></p>
                    </div>
                </div>
                
                <div class="col-md-2 col-sm-12">
                    <div class="connect-us">
                        <h4>Get Social with us</h4>
                        <ul>
                            <li><a href="https://www.facebook.com/search/top/?q=%E0%B8%AA%E0%B8%B2%E0%B8%82%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E%E0%B8%B4%E0%B8%A7%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C%20%E0%B8%A1.%E0%B9%81%E0%B8%A1%E0%B9%88%E0%B9%82%E0%B8%88%E0%B9%89" target="_parent"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.google.com/+templatemo" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">

    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 50;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }

    </script>
</body>
</html>