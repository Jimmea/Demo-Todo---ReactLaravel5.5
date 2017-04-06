@extends(MASTER_V1.'.layout_auth')
@section('content')
<div class="container-content body-content">
    <div data-role="page" id="myallrecipes_forgot_password">
        <div class="authentication">
            <section>
                <section class="subheader">
                    <h1 id="h1ForgotPassword">Forgot your password?</h1>
                </section>
                <section class="uiForm getPassword">
                    <form action="/Account/ForgotPassword" method="post" data-ajax="false" novalidate="" class="ng-pristine ng-valid">
                        <input data-val="true" data-val-required="The AuthLayoutMode field is required." id="AuthLayoutMode" name="AuthLayoutMode" type="hidden" value="Standard">
                        <input id="LoginReferrerUrl" name="LoginReferrerUrl" type="hidden" value="">
                        <p class="forgotp">No problem! Just tell us the email address you used to sign up.</p>
                        <input type="email" id="emailAddress" name="emailAddress" data-role="none" class="bdr" placeholder="Email address" autocapitalize="off">
                        <input type="submit" id="submitForgotPasswordForm" data-action="submit" data-role="none" value="Submit" class="emphasized-btn-bg emphasized-btn-text">
                    </form>
                </section>
            </section>
        </div>
    </div>
</div>
@stop