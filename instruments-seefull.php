<?php include('./include/header.php'); ?>

<!-- Header Slogan -->
<div class="headtitle">
    <div class="headtitle-background headtitle-background-ins-forex">
        <div class="headtitle-content">
            <div class="headtitle-content-slogan">
                <h3 class="headtitle-content-slogan-desc">INSTITUIONAL LIQUIDITY</h3>
                <h1 class="headtitle-content-slogan-title"><strong class="sitecolorred">CRYPTO CURRENCIES</strong></h1>
            </div>
        </div>
    </div>
    <div class="headtitle-icons">
        <i class="icons-sprite sprite-headtitle-100 icons-crypto"></i>
    </div>
</div>
<!-- Header Slogan -->

<!-- Instruments Start -->
<section class="instruments-section">
    <div class="container">

        <!-- Title -->
        <div class="sitetitle sitetitle-md sitetitle-black sitetitle-center" data-aos="fade-up" data-aos-duration="500">
            <h2>PLEASE FILL THE FORM FOR <br />THE <strong>INSTITUTIONAL SPREADS <span class="sitecolorred">FULL LIST</span></strong></h2>
        </div>
        <!-- Title -->

        <!-- Form Start -->
        <div class="instruments-form formuinew formuilabel">
            <form action="" autocomplete="off" onsubmit="return formValidator.verifyInstrumentsForm()" novalidate>
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
                        <button type="submit" class="btn btn-lg btn-danger btn-gradient-red btnwidth220">SEND</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Form End -->

    </div>
</section>
<!-- Instruments End -->

<!-- Other Instruments Start -->
<section class="section-item foot-item foot-item-bggray">
    <div class="container">

        <!-- Title -->
        <div class="sitetitle sitetitle-xl sitetitle-black sitetitle-center sitetitle-mb40" data-aos="fade-up" data-aos-duration="500">
            <h2>OTHER <strong class="sitecolorred">INSTRUMENTS</strong></h2>
        </div>
        <!-- Title -->

        <!-- Instruments Box -->
        <ul id="instrumentsboxowl" class="instruments-box owl-carousel owl-theme">
            <li class="instruments-box-item" data-aos="fade-right" data-aos-duration="700">
                <div class="instruments-box-icons"><i class="icons-sprite sprite-red-instruments-45 icons-indicies"></i></div>
                <h3 class="instruments-box-title">INDICIES</h3>
                <p class="instruments-box-desc">Lorem ipsum dolor sit amet, consectetur sed adipiscing elit. Integer in maximus lectus. <br />Donec sed scelerisque dolor.</p>
                <div class="instruments-box-item-btn">
                    <a class="btn btn-lg btn-danger btn-gradient-red" href="instruments-indicies" title="MORE INFORMATION" rel="bookmark">MORE INFORMATION</a>
                </div>
            </li>
            <li class="instruments-box-item">
                <div class="instruments-box-icons"><i class="icons-sprite sprite-red-instruments-45 icons-commodities"></i></div>
                <h3 class="instruments-box-title">COMMODITIES</h3>
                <p class="instruments-box-desc">Lorem ipsum dolor sit amet, consectetur sed adipiscing elit. Integer in maximus lectus. <br />Donec sed scelerisque dolor.</p>
                <div class="instruments-box-item-btn">
                    <a class="btn btn-lg btn-danger btn-gradient-red" href="instruments-commodities" title="MORE INFORMATION" rel="bookmark">MORE INFORMATION</a>
                </div>
            </li>
            <li class="instruments-box-item" data-aos="fade-left" data-aos-duration="700">
                <div class="instruments-box-icons"><i class="icons-sprite sprite-red-instruments-45 icons-forex"></i></div>
                <h3 class="instruments-box-title">FOREX</h3>
                <p class="instruments-box-desc">Lorem ipsum dolor sit amet, consectetur sed adipiscing elit. Integer in maximus lectus. <br />Donec sed scelerisque dolor.</p>
                <div class="instruments-box-item-btn">
                    <a class="btn btn-lg btn-danger btn-gradient-red" href="instruments-forex" title="MORE INFORMATION" rel="bookmark">MORE INFORMATION</a>
                </div>
            </li>
        </ul>
        <!-- Instruments Box -->

    </div>
</section>
<!-- Other Instruments End -->

<?php include('./include/footer-technologies.php'); ?>

<?php include('./include/footer.php'); ?>