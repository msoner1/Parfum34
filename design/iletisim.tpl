{$meta}
<script type="text/javascript">
 function aktif(){
	 alert("Şu anlık sosyal medya hesaplarımız aktif değildir.");
 }
</script>
<body>

{$header}
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">iletişim</h2>
					<div id="gmap" class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d3011.6595129810053!2d29.039741622703062!3d40.98893598170651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e2!4m0!4m3!3m2!1d40.988849699999996!2d29.0391294!5e0!3m2!1str!2s!4v1435325899788" width="1140" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Yazın</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form action="" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" maxlength="50" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" maxlength="50" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gönder">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Bilgiler</h2>
	    				<address>
	    					<p>Parfum34.com</p>
							<p>Kadıköy / İstanbul</p>
							<p>Email: bilgi@parfum34.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Sosyal Medya</h2>
							<ul>
								<li>
									<a onclick="aktif()"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a onclick="aktif()"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a onclick="aktif()"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a onclick="aktif()"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->

{$footer}
	

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="/js/gmaps.js"></script>
	<script src="/js/contact.js"></script>
</body>
</html>