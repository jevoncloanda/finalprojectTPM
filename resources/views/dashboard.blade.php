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
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap" rel="stylesheet">

</head>
<body>
    <div class="left-column">
        <section id="stat">
            <div class="stat-image">
                <img src="#" alt="">
            </div>
            <div class="stat-text">
                <p>Welcome back,</p>
                <h3 class="stat-name">Steven Nathaniel</h3>
                <p class="status">Status : Team Leader</p>
            </div>
        </section>

        <section id="menu">
            <div class="menu-icon">
                <img src="{{asset('assets/Dashboard Icon/profile.png')}}" alt="">
                <img src="{{asset('assets/Dashboard Icon/home.png')}}" alt="">
                <img src="{{asset('assets/Dashboard Icon/announcement.png')}}" alt="">
                <img src="{{asset('assets/Dashboard Icon/payment.png')}}" alt="">
                <img src="{{asset('assets/Dashboard Icon/schedule.png')}}" alt="">
                <img src="{{asset('assets/Dashboard Icon/members.png')}}" alt="">
            </div>
            <div class="menu-text">
                <h3><a href="#">Profile</a></h3>
                <h3><a href="{{route('getHomePage')}}">Home</a></h3>
                <h3><a href="#">Announcement</a></h3>
                <h3><a href="#">Payment</a></h3>
                <h3><a href="#">Schedule</a></h3>
                <h3><a href="#">Members</a></h3>
            </div>
        </section>
    </div>

    <div class="right-column">
        <header>
            <div class="header-top">
                <div class="header-date">
                    <h3>Dashboard</h3>
                    <p id="date"></p>
                </div>
                <div class="search">
                    <span> <img src="{{asset('assets/Dashboard Icon/search.png')}}" alt=""> Search name...</span>
                </div>
            </div>
        </header>

        <section id="profile">
            <h1>Profile</h1>
            <form action="submit" class="profile-data">
                <div class="name">
                    <label for="name">Full Name</label>
                    <input type="text" placeholder="Please type your full name here...">
                </div>
                <div class="place">
                    <label for="place">Place of Birth</label>
                    <input type="text" placeholder="Please type your place of birth here...">
                </div>
                <div class="date">
                    <label for="date">Date of Birth</label>
                    <input type="text" placeholder="Please type your date of birth here...">
                </div>
                <div class="team">
                    <label for="team">Team Name</label>
                    <input type="text" placeholder="Please type your team name here...">
                </div>
                <div class="type">
                    <label for="type">Registration Type</label>
                    <input type="text" placeholder="Please select your registration type...">
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Please type your email here...">
                </div>
                <div class="whatsapp">
                    <label for="whatsapp">Whatsapp</label>
                    <input type="text" placeholder="Please type your Whatsapp number here...">
                </div>
                <div class="line">
                    <label for="line">LINE ID</label>
                    <input type="text" placeholder="Please type your LINE ID here...">
                </div>
                <div class="git">
                    <label for="git">Github/Gitlab</label>
                    <input type="text" placeholder="Please type ...">
                </div>
            </form>
        </section>

        <!-- <section id="pay-upload">
            <h1>Upload Payment Receipt</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed. Viverra aliquet consequat consequat congue. Volutpat act.</p>
            <div class="upload-receipt">
                <img src="{{asset('assets/Dashboard Icon/upload.png')}}" alt="">
                <p>Upload or drag file from your device</p>
            </div>
        </section> -->

        <!-- <section id="pay-verified">
            <img src="{{asset('assets/Dashboard Icon/verified.png')}}" alt="">
            <h1>Your Payment is Being Verified</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed.</p>
        </section> -->

        <!-- <section id="pay-success">
            <img src="{{asset('assets/Dashboard Icon/success.png')}}" alt="">
            <h1>You Have Been Registered Successfully</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed.</p>
        </section> -->

        <!-- <section id="timeline">
            <h1>Timeline</h1>
            <div class="open">
                <h3>Open Registration</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed. Viverra aliquet consequat consequat congue. Volutpat ac, enim, montes, nullam eget feugiat cras quis sed. Convallis non mattis sociis aliquet viverra arcu. Quam mauris justo condimentum elit faucibus pulvinar adipiscing nulla lectus. Pharetra pellentesque enim elementum vehicula rhoncus, risus elementum. Et et vestibulum faucibus cursus sed est mattis ullamcorper odio. Et, hendrerit nunc neque, feugiat neque elit id vel.</p>
            </div>
            <div class="close">
                <h3>Close Registration</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed. Viverra aliquet consequat consequat congue. Volutpat ac, enim, montes, nullam eget feugiat cras quis sed. Convallis non mattis sociis aliquet viverra arcu. Quam mauris justo condimentum elit faucibus pulvinar adipiscing nulla lectus. Pharetra pellentesque enim elementum vehicula rhoncus, risus elementum. Et et vestibulum faucibus cursus sed est mattis ullamcorper odio. Et, hendrerit nunc neque, feugiat neque elit id vel.</p>
            </div>
            <div class="technical">
                <h3>Technical Meeting</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed. Viverra aliquet consequat consequat congue. Volutpat ac, enim, montes, nullam eget feugiat cras quis sed. Convallis non mattis sociis aliquet viverra arcu. Quam mauris justo condimentum elit faucibus pulvinar adipiscing nulla lectus. Pharetra pellentesque enim elementum vehicula rhoncus, risus elementum. Et et vestibulum faucibus cursus sed est mattis ullamcorper odio. Et, hendrerit nunc neque, feugiat neque elit id vel.</p>
            </div>
            <div class="competition">
                <h3>Competition Day</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed. Viverra aliquet consequat consequat congue. Volutpat ac, enim, montes, nullam eget feugiat cras quis sed. Convallis non mattis sociis aliquet viverra arcu. Quam mauris justo condimentum elit faucibus pulvinar adipiscing nulla lectus. Pharetra pellentesque enim elementum vehicula rhoncus, risus elementum. Et et vestibulum faucibus cursus sed est mattis ullamcorper odio. Et, hendrerit nunc neque, feugiat neque elit id vel.</p>
            </div>
        </section> -->

        <div class="contact-person">
            <h3>For more information please kindly contact :</h3>
            <div class="cp-name">
                <img src="{{asset('assets/Dashboard Icon/cp.png')}}" alt="">
                <p>Jevon Christopher</p>
            </div>
            <div class="cp-line">
                <img src="{{asset('assets/Dashboard Icon/line.png')}}" alt="">
                <p>Jevon123</p>
            </div>
            <div class="cp-wa">
                <img src="{{asset('assets/Dashboard Icon/whatsapp.png')}}" alt="">
                <p>0812-2345-293</p>
            </div>
        </div>
    </div>



    <script src="{{asset('jsassets/dashboard.js"')}}'></script>
</body>
</html>
