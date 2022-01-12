<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon</title>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<style>
    @font-face {
    font-family: "monument_extendedultraboldZ";
    src: url('{{asset('fonts/monumentextended-ultrabold-webfont.woff2')}}') format('woff2'),
         url('{{asset('fonts/monumentextended-ultrabold-webfont.woff')}}') format('woff');
    font-weight: normal;
    font-style: normal;
    }

    @font-face {
    font-family: "monument_extendedregular";
    src: url('{{asset('fonts/monumentextended-regular-webfont.woff2')}}') format('woff2'),
         url('{{asset('fonts/monumentextended-regular-webfont.woff')}}') format('woff');
    font-weight: normal;
    font-style: normal;
    }
</style>
<body>
    <nav>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#timeline">Timeline</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#mentor">Mentor &  Jury</a></li>
            <li><a class="nav-signup" href="{{route('getRegistrationPage')}}">Sign Up</a></li>
        </ul>
    </nav>

    <section id="home">
        <div class="home-box">

        </div>
        <div class="home-right">
            <h1 class="title"><span>HACKATHON?</span></h1>
            <p>Lörem ipsum intraliga misk. Sor homokompetens läling.</p>
            <div class="orange-button"><a href="#"><span>Let's Talk!</span></a></div>
        </div>
    </section>

    <section id="about">
        <div class="about-text">
            <div class="about-box"></div>
            <h1>ABOUT</h1>
            <h2>HACKATHON</h2>
            <p>Lörem ipsum tåvis mamirade i prens i prejälogi. Diang ed kroning när fadunar. Lasse Berghagen-vin trinera dejins i roråbel, föbelt. Lall faning. Kin dopongar för att nyskade, i karade ogt. Tiligen kak digifysisk. Göling ass demoform. Dertad söngen yfengar tretedat. Treföss reprepurade. Semision anöktig ipysm pons. Anteskap platren. Reklejma donde pyd sperad, ett megalande. Fast hyposende, huruvida sor.</p>
            <div class="orange-button">
                <a href="#"><span>Download Guidebook</span></a>
            </div>
        </div>
    </section>

    <section id="champion">
        <h1>CHAMPION PRIZE</h1>
        <div class="juara3">
            <div class="box-juara3"></div>
            <h4><span>Juara 3</span></h4>
            <p>Lörem ipsum tåvis mamirade i prens i prejälogi. Diang ed kroning</p>
        </div>
        <div class="juara1">
            <div class="box-juara1"></div>
            <h4><span>Juara 1</span></h4>
            <p>Lörem ipsum tåvis mamirade i prens i prejälogi. Diang ed kroning</p>
        </div>
        <div class="juara2">
            <div class="box-juara2"></div>
            <h4><span>Juara 2</span></h4>
            <p>Lörem ipsum tåvis mamirade i prens i prejälogi. Diang ed kroning</p>
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
                <span class="design-name">Mr. Steven</span>
                <p>Lörem ipsum tåvis mamirade i prens i prejälogi. Diang ed kroning</p>
            </div>
            <div class="design2">
                <span class="design-name">Mr. Steven</span>
                <p>Lörem ipsum tåvis mamirade i prens i prejälogi. Diang ed kroning</p>
            </div>
            <div class="design3">
                <span class="design-name">Mr. Steven</span>
                <p>Lörem ipsum tåvis mamirade i prens i prejälogi. Diang ed kroning</p>
            </div>
        </div>
    </section>

    <section id="jury">
        <h1>OUR JURY </h1>
        <div class="jury-box">
            <div class="jury1">
                <span class="jury-name">Mr. Steven</span>
                <p>Lörem ipsum tåvis mamirade i prens i prejälogi. Diang ed kroning</p>
            </div>
            <div class="jury2">
                <span class="jury-name">Mr. Steven</span>
                <p>Lörem ipsum tåvis mamirade i prens i prejälogi. Diang ed kroning</p>
            </div>
            <div class="jury3">
                <span class="jury-name">Mr. Steven</span>
                <p>Lörem ipsum tåvis mamirade i prens i prejälogi. Diang ed kroning</p>
            </div>
        </div>
    </section>

</body>
</html>
