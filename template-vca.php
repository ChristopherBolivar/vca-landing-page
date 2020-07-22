<?php /* Template Name: Inktel Virtual Catering Assistant*/ ?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inktel | Virtual Catering Assistant Portal</title>
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vca/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vca/css/vca.css">
		<script src='https://www.google.com/recaptcha/api.js'></script>

<script type="text/javascript">(function(o){var b="https://api.autopilothq.com/anywhere/",t="7e89163559c34ec4bde197a5892052962f2dcea3f89e41559a37e8a12c7ba628",a=window.AutopilotAnywhere={_runQueue:[],run:function(){this._runQueue.push(arguments);}},c=encodeURIComponent,s="SCRIPT",d=document,l=d.getElementsByTagName(s)[0],p="t="+c(d.title||"")+"&u="+c(d.location.href||"")+"&r="+c(d.referrer||""),j="text/javascript",z,y;if(!window.Autopilot) window.Autopilot=a;if(o.app) p="devmode=true&"+p;z=function(src,asy){var e=d.createElement(s);e.src=src;e.type=j;e.async=asy;l.parentNode.insertBefore(e,l);};y=function(){z(b+t+'?'+p,true);};if(window.attachEvent){window.attachEvent("onload",y);}else{window.addEventListener("load",y,false);}})({});</script>


	</head>
	<body>
		<div class="header-wrapper">
			<div class="header-top">
				<div class="container">
							<div class="row">
							<div class="col-xs-6">
								<div class="logos">
								<a href="https://www.inktel.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/vca/img/inktel-logo.png" alt="Inktel - Contact Center Solutions"></a></li>
								
							</div>
								</div>

							<div class="col-xs-6">
								<div class="social-media">
								<ul>
									<li><a href="https://twitter.com/inktel" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.facebook.com/inktel" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://www.instagram.com/inktel/" target="_blank"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
								</div>
					</div>
				</div>
			</div>
			<!-- header top -->

			<!-- header mid -->
			<div class="header-mid">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="header-mid-left">
								
								<h3> <span>Thank you</span> for your interest in the <span>Virtual Catering Assistant</span> (VCA) program!  Please submit the information for your restaurant below to let us know if you’d like to <span>enroll.</span></h3>
							</div>
						</div>

						<div class="col-md-4 col-sm-5">
							<!-- header mid right -->
							<div class="header-mid-right">

							</div>
							<!-- header mid right -->
						</div>
					</div>
				</div>
			</div>
			<!-- header mid -->
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
				<polygon fill="white" points="0,100 100,0 100,100"/>
			</svg>
			<section id="large-circle">
				&nbsp;
			</section>
			<section id="medium-circle">
				&nbsp;
			</section>
		</div>
		<!-- header wrapper -->
		
		<!-- content area -->
		<div class="content-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
							<div class="col-sm-12 col-md-6">
								<h3 class="form-headline">Please enter store details below</h3>
								</div>
								<div class="col-sm-12 col-md-6">
									<h4 class="form-headline hotline">VCA Account Manager Hotline:</h4> 
									<h3 class="hotline" ><a href="tel:+1786-482-4208">(786) 482-4208</a></h3>
								</div>
							</div>
							<p class="disclaimer">DISCLAIMER: Please note that submitting an interest form below does not guarantee immediate enrollment for your restaurant into the VCA program.  Within 2 weeks of submitting your interest, you’ll receive email confirmation of next steps for enrollment.  The timing for your restaurant to begin receiving the VCA services will be based upon the date you submit interest and how many other restaurants are also awaiting enrollment.</p>
							<?php echo do_shortcode('[contact-form-7 id="20" title="Virtual Catering Assistant"]'); ?>
						 	
						</div>
						
					</div>
				</div>
			<div class="welcome-packet">
			<h4> If you’d like further information, you can review our VCA welcome packet</h4>
			<a target="_blank" href="https://www.inktel.com/wp-content/uploads/VCAWelcomePacket.pdf"><div class="btn packet-btn">View Packet</div></a>
		</div>
		</div>
		<!-- content area -->
		
		<!-- footer -->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="copyright">
							<p>&copy; <?php echo date('Y'); ?> Inktel Contact Center Solutions. All Rights Reserved.</p>
						</div>

						<div class="phone">
							<div class="social-media">
								<ul>
									<li><a href="https://twitter.com/inktel" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.facebook.com/inktel" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://www.instagram.com/inktel/" target="_blank"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php wp_footer(); ?>
		<script>
			let nextPrev = (event,direc) =>{
			let validated = true
			//Grabbing all the inputs, tabs, current tab, and number of inputs within the tab
			let inputs = Array.from(document.querySelectorAll('.wpcf7-form-control'))
			let tabs = Array.from(document.querySelectorAll('.tab'))
			let currentTab = tabs.filter((tab,i)=>{
				if(tab.classList.length <= 1){	
					return tab
				}
			})[0]
			let currentTabIndex = Number(currentTab.id.slice(4))
			let numberOfInputs = Array.from(currentTab.childNodes).filter((child,i)=>{
				if(child.className === 'form-group'){
					return child
				}
			})
			let requiredInputs = ''
			let filteredInputs = ''

			if(direc === 'next'){
				filteredInputs = inputs.filter((input,i)=>{
					if(Number(input.parentNode.parentNode.parentNode.id.slice(4)) === currentTabIndex & input.defaultValue != 'Submit'){
						return input
					}
				})

				let requiredInputs = filteredInputs.filter((item,i)=>{
					if(item.attributes[5] && item.attributes[5].nodeValue === 'true'){
						return item
					}
				})
				//validate required inputs
				requiredInputs.forEach((input,i)=>{
					console.log(input.attributes[0].nodeValue)
					if(input.value.split("").length === 0){
						input.style.backgroundColor = "red"
						input.style.color = 'white !important'
						input.classList.add('form-validator')
						input.placeholder = 'Please do not leave this field empty'
						validated = false
					}
					if(input.attributes[0].nodeValue === 'tel' && input.value.split("").length < 10 ){
						input.value = ""
						input.style.backgroundColor = "red"
						input.style.color = 'white !important'
						input.classList.add('form-validator')
						input.placeholder = 'Please provide a valid 10 digit phone number'
						validated = false
					}
					if(input.attributes[0].nodeValue === 'email'){
						console.log(input)
					}
			
				})
				
				if(validated){
					currentTab.classList.add('deactive')
					currentTab.nextElementSibling.classList.remove('deactive')
				}
			}
			//end if for 'next'
			}


		</script>
	</body>
</html>
