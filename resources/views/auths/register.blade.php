@extends(MASTER_V1.'.layout_auth')
@section('content')
<div class="container-content body-content">
    <div data-role="page" id="register">
        <div class="authentication">
            <section class="subheader deemphasized-grad">            	
                <h1>Sign up with email.</h1>
                <a href="/account/signin/?layout=Standard" class="btn-right" target="_self">Already a member? Sign in!</a>
            </section>
            <section class="uiForm register">
                <form action="/account/signup/?actionsource=sign%20in&amp;layout=Standard" method="post" data-ajax="false" novalidate="" class="ng-pristine ng-valid">
                    <input data-val="true" data-val-required="The AuthLayoutMode field is required." id="AuthLayoutMode" name="AuthLayoutMode" type="hidden" value="Standard">
                    <input data-val="true" data-val-required="The SocialType field is required." id="SocialType" name="SocialType" type="hidden" value="Allrecipes">
                    <!-- For SignUp Errors-->
                    <input type="text" id="txtDisplayName" name="txtDisplayName" data-role="none" placeholder="Display name (what others see)" class="bdr">
                    <input type="email" id="txtEmail" name="txtEmail" data-role="none" placeholder="Email" class="bdr">
                    <div class="loginPswrdCntnr">
                        <input type="password" id="password" name="password" maxlength="500" data-role="none" placeholder="Password">
                        <input type="text" id="txtPassword" name="txtPassword" maxlength="500" data-role="none" placeholder="Password">
                        <div id="pToggle" class="eyeBtn"></div>
                    </div>
                    <div class="terms">
                        <label class="checkbox lblsignUp checkList__item">
                        <input type="checkbox" data-role="none" id="cbxTerms" name="cbxTerms" class="bdr">
                        <span>
                        I am 13 years of age or older and agree to the
                        <a href="http://dish.allrecipes.com/customer-service/terms-of-service/" target="_self">Terms of Service</a> and
                        <a href="http://www.meredith.com/privacy.html" target="_blank">Privacy Policy—Your California Rights</a>
                        </span>
                        </label>
                        <label class="checkbox lblsignUp checkList__item checked">
                        <input type="checkbox" data-role="none" id="productdOffers" name="productOffers" class="bdr" checked="checked">
                        <span>
                        Email me exclusive subscription and special product offers from Allrecipes and the Meredith Women's Network.
                        </span>
                        </label>
                    </div>
                    <ul class="list-signUp">
                        <li>
                            <h4 class="subhead-signUp">Recipes &amp; tips sent to your Inbox!</h4>
                        </li>
                        <li><label class="checkbox checkList__item core"><input type="checkbox" data-role="none" id="cbxNewsLetterWhatsCooking" name="cbxNewsLetterWhatsCooking" checked="'checked'"><span class="subs">What's Cooking</span></label></li>
                        <li><label class="checkbox checkList__item core"><input type="checkbox" data-role="none" id="cbxNewsletterRecipeNotes" name="cbxNewsletterRecipeNotes" checked="'checked'"><span class="subs">Recipe Notes</span></label></li>
                        <li><label class="checkbox checkList__item core"><input type="checkbox" data-role="none" id="cbxNewsletterDailyDish" name="cbxNewsletterDailyDish" checked="'checked'"><span class="subs">The Daily Dish</span></label></li>
                        <li> &nbsp;</li>
                    </ul>
                    <input type="submit" id="submitRegForm" data-action="submit" data-role="none" value="Finish" class="">
                </form>
            </section>
        </div>
    </div>
</div>
@stop