@extends(MASTER_USER_V1 . '.layout_master_user_profile')
@section('user_content')
<section class="cook-profile-setting cook-create-recipe">
    @include(USER_V1.'.my.my_profile_sidebar_left')    
    <div class="cook-profile-setting-content">   
        <form action="" id="profileSettingsForm" method="post" class="ng-pristine ng-valid ng-valid-maxlength">
            <section class="wrap-cook-setting-form settings-panels">
                <h2 class="setting-content-title">Chỉnh sửa thông tin cá nhân</h2>               
                <div class="tastePreferencesPanel">
                    <input id="ProfileSettings_Id" name="ProfileSettings.Id" type="hidden" value="21302411">        
                    <div class="profile-settings-wrapper ng-scope">                    
                        <ul class="settings-wrapper profile-settings">
                            <li class="form-container">
                                <div>Photos</div>
                                <div>
                                    <input type="file" id="Photobtn" data-ng-controller="ar_controllers_photo_upload" ng-init="init(null, null, null, 'profileSettings')" ng-file-select="onFileSelect($files)" style="display: none; float: left" class="ng-scope">
                                    <label for="Photobtn" class="btns-two-small btn-gold">
                                    <span class="svg-icon--actions--camera_w_icon svg-icon--actions--camera_w_icon-dims"></span><span>Profile photo</span>
                                    </label>
                                    <div class="btns-two-small btn-gold cover-photo-selector ng-scope" ng-controller="ar_controllers_profile_change_cover_photo" data-ng-click="displaySubNav()">
                                        <span class="svg-icon--actions--camera_w_icon svg-icon--actions--camera_w_icon-dims"></span><span>Cover photo</span>
                                        <ul class="sort-nav noshow" ng-class="isActive ? 'show' : 'noshow'">
                                            <li class="">
                                                <input type="file" id="CoverPhotobtn" data-ng-controller="ar_controllers_photo_upload" ng-file-select="uploadCoverPhoto($files)" style="display: none; float: left" class="ng-scope">
                                                <label for="CoverPhotobtn">Upload photo</label>
                                            </li>
                                            <li id="btn"><a ng-init="init('http://images.media-allrecipes.com/', '[{&quot;Key&quot;:0,&quot;Value&quot;:&quot;ar-images/profiles/covers/Blueberries1300x200.jpg&quot;},{&quot;Key&quot;:1,&quot;Value&quot;:&quot;ar-images/profiles/covers/books-coffee-header.jpg&quot;},{&quot;Key&quot;:2,&quot;Value&quot;:&quot;ar-images/profiles/covers/cake-pops-header.jpg&quot;},{&quot;Key&quot;:3,&quot;Value&quot;:&quot;ar-images/profiles/covers/Cereal1300x200.jpg&quot;},{&quot;Key&quot;:4,&quot;Value&quot;:&quot;ar-images/profiles/covers/chocolate-chip-cookies-header.jpg&quot;},{&quot;Key&quot;:5,&quot;Value&quot;:&quot;ar-images/profiles/covers/CinRolls1300x200.jpg&quot;},{&quot;Key&quot;:6,&quot;Value&quot;:&quot;ar-images/profiles/covers/cupcake-header.jpg&quot;},{&quot;Key&quot;:7,&quot;Value&quot;:&quot;ar-images/profiles/covers/donuts-header.jpg&quot;},{&quot;Key&quot;:8,&quot;Value&quot;:&quot;ar-images/profiles/covers/gingerbread_people-Houses-cookies-christmas-1300x200.jpg&quot;},{&quot;Key&quot;:9,&quot;Value&quot;:&quot;ar-images/profiles/covers/kiwi1300x200.jpg&quot;},{&quot;Key&quot;:10,&quot;Value&quot;:&quot;ar-images/profiles/covers/mexican-food-header.jpg&quot;},{&quot;Key&quot;:11,&quot;Value&quot;:&quot;ar-images/profiles/covers/Oranges1300x200.jpg&quot;},{&quot;Key&quot;:12,&quot;Value&quot;:&quot;ar-images/profiles/covers/pasta-tomato-header.jpg&quot;},{&quot;Key&quot;:13,&quot;Value&quot;:&quot;ar-images/profiles/covers/pretzels_soft_bread_1300x200.jpg&quot;},{&quot;Key&quot;:14,&quot;Value&quot;:&quot;ar-images/profiles/covers/radishes-header.jpg&quot;},{&quot;Key&quot;:15,&quot;Value&quot;:&quot;ar-images/profiles/covers/raspberry1300x200.jpg&quot;},{&quot;Key&quot;:16,&quot;Value&quot;:&quot;ar-images/profiles/covers/salsa-mexican-food-1300x200.jpg&quot;},{&quot;Key&quot;:17,&quot;Value&quot;:&quot;ar-images/profiles/covers/smoothies-header.jpg&quot;},{&quot;Key&quot;:18,&quot;Value&quot;:&quot;ar-images/profiles/covers/spices-header.jpg&quot;},{&quot;Key&quot;:19,&quot;Value&quot;:&quot;ar-images/profiles/covers/SugarCookies1300x200.jpg&quot;},{&quot;Key&quot;:20,&quot;Value&quot;:&quot;ar-images/profiles/covers/sushi-background.jpg&quot;},{&quot;Key&quot;:21,&quot;Value&quot;:&quot;ar-images/profiles/covers/swiss-cheese-header.jpg&quot;},{&quot;Key&quot;:22,&quot;Value&quot;:&quot;ar-images/profiles/covers/bacon-header-image.jpg&quot;},{&quot;Key&quot;:23,&quot;Value&quot;:&quot;ar-images/profiles/covers/beer-header.jpg&quot;},{&quot;Key&quot;:24,&quot;Value&quot;:&quot;ar-images/profiles/covers/hamburger-fries-header.jpg&quot;}]','BikkJally')" ng-click="selectPhoto()">Choose a photo</a></li>
                                        </ul>
                                    </div>
                                    <script type="text/ng-template" id="changeCoverPhotoModal">
                                        <div class="ngdialog-header">
                                            <h2>Change Cover Photo</h2>
                                        </div>
                                        <div class="ngdialog-message">
                                            <div>
                                                <ul>
                                                    <li ng-repeat="item in coverPhotoList">
                                                        <a ng-click="selectCover(item)">
                                                            <img ng-src="" width="100%" ng-class="{highlighted:item.showHighlight}" class="cover-photo-list-item" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ngdialog-buttons">
                                            <button type="button" class="ngdialog-button btns-two-small btn-gold" ng-click="save()">Save</button>
                                            <button type="button" class="ngdialog-button btns-two-small" ng-click="closeThisDialog('button')">Cancel</button>
                                        </div>
                                    </script>
                                    <div id="msg-toolbar" class="notification hidden"><span class="notification__message"></span></div>
                                </div>
                            </li>
                            <li class="form-container">
                                <div><label for="ProfileSettings_FirstName">First name</label></div>
                                <div><input class="input-wrap" data-val="true" data-val-length="First name must be shorter than 50 letters." data-val-length-max="50" id="ProfileSettings_FirstName" maxlength="50" name="ProfileSettings.FirstName" placeholder="First name" type="text" value="Bikk"><span class="field-validation-valid" data-valmsg-for="ProfileSettings.FirstName" data-valmsg-replace="true"></span></div>
                            </li>
                            <li class="form-container">
                                <div><label for="ProfileSettings_LastName">Last name</label></div>
                                <div><input class="input-wrap" data-val="true" data-val-length="Last name must be shorter than 50 letters." data-val-length-max="50" id="ProfileSettings_LastName" maxlength="50" name="ProfileSettings.LastName" placeholder="Last name" type="text" value="Jally"><span class="field-validation-valid" data-valmsg-for="ProfileSettings.LastName" data-valmsg-replace="true"></span></div>
                            </li>
                            <li class="form-container">
                                <div><label for="ProfileSettings_DisplayName">Display name</label></div>
                                <div><input class="input-wrap" data-val="true" data-val-length="Oops! Make sure your display name is between 3 and 30 characters (letters and numbers only; no spaces, please)." data-val-length-max="30" data-val-length-min="3" data-val-required="Oops! Make sure your display name is between 3 and 30 characters (letters and numbers only; no spaces, please)." id="ProfileSettings_DisplayName" maxlength="30" minlength="3" name="ProfileSettings.DisplayName" placeholder="Display name" type="text" value="BikkJally"><span class="field-validation-valid" data-valmsg-for="ProfileSettings.DisplayName" data-valmsg-replace="true"></span></div>
                            </li>
                            <li class="form-container">
                                <div><label for="ProfileSettings_Handle">Profile URL</label></div>
                                <div>
                                    <ul>
                                        <li>Share your Allrecipes profile with a personal URL!</li>
                                        <li>allrecipes.com/cook/<span ng-bind="handleUrl" class="ng-binding">billcky</span></li>
                                        <li><input class="input-wrap ng-pristine ng-untouched ng-valid ng-valid-maxlength" data-val="true" data-val-length="Profile Url must be shorter than 300 letters." data-val-length-max="300" data-val-regex="Profile Url cannot contain invalid characters." data-val-regex-pattern="^(?!\s*my\s*$|\s*\d+\s*$)(\w|-)+$" id="ProfileSettings_Handle" maxlength="300" name="ProfileSettings.Handle" ng-blur="ontxtHandleBlur()" ng-model="handleUrl" placeholder="i.e. CrazyCupcakeLady" type="text" value="billcky"><span class="field-validation-valid" data-valmsg-for="ProfileSettings.Handle" data-valmsg-replace="true"></span><span class="field-validation-valid" data-valmsg-for="HandleErrorMessage" data-valmsg-replace="true"></span></li>
                                        <li> <span class="field-validation-error ng-binding" ng-bind="unavailableHandle"></span></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="form-container">
                                <div><label for="ProfileSettings_Location">Location</label></div>
                                <div>
                                    <select id="country-select" class="select--box ng-pristine ng-untouched ng-valid" name="ProfileSettings.Country" ng-change="handleSelectedCountryChanged()" ng-model="currentCountry">
                                        <!-- ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="--" ng-bind="country.name" class="ng-binding ng-scope">[None Selected]</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="US" ng-bind="country.name" class="ng-binding ng-scope">USA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AF" ng-bind="country.name" class="ng-binding ng-scope">AFGHANISTAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AX" ng-bind="country.name" class="ng-binding ng-scope">ÅLAND ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AL" ng-bind="country.name" class="ng-binding ng-scope">ALBANIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="DZ" ng-bind="country.name" class="ng-binding ng-scope">ALGERIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AS" ng-bind="country.name" class="ng-binding ng-scope">AMERICAN SAMOA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AD" ng-bind="country.name" class="ng-binding ng-scope">ANDORRA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AO" ng-bind="country.name" class="ng-binding ng-scope">ANGOLA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AI" ng-bind="country.name" class="ng-binding ng-scope">ANGUILLA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AQ" ng-bind="country.name" class="ng-binding ng-scope">ANTARCTICA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AG" ng-bind="country.name" class="ng-binding ng-scope">ANTIGUA AND BARBUDA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AR" ng-bind="country.name" class="ng-binding ng-scope">ARGENTINA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AM" ng-bind="country.name" class="ng-binding ng-scope">ARMENIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AW" ng-bind="country.name" class="ng-binding ng-scope">ARUBA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AU" ng-bind="country.name" class="ng-binding ng-scope">AUSTRALIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AT" ng-bind="country.name" class="ng-binding ng-scope">AUSTRIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AZ" ng-bind="country.name" class="ng-binding ng-scope">AZERBAIJAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BS" ng-bind="country.name" class="ng-binding ng-scope">BAHAMAS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BH" ng-bind="country.name" class="ng-binding ng-scope">BAHRAIN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BD" ng-bind="country.name" class="ng-binding ng-scope">BANGLADESH</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BB" ng-bind="country.name" class="ng-binding ng-scope">BARBADOS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BY" ng-bind="country.name" class="ng-binding ng-scope">BELARUS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BE" ng-bind="country.name" class="ng-binding ng-scope">BELGIUM</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BZ" ng-bind="country.name" class="ng-binding ng-scope">BELIZE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BJ" ng-bind="country.name" class="ng-binding ng-scope">BENIN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BM" ng-bind="country.name" class="ng-binding ng-scope">BERMUDA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BT" ng-bind="country.name" class="ng-binding ng-scope">BHUTAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BO" ng-bind="country.name" class="ng-binding ng-scope">BOLIVIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BA" ng-bind="country.name" class="ng-binding ng-scope">BOSNIA AND HERZEGOVINA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BW" ng-bind="country.name" class="ng-binding ng-scope">BOTSWANA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BV" ng-bind="country.name" class="ng-binding ng-scope">BOUVET ISLAND</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BR" ng-bind="country.name" class="ng-binding ng-scope">BRAZIL</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="IO" ng-bind="country.name" class="ng-binding ng-scope">BRITISH INDIAN OCEAN TERRITORY</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BN" ng-bind="country.name" class="ng-binding ng-scope">BRUNEI DARUSSALAM</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BG" ng-bind="country.name" class="ng-binding ng-scope">BULGARIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BF" ng-bind="country.name" class="ng-binding ng-scope">BURKINA FASO</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="BI" ng-bind="country.name" class="ng-binding ng-scope">BURUNDI</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="KH" ng-bind="country.name" class="ng-binding ng-scope">CAMBODIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CM" ng-bind="country.name" class="ng-binding ng-scope">CAMEROON</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CA" ng-bind="country.name" class="ng-binding ng-scope">CANADA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CV" ng-bind="country.name" class="ng-binding ng-scope">CAPE VERDE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="KY" ng-bind="country.name" class="ng-binding ng-scope">CAYMAN ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CF" ng-bind="country.name" class="ng-binding ng-scope">CENTRAL AFRICAN REPUBLIC</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TD" ng-bind="country.name" class="ng-binding ng-scope">CHAD</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CL" ng-bind="country.name" class="ng-binding ng-scope">CHILE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CN" ng-bind="country.name" class="ng-binding ng-scope">CHINA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CX" ng-bind="country.name" class="ng-binding ng-scope">CHRISTMAS ISLAND</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CC" ng-bind="country.name" class="ng-binding ng-scope">COCOS (KEELING) ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CO" ng-bind="country.name" class="ng-binding ng-scope">COLOMBIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="KM" ng-bind="country.name" class="ng-binding ng-scope">COMOROS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CG" ng-bind="country.name" class="ng-binding ng-scope">CONGO</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CD" ng-bind="country.name" class="ng-binding ng-scope">D. R. CONGO</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CK" ng-bind="country.name" class="ng-binding ng-scope">COOK ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CR" ng-bind="country.name" class="ng-binding ng-scope">COSTA RICA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CI" ng-bind="country.name" class="ng-binding ng-scope">CÔTE D'IVOIRE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="HR" ng-bind="country.name" class="ng-binding ng-scope">CROATIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CU" ng-bind="country.name" class="ng-binding ng-scope">CUBA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CY" ng-bind="country.name" class="ng-binding ng-scope">CYPRUS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CZ" ng-bind="country.name" class="ng-binding ng-scope">CZECH REPUBLIC</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="DK" ng-bind="country.name" class="ng-binding ng-scope">DENMARK</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="DJ" ng-bind="country.name" class="ng-binding ng-scope">DJIBOUTI</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="DM" ng-bind="country.name" class="ng-binding ng-scope">DOMINICA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="DO" ng-bind="country.name" class="ng-binding ng-scope">DOMINICAN REPUBLIC</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="EC" ng-bind="country.name" class="ng-binding ng-scope">ECUADOR</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="EG" ng-bind="country.name" class="ng-binding ng-scope">EGYPT</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SV" ng-bind="country.name" class="ng-binding ng-scope">EL SALVADOR</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GQ" ng-bind="country.name" class="ng-binding ng-scope">EQUATORIAL GUINEA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="ER" ng-bind="country.name" class="ng-binding ng-scope">ERITREA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="EE" ng-bind="country.name" class="ng-binding ng-scope">ESTONIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="ET" ng-bind="country.name" class="ng-binding ng-scope">ETHIOPIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="FK" ng-bind="country.name" class="ng-binding ng-scope">FALKLAND ISLANDS (MALVINAS)</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="FO" ng-bind="country.name" class="ng-binding ng-scope">FAROE ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="FJ" ng-bind="country.name" class="ng-binding ng-scope">FIJI</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="FI" ng-bind="country.name" class="ng-binding ng-scope">FINLAND</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="FR" ng-bind="country.name" class="ng-binding ng-scope">FRANCE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GF" ng-bind="country.name" class="ng-binding ng-scope">FRENCH GUIANA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PF" ng-bind="country.name" class="ng-binding ng-scope">FRENCH POLYNESIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TF" ng-bind="country.name" class="ng-binding ng-scope">FRENCH SOUTHERN TERRITORIES</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GA" ng-bind="country.name" class="ng-binding ng-scope">GABON</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GM" ng-bind="country.name" class="ng-binding ng-scope">GAMBIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GE" ng-bind="country.name" class="ng-binding ng-scope">GEORGIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="DE" ng-bind="country.name" class="ng-binding ng-scope">GERMANY</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GH" ng-bind="country.name" class="ng-binding ng-scope">GHANA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GI" ng-bind="country.name" class="ng-binding ng-scope">GIBRALTAR</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GR" ng-bind="country.name" class="ng-binding ng-scope">GREECE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GL" ng-bind="country.name" class="ng-binding ng-scope">GREENLAND</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GD" ng-bind="country.name" class="ng-binding ng-scope">GRENADA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GP" ng-bind="country.name" class="ng-binding ng-scope">GUADELOUPE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GU" ng-bind="country.name" class="ng-binding ng-scope">GUAM</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GT" ng-bind="country.name" class="ng-binding ng-scope">GUATEMALA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GN" ng-bind="country.name" class="ng-binding ng-scope">GUINEA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GW" ng-bind="country.name" class="ng-binding ng-scope">GUINEA-BISSAU</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GY" ng-bind="country.name" class="ng-binding ng-scope">GUYANA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="HT" ng-bind="country.name" class="ng-binding ng-scope">HAITI</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="HM" ng-bind="country.name" class="ng-binding ng-scope">HEARD ISLAND AND MCDONALD ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="VA" ng-bind="country.name" class="ng-binding ng-scope">HOLY SEE (VATICAN CITY STATE)</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="HN" ng-bind="country.name" class="ng-binding ng-scope">HONDURAS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="HK" ng-bind="country.name" class="ng-binding ng-scope">HONG KONG</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="HU" ng-bind="country.name" class="ng-binding ng-scope">HUNGARY</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="IS" ng-bind="country.name" class="ng-binding ng-scope">ICELAND</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="IN" ng-bind="country.name" class="ng-binding ng-scope">INDIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="ID" ng-bind="country.name" class="ng-binding ng-scope">INDONESIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="IR" ng-bind="country.name" class="ng-binding ng-scope">IRAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="IQ" ng-bind="country.name" class="ng-binding ng-scope">IRAQ</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="IE" ng-bind="country.name" class="ng-binding ng-scope">IRELAND</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="IL" ng-bind="country.name" class="ng-binding ng-scope">ISRAEL</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="IM" ng-bind="country.name" class="ng-binding ng-scope">ISLE OF MAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="IT" ng-bind="country.name" class="ng-binding ng-scope">ITALY</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="JM" ng-bind="country.name" class="ng-binding ng-scope">JAMAICA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="JP" ng-bind="country.name" class="ng-binding ng-scope">JAPAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="JE" ng-bind="country.name" class="ng-binding ng-scope">JERSEY</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="JO" ng-bind="country.name" class="ng-binding ng-scope">JORDAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="KZ" ng-bind="country.name" class="ng-binding ng-scope">KAZAKHSTAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="KE" ng-bind="country.name" class="ng-binding ng-scope">KENYA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="KI" ng-bind="country.name" class="ng-binding ng-scope">KIRIBATI</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="KP" ng-bind="country.name" class="ng-binding ng-scope">NORTH KOREA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="KR" ng-bind="country.name" class="ng-binding ng-scope">SOUTH KOREA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="KW" ng-bind="country.name" class="ng-binding ng-scope">KUWAIT</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="KG" ng-bind="country.name" class="ng-binding ng-scope">KYRGYZSTAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="LA" ng-bind="country.name" class="ng-binding ng-scope">LAOS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="LV" ng-bind="country.name" class="ng-binding ng-scope">LATVIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="LB" ng-bind="country.name" class="ng-binding ng-scope">LEBANON</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="LS" ng-bind="country.name" class="ng-binding ng-scope">LESOTHO</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="LR" ng-bind="country.name" class="ng-binding ng-scope">LIBERIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="LY" ng-bind="country.name" class="ng-binding ng-scope">LIBYA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="LI" ng-bind="country.name" class="ng-binding ng-scope">LIECHTENSTEIN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="LT" ng-bind="country.name" class="ng-binding ng-scope">LITHUANIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="LU" ng-bind="country.name" class="ng-binding ng-scope">LUXEMBOURG</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MO" ng-bind="country.name" class="ng-binding ng-scope">MACAO</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MK" ng-bind="country.name" class="ng-binding ng-scope">MACEDONIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MG" ng-bind="country.name" class="ng-binding ng-scope">MADAGASCAR</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MW" ng-bind="country.name" class="ng-binding ng-scope">MALAWI</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MY" ng-bind="country.name" class="ng-binding ng-scope">MALAYSIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MV" ng-bind="country.name" class="ng-binding ng-scope">MALDIVES</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="ML" ng-bind="country.name" class="ng-binding ng-scope">MALI</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MT" ng-bind="country.name" class="ng-binding ng-scope">MALTA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MH" ng-bind="country.name" class="ng-binding ng-scope">MARSHALL ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MQ" ng-bind="country.name" class="ng-binding ng-scope">MARTINIQUE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MR" ng-bind="country.name" class="ng-binding ng-scope">MAURITANIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MU" ng-bind="country.name" class="ng-binding ng-scope">MAURITIUS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="YT" ng-bind="country.name" class="ng-binding ng-scope">MAYOTTE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MX" ng-bind="country.name" class="ng-binding ng-scope">MEXICO</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="FM" ng-bind="country.name" class="ng-binding ng-scope">MICRONESIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MD" ng-bind="country.name" class="ng-binding ng-scope">MOLDOVA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MC" ng-bind="country.name" class="ng-binding ng-scope">MONACO</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MN" ng-bind="country.name" class="ng-binding ng-scope">MONGOLIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="ME" ng-bind="country.name" class="ng-binding ng-scope">MONTENEGRO</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MS" ng-bind="country.name" class="ng-binding ng-scope">MONTSERRAT</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MA" ng-bind="country.name" class="ng-binding ng-scope">MOROCCO</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MZ" ng-bind="country.name" class="ng-binding ng-scope">MOZAMBIQUE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MM" ng-bind="country.name" class="ng-binding ng-scope">MYANMAR</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="NA" ng-bind="country.name" class="ng-binding ng-scope">NAMIBIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="NR" ng-bind="country.name" class="ng-binding ng-scope">NAURU</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="NP" ng-bind="country.name" class="ng-binding ng-scope">NEPAL</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="NL" ng-bind="country.name" class="ng-binding ng-scope">NETHERLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AN" ng-bind="country.name" class="ng-binding ng-scope">NETHERLANDS ANTILLES</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="NC" ng-bind="country.name" class="ng-binding ng-scope">NEW CALEDONIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="NZ" ng-bind="country.name" class="ng-binding ng-scope">NEW ZEALAND</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="NI" ng-bind="country.name" class="ng-binding ng-scope">NICARAGUA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="NE" ng-bind="country.name" class="ng-binding ng-scope">NIGER</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="NG" ng-bind="country.name" class="ng-binding ng-scope">NIGERIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="NU" ng-bind="country.name" class="ng-binding ng-scope">NIUE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="NF" ng-bind="country.name" class="ng-binding ng-scope">NORFOLK ISLAND</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="MP" ng-bind="country.name" class="ng-binding ng-scope">NORTHERN MARIANA ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="NO" ng-bind="country.name" class="ng-binding ng-scope">NORWAY</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="OM" ng-bind="country.name" class="ng-binding ng-scope">OMAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PK" ng-bind="country.name" class="ng-binding ng-scope">PAKISTAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PW" ng-bind="country.name" class="ng-binding ng-scope">PALAU</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PS" ng-bind="country.name" class="ng-binding ng-scope">PALESTINIAN TERRITORY</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PA" ng-bind="country.name" class="ng-binding ng-scope">PANAMA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PG" ng-bind="country.name" class="ng-binding ng-scope">PAPUA NEW GUINEA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PY" ng-bind="country.name" class="ng-binding ng-scope">PARAGUAY</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PE" ng-bind="country.name" class="ng-binding ng-scope">PERU</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PH" ng-bind="country.name" class="ng-binding ng-scope">PHILIPPINES</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PN" ng-bind="country.name" class="ng-binding ng-scope">PITCAIRN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PL" ng-bind="country.name" class="ng-binding ng-scope">POLAND</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PT" ng-bind="country.name" class="ng-binding ng-scope">PORTUGAL</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PR" ng-bind="country.name" class="ng-binding ng-scope">PUERTO RICO</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="QA" ng-bind="country.name" class="ng-binding ng-scope">QATAR</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="RE" ng-bind="country.name" class="ng-binding ng-scope">RÉUNION</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="RO" ng-bind="country.name" class="ng-binding ng-scope">ROMANIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="RU" ng-bind="country.name" class="ng-binding ng-scope">RUSSIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="RW" ng-bind="country.name" class="ng-binding ng-scope">RWANDA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SH" ng-bind="country.name" class="ng-binding ng-scope">SAINT HELENA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="KN" ng-bind="country.name" class="ng-binding ng-scope">SAINT KITTS AND NEVIS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="LC" ng-bind="country.name" class="ng-binding ng-scope">SAINT LUCIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="PM" ng-bind="country.name" class="ng-binding ng-scope">SAINT PIERRE AND MIQUELON</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="VC" ng-bind="country.name" class="ng-binding ng-scope">SAINT VINCENT AND THE GRENADINES</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="WS" ng-bind="country.name" class="ng-binding ng-scope">SAMOA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SM" ng-bind="country.name" class="ng-binding ng-scope">SAN MARINO</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="ST" ng-bind="country.name" class="ng-binding ng-scope">SAO TOME AND PRINCIPE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SA" ng-bind="country.name" class="ng-binding ng-scope">SAUDI ARABIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SN" ng-bind="country.name" class="ng-binding ng-scope">SENEGAL</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="RS" ng-bind="country.name" class="ng-binding ng-scope">SERBIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SC" ng-bind="country.name" class="ng-binding ng-scope">SEYCHELLES</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SL" ng-bind="country.name" class="ng-binding ng-scope">SIERRA LEONE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SG" ng-bind="country.name" class="ng-binding ng-scope">SINGAPORE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SK" ng-bind="country.name" class="ng-binding ng-scope">SLOVAKIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SI" ng-bind="country.name" class="ng-binding ng-scope">SLOVENIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SB" ng-bind="country.name" class="ng-binding ng-scope">SOLOMON ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SO" ng-bind="country.name" class="ng-binding ng-scope">SOMALIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="ZA" ng-bind="country.name" class="ng-binding ng-scope">SOUTH AFRICA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GS" ng-bind="country.name" class="ng-binding ng-scope">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="ES" ng-bind="country.name" class="ng-binding ng-scope">SPAIN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="LK" ng-bind="country.name" class="ng-binding ng-scope">SRI LANKA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SD" ng-bind="country.name" class="ng-binding ng-scope">SUDAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SR" ng-bind="country.name" class="ng-binding ng-scope">SURINAME</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SJ" ng-bind="country.name" class="ng-binding ng-scope">SVALBARD AND JAN MAYEN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SZ" ng-bind="country.name" class="ng-binding ng-scope">SWAZILAND</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SE" ng-bind="country.name" class="ng-binding ng-scope">SWEDEN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="CH" ng-bind="country.name" class="ng-binding ng-scope">SWITZERLAND</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="SY" ng-bind="country.name" class="ng-binding ng-scope">SYRIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TW" ng-bind="country.name" class="ng-binding ng-scope">TAIWAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TJ" ng-bind="country.name" class="ng-binding ng-scope">TAJIKISTAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TZ" ng-bind="country.name" class="ng-binding ng-scope">TANZANIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TH" ng-bind="country.name" class="ng-binding ng-scope">THAILAND</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TL" ng-bind="country.name" class="ng-binding ng-scope">TIMOR-LESTE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TG" ng-bind="country.name" class="ng-binding ng-scope">TOGO</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TK" ng-bind="country.name" class="ng-binding ng-scope">TOKELAU</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TO" ng-bind="country.name" class="ng-binding ng-scope">TONGA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TT" ng-bind="country.name" class="ng-binding ng-scope">TRINIDAD AND TOBAGO</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TN" ng-bind="country.name" class="ng-binding ng-scope">TUNISIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TR" ng-bind="country.name" class="ng-binding ng-scope">TURKEY</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TM" ng-bind="country.name" class="ng-binding ng-scope">TURKMENISTAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TC" ng-bind="country.name" class="ng-binding ng-scope">TURKS AND CAICOS ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="TV" ng-bind="country.name" class="ng-binding ng-scope">TUVALU</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="UG" ng-bind="country.name" class="ng-binding ng-scope">UGANDA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="true" ng-repeat="country in countryOptions" value="UA" ng-bind="country.name" class="ng-binding ng-scope" selected="selected">UKRAINE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="AE" ng-bind="country.name" class="ng-binding ng-scope">UNITED ARAB EMIRATES</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="GB" ng-bind="country.name" class="ng-binding ng-scope">U.K.</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="UM" ng-bind="country.name" class="ng-binding ng-scope">UNITED STATES MINOR OUTLYING ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="UY" ng-bind="country.name" class="ng-binding ng-scope">URUGUAY</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="UZ" ng-bind="country.name" class="ng-binding ng-scope">UZBEKISTAN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="VU" ng-bind="country.name" class="ng-binding ng-scope">VANUATU</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="VE" ng-bind="country.name" class="ng-binding ng-scope">VENEZUELA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="VN" ng-bind="country.name" class="ng-binding ng-scope">VIET NAM</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="VG" ng-bind="country.name" class="ng-binding ng-scope">BRITISH VIRGIN ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="VI" ng-bind="country.name" class="ng-binding ng-scope">U. S. VIRGIN ISLANDS</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="WF" ng-bind="country.name" class="ng-binding ng-scope">WALLIS AND FUTUNA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="EH" ng-bind="country.name" class="ng-binding ng-scope">WESTERN SAHARA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="YE" ng-bind="country.name" class="ng-binding ng-scope">YEMEN</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="ZM" ng-bind="country.name" class="ng-binding ng-scope">ZAMBIA</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                        <option ng-selected="false" ng-repeat="country in countryOptions" value="ZW" ng-bind="country.name" class="ng-binding ng-scope">ZIMBABWE</option>
                                        <!-- end ngRepeat: country in countryOptions -->
                                    </select>
                                </div>
                            </li>
                            <li class="form-container">
                                <div></div>
                                <div>
                                    <input class="input-wrap" data-val="true" data-val-length="City must be shorter than 50 letters." data-val-length-max="50" id="ProfileSettings_City" maxlength="50" name="ProfileSettings.City" placeholder="City" type="text" value=""><span class="field-validation-valid" data-valmsg-for="ProfileSettings.City" data-valmsg-replace="true"></span>
                                    <select class="select--box ng-pristine ng-untouched ng-valid" name="ProfileSettings.Region" ng-model="currentRegion" ng-disabled="!regionSelectEnabled">
                                        <!-- ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1238" ng-bind="region.name" class="ng-binding ng-scope">Cherkasy Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1239" ng-bind="region.name" class="ng-binding ng-scope">Chernihiv Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1240" ng-bind="region.name" class="ng-binding ng-scope">Chernivtsi Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1241" ng-bind="region.name" class="ng-binding ng-scope">Crimea (Autonomous Republic)</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1242" ng-bind="region.name" class="ng-binding ng-scope">Dnipropetrovsk Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1243" ng-bind="region.name" class="ng-binding ng-scope">Donetsk Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1244" ng-bind="region.name" class="ng-binding ng-scope">Ivano-Frankivsk Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1245" ng-bind="region.name" class="ng-binding ng-scope">Kharkiv Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1246" ng-bind="region.name" class="ng-binding ng-scope">Kherson Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1247" ng-bind="region.name" class="ng-binding ng-scope">Khmelnytskyi Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1248" ng-bind="region.name" class="ng-binding ng-scope">Kiev (Special City)</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1249" ng-bind="region.name" class="ng-binding ng-scope">Kiev Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1250" ng-bind="region.name" class="ng-binding ng-scope">Kirovohrad Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="true" ng-repeat="region in regionOptions" value="1251" ng-bind="region.name" class="ng-binding ng-scope" selected="selected">Luhansk Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1252" ng-bind="region.name" class="ng-binding ng-scope">Lviv Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1253" ng-bind="region.name" class="ng-binding ng-scope">Mykolaiv Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1254" ng-bind="region.name" class="ng-binding ng-scope">Odessa Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1255" ng-bind="region.name" class="ng-binding ng-scope">Poltava Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1256" ng-bind="region.name" class="ng-binding ng-scope">Rivne Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1257" ng-bind="region.name" class="ng-binding ng-scope">Sevastopol (Special City)</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1258" ng-bind="region.name" class="ng-binding ng-scope">Sumy Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1259" ng-bind="region.name" class="ng-binding ng-scope">Ternopil Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1260" ng-bind="region.name" class="ng-binding ng-scope">Vinnytsia Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1261" ng-bind="region.name" class="ng-binding ng-scope">Volyn Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1262" ng-bind="region.name" class="ng-binding ng-scope">Zakarpattia Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1263" ng-bind="region.name" class="ng-binding ng-scope">Zaporizhia Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                        <option ng-selected="false" ng-repeat="region in regionOptions" value="1264" ng-bind="region.name" class="ng-binding ng-scope">Zhytomyr Oblast</option>
                                        <!-- end ngRepeat: region in regionOptions -->
                                    </select>
                                </div>
                            </li>
                            <li class="form-container">
                                <div><label for="ProfileSettings_Tagline">Tagline</label></div>
                                <div>
                                    <textarea class="input-wrap" cols="20" data-val="true" data-val-length="Tagline must be shorter than 255 letters." data-val-length-max="255" id="ProfileSettings_Tagline" maxlength="255" name="ProfileSettings.Tagline" placeholder="This is you in a nutshell (unless you're allergic to nuts)." rows="2">this si the friend</textarea>
                                    <grammarly-btn>
                                        <div style="visibility: hidden; z-index: 2;" class="_e725ae-textarea_btn _e725ae-not_focused" data-grammarly-reactid=".0">
                                            <div class="_e725ae-transform_wrap" data-grammarly-reactid=".0.0">
                                                <div title="Protected by Grammarly" class="_e725ae-status" data-grammarly-reactid=".0.0.0">&nbsp;</div>
                                            </div>
                                        </div>
                                    </grammarly-btn>
                                    <span class="field-validation-valid" data-valmsg-for="ProfileSettings.Tagline" data-valmsg-replace="true"></span>
                                </div>
                            </li>
                            <li class="form-container">
                                <div><label for="ProfileSettings_About">About you</label></div>
                                <div>
                                    <textarea class="input-wrap" cols="20" data-val="true" data-val-length="About must be shorter than 1000 letters." data-val-length-max="1000" id="ProfileSettings_About" maxlength="1000" name="ProfileSettings.About" placeholder="Tell us about yourself!" rows="2"></textarea>
                                    <grammarly-btn>
                                        <div style="visibility: hidden; z-index: 2;" class="_e725ae-textarea_btn _e725ae-not_focused" data-grammarly-reactid=".3">
                                            <div class="_e725ae-transform_wrap" data-grammarly-reactid=".3.0">
                                                <div title="Protected by Grammarly" class="_e725ae-status" data-grammarly-reactid=".3.0.0">&nbsp;</div>
                                            </div>
                                        </div>
                                    </grammarly-btn>
                                    <span class="field-validation-valid" data-valmsg-for="ProfileSettings.About" data-valmsg-replace="true"></span>
                                </div>
                            </li>
                            <li class="form-container">
                                <div>
                                    <h2>Promote yourself</h2>
                                    <span>Add links to all your social networks</span>
                                </div>
                            </li>
                            <li class="form-container">
                                <div><label for="ProfileSettings_PinterestUsername">Pinterest</label></div>
                                <div class="social-link"><input class="input-wrap" data-val="true" data-val-length="Username must be shorter than 50 letters." data-val-length-max="50" id="ProfileSettings_PinterestUsername" maxlength="50" name="ProfileSettings.PinterestUsername" placeholder="Paste the link to your Pinterest" type="text" value=""><span class="field-validation-valid" data-valmsg-for="ProfileSettings.PinterestUsername" data-valmsg-replace="true"></span></div>
                            </li>
                            <li class="form-container">
                                <div><label for="ProfileSettings_FacebookUsername">Facebook</label></div>
                                <div class="social-link"><input class="input-wrap" data-val="true" data-val-length="Username must be shorter than 50 letters." data-val-length-max="50" id="ProfileSettings_FacebookUsername" maxlength="50" name="ProfileSettings.FacebookUsername" placeholder="Paste the link to your Facebook" type="text" value=""><span class="field-validation-valid" data-valmsg-for="ProfileSettings.FacebookUsername" data-valmsg-replace="true"></span></div>
                            </li>
                            <li class="form-container">
                                <div><label for="ProfileSettings_TwitterHandle">Twitter</label></div>
                                <div class="social-link"><input class="input-wrap" data-val="true" data-val-length="Username must be shorter than 50 letters." data-val-length-max="50" id="ProfileSettings_TwitterHandle" maxlength="50" name="ProfileSettings.TwitterHandle" placeholder="Paste the link to your Twitter" type="text" value=""><span class="field-validation-valid" data-valmsg-for="ProfileSettings.TwitterHandle" data-valmsg-replace="true"></span></div>
                            </li>
                            <li class="form-container">
                                <div><label for="ProfileSettings_GPlusUsername">Google+</label></div>
                                <div class="social-link"><input class="input-wrap" data-val="true" data-val-length="Username must be shorter than 50 letters." data-val-length-max="50" id="ProfileSettings_GPlusUsername" maxlength="50" name="ProfileSettings.GPlusUsername" placeholder="Paste the link to your Google+" type="text" value=""><span class="field-validation-valid" data-valmsg-for="ProfileSettings.GPlusUsername" data-valmsg-replace="true"></span></div>
                            </li>
                            <li class="form-container">
                                <div><label for="ProfileSettings_PersonalWebsite">Personal blog</label></div>
                                <div class="social-link"><input class="input-wrap" id="ProfileSettings_PersonalWebsite" name="ProfileSettings.PersonalWebsite" placeholder="Paste the link to your blog or site" type="text" value=""></div>
                            </li>
                            <li class="form-container">
                                <div></div>
                                <div style="clear: both">
                                    <input type="submit" class="btns-two-small" value="Save">
                                    <a href="/cook/my/" class="btns-two-small" target="_self">Cancel</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>                                     
            </section>
        </form> 
    </div>     
</section>
@stop