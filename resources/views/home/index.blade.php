@extends('layouts.main')

@section('content')
    <!-- about-section -->
    <!-- about-section -->
    <section class="about-section sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <div class="image-shape">
                            <div class="shape-1" style="background-image: url({{ asset('assets/img/shape-1.png') }});"></div>
                            <div class="shape-2" style="background-image: url({{ asset('assets/img/shape-2.png') }});"></div>
                            <!-- <div class="shape-3" style="background-image: url({{ asset('assets/img/shape-3.png') }});"></div> -->
                            <div class="shape-3" style="background-image: url({{ asset('assets/img/shape-1ex.png') }});">
                            </div>
                            <div class="shape-4" style="background-image: url({{ asset('assets/img/shape-2ex.png') }});">
                            </div>
                        </div>
                        <figure class="image"><img src="{{ asset('assets/img/jmkfile/accueil/accueil-agro.fw.png') }}"
                                alt=""></figure>
                        <div class="experience-box">
                            <!-- <h2>9</h2> -->
                            <h6>CERTIFIÉ En Agriculture</h6>
                        </div>
                        <div class="circle-box">
                            <span class="curved-circle">Environnementt</span>
                            <span class="curved-circle-2">Négoce</span>
                            <span class="curved-circle-3">Gestion d'entreprise</span>
                            <span class="curved-circle-4">Incubation</span>
                        </div>
                        <div class="dot-box">
                            <span class="dot dot-1"></span>
                            <span class="dot dot-2"></span>
                            <span class="dot dot-3"></span>
                            <span class="dot dot-4"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <span class="sub-title">JMK CONSULTING</span>
                            <h2>Une agriculture durable</h2>
                        </div>
                        <div class="text-box">
                            <p>Créateur de compétences, d’innovation et d’opportunités. Nous vous accompagnons dans votre
                                développement stratégique au quotidien. Nous opérons dans les secteurs du négoce de matières
                                premières, le conseil en développement des entreprises, le conseil en études et gestion des
                                projets, l’incubation pour les organisations agricoles, l’import-export et le conseil en
                                gestion comptable et financière…</p>
                        </div>
                        <ul class="list-item clearfix">
                            <li>Formation et encadrement</li>
                            <li>Accompagnement de coopératives</li>
                            <li>Accompagnement communautaire</li>
                        </ul>
                        <div class="btn-box">
                            <a href="/presentation.html" class="theme-btn btn-two">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <!-- service-section -->
    <section class="service-section sec-pad">
        <div class="pattern-layer">
            <!-- <div class="pattern-1" style="background-image: url({{ asset('assets/img/shape-5.png') }});"></div> -->
            <!-- <div class="pattern-2" style="background-image: url({{ asset('assets/img/shape-6.png') }});"></div> -->
        </div>
        <div class="auto-container">
            <div class="sec-title centred">
                <span class="sub-title">Nos Services</span>
                <h2>SERVICES AUX ORGANISATIONS AGRICOLES</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                <div class="service-block-one block-one">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-analytics"></i></div>
                            <span class="count-text">01</span>
                        </div>
                        <h3><a href="service-details.html">Private Client <br>Investment Management</a></h3>
                        <div class="link"><a href="service-details.html"><span>Explore Service</span></a></div>
                        <p>That they cannot foresee the pain trouble that are bound ensue equal blame belongs to duty.</p>
                    </div>
                </div>
                <div class="service-block-one block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-office-building"></i></div>
                            <span class="count-text">02</span>
                        </div>
                        <h3><a href="service-details-7.html">Institutional <br>Investment Consulting</a></h3>
                        <div class="link"><a href="service-details-7.html"><span>Explore Service</span></a></div>
                        <p>Power of choice is untrammelled when nothing prevent our being all to do what we like best.</p>
                    </div>
                </div>
                <div class="service-block-one block-three">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-retirement"></i></div>
                            <span class="count-text">03</span>
                        </div>
                        <h3><a href="service-details-13.html">Retirement Plan <br>Consulting</a></h3>
                        <div class="link"><a href="service-details-13.html"><span>Explore Service</span></a></div>
                        <p>Obligations of business it will occur that pleasures have to repudiaters and annoyances accepted.
                        </p>
                    </div>
                </div>
                <div class="service-block-one block-one">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-analytics"></i></div>
                            <span class="count-text">01</span>
                        </div>
                        <h3><a href="service-details.html">Private Client <br>Investment Management</a></h3>
                        <div class="link"><a href="service-details.html"><span>Explore Service</span></a></div>
                        <p>That they cannot foresee the pain trouble that are bound ensue equal blame belongs to duty.</p>
                    </div>
                </div>
                <div class="service-block-one block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-office-building"></i></div>
                            <span class="count-text">02</span>
                        </div>
                        <h3><a href="service-details-7.html">Institutional <br>Investment Consulting</a></h3>
                        <div class="link"><a href="service-details-7.html"><span>Explore Service</span></a></div>
                        <p>Power of choice is untrammelled when nothing prevent our being all to do what we like best.</p>
                    </div>
                </div>
                <div class="service-block-one block-three">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-retirement"></i></div>
                            <span class="count-text">03</span>
                        </div>
                        <h3><a href="service-details-13.html">Retirement Plan <br>Consulting</a></h3>
                        <div class="link"><a href="service-details-13.html"><span>Explore Service</span></a></div>
                        <p>Obligations of business it will occur that pleasures have to repudiaters and annoyances accepted.
                        </p>
                    </div>
                </div>
                <div class="service-block-one block-one">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-analytics"></i></div>
                            <span class="count-text">01</span>
                        </div>
                        <h3><a href="service-details.html">Private Client <br>Investment Management</a></h3>
                        <div class="link"><a href="service-details.html"><span>Explore Service</span></a></div>
                        <p>That they cannot foresee the pain trouble that are bound ensue equal blame belongs to duty.</p>
                    </div>
                </div>
                <div class="service-block-one block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-office-building"></i></div>
                            <span class="count-text">02</span>
                        </div>
                        <h3><a href="service-details-7.html">Institutional <br>Investment Consulting</a></h3>
                        <div class="link"><a href="service-details-7.html"><span>Explore Service</span></a></div>
                        <p>Power of choice is untrammelled when nothing prevent our being all to do what we like best.</p>
                    </div>
                </div>
                <div class="service-block-one block-three">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-retirement"></i></div>
                            <span class="count-text">03</span>
                        </div>
                        <h3><a href="service-details-13.html">Retirement Plan <br>Consulting</a></h3>
                        <div class="link"><a href="service-details-13.html"><span>Explore Service</span></a></div>
                        <p>Obligations of business it will occur that pleasures have to repudiaters and annoyances accepted.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->

    <!-- video-section -->
    <section class="video-section sec-pad">
        <!-- <div class="pattern-layer" style="background-image: url({{ asset('assets/img/shape-4.png') }});"></div> -->
        <div class="auto-container outer-container">
            <div class="video-inner">
                <div class="bg-layer" style="background-image: url({{ asset('assets/img/video-bg1.jpg') }});"></div>
                <div class="btn-box">
                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn"
                        data-caption=""><i class="flaticon-play-button"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- video-section end -->


    <!-- service-section -->
    <section class="service-section sec-pad">
        <div class="pattern-layer">
            <!-- <div class="pattern-2" style="background-image: url({{ asset('assets/img/shape-6.png') }});"></div> -->
        </div>
    </section>
    <!-- service-section end -->


    <!-- growth-section -->
    <section class="growth-section sec-pad">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/img/shape-7.png') }});"></div>
        <div class="auto-container">
            <div class="growth-inner">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <figure class="image-box"><img src="{{ asset('assets/img/growth-1_1.png') }}"
                                    alt=""></figure>
                            <div class="sec-title light">
                                <span class="sub-title">Our Growth</span>
                                <h2>Thinking <br>Beyond Ordinary <br>Strategies</h2>
                            </div>
                            <div class="text-box">
                                <p>The wise man therefore always holds in these <br>matters to this principle of selection.
                                </p>
                                <a href="index_1.html" class="theme-btn btn-two"><span>Annual Report</span></a>
                            </div>
                            <div class="progress-box">
                                <h5>Monthly Growth</h5>
                                <div class="progress-inner">
                                    <h5>$48,560,25</h5>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="60%"></div>
                                        <div class="count-text">+18%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="growth-content">
                            <div class="growth-block-one">
                                <div class="inner-box">
                                    <h3><a href="index_1.html">Global Impact</a></h3>
                                    <p>Ever undertakes labor physic exercise except some advantage.</p>
                                    <div class="icon-box"><i class="flaticon-development"></i></div>
                                    <div class="link-box"><a href="index_1.html"><span>Read More</span></a></div>
                                </div>
                            </div>
                            <div class="growth-block-one">
                                <div class="inner-box">
                                    <h3><a href="index_1.html">Corporate Sustainability</a></h3>
                                    <p>Take a trivial example, which of ever laborious too obtain some.</p>
                                    <div class="icon-box"><i class="flaticon-strategy"></i></div>
                                    <div class="link-box"><a href="index_1.html"><span>Read More</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clients-section">
                <ul class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <li>
                        <figure class="clients-logo"><a href="index_1.html"><img
                                    src="{{ asset('assets/img/clients-1.png') }}" alt=""></a></figure>
                    </li>
                    <li>
                        <figure class="clients-logo"><a href="index_1.html"><img
                                    src="{{ asset('assets/img/clients-2.png') }}" alt=""></a></figure>
                    </li>
                    <li>
                        <figure class="clients-logo"><a href="index_1.html"><img
                                    src="{{ asset('assets/img/clients-3.png') }}" alt=""></a></figure>
                    </li>
                    <li>
                        <figure class="clients-logo"><a href="index_1.html"><img
                                    src="{{ asset('assets/img/clients-4.png') }}" alt=""></a></figure>
                    </li>
                    <li>
                        <figure class="clients-logo"><a href="index_1.html"><img
                                    src="{{ asset('assets/img/clients-5.png') }}" alt=""></a></figure>
                    </li>
                </ul>
                <!-- <div class="more-text centred">
                        <h5>2.6k Companies &amp; Individuals Trusted  Us. <a href="index_1.html"><i class="flaticon-right-chevron"></i>View All Clients</a></h5>
                    </div> -->
            </div>
        </div>
    </section>
    <!-- growth-section end -->


    <!-- chooseus-section -->
    <!-- <section class="chooseus-section sec-pad">
            <span class="big-text">Why <br>Choose Us</span>
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="sub-title">Why Coose Us</span>
                    <h2>Reason for Choosee Counsolve</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 col-sm-12 left-column">
                        <div class="inner-content">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-knowledge"></i></div>
                                    <div class="static-content">
                                        <h3>Extensive Knowledge</h3>
                                        <p>Foresee the pain trouble all that rationally encounter</p>
                                    </div>
                                    <div class="overlay-content">
                                        <p>Foresee the pain trouble all that rationally encounter to the claims of the obligations of business it will frequently occur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-united"></i></div>
                                    <div class="static-content">
                                        <h3>Team Approach</h3>
                                        <p>How all this mistaken idea any denouncing pleasure</p>
                                    </div>
                                    <div class="overlay-content">
                                        <p>How all this mistaken idea any denouncing pleasure to the claims of the obligations of business it will frequently occur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-clock"></i></div>
                                    <div class="static-content">
                                        <h3>Time Savings</h3>
                                        <p>Actual teachings of the great it explorer of the truth</p>
                                    </div>
                                    <div class="overlay-content">
                                        <p>Actual teachings of the great it explorer of the truth to the claims of the obligations of business it will frequently occur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('assets/img/chooseus-1.jpg') }}" alt=""></figure>
                            <div class="image-shape"><img src="{{ asset('assets/img/shape-8.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 right-column">
                        <div class="inner-content">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-risk-management"></i></div>
                                    <div class="static-content">
                                        <h3>Risk Management</h3>
                                        <p>One rejects, dislikes, or avoids pleasure all itself</p>
                                    </div>
                                    <div class="overlay-content">
                                        <p>One rejects, dislikes, or avoids pleasure all itself to the claims of the obligations of business it will frequently occur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-monitor"></i></div>
                                    <div class="static-content">
                                        <h3>Advanced Tech</h3>
                                        <p>Rationally encounter that are consequences extremely</p>
                                    </div>
                                    <div class="overlay-content">
                                        <p>Rationally encounter that are consequences extremely to the claims of the obligations of business it will frequently occur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-advice"></i></div>
                                    <div class="static-content">
                                        <h3>Customized Advice</h3>
                                        <p>How all this mistaken idea of denouncing pleasure</p>
                                    </div>
                                    <div class="overlay-content">
                                        <p>How all this mistaken idea of denouncing pleasure to the claims of the obligations of business it will frequently occur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- chooseus-section end -->


    <!-- working-section -->
    <section class="working-section centred sec-pad">
        <div class="auto-container">
            <div class="sec-title">
                <span class="sub-title">How we works</span>
                <h2>We Plan for your Growth</h2>
            </div>
            <div class="inner-content">
                <div class="shape" style="background-image: url({{ asset('assets/img/shape-9.png') }});"></div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/working-1.jpg') }}"
                                            alt=""></figure>
                                    <div class="icon-box"><i class="flaticon-meeting"></i></div>
                                </div>
                                <div class="lower-content">
                                    <h3>Appointment</h3>
                                    <p>That they cannot foresee the pain trouble that are bound ensue equal blame of
                                        business .</p>
                                    <h2>01 <span>st step</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/working-2.jpg') }}"
                                            alt=""></figure>
                                    <div class="icon-box"><i class="flaticon-paper"></i></div>
                                </div>
                                <div class="lower-content">
                                    <h3>Know Client Needs</h3>
                                    <p>Pursue pleasure rational all counter consequence that extremely painful duty or the
                                        obligations.</p>
                                    <h2>02 <span>nd step</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                        <div class="working-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/img/working-3.jpg') }}"
                                            alt=""></figure>
                                    <div class="icon-box"><i class="flaticon-analysis"></i></div>
                                </div>
                                <div class="lower-content">
                                    <h3>Market Research</h3>
                                    <p>Takes a trivial example, which ever it undertake laborios physical exercise secure
                                        other greater.</p>
                                    <h2>03 <span>rd step</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="more-text centred">
                    <h5>Start Investing with Smart Ideas. <a href="index_1.html"><i class="flaticon-right-chevron"></i>Appointment</a></h5>
                </div> -->
        </div>
    </section>
    <!-- working-section end -->


    <!-- project-section -->
    <section class="project-section sec-pad">
        <div class="auto-container">
            <div class="sec-title">
                <span class="sub-title">NOUS CHOISIR POUR</span>
                <h2>La formation de vos agents</h2>
            </div>
            <div class="project-tab">
                <div class="shape" style="background-image: url({{ asset('assets/img/shape-10.png') }});"></div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 btn-column">
                        <div class="tab-btn-box">
                            <ul class="tab-btns project-tab-btns clearfix">
                                <li class="p-tab-btn active-btn" data-tab="#tab-5">Tous voir</li>
                                <li class="p-tab-btn" data-tab="#tab-9">Agro-Foresterie</li>
                                <li class="p-tab-btn" data-tab="#tab-6">Accompagnement</li>
                                <li class="p-tab-btn" data-tab="#tab-7">Formation</li>
                                <li class="p-tab-btn" data-tab="#tab-8">Etude</li>
                                <li class="p-tab-btn" data-tab="#tab-10">AGR</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                        <div class="p-tabs-content">
                            <div class="p-tab active-tab" id="tab-5">
                                <div class="four-item-carousel owl-carousel owl-theme">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-tab" id="tab-6">
                                <div class="four-item-carousel owl-carousel owl-theme">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-tab" id="tab-7">
                                <div class="four-item-carousel owl-carousel owl-theme">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-2.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment Goals</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-3.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('assets/img/project-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-tab" id="tab-8">
                                <div class="four-item-carousel owl-carousel owl-theme">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-tab" id="tab-9">
                                <div class="four-item-carousel owl-carousel owl-theme">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-tab" id="tab-10">
                                <div class="four-item-carousel owl-carousel owl-theme">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Investing in Emerging Markets</a>
                                                    </h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-2.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Investment</h6>
                                                    <h3><a href="project-details.html">Revisiting Your Investment
                                                            Goals</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-3.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Business</h6>
                                                    <h3><a href="project-details.html">Dimensional Fund Advisors
                                                            Interview</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img
                                                    src="{{ asset('assets/img/project-4.jpg') }}" alt="">
                                            </figure>
                                            <div class="content-inner">
                                                <div class="text-box">
                                                    <h6>Financial Plan</h6>
                                                    <h3><a href="project-details.html">Interested in Giving Back this
                                                            year</a></h3>
                                                </div>
                                                <div class="link">
                                                    <a href="project-details.html"><i
                                                            class="flaticon-diagonal-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project-section end -->


    <!-- news-section -->
    <section class="news-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <span class="sub-title">JMK NEWS</span>
                <h2>Nos dernières actus</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="upper-box">
                                <span class="category">Investment</span>
                                <ul class="post-info clearfix">
                                    <li><span>On</span> Mar 14, 2023</li>
                                    <li><span>By</span> <a href="blog-details.html">Justin Langer</a></li>
                                </ul>
                            </div>
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="{{ asset('assets/img/news-1.jpg') }}" alt=""></a></figure>
                                <div class="view-btn"><a href="{{ asset('assets/img/news-1.jpg') }}"
                                        class="lightbox-image" data-fancybox="gallery"><i
                                            class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="blog-details.html">Revisiting Your Investment &amp; Distribution Goals</a>
                                </h3>
                                <div class="link"><a href="blog-details.html"><span>Explore More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="upper-box">
                                <span class="category">Business</span>
                                <ul class="post-info clearfix">
                                    <li><span>On</span> Feb 26, 2023</li>
                                    <li><span>By</span> <a href="blog-details.html">Colmin Neil</a></li>
                                </ul>
                            </div>
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="{{ asset('assets/img/news-2.jpg') }}" alt=""></a></figure>
                                <div class="view-btn"><a href="{{ asset('assets/img/news-2.jpg') }}"
                                        class="lightbox-image" data-fancybox="gallery"><i
                                            class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="blog-details.html">Dimensional Fund Advisors Interview with Director</a></h3>
                                <div class="link"><a href="blog-details.html"><span>Explore More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="upper-box">
                                <span class="category">Financial Plan</span>
                                <ul class="post-info clearfix">
                                    <li><span>On</span> Feb 05, 2023</li>
                                    <li><span>By</span> <a href="blog-details.html">Boone Gerardo</a></li>
                                </ul>
                            </div>
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="{{ asset('assets/img/news-3.jpg') }}" alt=""></a></figure>
                                <div class="view-btn"><a href="{{ asset('assets/img/news-3.jpg') }}"
                                        class="lightbox-image" data-fancybox="gallery"><i
                                            class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="blog-details.html">Interested in Giving Back this year? Here are some
                                        tips</a></h3>
                                <div class="link"><a href="blog-details.html"><span>Explore More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section end -->


    <!-- testimonial-section -->
    <section class="testimonial-section sec-pad" style="margin-bottom: 70px;">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/img/shape-11.png') }});"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title light">
                            <span class="sub-title">TÉMOIGNAGES</span>
                            <h2>Que disent nos clients de nous ?</h2>
                        </div>
                        <!-- <div class="inner-box">
                                <div class="single-item">
                                    <div class="icon-box"><img src="{{ asset('assets/img/icon-7.png') }}" alt=""></div>
                                    <h5>Avg.Rating 4.8/5 <br>Based on 2,500 Client Reviews</h5>
                                </div>
                                <div class="tag">Excellent Service</div>
                            </div>
                            <div class="link">
                                <a href="index_1.html"><span>Read All Reviews</span></a>
                            </div> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="testimonial-content">
                        <div class="testimonial-slider">
                            <div class="bxslider">
                                <div class="slider-content">
                                        <div class="testimonial-block-one">
                                            <figure class="thumb-box"><img
                                                    src="{{ asset('assets/img/testimonial-1.png') }}" alt="">
                                            </figure>
                                            <div class="inner-box">
                                                <div class="icon-box"><i class="flaticon-quote"></i></div>
                                                <h4>Great Experience!</h4>
                                                <p>I have been financially advised by counsolve investment Planners since
                                                    2022 I have had a very good experience. The sound financial advice they
                                                    gave me helped me to achieve.</p>
                                                <h3>Nathan Felix</h3>
                                                <span class="designation">Director - Naxly Info tech</span>
                                            </div>
                                        </div>
                                </div>

                                {{-- <div class="slider-content">
                                    <div class="testimonial-block-one">
                                        <figure class="thumb-box"><img src="{{asset('assets/img/testimonial-1.png')}}" alt=""></figure>
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="flaticon-quote"></i></div>
                                            <h4>Great Experience!</h4>
                                            <p>I have been financially advised by counsolve investment Planners since 2022 I have had a very good experience. The sound financial advice they gave me helped me to achieve.</p>
                                            <h3>Nathan Felix</h3>
                                            <span class="designation">Director - Naxly Info tech</span>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="slider-content">
                                    <div class="testimonial-block-one">
                                        <figure class="thumb-box"><img src="{{asset('assets/img/testimonial-1.png')}}" alt=""></figure>
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="flaticon-quote"></i></div>
                                            <h4>Great Experience!</h4>
                                            <p>I have been financially advised by counsolve investment Planners since 2022 I have had a very good experience. The sound financial advice they gave me helped me to achieve.</p>
                                            <h3>Nathan Felix</h3>
                                            <span class="designation">Director - Naxly Info tech</span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->
@endsection
