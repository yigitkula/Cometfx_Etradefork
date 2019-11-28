<?php include('./include/header.php'); ?>

<!-- Header Slogan -->
<div class="headtitle">
    <div class="headtitle-background headtitle-background-login">
        <div class="headtitle-content">
            <div class="headtitle-content-slogan">
                <h1 class="headtitle-content-slogan-title">BECOME A <strong class="sitecolorred">PARTNER</strong></h1>
            </div>
        </div>
    </div>
    <div class="headtitle-icons">
        <i class="icons-sprite sprite-headtitle-100 icons-deal"></i>
    </div>
</div>
<!-- Header Slogan -->

<!-- Login Start -->
<section class="login">
    <div class="container">

        <!-- Title -->
        <div class="sitetitle sitetitle-xl sitetitle-black sitetitle-center" data-aos="fade-up" data-aos-duration="500">
            <h2>TAKE ADVANTAGE OF <br /><strong>E-TRADE <span class="sitecolorred">TECHNOLOGIES</span></strong></h2>
        </div>
        <!-- Title -->

        <!-- Form Start -->
        <div class="login-wrapper formuinew formuilabel">
            <form action="" autocomplete="off" onsubmit="return submitPartnerValidForm()" novalidate>
                <div class="form-row">
                    <div class="form-group col">
                        <div class="labelanimation input-group">
                            <input type="text" class="form-control disabledautofillinput" pattern=".{0}|.{2,}" name="name" id="inputNameId" readonly="readonly" onfocus="javascript:this.removeAttribute('readonly')" required oninput="partnerform.verifyContent('inputNameProcess','inputNameId','msgNameId','iconNameId')" onfocusout="partnerform.verifyContentErrorDelete('inputNameProcess','inputNameId','msgNameId','iconNameId')" >
                            <span class="inputerrormessage" id="msgNameId"></span>
                            <span class="inputbottombar"></span>
                            <label>NAME & SURNAME</label>
                            <div id="iconNameId" class="input-group-append">
                                <span class="input-group-text">
                                    <i class="icons-sprite sprite-form-iconset-24 icons-edit"></i>
                                    <i class="icons-sprite sprite-form-iconset-24 icons-check"></i>
                                    <i class="icons-sprite sprite-form-iconset-24 icons-error"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col">
                        <div class="labelanimation input-group">
                            <input type="email" class="form-control disabledautofillinput" pattern="([A-Za-z0-9][._]?)+[A-Za-z0-9]@[A-Za-z0-9]+(\.?[A-Za-z0-9]){2}\.([A-Za-z0-9])+(\.[A-Za-z0-9]{2})?" name="email" id="inputEmailId" readonly="readonly" onfocus="javascript:this.removeAttribute('readonly')" required oninput="partnerform.verifyContent('inputEmailProcess','inputEmailId','msgEmailId','iconEmailId')" onfocusout="partnerform.verifyContentErrorDelete('inputEmailProcess','inputEmailId','msgEmailId','iconEmailId')" >
                            <span class="inputerrormessage" id="msgEmailId"></span>
                            <span class="inputbottombar"></span>
                            <label>E-MAIL</label>
                            <div id="iconEmailId" class="input-group-append">
                                <span class="input-group-text">
                                    <i class="icons-sprite sprite-form-iconset-24 icons-edit"></i>
                                    <i class="icons-sprite sprite-form-iconset-24 icons-check"></i>
                                    <i class="icons-sprite sprite-form-iconset-24 icons-error"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col">
                        <div class="labelanimation input-group">
                            <input type="text" class="form-control inputphonemask disabledautofillinput" pattern=".{0}|.{14}" name="phone" id="inputPhoneId" readonly="readonly" onfocus="javascript:this.removeAttribute('readonly')" required oninput="partnerform.verifyContent('inputPhoneProcess','inputPhoneId','msgPhoneId','iconPhoneId')" onfocusout="partnerform.verifyContentErrorDelete('inputPhoneProcess','inputPhoneId','msgPhoneId','iconPhoneId')" >
                            <span class="inputerrormessage" id="msgPhoneId"></span>
                            <span class="inputbottombar"></span>
                            <label>PHONE NUMBER</label>
                            <div id="iconPhoneId" class="input-group-append">
                                <span class="input-group-text">
                                    <i class="icons-sprite sprite-form-iconset-24 icons-edit"></i>
                                    <i class="icons-sprite sprite-form-iconset-24 icons-check"></i>
                                    <i class="icons-sprite sprite-form-iconset-24 icons-error"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row form-row-center">
                    <div class="form-group col-auto d-none">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="recaptcha">
                            <label class="custom-control-label" for="recaptcha">I'm not a robot</label>
                        </div>
                    </div>
                    <div class="form-group col-auto">
                        <div class="recaptcha-area d-flex">
                            <div class="recaptcha-check">
                                <div class="g-recaptcha" data-theme="dark" data-sitekey="6LewOKAUAAAAAMDO2yohWeyDcjFAHfcuEqK2mIp4"></div>
                            </div>
                            <label class="custom-control-label">Ben rabot değilim</label>
                        </div>
                    </div>
                    <div class="form-group col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" type="checkbox" name="termsofuse" value="" id="termsOfUseCheck">
                            <label id="labeltermsOfUseCheck" class="custom-control-label" for="termsOfUseCheck">Lorem <a class="urllink" href="#" title="ipsum dolor" rel="bookmark" target="_blank">ipsum dolor</a> sit amet consectetur</label>
                            <span class="inputerrormessage" id="msgtermsOfUseCheckId"></span>
                        </div>
                    </div>
                </div>
                <div class="form-row form-row-center">
                    <div class="form-group col-auto" data-aos="zoom-in" data-aos-duration="500">
                        <button type="submit" class="btn btn-lg btn-danger btn-gradient-red btnwidth220">REQUEST A QUOTE</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Form End -->

        <!-- Form Validation -->
        <script type="text/javascript">

            function verifyFirstName() {
                if(document.getElementById('inputNameId').value.length < 2){
                    document.getElementById('iconNameId').classList.add("error");
                    document.getElementById('iconNameId').classList.remove("check");
                    document.getElementById('msgNameId').innerText = "EN AZ 2 KARAKTER";
                    return false;
                } else {
                    document.getElementById('inputNameId').classList.add("check");
                    document.getElementById('iconNameId').classList.remove("error");
                    document.getElementById('msgNameId').innerText = "";
                    return true;
                }
                return true;
            }

            function verifyValidEmail() {
                var emailPattern	= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                if(!document.getElementById('inputEmailId').value.match(emailPattern)){
                    document.getElementById('iconEmailId').classList.add("error");
                    document.getElementById('iconEmailId').classList.remove("check");
                    document.getElementById('msgEmailId').innerText = "HATALI E-POSTA";
                    return false;
                } else {
                    document.getElementById('iconEmailId').classList.add("check");
                    document.getElementById('iconEmailId').classList.remove("error");
                    document.getElementById('msgEmailId').innerText = "";
                    return true;
                }
                return true;
            }

            function verifyValidPhone() {
                if(document.getElementById('inputPhoneId').value.replace(/\s/g, "").length < 11){
                    document.getElementById('iconPhoneId').classList.add("error");
                    document.getElementById('iconPhoneId').classList.remove("check");
                    document.getElementById('msgPhoneId').innerText = "HATALI TELEFON";
                    return false;
                } else {
                    document.getElementById('iconPhoneId').classList.add("check");
                    document.getElementById('iconPhoneId').classList.remove("error");
                    document.getElementById('msgPhoneId').innerText = "";
                    return true;
                }
                return true;
            }

            function verifyValidTermsOfUse() {
                var termsOfUseCheck	= document.getElementById('termsOfUseCheck').checked;

                if(!termsOfUseCheck){
                    document.getElementById('labeltermsOfUseCheck').classList.add("checkederror");
                    document.getElementById('labeltermsOfUseCheck').classList.remove("checkedcheck");
                    return false;
                } else {
                    document.getElementById('labeltermsOfUseCheck').classList.add("checkedcheck");
                    document.getElementById('labeltermsOfUseCheck').classList.remove("checkederror");
                    return true;
                }
                return true;
            }

            function submitPartnerValidForm() {
                if (!verifyFirstName() || !verifyValidEmail() ||  !verifyValidPhone() || !verifyValidTermsOfUse()){
                    console.log("HATA");
                    return false;
                } else {
                    console.log("DOGRU");
                }
            }
        </script>
        <!-- Form Validation -->

    </div>
