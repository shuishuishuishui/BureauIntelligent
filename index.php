<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
        

        <!-- STYLESHEETS START -->
        <!-- Bootstrap style sheet -->
        <link rel="stylesheet" href="css/bootstrap.css" />
        <!-- Sunshine specific style sheet -->
        <link rel="stylesheet" href="css/styles.css" />
        <!-- STYLESHEETS END -->
   		<!-- font-awesome BEGINS -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
   		<!-- font-awesome END -->
		<link href="css/Index.css" rel="stylesheet">
        <!-- FONTS START -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
        <!-- FONTS END -->
        
        <!-- <script src="js/jquery-1.10.2.min.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <script type="text/javascript">
           $(document).ready(function(){
               	$('#air-btn').click(function(){
               		  if ( $('#air').css('visibility') == 'hidden' )
               		    $('#air').css('visibility','visible');
               		  else
               		    $('#air').css('visibility','hidden');
               		});
           	});

           $(document).ready(function(){
              	$('#temperature-btn').click(function(){
              		  if ( $('#temperature').css('visibility') == 'hidden' )
              		    $('#temperature').css('visibility','visible');
              		  else
              		    $('#temperature').css('visibility','hidden');
              		});
          	});

           $(document).ready(function(){
             	$('#co-btn').click(function(){
             		  if ( $('#co').css('visibility') == 'hidden' )
             		    $('#co').css('visibility','visible');
             		  else
             		    $('#co').css('visibility','hidden');
             		});
         	});
       </script>

<title>Bureau Intelligent</title>

</head>

<body>

	<div class="container" style=" background-image: url('../photo/home.jpg') fixed no-repeat;margin-top: 0px; width: 100%;height:100%;align:center">
<!-- MAIN NAV START -->
		<div class="row" >
			<nav class="navbar-fixed-top" style="border-radius:0 0 5px 5px;background:#BDBDBD; width: 100%;margin:0 auto;">
				  <!-- 		<div class="navbar-fixed-top/navbar-static-top">         固定在网页顶部-->
				  <div style="width: 80%; margin:0 auto;">
  
        			<ul class="nav navbar-nav">	<!-- 下拉单 -->
        				<li class="navbar-header">
                            <a class="navbar-brand" style="left: 0" href="#header">Bureau Intelligent</a>
                        </li>
        			</ul>
        			<div class="collapse navbar-collapse" id="navbar-collapse-1">
            			<ul class="nav navbar-nav navbar-right" >
            				<li>
            					<a href="#header">
            						<i class="fa fa-home" aria-hidden="true"></i>home
            					</a>
            				</li>
            				<li class="dropdown">
            					<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
            						<i class="fa fa-cog" aria-hidden="true"></i>Settings
            						<!-- <b class="caret"></b> -->
            					</a>
            					<ul class="dropdown-menu"> 
            						<li><a href="#">Action</a></li>
            						<li><a href="#">Another Action</a></li>
            						<li class="divider"></li>
            						<li><a href="#">Something else</a></li>
            					</ul>
            				</li>
            				<li>
            					<a href="#sante">
            						<i class="fa fa-area-chart" aria-hidden="true"></i>Statistic
            					</a>
            				</li>
            				<li>
            					<a href="#light">
            						<i class="fa fa-toggle-on" aria-hidden="true"></i>Controle
            					</a>
            				</li>
            				<li>
            					<a href="#about">
            						<i class="fa fa-thumbs-up" aria-hidden="true"></i>About Us
            					</a>
            				</li>
            				<li class="dropdown">
            					<a href="#" class="dropdown-toggle"  data-toggle="dropdown">
            						<i class="fa fa-user" aria-hidden="true"></i>Me
<!--             						<b class="caret" ></b> -->
            					</a>
            					<ul class="dropdown-menu"> 
            						<li><a href="#">Créer un mode</a></li>
            						<li class="divider"></li>
            						<li><a href="#">Préférences</a></li>
            						<li><a href="#">Paramètres</a></li>
            						<li><a href="#">Déconnexion</a></li>
            						<li class="divider"></li>
            						<li><a href="#">Aide</a></li>
            						<li><a href="#">Signaler un problème</a></li>
            					</ul>
            				</li>
                   	    <!--<li> 
            					<img class="img-circle" style="height:auto; width:25px; margin-top: 12.5px;" src = "data:image/png;base64,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" style=/>
                			</li>    -->
            			</ul>
            		</div>
        		</div>
			</nav>
		</div>
<!-- MAIN NAV END -->
<!-- HOME START -->
		
        <header id="header">
            <div class="container" >
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-5" id="intro"  >
                        <h1><strong>Welcome</strong> back!</h1>
                        <br>
                        <!-- TICKER START -->
                        <div class="ticker">
                            <h3><strong>Bereau</strong> intelligent</h3>
                            <h3><strong>Bright</strong> ideas.</h3>
                            <h3><strong>Amazing</strong> results.</h3>
                        </div>
                        <!-- TICKER END -->
                        <p>Be tough: Hard work beats talent when talent doesn't work hard.</p>
                        <br>
                        <a href="#about" class="btn btn-transparent scroll"><strong>LEARN MORE</strong></a>
                        <a href="#about" class="btn btn-link btn-white scroll">Get Help</a>
                    </div>
                </div>
            </div>
        </header>
	</div>
		
