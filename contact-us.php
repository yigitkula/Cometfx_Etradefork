<?php include('./include/header.php'); ?>

<!-- Header Slogan -->
<div class="headtitle">
    <div class="headtitle-background headtitle-background-ins-forex">
        <div class="headtitle-content container">
            <div class="row">
                <div class="col">
                    <div class="headtitle-content-icons" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="500">
                        <i class="icons-sprite sprite-headtitle-100 icons-contact"></i>
                    </div>
                    <div class="headtitle-content-slogan">
                        <h1 class="headtitle-content-slogan-title" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">CONTACT <strong class="sitecolorblue">US</strong></h1>
                    </div>
                    <div class="headtitle-submenu"></div>
                </div>
                <div class="col-auto">
                    <div class="headtitle-content-partner" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
                        <a class="btn btn-lg btn-info btn-gradient-bluesoft" href="become-a-partner" title="BECOME A PARTNER" rel="bookmark">BECOME A PARTNER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Slogan -->

<!-- Contact Us Start -->
<section class="contact contact-section section-item">
    <div class="container">

        <!-- Title -->
        <div class="sitetitle sitetitle-xl sitetitle-black sitetitle-center" data-aos="fade-up" data-aos-duration="500">
            <h2>SEND US <strong class="sitecolorblue">A MESSAGE</strong></h2>
        </div>
        <!-- Title -->

        <!-- Form Start -->
        <div class="contact-formarea formuinew formuilabel">
            <form id="contact-form" action="" autocomplete="off" onsubmit="return formValidator.verifyContactForm()" novalidate>
                <!-- Alert -->
                <div id="alert-wrapper"></div>
                <!-- Alert -->

                <div class="form-row">
                    <div class="form-group col">
                        <div class="labelanimation input-group">
                            <input type="text" class="form-control disabledautofillinput" pattern=".{0}|.{5,}" name="name" id="inputNameId" readonly="readonly" onfocus="javascript:this.removeAttribute('readonly')" required oninput="contactform.verifyContent('inputNameProcess','inputNameId','msgNameId','iconNameId')" onfocusout="contactform.verifyContentErrorDelete('inputNameProcess','inputNameId','msgNameId','iconNameId')" >
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
                            <input type="email" class="form-control disabledautofillinput" pattern="([A-Za-z0-9][._]?)+[A-Za-z0-9]@[A-Za-z0-9]+(\.?[A-Za-z0-9]){2}\.([A-Za-z0-9])+(\.[A-Za-z0-9]{2})?" name="email" id="inputEmailId" readonly="readonly" onfocus="javascript:this.removeAttribute('readonly')" required oninput="contactform.verifyContent('inputEmailProcess','inputEmailId','msgEmailId','iconEmailId')" onfocusout="contactform.verifyContentErrorDelete('inputEmailProcess','inputEmailId','msgEmailId','iconEmailId')" >
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
                            <input type="text" class="form-control inputphonemask disabledautofillinput" pattern=".{0}|.{11,}" name="phone" id="inputPhoneId" readonly="readonly" onfocus="javascript:this.removeAttribute('readonly')" required oninput="contactform.verifyContent('inputPhoneProcess','inputPhoneId','msgPhoneId','iconPhoneId')" onfocusout="contactform.verifyContentErrorDelete('inputPhoneProcess','inputPhoneId','msgPhoneId','iconPhoneId')" >
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
                                <div class="g-recaptcha" data-theme="dark" data-sitekey="6Ld7mK4ZAAAAAN19AsRRnDq5SStUVtv9Lii1yJdX"></div>
                            </div>
                            <label class="custom-control-label">I'm not Robot</label>
                        </div>
                    </div>
                    <div class="form-group col-auto d-none">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" type="checkbox" name="termsofuse" value="" id="termsOfUseCheck">
                            <label id="labeltermsOfUseCheck" class="custom-control-label" for="termsOfUseCheck">Lorem <a class="urllink" href="#" title="ipsum dolor" rel="bookmark" target="_blank">ipsum dolor</a> sit amet consectetur</label>
                            <span class="inputerrormessage" id="msgtermsOfUseCheckId"></span>
                        </div>
                    </div>
                </div>
                <div class="form-row form-row-center">
                    <div class="form-group col-auto" data-aos="zoom-in" data-aos-duration="500">
                        <button type="submit" class="btn btn-lg btn-info btnwidth220">SEND A MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Form End -->

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
                    <p class="contactus-box-desc">+44191 321 3377</p>
                </a>
            </li>
            <li class="contactus-box-item">
                <div class="contactus-box-icons"><i class="icons-sprite sprite-red-contactus-50 icons-mail"></i></div>
                <a href="mailto:support@marketsall.com" target="_blank" rel="external nofollow">
                    <p class="contactus-box-title">MAIL</p>
                    <p class="contactus-box-desc">support@marketsall.com</p>
                </a>
            </li>
            <li class="contactus-box-item" data-aos="fade-left" data-aos-duration="700">
                <div class="contactus-box-icons"><i class="icons-sprite sprite-red-contactus-50 icons-map"></i></div>
                <a href="contact-us" title="CONTACT US" target="_blank" rel="bookmark">
                    <p class="contactus-box-title">FIND US</p>
                    <p class="contactus-box-desc">London, Podgorica, Istanbul</p>
                </a>
            </li>
        </ul>
        <!-- Contact Us Box -->

    </div>
</section>
<!-- Contact Us Box End -->

<?php include('./include/footer.php'); ?>