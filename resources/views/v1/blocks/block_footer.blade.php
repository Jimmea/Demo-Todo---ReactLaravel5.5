<footer id="pageFooter" class="full-page">
    <section class="grid grid-fixed">
        <div class="col-25">
            <article class="grid-col grid-col--tiles">
                <ul>
                    <li><a href=""><img src="" alt=""></a></li>
                    <li><a href="">Gia đình nơi hạnh phúc tinh thần lớn nhất</a></li>
                </ul>
            </article>
            <article class="grid-col grid-col--tiles">
                <ul class="title-social-sharing__icons"><li>Kết nối với chúng tôi</li></ul>
                <ul class="social-sharing__icons">
                    <li><a id="footer_facebook" href="https://www.facebook.com/allrecipes" title="Facebook" target="_blank" class="ui-link"><img title="Facebook" src="http://images.allrecipes.com/ar-images/spacer.gif" alt="Facebook"></a></li>
                    <li><a id="footer_pinterest" href="http://pinterest.com/allrecipes/" title="Pinterest" target="_blank" class="ui-link"><img title="Pinterest" src="http://images.allrecipes.com/ar-images/spacer.gif" alt="Pinterest"></a></li>
                    <li><a id="footer_twitter" href="https://twitter.com/Allrecipes" title="Twitter" target="_blank" class="ui-link"><img id="ctl00_Image3" title="Twitter" src="http://images.allrecipes.com/ar-images/spacer.gif" alt="Twitter"></a></li>
                    <li><a id="footer_instagram" href="http://instagram.com/allrecipes" title="Instagram" target="_blank" class="ui-link"><img title="Instagram" src="http://images.allrecipes.com/ar-images/spacer.gif" alt="Instagram"></a></li>
                    <li><a id="footer_googleplus" href="https://plus.google.com/+allrecipes/" title="Google Plus" target="_blank" class="ui-link"><img title="Google Plus" src="http://images.allrecipes.com/ar-images/spacer.gif" alt="Google Plus"></a></li>
                </ul>
            </article>
            <article class="grid-col grid-col--tiles">
                <ul>
                    <li>Support</li>
                    <li><a id="footer_sitemap" href="http://dish.allrecipes.com/faq-sitemap/" target="_self">Site Map</a></li>
                    <li><a id="footer_contactus" href="http://dish.allrecipes.com/customer-service/contact-us-2/" target="_self">Contact Us</a></li>
                    <li><a id="footer_customersupport" href="http://dish.allrecipes.com/customer-service/" target="_self">Customer Support</a></li>
                </ul>
            </article>
        </div>
        <div class="col-85">
            @for($i =0; $i<=7; $i++)
            <article class="grid-col grid-col--tiles">
                <ul>
                    <li>About Us</li>
                    <li><a id="footer_newsroom" href="" target="_self">Newsroom</a></li>
                    <li><a id="footer_jobs" href="" target="_self">Jobs at Allrecipes</a></li>
                    <li><a id="footer_jobs" href="" target="_self">Jobs at Allrecipes</a></li>
                    <li><a id="footer_jobs" href="" target="_self">Jobs at Allrecipes</a></li>
                </ul>
            </article>
            @endfor
        </div>
    </section>
</footer>

<style>
    div.scroll-top {
        width: 44px;
        height: 44px;
        border: none;
        display: block;
        background: #6b6b6b;
        border-radius: 100%;
        position: fixed;
        bottom: 60px;
        right: 8px;
        cursor: pointer;
        display: none;
        text-align: center;
        line-height: 53px;
        color: #fff;
        font-size: 12px;
    }
    div.scroll-top:after{
        top: 10px;
        left: 14px;
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 8px solid #fff;
        position: absolute;
        content: "";
    }
</style>
<div class="scroll-top" title="Go top">Top</div>
<!-- back top top -->
<script>
    $(document).ready(function(){
        $('.scroll-top').hide();

        $(window).scroll(function () {
            if ($(window).scrollTop() > 200) {
                $('.scroll-top').fadeIn();
            } else {
                $('.scroll-top').fadeOut();
            }
        });

        $('.scroll-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
        });
    });
</script>