<!-- HOME END -->
	<div style="width:100%;background: url('../bureauintelligent/photo/services.jpg') fixed no-repeat;"> 
		<div class="row">
		<h2></h2>
		</div>
		<div class="row" style="position:static;width:100%;  margin:0 auto; border-radius:5px;padding: 25px 25px 25px 25px; background-color:#D8D8D8;background-color: rgba(255,255,255,0.7);width:90%;horiz-align:middle; margin:50px auto 30px auto;">
			<div class="view" style="margin:25px;">
				<div>
					<h2 class="sante" style="text-align:left;">Health Care System</h2>
				</div>
				<div class="col-md-12 column ui-sortable" id="sante">
					<div>
        				<h2></h2>
        			</div>
					<div class="box box-element">
					 	<div style="width:100%;height:125px">
							<div id="table" style="visibility:hidden">
                        			<?php include 'carousel.php';?>
                        	</div>
<!--                         	????  为什么去掉这个carousel反而不能点了。。-->


							<span style="height:100%;width:auto;border:0px solid #00F;">
                            <!-- border:1px solid #00F; -->
								<?php include 'test3.php'; ?>
								<a id="temperature-btn">Temperature:<?php echo $temps;?> °C</a>
								<div id="temperature" style="visibility:hidden;width: 30%">
                        			<img alt="First slide" style="width: 100%;margin-top:0%" src="barGraph.php" ></img>
                        		</div>
							</span>
						
                        	
							<?php
                            include 'readdata.php';
                            ?>
                            
							<span style="left:40%;height:100%;width:auto;border:0px solid #00F;">
								<div id="air-btn">Air quality:<?php echo $air ;?>%</div>
								<img id="svg1" src="/bureauintelligent/photo/dustevil<?php echo $quality ;?>.png"  style="border:0px solid #00F;height:80%;max-width:auto;">
								
								<div id="air" style="visibility:hidden;width: 50%">
                        			<img alt="Second slide" style="width: 100%;margin-top:-40%" src="graphAir.php" ></img>
                        		</div>
							</span>
							
							
						<!-- 	可用opacity改变透明度 -->
							<span style="left:80%;border:0px solid #00F;height:100%;width:auto;">
								<div id="co-btn">Density of CO:<?php echo $density ;?>%</div>
								<img id="jpg1" src="/bureauintelligent/photo/poisin4.png" style="border:0px solid #00F;height:80%;max-width:auto;-webkit-mask-image:-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,<?php echo $co ;?>)), to(rgba(0,0,0,0.05)));"/>
								<div id="co" style="visibility:hidden;width: 150%">
                        			<img alt="Fourth slide" style="width: 100%;margin-top:-40%" src="graphCO.php" ></img>
                        		</div>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	
		<div id="light" style="border-radius:5px;padding: 40px; background-color:#D8D8D8;background-color: rgba(255,255,255,0.7);width:90%;horiz-align:middle; margin:50px auto 30px auto;">
			<?php include 'light.php';?>
		</div>
		
		
		
		<div id="about" class="row" style="border-radius:5px;padding: 40px; background-color:#FFFFFF;background-color:rgba(0,0,0,0.5);width:90%;horiz-align:middle; margin:50px auto 30px auto;">
			<div>
				<h2 class="about-us">ABOUT THIS GROUP</h2>
			</div>
			<div class="col-md-3 column ui-sortable" style="border:0px solid #00F;"> 
				<div class="widthandlength" style="border:0px solid #00F;">
					<h3 class="member-name" style="position:relative">Simon</h3>
    			
    				<div class="" >
    					<img class="grey" style="opacity:1;position:relative" alt="simon" src="/bureauintelligent/photo/simon.jpg">
    				</div>
<!-- 					<p><a class="btn" href="#">View details >></a></p> -->
				</div>
			</div>
			<div class="col-md-3 column ui-sortable" style="border:0px solid #00F;"> 
				<div class="widthandlength">
					<h3 class="member-name">Paul</h3>
    				
    				<div class="">
    					<img class="grey" alt="paul" src="/bureauintelligent/photo/paul.jpg">
    				</div>
<!-- 					<p><a class="btn" href="#">View details >></a></p> -->
				</div>
			</div>
			<div class="col-md-3 column ui-sortable" style="border:0px solid #00F;">
				<div class="widthandlength">
					<h3 class="member-name">Limin</h3>
    				
    				<div class="">
    					<img class="grey" alt="limin" src="/bureauintelligent/photo/limin.jpg">
    				</div>
<!-- 					<p><a class="btn" href="#">View details >></a></p> -->
				</div>
			</div>
			<div class="col-md-3 column ui-sortable" style="border:0px solid #00F;"> 
				<div class="widthandlength">
					<h3 class="member-name">Shui</h3>
    			
    				<div class="">
    					<img class="grey" alt="shui" src="/bureauintelligent/photo/shui.jpg">
    				</div>
<!-- 					<p><a class="btn" href="#">View details >></a></p> -->
				</div>
			</div>
		</div>
		<br>
		<div style="text-align:center;color:grey;padding:25px">
			<a >© Copyright. All rights reserved. Made with extreme care by BI group.BI</a>
		
		</div>
		
		
	</div>


	 <!-- PRE-LOADER JAVASCRIPT START -->
    <script src="js/pace.min.js" type="text/javascript"></script>
</body>
</html>