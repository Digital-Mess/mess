<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
</head>
<style type="text/css">
#menu_item{
	background-color: #000000;
}

</style>
<body>
	<div class="ui celled grid">
		<div class="row">
			<div class="column">
				<div class="main_body">
					<div class="ui attached menu">
						<a class="item">
							<i class="sidebar icon"></i>
							Menu
						</a>
					</div>
					<div class="ui bottom attached segment pushable">
						<div class="ui inverted labeled icon left inline vertical sidebar menu" id="menu_item">
							<a class="item">
								<i class="home icon"></i>
								Home
							</a>
							<a class="item">
								<i class="announcement icon"></i>
								Notifications
							</a>
							<a class="item">
								<i class="calendar icon"></i>
								History
							</a>
							<a class="item">
								<i class="help circle icon"></i>
								Help
							</a>
						</div>
						<div class="pusher">
							<div class="ui segment">
								<h2 class="ui center aligned icon header">
									<i class="circular user icon"></i>
									<p>Hello _username</p>
								</h2>
								<!-- Cards -->
								<div class="ui special cards">
									<div class="ui centered card">
										<div class="blurring dimmable image">
											<div class="ui dimmer">
												<div class="content">
													<div class="center">
														<div class="ui inverted button">See</div>
													</div>
												</div>
											</div>
											<img src="http://img1.10bestmedia.com/Images/Photos/242953/10best-lunch_54_990x660_201404250154.jpg">
										</div>
										<div class="content">
											<a class="header">Today's Menu</a>
											<div class="meta">
												<span class="date">Updated at 00:00</span>
											</div>
										</div>
										<div class="extra content">
											<a>
												<i class="coffee icon"></i>
												0 meals served
											</a>
										</div>
									</div>
									<div class="ui centered card">
										<div class="blurring dimmable image">
											<div class="ui dimmer">
												<div class="content">
													<div class="center">
														<div class="ui inverted button">Pay</div>
													</div>
												</div>
											</div>
											<img src="http://cryptocurry.com/wp-content/uploads/2017/04/Top-3-Payment-Methods-That-Offers-More-Anonymity-Than-Bitcoin.jpg">
										</div>
										<div class="content">
											<a class="header">Your balance</a>
											<div class="meta">
												<span class="date">Last payment</span>
											</div>
										</div>
										<div class="extra content">
											<a>
												<i class="credit card alternative icon"></i>
												Total amount.
											</a>
										</div>
									</div>
									<div class="ui centered card">
										<div class="blurring dimmable image">
											<div class="ui dimmer">
												<div class="content">
													<div class="center">
														<div class="ui inverted button">Help</div>
													</div>
												</div>
											</div>
											<img src="http://www.theagapeministries.org/wp-content/uploads/2014/03/internet-help.jpg">
										</div>
										<div class="content">
											<a class="header">Help</a>
											<div class="meta">
												<span class="date">Pending query</span>
											</div>
										</div>
										<div class="extra content">
											<a>
												<i class="help circle icon"></i>
												extra data
											</a>
										</div>
									</div>
								</div>
								<!-- ......................... -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- footer -->
		</div>
	</div>
</body>
<script type="text/javascript">
	$('.main_body .ui.sidebar')
	.sidebar({
		context: $('.main_body .bottom.segment')
	})
	.sidebar('attach events', '.main_body .menu .item').sidebar('setting', 'transition', 'left');
	$('.message .close')
	.on('click', function() {
		$(this).closest('.message').transition('fade');});
	$('.special.cards .image').dimmer({
		on: 'hover'
	});
</script>
</html>