<script src='http://js01.media-allrecipes.com/assets/deployables/v-1.55.0.3383/main-bottom.bundled.js' ></script>
<!-- <script src='http://css01.media-allrecipes.com/assets/deployables/v-1.55.0.3383/main-bottom-templates.bundled.js' ></script> -->
<!-- <link href="http://images.media-allrecipes.com/ar/foresee/v0.7/foresee-dhtml.css" rel="stylesheet" /> -->
<script src="{{ asset(VIEW_FRONTEND_PATH . '/vendor/OwlCarousel/owl.carousel.min.js') }}"></script>

<script>
    $('#navmenu_recipes').click(function() {
        $('#topBrowseRecipePanel').toggle();
    });
    $('#hamburger-tab').click(function() {
        $('#topNavHamburgerMenu').toggle();
    });
    $('#ingredientSearch').click(function() {
        $('.topNavSearchMenu').toggle();
    });
    $('.topNavSearchMenu .icon--close').click(function() {
        $(this).closest('.topNavSearchMenu').hide();
    });
    $('.socialNotification').click(function() {
        $('.notifications').toggle();
    });
    $(document).mouseup(function (e)
    {
        var container = $(".menucontainer");

        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            container.hide();
        }
    });
</script>