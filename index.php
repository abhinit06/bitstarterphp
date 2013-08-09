<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>The "Thank You" app!</title>
		<meta name="viewport"  content="width=device-width, initial-scale=1.0" >
		<link type="text/css" rel="stylesheet" href="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fbootstrap-combined.no-icons.min.css">
		<link type="text/css" rel="stylesheet" href="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fbootstrap-2.3.2.css">
		<link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css">
		<script src="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fbootstrap.js"></script>
		<script src="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fjquery.js"></script>
		<link type="text/css" src="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fsocial-buttons.css">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		<style type="text/css">
		@media (min-width: 980px) {
			body{
				padding-top:60px;
			}
			.leftblock{
				border-right: 1px white solid;
			}
			.rightblock{
				border-left: solid 1px white;
			}
			
		}
		@media (max-width: 480px) {
			body{
				padding-top: 60px;
			}
			.leftblock{
				margin-bottom: solid 1px white;
			}
			.rightblock{
				margin-top: solid 1px white;
			} 
		}
		.pitch{
			padding: 2.5% 0%;
		}
		.actions{
			background-color: #343434;
			padding: 2% 0%;
		}
		.order, .social {
			padding: 2% 0%;
		}
		.thermometer, .order, .social, .statistics{
			text-align: center;
		}
		.thermometer{
			height: 14px;
			margin: 5% 0%;
		}
		.statistics h3,.statistics p{
			color: white;
		}
		
		p{
			font-size: 18px;
			line-height: 24px;
		}
		p.lead{
			padding-top:1.5%;
			font-size: 24px;
			line-height: 30px;
		}
		.pic1, .pic2{
			padding: 2.5% 0%;
		}
		.copy{
			padding: 2.5% 0%;
			text-align: justify;
		}
		.heading, .subheading{
			font-family: 'Ubuntu', sans-serif;
			text-align: center;
		}		
		.footer{
			color: #cccccc;
			text-align: center;
			font-size: 11px;
		}
		</style>
	</head>
	<body>

		<!-- Mobile fiendly navigation bar adapted from starter template -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
			        <div class="container">
	  		           <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			           </button>
			           <a class="brand" href="#">Thank You app</a>
				   <div class="nav-collapse collapse">
			              <ul class="nav">
				              <li class="active"><a href="#">Home</a></li>
				              <li><a href="contactus.html">Contact</a></li>
				      </ul>
				   </div><!--/.nav-collapse -->
			        </div>
		      </div>
		</div>
		
		<div class="container">

			<div class="row-fluid heading">
				<div class="span12">
					<h1>The "Thank You" app!</h1>
				</div>
			</div>

			<div class="row-fluid subheading">
				<div class="span12">
					<p class="lead">Acknowledging Facebook wishes made easy.</p>
				</div>
			</div>

			<div class="row-fluid pitch">
				<div class="span5 offset1 video">
					<img class="img-polaroid" src="http://i.imgur.com/63pGkfH.png?1">
				</div>

				<div class="span5 actions">
					<div class="span10 offset1">
						<div class="statistics">
							<div class="span4 leftblock">
								<h3>1000</h3><p>backers</p>
							</div>
							<div class="span4 centerblock">
								<h3>$6000</h3><p>of $10000</p>
							</div>
							<div class="span4 rightblock">
								<h3>10</h3><p>day left</p>
							</div>
						</div>
					</div>


					<div class="span10 offset1">
					    <div class="thermometer">
						<div class="progress active">
							<div class="bar bar-success" style="width: 60%;"></div>
							<div class="bar bar-warning" style="width: 40%;"></div>
						</div>
					    </div>
					</div>
					
					<div class="span6 offset3 order">
						<button class="btn btn-success btn-large">Preorder</button>
					</div>

					<div class="span8 offset2 social">
						<button class="btn btn-twitter"><i class="icon-twitter"></i> | Twitter</button>
						 <button class="btn btn-facebook"><i class="icon-facebook"></i> | Facebook</button>
					</div>

				</div>
			</div>

			<div class="row-fluid section1">
				<div class="span5 offset1 pic1">
					<img class="img-polaroid" src="http://i.imgur.com/MWhJyKT.png">
				</div>
				<div class="span5 copy">
				<p>
			Ever felt drowned in your friends' wishes on an occasion?<br/><br/> You wanted to reply to each wish but they were simply too many to reply to?<br/><br/>Wishing your Facebook friends on happy occasions(birthday, anniversary...) is easy, why should acknowledging those wishes be any difficult?<br/><br/>Thank You app makes it easy to reply to your friends' wishes, while still retaining the personal touch!
				</p>
				</div>
			</div>

			<div class="row-fluid faq">
				<div class="span10 offset 1">
					<h3>FAQ</h3>
					<div class="accordion" id="accordion1">
					  <div class="accordion-group">
					    <div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="accordion1" href="#collapseOne">What does FAQ stand for?</a>
					   </div>
					   <div id="collapseOne" class="accordion-body collapse">
					     <div class="accordion-inner">
						Frequenly Asked Questions 
					     </div>
					   </div>
					 </div>
					</div>
					<div class="accordion" id="accordion2">
                                          <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="accordion2" href="#collapse
Two">What's a Frequently Asked Question?</a>
                                           </div>
					   <div id"collapseTwo" class="accordion-body collapse">
                                             <div class="accordion-inner">
                                                People Ask Frequenly Asked Questions
                                             </div>
					   </div>
                                         </div>
                                        </div>
				</div>
			</div>

			<div class="row-fluid footer">
				<div class="span12">
				<p>License held by abhinit06</p>
				</div>
			</div>
		</div>
	</body>
</html>
