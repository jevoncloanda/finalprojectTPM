<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">
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
</style>
<body>
    <div class="left-column">
        <section id="stat">
            <div class="stat-image">
                <img src="{{asset('Assets/Dashboard Icon/pfp.png')}}" alt="">
            </div>
            <div class="stat-text">
                <p>Welcome back,</p>
                <h3 class="stat-name">Vaporeon Team</h3>
            </div>
        </section>

        <section id="menu">
            <div class="menu-icon">
                <img src="{{asset('Assets/Dashboard Icon/home.png')}}" alt="">
                <img src="{{asset('Assets/Dashboard Icon/announcement.png')}}" alt="">
                <img src="{{asset('Assets/Dashboard Icon/payment.png')}}" alt="">
                <img src="{{asset('Assets/Dashboard Icon/schedule.png')}}" alt="">
                <img src="{{asset('Assets/Dashboard Icon/members.png')}}" alt="">
            </div>
            <div class="menu-text">
                <h3><a href="{{route('getHomePage')}}">Home</a></h3>
                <h3><a href="{{route('getDashboardPage')}}">Announcement</a></h3>
                <h3><a href="{{route('getPaymentPage')}}">Payment</a></h3>
                <h3><a href="{{route('getDashboardPage')}}">Schedule</a></h3>
                <h3><a href="{{route('getTeamPage')}}">Team</a></h3>
            </div>
        </section>
    </div>

    @yield('menu')
</body>
</html>
