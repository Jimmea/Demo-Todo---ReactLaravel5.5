@extends(VIEW_FRONTEND_MASTER)

@section('css')
<link href="https://secureimages.allrecipes.com/assets/deployables/v-1.55.0.3383/account-css.bundled.Css" rel="stylesheet">
@stop

@section('content')
<div class="container-content body-content">
	<script>var adManager = {};</script>
	<div data-role="page" id="account_login">
		<div class="authentication">
			<section>
				<section class="subheader">
					<div id="fb-root"></div>
					<h1 class="sign--social" data-targetorigin="http://allrecipes.com/" data-state="3319801167791113796088389538320227744027282705811430136368604877953640">Sign in with social.</h1>
					<h4 class="signin-subhead">New and existing Allrecipes users.</h4>
					<div id="authenticationError" class="mobile-auth-error"></div>
					<div class="login-facebook" style="cursor: pointer">
						<a href="#" target="_self"><span></span></a>
					</div>
					<div class="login-google">
						<div id="___signin_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 33px; height: 36px; position: relative;"><button style="opacity: 0; z-index: 10000; left: 0px; top: 0px; position: absolute; cursor: pointer; outline: 0px; width: 216px; height: 55px;">Đăng nhập bằng Google</button><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 33px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 36px;" tabindex="0" vspace="0" width="100%" id="I0_1484759617513" name="I0_1484759617513" src="https://apis.google.com/u/0/_/widget/render/signin?usegapi=1&amp;width=iconOnly&amp;theme=dark&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.login%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.profile.emails.read&amp;clientid=363274647518-g085sh00jkmgpbfphoj1rlim2btbn07s.apps.googleusercontent.com&amp;redirecturi=postmessage&amp;accesstype=offline&amp;cookiepolicy=single_host_origin&amp;state=3319801167791113796088389538320227744027282705811430136368604877953640&amp;loginreferrerurl=https%253a%252f%252fallrecipes.com%252faccount%252fauthenticationwelcome%252f&amp;origin=https%3A%2F%2Fallrecipes.com&amp;url=https%3A%2F%2Fallrecipes.com%2Faccount%2Fsignin%2F&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.i9DKvZu-nGA.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCPdp8JZKVI18gBLZf0984CBk8KMKw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conauth%2Conload&amp;id=I0_1484759617513&amp;parent=https%3A%2F%2Fallrecipes.com&amp;pfname=&amp;rpctoken=36289734" data-gapiattached="true" title="Đăng nhập bằng Google"></iframe></div>
						<span class="social-provider"></span>
					</div>
					<script>
						$(document).on('touchstart click', '.login-facebook', function (event) {
						    event.stopPropagation();
						    event.preventDefault();
						    if (event.handled !== true) {
						        facebookLoginAction('https%3a%2f%2fallrecipes.com%2faccount%2fauthenticationwelcome%2f', 'https://allrecipes.com/account/authenticationwelcome/');
						        event.handled = true;
						    } else {
						        return false;
						    }
						});
					</script>
				</section>
				<div id="authenticationError"></div>
				<section class="uiForm login">
					<h2>Sign in with email.</h2>
					<h4 class="signin-subhead">Existing Allrecipes users.</h4>
					<!-- For Login Errors-->
					<form action="/account/signin/" method="post" data-ajax="false" novalidate="" name="signinForm" class="ng-pristine ng-valid">
						<input id="ReferringType" name="ReferringType" type="hidden" value="">
						<input id="ReferringUrl" name="ReferringUrl" type="hidden" value="https://allrecipes.com/account/authenticationwelcome/">
						<input id="ReferringAction" name="ReferringAction" type="hidden" value="">
						<input id="ReferringParams" name="ReferringParams" type="hidden" value="">
						<input data-val="true" data-val-required="The AuthLayoutMode field is required." id="AuthLayoutMode" name="AuthLayoutMode" type="hidden" value="Standard">
						<input id="SocialCsrfToken" name="SocialCsrfToken" type="hidden" value="3319801167791113796088389538320227744027282705811430136368604877953640">
						<input type="email" id="txtUserNameOrEmail" name="txtUserNameOrEmail" data-role="none" maxlength="500" placeholder="Email" value="">
						<div class="loginPswrdCntnr">
							<input type="password" id="password" name="password" maxlength="500" data-role="none" placeholder="Password" value="">
							<input type="text" id="txtPassword" name="txtPassword" maxlength="500" data-role="none" placeholder="Password" value="">
							<div id="pToggle" class="eyeBtn"></div>
						</div>
						<aside class="aside-left">
							<label class="checkList__item">
							<input type="checkbox" id="rememberMe" name="rememberMe" data-role="none" checked="checked"><span class="span-signIn">Remember me</span>
							</label>
						</aside>
						<aside class="aside-right">
							<a id="lnkForgotPassword" tabindex="500" href="/account/forgotpassword/?layout=Standard" class="btn-right" target="_self">Forgot password?</a>
						</aside>
						<a href="{{ route('account::collection') }}">
							<input type="button" id="submitLogInForm" data-action="submit" data-role="none" value="Sign In" class="btnSubmit">
						</a>
					</form>
					<a id="lnkJoinForFreeMobile" href="/account/signup/?actionsource=sign%20in&amp;layout=Standard" class="join-for-free" target="_self"><span>New to Allrecipes?</span>  Join for free!</a>
					<p class="sub-text">
						By signing in, you are agreeing to our <a href="http://dish.allrecipes.com/customer-service/terms-of-service/" target="_self">Terms of <br>Service</a> and our <a href="http://www.meredith.com/privacy.html" target="_blank">Privacy Policy—Your California Rights</a>.
					</p>
				</section>
			</section>
		</div>
	</div>
</div>
@stop