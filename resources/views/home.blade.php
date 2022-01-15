<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon</title>

    <link rel="icon" href="{{asset('Assets/icon.png')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/timeline.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/faq.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/sponsor.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/media-partner.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/other-event.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/contact.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/footer.css')}}">

    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
</head>
<style>
    @font-face {
    font-family: "monument_extendedultraboldZ";
    src: url('{{asset('Fonts/Monument/monumentextended-ultrabold-webfont.woff2')}}') format('woff2'),
         url('{{asset('Fonts/Monument/monumentextended-ultrabold-webfont.woff')}}') format('woff');
    font-weight: normal;
    font-style: normal;
    }

    @font-face {
    font-family: "monument_extendedregular";
    src: url('{{asset('Fonts/Monument/monumentextended-regular-webfont.woff2')}}') format('woff2'),
         url('{{asset('Fonts/Monument/monumentextended-regular-webfont.woff')}}') format('woff');
    font-weight: normal;
    font-style: normal;
    }

    @font-face {
    font-family: 'metropolisbold';
    src: url('{{asset('Fonts/Metropolis/metropolis.bold-webfont.woff2')}}') format('woff2'),
         url('{{asset('Fonts/Metropolis/metropolis.bold-webfont.woff')}}') format('woff');
    font-weight: normal;
    font-style: normal;
    }

    @font-face {
    font-family: 'metropolissemi_bold';
    src: url('{{asset('Fonts/Metropolis/metropolis.semi-bold-webfont.woff2')}}') format('woff2'),
         url('{{asset('Fonts/Metropolis/metropolis.semi-bold-webfont.woff')}}') format('woff');
    font-weight: normal;
    font-style: normal;
    }

    @font-face {
    font-family: 'metropolismedium';
    src: url('{{asset('Fonts/Metropolis/metropolis.medium-webfont.woff2')}}') format('woff2'),
         url('{{asset('Fonts/Metropolis/metropolis.medium-webfont.woff')}}') format('woff');
    font-weight: normal;
    font-style: normal;
    }

    @font-face {
    font-family: 'metropolisregular';
    src: url('{{asset('Fonts/Metropolis/metropolis.regular-webfont.woff2')}}') format('woff2'),
         url('{{asset('Fonts/Metropolis/metropolis.regular-webfont.woff')}}') format('woff');
    font-weight: normal;
    font-style: normal;
    }
