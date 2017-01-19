<link href='http://css01.media-allrecipes.com/assets/deployables/v-1.55.0.3383/main-css.bundled.Css' rel='stylesheet'/>
<link rel="stylesheet" href="{{ asset('css/family.min.css') }}">
<script src='http://js01.media-allrecipes.com/assets/deployables/v-1.55.0.3383/main-top.bundled.js' ></script>
<style type="text/css">
    .clearfix {
        clear: both;
    }
    #grid[data-columns]::before {
        visibility: hidden;
    }
    @media screen and (max-width:625px) {
        #grid[data-columns]::before {
            content: '1 .column.size-1of1';
        }
        .right-rail #grid[data-columns]::before {
            content: '2 .column.size-1of2';
        }
    }
    @media screen and (min-width: 626px) and (max-width: 767px) {
        #grid[data-columns]::before {
            content: '2 .column.size-1of2';
        }
        .right-rail #grid[data-columns]::before {
            content: '4 .column.size-1of4';
        }
    }
    @media screen and (min-width: 768px) and (max-width: 1023px) {
        #grid[data-columns]::before {
            content: '2 .column.size-1of2';
        }
    }
    @media screen and (min-width: 1024px) and (max-width: 1269px) {
        #grid[data-columns]::before {
            content: '3 .column.size-1of3';
        }
    }
    @media screen and (min-width: 1270px) {
        #grid[data-columns]::before {
            content: '4 .column.size-1of4';
        }
    }
    /*For related recipes right rail*/
    @media screen and (min-width: 960px) {
        .right-rail #grid[data-columns]::before {
            content: '2 .column.size-1of2';
        }
    }
    .ar-nav-section li {
        height: 70px;
    }
    .header.new-nav {
        height: auto !important;
    }
    .header.new-nav .history-keyword {
        margin-bottom: 10px;
    }
    .header.new-nav .history-keyword .link-keyword {
        left: 23%;
        position: relative;
        white-space: nowrap;
        overflow: hidden;
        width: 47%;
    }
    .header.new-nav .history-keyword .link-keyword a {
        color: #999;
        font-size: 13px;
    }
    .header.new-nav .history-keyword .link-keyword a.light-bold {
        color:#F44F00;
    }
    .header.new-nav .menu-link {
        padding: 5px 20px;
        margin-bottom: 10px;
    }
    .header.new-nav .menu-link a:not(.link-title) {
        color: #438fcc;
        font-size: 14px;
        padding-left: 20px;
    }
    .header.new-nav .menu-link .link-title {
        font-weight: bold;
        color: #f4540f;
        text-transform: uppercase;
    }
    .header-topbar {
        display: block;
        background: #eee;
        overflow: hidden;
        height: 40px;
        line-height: 40px;
        padding: 0 20px;
    }
    .header-topbar .top-left {
        width: 30%;
        float: left;
    }
    .header-topbar .top-left p{
        text-transform: uppercase;
    }
    .header-topbar .top-right {
        float: right;
    }
    .header-topbar .top-right ul li {
        float: left;
    }
    .header-topbar .top-right ul li a {
        padding: 5px 10px;
        font-size: 14px;
    }
    .browse-recipe-tab {
        top:6.75rem !important;
    }
</style>