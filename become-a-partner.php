<?php include('./include/header.php'); ?>

<!-- Header Slogan -->
<div class="headtitle">
    <div class="headtitle-background headtitle-background-ins-forex">
        <div class="headtitle-content container">
            <div class="row">
                <div class="col">
                    <div class="headtitle-content-icons" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="500">
                        <i class="icons-sprite sprite-headtitle-100 icons-deal"></i>
                    </div>
                    <div class="headtitle-content-slogan">
                        <h1 class="headtitle-content-slogan-title" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">BECOME A <strong class="sitecolorblue">PARTNER</strong></h1>
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

<!-- Login Start -->
<section class="login">
    <div class="container">

        <!-- Title -->
        <div class="sitetitle sitetitle-xl sitetitle-black sitetitle-center" data-aos="fade-up" data-aos-duration="500">
            <h2>TAKE ADVANTAGE OF <br /><strong>E-TRADE <span class="sitecolorblue">TECHNOLOGIES</span></strong></h2>
        </div>
        <!-- Title -->

        <!-- Form Start -->
        <div class="login-wrapper formuinew formuilabel">
            <form action="" autocomplete="off" onsubmit="return formValidator.verifyPartnerForm()" novalidate>
                <!-- Alert -->
                <div id="alert-wrapper"></div>
                <!-- Alert -->
                <div class="form-row">
                    <div class="form-group col">
                        <div class="labelanimation input-group">
                            <input type="text" class="form-control disabledautofillinput" pattern=".{0}|.{5,}" name="name" id="inputNameId" readonly="readonly" onfocus="javascript:this.removeAttribute('readonly')" required oninput="partnerform.verifyContent('inputNameProcess','inputNameId','msgNameId','iconNameId')" onfocusout="partnerform.verifyContentErrorDelete('inputNameProcess','inputNameId','msgNameId','iconNameId')" >
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
                            <input type="text" class="form-control inputphonemask disabledautofillinput" pattern=".{0}|.{11,}" name="phone" id="inputPhoneId" readonly="readonly" onfocus="javascript:this.removeAttribute('readonly')" required oninput="partnerform.verifyContent('inputPhoneProcess','inputPhoneId','msgPhoneId','iconPhoneId')" onfocusout="partnerform.verifyContentErrorDelete('inputPhoneProcess','inputPhoneId','msgPhoneId','iconPhoneId')" >
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
                                <div class="g-recaptcha" data-theme="dark" data-sitekey="6LdipsUUAAAAAL9GxW2_k4RolQfkcCSqaeyWmwWZ"></div>
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
                        <button type="submit" class="btn btn-lg btn-info btnwidth220">REQUEST A QUOTE</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Form End -->

    </div>
</section>
<!-- Login End -->

<!-- E-Trade Technologies Start -->
<section class="foot-technology section-item">
    <div class="container">

        <!-- Technology Box -->
        <ul id="technologyboxowl" class="technology-box owl-carousel owl-theme">
            <li class="technology-box-item" data-aos="fade-right" data-aos-duration="700">
                <div class="technology-box-icons"><i class="icons-sprite sprite-technology-200 icons-1000"></i></div>
                <h3 class="technology-box-title">Access to 1000+ <br />Global Instruments</h3>
                <p class="technology-box-desc">Trade over 1.000 instruments, connect the most requested exchanges all-over the world.</p>
            </li>
            <li class="technology-box-item">
                <div class="technology-box-icons"><i class="icons-sprite sprite-technology-200 icons-speed"></i></div>
                <h3 class="technology-box-title">World Best <br />Execution Speeds</h3>
                <p class="technology-box-desc">Take the advantage of our powerful dedicated servers located in London, Frankfurt and Sofia. Execute trades below 50ms.</p>
            </li>
            <li class="technology-box-item" data-aos="fade-left" data-aos-duration="700">
                <div class="technology-box-icons"><i class="icons-sprite sprite-technology-200 icons-price"></i></div>
                <h3 class="technology-box-title">Enhanced Pricing <br />for STP & ECN Brokers</h3>
                <p class="technology-box-desc">For the ones who seek for STP&ECN solution. Get the enhanced pricing and quotes. Instantly.</p>
            </li>
        </ul>
        <!-- Technology Box -->

    </div>
</section>
<!-- E-Trade Technologies End -->

<?php include('./include/footer.php'); ?>