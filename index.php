<?php include('./include/header.php'); ?>

<script>
$(document).ready(function() {
    $('body').addClass("homepage");
});
</script>

<!-- Header Slogan -->
<div class="headtitle">
    <div class="headtitle-background headtitle-background-home">
        <div class="headtitle-home">
            <div class="headtitle-home-slogan">
                <h1 class="headtitle-home-slogan-title" data-aos="fade-up" data-aos-duration="1000">MULTI-ASSET <strong><span class="sitecolorred">LIQUIDITY &</span> TECHNOLOGY</strong> PROVIDER</h1>
                <h3 class="headtitle-home-slogan-desc" data-aos="fade-up" data-aos-duration="1500">OFFER MULTI-ASSET UNLEASHED LIQUIDITY FOR YOUR CLIENTS</h3>
            </div>
            <div class="headtitle-home-instruments">
                <ul class="headtitle-home-instruments-list">
                    <li data-aos="fade-right" data-aos-duration="1750">
                        <a href="instruments-forex" title="FOREX" rel="bookmark">
                            <i class="icons-sprite sprite-red-instruments-45 icons-forex"></i>
                            <span>FOREX</span>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1750">
                        <a href="instruments-indicies" title="INDICES" rel="bookmark">
                            <i class="icons-sprite sprite-red-instruments-45 icons-indicies"></i>
                            <span>INDICES</span>
                        </a>
                    </li>
                    <li data-aos="fade-down" data-aos-duration="1750">
                        <a href="instruments-commodities" title="COMMODITIES" rel="bookmark">
                            <i class="icons-sprite sprite-red-instruments-45 icons-commodities"></i>
                            <span>COMMODITIES</span>
                        </a>
                    </li>
                    <li data-aos="fade-left" data-aos-duration="1750">
                        <a href="instruments-cryptos" title="CRYPTOS" rel="bookmark">
                            <i class="icons-sprite sprite-red-instruments-45 icons-crypto"></i>
                            <span>CRYPTOS</span>
                        </a>
                    </li>
                </ul>
                <div class="headtitle-home-instruments-btn" data-aos="zoom-in-up" data-aos-duration="2800">
                    <a class="btn btn-lg btn-danger btn-gradient-red" href="become-a-partner" title="REQUEST A QUOTE" rel="bookmark">REQUEST A QUOTE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Slogan -->

<!-- Explore Our Technology Start -->
<section class="home-technology section-item home-bg">
    <div class="container">

        <!-- Title -->
        <div class="sitetitle sitetitle-xl sitetitle-black sitetitle-center" data-aos="fade-up" data-aos-duration="500">
            <h2>EXPLORE OUR <strong class="sitecolorred">TECHNOLOGY</strong></h2>
        </div>
        <!-- Title -->

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
        <div class="technology-box-btn" data-aos="fade-up" data-aos-duration="500">
            <a class="btn btn-lg btn-danger btn-gradient-red" href="become-a-partner" title="REQUEST A QUOTE" rel="bookmark">REQUEST A QUOTE</a>
        </div>
        <!-- Technology Box -->

    </div>
</section>
<!-- Explore Our Technology End -->