</section>
<!-- Login End -->

<!-- Technology Start -->
<section class="section-item foot-item foot-item-bggray">
    <div class="container">

        <!-- Technology Box -->
        <ul id="technologyboxowl" class="technology-box owl-carousel owl-theme">
            <li class="technology-box-item" data-aos="fade-right" data-aos-duration="700">
                <div class="technology-box-icons"><i class="icons-sprite sprite-technology-200 icons-3000"></i></div>
                <h3 class="technology-box-title">Access to 3000+ <br />Global Instruments</h3>
                <p class="technology-box-desc">Lorem ipsum dolor sit amet, consectetur sed adipiscing elit. Integer in maximus lectus. <br />Donec sed scelerisque dolor.</p>
            </li>
            <li class="technology-box-item">
                <div class="technology-box-icons"><i class="icons-sprite sprite-technology-200 icons-speed"></i></div>
                <h3 class="technology-box-title">World Best <br />Execution Speeds</h3>
                <p class="technology-box-desc">Lorem ipsum dolor sit amet, consectetur sed adipiscing elit. Integer in maximus lectus. <br />Donec sed scelerisque dolor.</p>
            </li>
            <li class="technology-box-item" data-aos="fade-left" data-aos-duration="700">
                <div class="technology-box-icons"><i class="icons-sprite sprite-technology-200 icons-price"></i></div>
                <h3 class="technology-box-title">Enhanced Pricing <br />for STP & ECN Brokers</h3>
                <p class="technology-box-desc">Lorem ipsum dolor sit amet, consectetur sed adipiscing elit. Integer in maximus lectus. <br />Donec sed scelerisque dolor.</p>
            </li>
        </ul>
        <!-- Technology Box -->

    </div>
</section>
<!-- Technology End -->

<?php include('./include/footer.php'); ?>