<?php
/**
 * @project demo-template
 * @author  nguyenvanduocit
 * @date    01/31/2015
 */
?>
<script src="js/generator.js"></script>
<style id="animation_style"></style>

<nav id="header" class="teal lighten-1 animated">
	<div class="nav-wrapper">
		<div class="col s12">
			<a style="margin-left: 50px" href="http://laptrinh.senviet.org" class="brand-logo">SEN VIỆT</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="http://wordpresskite.com">WordPress Dev</i></a></li>
				<li><a href="http://laptrinh.senviet.org">Dev tut</a></li>
				<li><a href="http://www.youtube.com/subscription_center?add_user=videohuongdanlt">Youtube</a></li>
				<li>
					<a href="http://www.youtube.com/subscription_center?add_user=videohuongdanlt"><i class="mdi-navigation-more-vert"></i></a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<main>
	<div class="section no-pad-bot" id="index-banner" style="padding-top: 87px">
		<div class="container">
			<h1 class="header center" style="margin: 41px 0 0">IS.JS Example</h1>

			<div class='row center'>
				<h4 class="header col s12 light center">A micro check library</h4>
			</div>
		</div>
		<div class="github-commit">
			<div class="container">
				<div class="commit">
					<span>Latest Commit on Github:&nbsp;&nbsp;<a href="" class="sha"></a>&nbsp;&nbsp;<span class="date"></span></span>
					<a id="github-button" href="https://github.com/arasatasaygin/is.js" class="btn-flat right grey-text text-lighten-5 waves-effect waves-light hide-on-small-only">Github</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container main-content section ">
		<div class="row">
			<div class="col s8">
				<p>Use different browsers, operating systems and different devices to access this page, we will show you that we can know you're using a browser, OS and devices What are.</p>
				<strong>Your infomation :</strong>
				<p id="result"></p>
			</div>
			<div class="col s4 center">
				<p><strong>If you love this, feel free to send me a coffee. Thanks !</strong></p>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
					<input class="heartbeat infinite demoAnimate" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<p>Or an issue to nvduoc@senviet.org</p>
			</div>
		</div>
	</div>
	<div id="video-section" class="row youtube-section teal section">
		<div class="col s12 m12">
			<div class="row center">
				<h3 class="light header light">VIDEO MỚI NHẤT</h3>
				<p class="col s8 offset-s2 caption">Đây là các video hướng dẫn lập trình mới nhất của Sen Việt. Còn rất nhiều video khác tại kênh của Sen Việt, để tiện theo dõi các video này, bạn hãy ấn nút Subscribe phía dưới.</p>
			</div>
			<div class="row" id="youtube-container"></div>
			<div class="row center">
				<a href="http://www.youtube.com/subscription_center?add_user=videohuongdanlt" class="btn-large waves-effect waves-light red darken-1 heartbeat infinite demoAnimate">Xem thêm</a>
			</div>
		</div>
	</div>
</main>
<div id="social_modal" class="modal">
	<div class="modal-content center section">
		<h2 class="header">Do you love this?</h2>

		<div class="divider"></div>
		<div class="social-share" style="margin-top: 30px">
			<div class="fb-like" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
			<div class="plusone-wrap">
				<div class="g-plusone" data-size="tall"></div>
			</div>
			<div class="g-ytsubscribe" data-channel="videohuongdanlt" data-layout="full" data-count="default"></div>
		</div>
	</div>
</div>