</style>
<body>
    <div class="bubble">
        <img class="bg-bubble" src="{{asset('Assets/Background/home-bubble2.png')}}" alt="">
    </div>

    <a href="#home"><img class="logo" src="{{asset('Assets/logo.png')}}" alt=""></a>
    @guest
    <nav>
        <ul class="navbar">
            <!-- <li><a href="#home">Home</a></li> -->
            <li><a href="#about">About</a></li>
            <li><a href="#mentor">Mentor &  Jury</a></li>
            <li><a href="#timeline">Timeline</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a class="nav-signup" href="{{route('getRegistrationPage')}}">Sign In</a></li>
        </ul>
    </nav>
    @endguest

    @auth
    <nav>
        <ul class="navbar">
            <li><a href="{{route('getDashboardPage')}}">Dashboard</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#mentor">Mentor &  Jury</a></li>
            <li><a href="#timeline">Timeline</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a class="nav-signup" href="{{route('logout')}}">Log out</a></li>
        </ul>
    </nav>
    @endauth

    <section id="home">
        <div class="home-box">
            <img src="{{asset('Assets/Home/home.png')}}" alt="">
        </div>
        <div class="home-right">
            <h1><span class="title">HACKATHON?</span></h1>
            <p>Hackathon 5.0 is a 48-hour online coding competition where each team competes to create innovative applications or websites that could solve problems. This year is the 5th time Binus Computer Club (BNCC) held a Hackathon event.</p>
            <div class="orange-button"><a href="#"><button onclick="openForm()"><img src="{{asset('Assets/Home/arrow.png')}}" alt=""> Let's Talk!</button></a></div>
        </div>
    </section>

    <section id="lets-talk">
        <form method="POST" action="{{route('sendEmail')}}" class="form-popup" id="myForm">
            @csrf
            <div class="form-popup2">
                <div class="contact-person">
                    <div>
                        <h3>Contact Person :</h3>
                        <p>If you have any other problem, feel free to contact one of the following contact person</p>
                    </div>
                    <div class="jevon">
                        <div class="cp-name">
                            <img src="{{asset('Assets/Dashboard Icon/cp.png')}}" alt="">
                            <p>Jevon Christopher</p>
                        </div>
                        <div class="cp-line">
                            <img src="{{asset('Assets/Dashboard Icon/line.png')}}" alt="">
                            <p>Jevon123</p>
                        </div>
                        <div class="cp-wa">
                            <img src="{{asset('Assets/Dashboard Icon/whatsapp.png')}}" alt="">
                            <p>0812-2345-293</p>
                        </div>
                    </div>
                    <div class="tiffany">
                        <div class="cp-name">
                            <img src="{{asset('Assets/Dashboard Icon/cp.png')}}" alt="">
                            <p>Tiffany Aurellia</p>
                        </div>
                        <div class="cp-line">
                            <img src="{{asset('Assets/Dashboard Icon/line.png')}}" alt="">
                            <p>Tiffanyaurell</p>
                        </div>
                        <div class="cp-wa">
                            <img src="{{asset('Assets/Dashboard Icon/whatsapp.png')}}" alt="">
                            <p>0819-8745-3453</p>
                        </div>
                    </div>
                </div>
                <div class="talk-right">
                    <div>
                        <img onclick="closeForm()" src="{{asset('Assets/Home/close-form.png')}}" alt="">
                        <h3>Let's Talk!</h3>
                        <!-- <button type="button" onclick="closeForm()">
                        </button> -->
                    </div>
                    <div>
                        <input type="text" placeholder="Name" id="name" name="name">
                        <input type="email" placeholder="Email" id="email" name="email">
                        <input type="text" placeholder="Subject" id="subject" name="subject">
                        <textarea name="message" placeholder="Message" id="message" cols="30" rows="7"></textarea>
                        <button class="orange-button" type="submit" name="send" onclick="sendContact()">Submit</button>
                    </div>
                    <!-- <form action="/action_page.php" onsubmit="return false">

                    </form> -->
                </div>
            </div>
        </form>
    </section>

    <section id="about">
        <div class="about-text">
            <div class="about-box">
                <img class="about-1" src="{{asset('Assets/Home/about-2.png')}}" alt="">
                <img src="{{asset('Assets/Home/about-1.png')}}" alt="">
            </div>
            <h1>ABOUT</h1>
            <h2>HACKATHON</h2>
            <p>Lörem ipsum tåvis mamirade i prens i prejälogi. Diang ed kroning när fadunar. Lasse Berghagen-vin trinera dejins i roråbel, föbelt. Lall faning. Kin dopongar för att nyskade, i karade ogt. Tiligen kak digifysisk. Göling ass demoform. Dertad söngen yfengar tretedat. Treföss reprepurade. Semision anöktig ipysm pons. Anteskap platren. Reklejma donde pyd sperad, ett megalande. Fast hyposende, huruvida sor.</p>
            <div class="orange-button">
                <a href="https://drive.google.com/file/d/1KPm3AJcOb031bTgXwhq94_Mu9Gb6rFMu/view?usp=sharing" target="_blank"
                rel="noopener noreferrer"><button><img src="{{asset('Assets/Home/arrow.png')}}" alt=""> Download Guidebook</button></a>
            </div>
        </div>
    </section>

    <section id="video">
        <h3>CHECK OUR PREVIOUS HACKATHON 4.0</h3>
        <video src="{{asset('Assets/Home/video-recap.mp4')}}" controls autoplay muted></video>
    </section>

    <section id="champion">
        <h1>CHAMPION PRIZE</h1>
        <div><span class="prize-pool">Prize Pool Rp 8.000.000</span></div>
        <div class="juara">
            <div class="juara23">
                <div class="box-juara">
                    <img src="{{asset('Assets/Home/juara2.png')}}" alt="">
                    <p>E- Certificate</p>
                    <p>Merchandise</p>
                    <h4>Rp 2.500.000</h4>
                </div>
                <div class="place-juara">
                    <h3>SECOND PLACE</h3>
                </div>
            </div>
            <div class="juara1">
                <div class="box-juara1">
                    <img src="{{asset('Assets/Home/juara1.png')}}" alt="">
                    <p>E- Certificate</p>
                    <p>Merchandise</p>
                    <h4>Rp 4.000.000</h4>
                </div>
                <div class="place-juara">
                    <h3>FIRST PLACE</h3>
                </div>
            </div>
            <div class="juara23">
                <div class="box-juara">
                    <img src="{{asset('Assets/Home/juara3.png')}}" alt="">
                    <p>E- Certificate</p>
                    <p>Merchandise</p>
                    <h4>Rp 1.500.000</h4>
                </div>
                <div class="place-juara">
                    <h3>THIRD PLACE</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="join-us">
        <div class="join-title">
            <h3>WHY SHOULD YOU</h3>
            <h1><span class="title">JOIN US?</span></h1>
        </div>
        <div class="join-content">
            <div class="join-box">
                <div class="join-img">
                    <img src="{{asset('Assets/Home/join-1.png')}}" alt="">
                </div>
                <div class="join-text">
                    <h4>Learn and Get Inspired <br> from the Experts</h4>
                    <p>Virtual Conference will deliver relevant materials about technology, business, and design at each session through webinars and talkshow. So, it can help you to achieve excellence in your work.</p>
                </div>
            </div>
            <div class="join-box">
                <div class="join-img">
                    <img src="{{asset('Assets/Home/join-2.png')}}" alt="">
                </div>
                <div class="join-text">
                    <h4>Stay Updated with the <br> Upcoming Technology Trends</h4>
                    <p>Virtual conference will discuss the latest insights about design, business, and technology with inspiring speakers. Thus, participants can broaden their knowledge about trends and innovations in technology.</p>
                </div>
            </div>
            <div class="join-box">
                <div class="join-img">
                    <img src="{{asset('Assets/Home/join-3.png')}}" alt="">
                </div>
                <div class="join-text">
                    <h4>Professional Networking</h4>
                    <p>Virtual Conference will provide an opportunity for participants to interact with inspiring speakers and other Virtual Conference participants through virtual space.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="mentor">
        <h1>OUR MENTOR</h1>
        <ul>
            <li>Design</li>
            <li>Technology</li>
            <li>Business</li>
        </ul>
        <div class="mentor-design">
            <div class="design1">
                <img src="{{asset('Assets/Home/mentor-1.png')}}" alt="">
                <div>
                    <span class="design-name">Susan Warning</span>
                </div>
                <p class="mentor-p">CEO of Youtube Global and founder of Coding Asia</p>
            </div>
            <div class="design2">
                <img src="{{asset('Assets/Home/mentor-2.png')}}" alt="">
                <div>
                    <span class="design-name">Dafeed Man</span>
                </div>
                <p class="mentor-p">Senior Software enginer at NASA Global </p>
            </div>
            <div class="design3">
                <img src="{{asset('Assets/Home/mentor-3.png')}}" alt="">
                <div>
                    <span class="design-name">Kimberly Victoria</span>
                </div>
                <p class="mentor-p">CEO of Canva Global and founder of ART.IO</p>
            </div>
        </div>
    </section>

    <section id="jury">
        <h1>OUR JURY </h1>
        <div class="mentor-design">
            <div class="design1">
                <img src="{{asset('Assets/Home/jury-1.png')}}" alt="">
                <div>
                    <span class="design-name">Harley Deminson</span>
                </div>
                <p class="mentor-p">CEO of United Code Of The World (UCOTW)</p>
            </div>
            <div class="design2">
                <img src="{{asset('Assets/Home/jury-2.png')}}" alt="">
                <div>
                    <span class="design-name">Markus Zekerbeg</span>
                </div>
                <p class="mentor-p">CEO of META and founder of Facebook</p>
            </div>
            <div class="design3">
                <img src="{{asset('Assets/Home/jury-3.png')}}" alt="">
                <div>
                    <span class="design-name">Andy Siddeloy</span>
                </div>
                <p class="mentor-p">CEO of Shopedia and founder of Wizard.io</p>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section id="timeline">
    <section class="timeline section">
        <div class="container">
            <div class="container-items">
                <h1 class="text-center headline">Timeline</h1>
                <div class="timeline-item">

                    <!-- <hr size="3" width="80%" color="black"> -->

                    <!-- timeline content -->
                    <div class="item">
                        <div class="center">
                            <div class="icon-container">
                                <span class="iconify" data-icon="ic:outline-app-registration"></span>
                            </div>
                        </div>
                        <div class="text-container">
                            <div class="header">
                                <h5 class="text-center">open registration</h5>
                            </div>
                            <div class="paragraph">
                                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, nostrum, necessitatibus dignissimos illum</p>
                            </div>
                        </div>
                    </div>

                     <!-- timeline content -->
                    <div class="item">
                        <div class="center">
                            <div class="icon-container active">
                                <span class="iconify" data-icon="bx:bx-window-close"></span>
                            </div>
                        </div>
                        <div class="text-container">
                            <div class="header">
                                <h5 class="text-center">close registration</h5>
                            </div>
                            <div class="paragraph">
                                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, nostrum, necessitatibus dignissimos illum</p>
                            </div>
                        </div>
                    </div>

                     <!-- timeline content -->
                     <div class="item">
                        <div class="center">
                            <div class="icon-container active">
                                <span class="iconify" data-icon="bi:chat-left-text"></span>
                            </div>
                        </div>
                        <div class="text-container">
                            <div class="header">
                                <h5 class="text-center">technical meeting</h5>
                            </div>
                            <div class="paragraph">
                                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, nostrum, necessitatibus dignissimos illum</p>
                            </div>
                        </div>
                    </div>

                     <!-- timeline content -->
                    <div class="item">
                        <div class="center">
                            <div class="icon-container">
                                <span class="iconify" data-icon="uil:award-alt"></span>
                            </div>
                        </div>
                        <div class="text-container">
                            <div class="header">
                                <h5 class="text-center">competition day</h5>
                            </div>
                            <div class="paragraph">
                                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, nostrum, necessitatibus dignissimos illum</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    </section>


    <!-- FAQ -->
    <section class="faq section">
        <div class="container">
            <div class="container-items">
                <div class="header">
                    <h1>FREQUENTLY ASKED QUESTION</h1>
                </div>

                <div class="card-container">
                    <div class="card center">
                        <ul class="listed-container">
                            <li class="question-items">
                                <div class="question-container">
                                    <div class="icon-container faq-icon-container" id='0'>
                                        <span class="iconify faq-animated-icon" data-icon="ant-design:caret-right-filled"></span>
                                    </div>
                                    <div class='open-registration-div'>
                                        <h2>Question 1</h2>
                                        <div class="answer-container hidden 0">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis expedita placeat, maiores explicabo est sed quibusdam eos? Perferendis cumque nobis eos necessitatibus minima, illum cum ea quas distinctio et amet!</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="question-items">
                                <div class="question-container">
                                    <div class="icon-container faq-icon-container" id='1'>
                                        <span class="iconify faq-animated-icon" data-icon="ant-design:caret-right-filled"></span>
                                    </div>
                                    <div class='open-registration-div'>
                                        <h2>Question 2</h2>
                                        <div class="answer-container hidden 1">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis expedita placeat, maiores explicabo est sed quibusdam eos? Perferendis cumque nobis eos necessitatibus minima, illum cum ea quas distinctio et amet!</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="question-items">
                                <div class="question-container">
                                    <div class="icon-container faq-icon-container" id="2">
                                        <span class="iconify faq-animated-icon" data-icon="ant-design:caret-right-filled"></span>
                                    </div>
                                    <div class='open-registration-div'>
                                        <h2>Question 3</h2>
                                        <div class="answer-container hidden 2">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis expedita placeat, maiores explicabo est sed quibusdam eos? Perferendis cumque nobis eos necessitatibus minima, illum cum ea quas distinctio et amet!</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div class="card center">
                        <ul class="listed-container">
                            <li class="question-items">
                                <div class="question-container">
                                    <div class="icon-container faq-icon-container" id="3">
                                        <span class="iconify faq-animated-icon" data-icon="ant-design:caret-right-filled"></span>
                                    </div>
                                    <div class='open-registration-div'>
                                        <h2>Question 4</h2>
                                        <div class="answer-container hidden 3">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis expedita placeat, maiores explicabo est sed quibusdam eos? Perferendis cumque nobis eos necessitatibus minima, illum cum ea quas distinctio et amet!</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="question-items">
                                <div class="question-container">
                                    <div class="icon-container faq-icon-container" id="4">
                                        <span class="iconify faq-animated-icon" data-icon="ant-design:caret-right-filled"></span>
                                    </div>
                                    <div class='open-registration-div'>
                                        <h2>Question 5</h2>
                                        <div class="answer-container hidden 4">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis expedita placeat, maiores explicabo est sed quibusdam eos? Perferendis cumque nobis eos necessitatibus minima, illum cum ea quas distinctio et amet!</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="question-items">
                                <div class="question-container">
                                    <div class="icon-container faq-icon-container" id="5">
                                        <span class="iconify faq-animated-icon" data-icon="ant-design:caret-right-filled"></span>
                                    </div>
                                    <div class='open-registration-div'>
                                        <h2>Question 6</h2>
                                        <div class="answer-container hidden 5">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis expedita placeat, maiores explicabo est sed quibusdam eos? Perferendis cumque nobis eos necessitatibus minima, illum cum ea quas distinctio et amet!</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsor Section -->
    <section class="section sponsors">
        <div class='container'>
            <div class='container-items display-table'>
                <h1>Sponsors</h1>
                <p>Platinum Sponsors</p>
                <div class='display-table-row'>
                    <div class='display-table-cell platinum-sponsor picture'>
                        <img src='{{asset('Assets/sponsor/Meta 1.png')}}'>
                    </div>
                </div>
                <p>Gold Sponsors</p>
                <div class='display-table-row'>
                    <div class='display-table-cell gold-sponsor picture'>
                        <img class="gold1" src='{{asset('Assets/sponsor/36c1015e 1.png')}}'>
                    </div>
                    <div class='display-table-cell gold-sponsor picture'>
                        <img class="gold2" src='{{asset('Assets/sponsor/intel-logo-8 1.png')}}'>
                    </div>
                    <div class='display-table-cell gold-sponsor picture'>
                        <img class="gold3" src='{{asset('Assets/sponsor/Gojek-Logo 1.png')}}'>
                    </div>
                </div>
                <p>Silver Sponsors</p>
                <div class='display-table-row'>
                    <div class='display-table-cell silver-sponsor picture'>
                        <img class="silver1" src='{{asset('Assets/sponsor/Adobe_Systems_logo_and_wordmark 1.png')}}'>
                    </div>
                    <div class='display-table-cell silver-sponsor picture'>
                        <img class="silver2" src='{{asset('Assets/sponsor/MasterCard_early_1990s_logo 1.png')}}'>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Media Partner -->
    <section class='section media-partner'>
        <div class="container">
            <div class="container-item display-table">
                <h1 class="h1">Media Partner</h1>
                <div class="display-table-row animated-section">
                    <div class="display-table-cell picture">
                        <img src='{{asset('Assets/mediaPartner/page1/medpar1.png')}}'>
                    </div>
                    <div class="display-table-cell picture">
                        <img src='{{asset('Assets/mediaPartner/page1/medpar2.png')}}'>
                    </div>
                    <div class="display-table-cell picture">
                        <img src='{{asset('Assets/mediaPartner/page1/medpar3.png')}}'>
                    </div>
                    <div class="display-table-cell picture">
                        <img src='{{asset('Assets/mediaPartner/page1/medpar4.png')}}'>
                    </div>
                </div>
                <div class="display-table-row animated-section-1">
                    <div class="display-table-cell picture">
                        <img src='{{asset('Assets/mediaPartner/page1/medpar5.png')}}'>
                    </div>
                    <div class="display-table-cell picture">
                        <img src='{{asset('Assets/mediaPartner/page1/medpar6.png')}}'>
                    </div>
                    <div class="display-table-cell picture">
                        <img src='{{asset('Assets/mediaPartner/page1/medpar7.png')}}'>
                    </div>
                </div>
                <div class="display-table-row animated-section-2">
                    <div class="display-table-cell picture">
                        <img src='{{asset('Assets/mediaPartner/page1/medpar8.png')}}'>
                    </div>
                    <div class="display-table-cell picture">
                        <img src='{{asset('Assets/mediaPartner/page1/medpar9.png')}}'>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Event Section -->
    <section class="section other-event">
        <div class="container">
            <div class="container-item display-table">
                <h1>Other Event</h1>
                <div class="display-table-row above-content">
                    <div class="display-table-cell about">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quaerat possimus suscipit optio fuga? Aliquam eaque exercitationem facilis, cupiditate harum ducimus quis dignissimos error, unde qui odio amet cumque quos.</p>
                    </div>
                </div>
                <div class="display-table-row lower-content">

                    <div class="display-table-cell foo">
                        <div class="picture">
                            <img src='{{asset('Assets/otherEvent/pict2.png')}}'>
                        </div>
                        <h4>Virtual Conference</h4>
                        <p>Website Virtual Conference</p>
                    </div>

                    <div class="display-table-cell">
                        <div class="picture">
                            <img src='{{asset('Assets/otherEvent/pict1.png')}}'>
                        </div>
                        <h4>Developer Workshop</h4>
                        <p>Website Developer Workshop</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section class="contact-us section">
        <div class="container">
            <div class="container-items">

                <div class="contact-us-container">
                    <div class='contact-us-content'>
                        <h1>Contact Us Now!</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum cum quas minus. Quae ipsam quos, omnis</p>
                    </div>
                    <div class="orange-button"><a href="#"><button onclick="openForm()"><img src="{{asset('Assets/Home/arrow.png')}}" alt=""> Let's Talk!</button></a></div>
                </div>

                <div class="picture">
                    <img class="contact-img" src="{{asset('Assets/contact 1.png')}}">
               </div>
            </div>
        </div>
    </section>

    <footer class='footer'>

        <div class="container">
            <img src='{{asset('Assets/bncc logo 2.png')}}'class='logo'>
            <div class='footer-icons'>
                <a href="">
                    <div class="icon-container">
                        <span class="iconify" data-icon="carbon:email"></span>
                    </div>
                </a>

                <a href="https://www.instagram.com/bnccbinus/">
                    <div class="icon-container">
                        <span class="iconify" data-icon="akar-icons:instagram-fill"></span>
                    </div>
                </a>

                <a href="https://twitter.com/bncc_binus">
                    <div class="icon-container">
                        <span class="iconify" data-icon="brandico:twitter"></span>
                    </div>
                </a>

                <a href="https://www.facebook.com/bina.nusantara.computer.club">
                    <div class="icon-container">
                        <span class="iconify" data-icon="akar-icons:facebook-fill"></span>
                    </div>
                </a>

                <a href="https://id.linkedin.com/company/bina-nusantara-computer-club">
                    <div class="icon-container">
                        <span class="iconify" data-icon="akar-icons:linkedin-fill"></span>
                    </div>
                </a>
            </div>
            <h3>Hackathon 5.0</h3>
        </div>

        <p class='bold'>All Right Reserved BNCC 2022 © Bina Nusantara Computer Club</p>
        <p class='privacy-policy'>Privacy Policy & Terms of Service</p>
    </footer>


    <script type='module' src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/home/home.js')}}"></script>
    <script src="{{asset('js/home/form-popup.js')}}"></script>
</body>
</html>
