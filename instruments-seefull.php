<?php include('./include/header.php'); ?>

<!-- Header Slogan -->
<div class="headtitle">
    <div class="headtitle-background headtitle-background-ins-forex">
        <div class="headtitle-content container">
            <div class="row">
                <div class="col">
                    <div class="headtitle-content-icons" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="500">
                        <i class="icons-sprite sprite-headtitle-100 icons-crypto"></i>
                    </div>
                    <div class="headtitle-content-slogan">
                        <h3 class="headtitle-content-slogan-desc" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="500">INSTITUIONAL LIQUIDITY</h3>
                        <h1 class="headtitle-content-slogan-title" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0"><strong class="sitecolorblue">CRYPTO CURRENCIES</strong></h1>
                    </div>
                    <div class="headtitle-submenu">
                        <ul class="headsubmenu">
                            <li><a href="instruments-forex" title="FOREX" rel="category">FOREX</a></li>
                            <li><a href="instruments-indicies" title="INDICES" rel="category">INDICES</a></li>
                            <li><a href="instruments-commodities" title="COMMODITIES" rel="category">COMMODITIES</a></li>
                            <li class="active"><a href="instruments-cryptos" title="CRYPTO CURRENCIES" rel="category">CRYPTO CURRENCIES</a></li>
                        </ul>
                    </div>
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

<!-- Instruments Start -->
<section class="instruments-section">
    <div class="container">

        <!-- Title -->
        <div class="sitetitle sitetitle-md sitetitle-black sitetitle-center" data-aos="fade-up" data-aos-duration="500">
            <h2>PLEASE FILL THE FORM FOR <br />THE <strong>INSTITUTIONAL SPREADS <span class="sitecolorblue">FULL LIST</span></strong></h2>
        </div>
        <!-- Title -->

        <!-- Form Start -->
        <div class="instruments-form formuinew formuilabel">
            <form action="" autocomplete="off" onsubmit="return formValidator.verifyInstrumentsForm()" novalidate>
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
                        <button type="submit" class="btn btn-lg btn-info btnwidth220">SEND</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Form End -->

    </div>
</section>
<!-- Instruments End -->

<!-- Marketsall Technologies Start -->
<section class="foot-technology section-item">
    <div class="container">

        <!-- Title -->
        <div class="sitetitle sitetitle-xl sitetitle-black sitetitle-center sitetitle-mb60" data-aos="fade-up" data-aos-duration="500">
            <h2>TAKE ADVANTAGE OF <strong><span class="sitecolorblue">MARKETS</span>ALL</strong></h2>
        </div>
        <!-- Title -->

        <!-- Technology Box -->
        <ul id="technologyboxowl" class="technology-box owl-carousel owl-theme">
            <li class="technology-box-item" data-aos="fade-right" data-aos-duration="700">
                <div class="technology-box-icons"><i class="icons-sprite sprite-technology-200 icons-norequotes"></i></div>
                <h3 class="technology-box-title">NO REQUOTES</h3>
                <p class="technology-box-desc">Lorem ipsum dolor sit amet, consectetur sed adipiscing elit. Integer in maximus lectus. <br />Donec sed scelerisque dolor.</p>
            </li>
            <li class="technology-box-item">
                <div class="technology-box-icons"><i class="icons-sprite sprite-technology-200 icons-speed2"></i></div>
                <h3 class="technology-box-title">ULTRA-FAST EXC</h3>
                <p class="technology-box-desc">Lorem ipsum dolor sit amet, consectetur sed adipiscing elit. Integer in maximus lectus. <br />Donec sed scelerisque dolor.</p>
            </li>
            <li class="technology-box-item" data-aos="fade-left" data-aos-duration="700">
                <div class="technology-box-icons"><i class="icons-sprite sprite-technology-200 icons-deep"></i></div>
                <h3 class="technology-box-title">DEEP LIQUIDITY</h3>
                <p class="technology-box-desc">Lorem ipsum dolor sit amet, consectetur sed adipiscing elit. Integer in maximus lectus. <br />Donec sed scelerisque dolor.</p>
            </li>
        </ul>
        <!-- Technology Box -->

    </div>
</section>
<!-- Marketsall Technologies End -->

<?php include('./include/footer.php'); ?>