<!-- Instruments Start -->
<section class="home-instruments homept">
    <div class="container">

        <!-- Title -->
        <div class="sitetitle sitetitle-xl sitetitle-black sitetitle-center" data-aos="fade-up" data-aos-duration="500">
            <h2>DEEP INSTITUTIONAL LIQUIDITY ON <br /><strong class="sitecolorred">1000+</strong> <span>GLOBAL</span> INSTRUMENTS</h2>
        </div>
        <!-- Title -->

        <!-- Tabs Start -->
        <div class="instruments-tab sitetabs sitecontent">

            <!-- Tabs Link -->
            <ul class="nav nav-center nav-btn" role="tablist">
                <li class="nav-item"><a data-toggle="tab" role="tab" aria-selected="true" class="nav-link active" href="#TABFOREX"><span>FOREX</span></a></li>
                <li class="nav-item"><a data-toggle="tab" role="tab" aria-selected="false" class="nav-link" href="#TABINDICES"><span>INDICES</span></a></li>
                <li class="nav-item"><a data-toggle="tab" role="tab" aria-selected="false" class="nav-link" href="#TABCOMMODITIES"><span>COMMODITIES</span></a></li>
                <li class="nav-item"><a data-toggle="tab" role="tab" aria-selected="false" class="nav-link" href="#TABCRYPTOS"><span>CRYPTOS</span></a></li>
            </ul>
            <!-- Tabs Link -->

            <!-- Tabs Content -->
            <div class="tab-content content-horizantaltable" data-aos="fade-down" data-aos-duration="500">
                <div role="tabpanel" id="TABFOREX" class="tab-pane fade show active">
                    <div class="instruments-tab-table">
                        <table class="sitetable horizantal table">
                            <thead>
                            <tr>
                                <th class="" data-title="INSTRUMENT"><span class="thbox"><span class="thtxt">INSTRUMENT</span></span></th>
                                <th class="" data-title="BID"><span class="thbox"><span class="thtxt">BID</span></span></th>
                                <th class="" data-title="OFFER"><span class="thbox"><span class="thtxt">OFFER</span></span></th>
                                <th class="" data-title="SPREAD"><span class="thbox"><span class="thtxt">SPREAD</span></span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $json = @file_get_contents('./include/price.json');
                            if($json){
                                $result = json_decode($json);
                                if($result->forex){
                                    foreach ($result->forex as $item) {
                                        $spread = floatval($item->ask) - floatval($item->bid);
                                        echo '<tr>';
                                        echo '<td class="" data-title="INSTRUMENT">' . $item->symbol . '</td>';
                                        echo '<td class="" data-title="BID">' . number_format($item->bid, 5, '.', '') . '</td>';
                                        echo '<td class="" data-title="OFFER">' . number_format($item->ask, 5, '.', '') . '</td>';
                                        echo '<td class="" data-title="SPREAD">' . number_format($spread, 5, '.', '') . '</td>';
                                        echo '</tr>';
                                    }
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div role="tabpanel" id="TABINDICES" class="tab-pane fade show">
                    <div class="instruments-tab-table">
                        <table class="sitetable horizantal table">
                            <thead>
                            <tr>
                                <th class="" data-title="INSTRUMENT"><span class="thbox"><span class="thtxt">INSTRUMENT</span></span></th>
                                <th class="" data-title="PRICE"><span class="thbox"><span class="thtxt">PRICE</span></span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $json = @file_get_contents('./include/price.json');
                            if($json){
                                $result = json_decode($json);
                                if($result->indices){
                                    foreach ($result->indices as $item) {
                                        echo '<tr>';
                                        echo '<td class="" data-title="INSTRUMENT">' . $item->symbol . '</td>';
                                        echo '<td class="" data-title="PRICE">' . number_format($item->price, 5, '.', '') . '</td>';
                                        echo '</tr>';
                                    }
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div role="tabpanel" id="TABCOMMODITIES" class="tab-pane fade show">
                    <div class="instruments-tab-table">
                        <table class="sitetable horizantal table">
                            <thead>
                            <tr>
                                <th class="" data-title="INSTRUMENT"><span class="thbox"><span class="thtxt">INSTRUMENT</span></span></th>
                                <th class="" data-title="PRICE"><span class="thbox"><span class="thtxt">PRICE</span></span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $json = @file_get_contents('./include/price.json');
                            if($json){
                                $result = json_decode($json);
                                if($result->commodities){
                                    foreach ($result->commodities as $item) {
                                        echo '<tr>';
                                        echo '<td class="" data-title="INSTRUMENT">' . $item->symbol . '</td>';
                                        echo '<td class="" data-title="PRICE">' . number_format($item->price, 5, '.', '') . '</td>';
                                        echo '</tr>';
                                    }
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div role="tabpanel" id="TABCRYPTOS" class="tab-pane fade show">
                    <div class="instruments-tab-table">
                        <table class="sitetable horizantal table">
                            <thead>
                            <tr>
                                <th class="" data-title="INSTRUMENT"><span class="thbox"><span class="thtxt">INSTRUMENT</span></span></th>
                                <th class="" data-title="PRICE"><span class="thbox"><span class="thtxt">PRICE</span></span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $json = @file_get_contents('./include/price.json');
                            if($json){
                                $result = json_decode($json);
                                if($result->crypto){
                                    foreach ($result->crypto as $item) {
                                        echo '<tr>';
                                        echo '<td class="" data-title="INSTRUMENT">' . $item->symbol . '</td>';
                                        echo '<td class="" data-title="PRICE">' . number_format($item->price, 8, '.', '') . '</td>';
                                        echo '</tr>';
                                    }
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="content-horizantaltable-bottombtn" data-aos="fade-down" data-aos-duration="500">
                <a href="instruments-seefull" class="btn btn-lg btn-gradient-red" title="SEE ALL" rel="bookmark">SEE ALL</a>
            </div>
            <!-- Tabs Content -->

        </div>
        <!-- Tabs End -->

    </div>
</section>
<!-- Instruments End -->

<!-- Platforms Start -->
<section class="foot-platforms">

    <!-- Platforms Image -->
    <div class="foot-platforms-imgbox">
        <i class="foot-platforms-imgbox-img" data-aos="fade-down" data-aos-duration="1000"></i>
        <span class="foot-platforms-imgbox-comingsoon"><span class="sitecolorwhite d-block">COMING</span><strong class="sitecolorred d-block">SOON!</strong></span>
    </div>
    <!-- Platforms Image -->

    <!-- Title -->
    <div class="sitetitle sitetitle-xl sitetitle-white sitetitle-center sitetitle-width1100" data-aos="fade-up" data-aos-duration="500">
        <h2>TRADE LIKE A PRO WITH <strong>E-TRADE <span class="sitecolorred">PRO</span></strong></h2>
        <p>E-Trade Pro Trading Platform, created from scratch, just for the professional brokers. Includes multiple-close, various types of orders, better execution than Metatrader, lots of graphical updates, analysis tools, signals, Multi-Account Management and so on.E-Trade Pro, builded by traders, for traders.</p>
    </div>
    <!-- Title -->

    <!-- Button -->
    <div class="foot-platforms-btn" data-aos="zoom-in-up" data-aos-duration="1000">
        <a class="btn btn-lg btn-danger btn-gradient-red" href="platforms-phase-pro" title="EXPLORE ETRADE PRO">EXPLORE ETRADE PRO</a>
    </div>
    <!-- Button -->

</section>
<!-- Platforms End -->

<!-- Liquidity Providers Start -->
<section class="foot-liquidity">
    <div class="container">

        <!-- Title -->
        <div class="sitetitle sitetitle-xl sitetitle-white sitetitle-center" data-aos="fade-up" data-aos-duration="500">
            <h2>LIQUIDITY <strong class="sitecolorred">PROVIDERS</strong></h2>
        </div>
        <!-- Title -->

        <!-- Liquidity Providers Box -->
        <ul id="footliquidityprovidersowl" class="liquidityproviders-box owl-carousel owl-theme" data-aos="fade-down" data-aos-duration="500">
            <li class="liquidityproviders-box-item">
                <div class="liquidityproviders-box-blur">
                    <div class="liquidityproviders-box-icons"><i class="icons-sprite sprite-liquidityproviders-180 icons-logo01"></i></div>
                    <div class="liquidityproviders-box-desc">
                        <p>Over the past decade, the name Leverate has become synonymous with high quality, premium brokerage solutions and services.</p>
                        <p>Our secret lies in our uncompromising approach to advanced technology, and in our attention to our clients’ needs and wants.</p>
                        <p class="desclinks"><a class="urllink" href="https://leverate.com" title="Visit it" target="_blank" rel="external nofollow">www.leverate.com</a></p>
                    </div>
                </div>
            </li>
            <li class="liquidityproviders-box-item">
                <div class="liquidityproviders-box-blur">
                    <div class="liquidityproviders-box-icons"><i class="icons-sprite sprite-liquidityproviders-180 icons-logo02"></i></div>
                    <div class="liquidityproviders-box-desc">
                        <p>By enabling private investors to access real-time prices free of charge we followed our mission of “democratising banking” - transparency, integrity and unbiased information for the benefit of our clients, allowing them to make independent decisions.</p>
                        <p>Through the success of this proposition Swissquote Group Holding Ltd was created and listed on the SIX Swiss Exchange in May 2000.</p>
                        <p class="desclinks"><a class="urllink" href="https://en.swissquote.com/?sq_mobile=1&sq_country=US" title="Visit it" target="_blank" rel="external nofollow">en.swissquote.com</a></p>
                    </div>
                </div>
            </li>
            <li class="liquidityproviders-box-item">
                <div class="liquidityproviders-box-blur">
                    <div class="liquidityproviders-box-icons"><i class="icons-sprite sprite-liquidityproviders-180 icons-logo03"></i></div>
                    <div class="liquidityproviders-box-desc">
                        <p>IS Prime is part of the ISAM Capital Markets group and offers full service multi-asset brokerage and execution via it’s cutting edge proprietary technology.</p>
                        <p>As a prime of prime, IS Prime provides aggregated pricing sourced from Tier one institutions, settled through the group’s bank Prime brokers.</p>
                        <p class="desclinks"><a class="urllink" href="https://www.isprimefx.com" title="Visit it" target="_blank" rel="external nofollow">www.isprimefx.com</a></p>
                    </div>
                </div>
            </li>
        </ul>
        <!-- Liquidity Providers Box -->

        <!-- Button -->
        <div class="foot-liquidity-btn" data-aos="zoom-in-up" data-aos-duration="1000">
            <a class="btn btn-lg btn-danger btn-gradient-red" href="become-a-partner" title="BECOME A PARTNER" rel="bookmark">BECOME A PARTNER</a>
        </div>
        <!-- Button -->

    </div>
</section>
<!-- Liquidity Providers End -->

<?php include('./include/footer.php'); ?>