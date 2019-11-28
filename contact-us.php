<?php include('./include/header.php'); ?>

<!-- Header Slogan -->
<div class="headtitle">
    <div class="headtitle-background headtitle-background-ins-forex">
        <div class="headtitle-content">
            <div class="headtitle-content-slogan">
                <h1 class="headtitle-content-slogan-title">CONTACT <strong class="sitecolorred">US</strong></h1>
            </div>
        </div>
    </div>
    <div class="headtitle-icons">
        <i class="icons-sprite sprite-headtitle-100 icons-contact"></i>
    </div>
</div>
<!-- Header Slogan -->

<!-- Contact Us Start -->
<section class="contact contact-section section-item">
    <div class="container">

        <!-- Title -->
        <div class="sitetitle sitetitle-xl sitetitle-black sitetitle-center" data-aos="fade-up" data-aos-duration="500">
            <h2>SEND US <strong class="sitecolorred">A MESSAGE</strong></h2>
        </div>
        <!-- Title -->

        <!-- Form Start -->
        <div class="contact-formarea formuinew formuilabel">
            <form action="" autocomplete="off" onsubmit="return submitContactValidForm()" novalidate>
                <div class="form-row">
                    <div class="form-group col">
                        <div class="labelanimation input-group">
                            <input type="text" class="form-control disabledautofillinput" pattern=".{0}|.{2,}" name="name" id="inputNameId" readonly="readonly" onfocus="javascript:this.removeAttribute('readonly')" required oninput="contactform.verifyContent('inputNameProcess','inputNameId','msgNameId','iconNameId')" onfocusout="contactform.verifyContentErrorDelete('inputNameProcess','inputNameId','msgNameId','iconNameId')" >
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
                            <input type="email" class="form-control disabledautofillinput" pattern="([A-Za-z0-9][._]?)+[A-Za-z0-9]@[A-Za-z0-9]+(\.?[A-Za-z0-9]){2}\.([A-Za-z0-9])+(\.[A-Za-z0-9]{2})?" name="email" id="inputEmailId" readonly="readonly" onfocus="javascript:this.removeAttribute('readonly')" required oninput="contactform.verifyContent('inputEmailProcess','inputEmailId','msgEmailId','iconEmailId')" onfocusout="partnerform.verifyContentErrorDelete('inputEmailProcess','inputEmailId','msgEmailId','iconEmailId')" >
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
                            <input type="text" class="form-control inputphonemask disabledautofillinput" pattern=".{0}|.{14}" name="phone" id="inputPhoneId" readonly="readonly" onfocus="javascript:this.removeAttribute('readonly')" required oninput="contactform.verifyContent('inputPhoneProcess','inputPhoneId','msgPhoneId','iconPhoneId')" onfocusout="contactform.verifyContentErrorDelete('inputPhoneProcess','inputPhoneId','msgPhoneId','iconPhoneId')" >
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
                <div class="form-row">
                    <div class="form-group col">
                        <div class="labelanimation textarea input-group">
                            <textarea type="text" class="form-control textarea disabledautofillinput" name="name" id="inputMessageId" readonly="readonly" onfocus="javascript:this.removeAttribute('readonly')" required oninput="contactform.verifyContent('inputMessageProcess','inputMessageId','msgMessageId','iconMessageId')" onfocusout="contactform.verifyContentErrorDelete('inputMessageProcess','inputMessageId','msgMessageId','iconMessageId')"></textarea>
                            <i class="inputcheckicon"></i>
                            <span class="inputerrormessage" id="msgMessageId"></span>
                            <span class="inputbottombar"></span>
                            <label>MESSAGE...</label>
                            <div id="iconMessageId" class="input-group-append">
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
                        <button type="submit" class="btn btn-lg btn-danger btn-gradient-red btnwidth220">SEND A MESSAGE</button>
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

            function verifyMessageName() {
                if(document.getElementById('inputMessageId').value.length < 10){
                    document.getElementById('iconMessageId').classList.add("error");
                    document.getElementById('iconMessageId').classList.remove("check");
                    document.getElementById('msgMessageId').innerText = "EN AZ 10 KARAKTER";
                    return false;
                } else if(document.getElementById('inputMessageId').value.length >= 2000){
                    document.getElementById('iconMessageId').classList.add("error");
                    document.getElementById('iconMessageId').classList.remove("check");
                    document.getElementById('msgMessageId').innerText = "2000 KARAKTER SINIRI AŞILDI";
                    return false;
                } else {
                    document.getElementById('inputMessageId').classList.add("check");
                    document.getElementById('iconMessageId').classList.remove("error");
                    document.getElementById('msgMessageId').innerText = "";
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

            function submitContactValidForm() {
                if (!verifyFirstName() || !verifyValidEmail() || !verifyValidPhone() || !verifyMessageName() || !verifyValidTermsOfUse()){
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
<!-- Contact Us End -->

<!-- Contact Us Box Start -->
<section class="section-item foot-item foot-item-bggray">
    <div class="container">

        <!-- Contact Us Box -->
        <ul id="contactusboxowl" class="contactus-box owl-carousel owl-theme">
            <li class="contactus-box-item" data-aos="fade-right" data-aos-duration="700">
                <div class="contactus-box-icons"><i class="icons-sprite sprite-red-contactus-50 icons-phone"></i></div>
                <a href="tel:441913213377" target="_blank" rel="external nofollow">
                    <p class="contactus-box-title">PHONE</p>
                    <p class="contactus-box-desc">+44 191 321 3377</p>
                </a>
            </li>
            <li class="contactus-box-item">
                <div class="contactus-box-icons"><i class="icons-sprite sprite-red-contactus-50 icons-mail"></i></div>
                <a href="mailto:hello@etrade.com" target="_blank" rel="external nofollow">
                    <p class="contactus-box-title">MAIL</p>
                    <p class="contactus-box-desc">hello@etrade.com</p>
                </a>
            </li>
            <li class="contactus-box-item" data-aos="fade-left" data-aos-duration="700">
                <div class="contactus-box-icons"><i class="icons-sprite sprite-red-contactus-50 icons-map"></i></div>
                <a href="contact-us" title="CONTACT US" target="_blank" rel="bookmark">
                    <p class="contactus-box-title">FIND US</p>
                    <p class="contactus-box-desc">İstanbul, Turkiye</p>
                </a>
            </li>
        </ul>
        <!-- Contact Us Box -->

    </div>
</section>
<!-- Contact Us Box End -->

<?php include('./include/footer.php'); ?>