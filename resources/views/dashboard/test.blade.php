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
    src: url('{{asset('Fonts/monumentextended-ultrabold-webfont.woff2')}}') format('woff2'),
         url('{{asset('Fonts/monumentextended-ultrabold-webfont.woff')}}') format('woff');
    font-weight: normal;
    font-style: normal;
    }

    @font-face {
    font-family: "monument_extendedregular";
    src: url('{{asset('Fonts/monumentextended-regular-webfont.woff2')}}') format('woff2'),
         url('{{asset('Fonts/monumentextended-regular-webfont.woff')}}') format('woff');
    font-weight: normal;
    font-style: normal;
    }
</style>
<body>
    <img src="" alt="">
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
                <h3><a href="#">Home</a></h3>
                <h3><a href="#">Announcement</a></h3>
                <h3><a href="#">Payment</a></h3>
                <h3><a href="#">Schedule</a></h3>
                <h3><a href="#">Team</a></h3>
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
                    <img src="{{asset('Assets/Dashboard Icon/search.png')}}" alt=""><input type="text" placeholder="Search name...">
                </div>
            </div>
        </header>

        {{-- <section id="profile">
            <div class="profile-pic">
                <h1>Profile Picture</h1>
                <div class="profile-line">
                    <img class="pfp-line" src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
                </div>
                <div class="profile-pfp">
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/profile-pfp.png')}}" alt="">
                    </div>
                    <div class="profile-upload">
                        <h1>UPLOAD</h1>
                        <div>
                            <button class="choose">Choose File</button>
                            <p>No file chosen</p>
                        </div>
                        <button class="submit">SUBMIT</button>
                    </div>
                </div>
            </div>
            <div class="personal-info">
                <h1>Personal Information</h1>
                <div class="profile-line">
                    <img src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
                </div>
                <div class="info">
                    <div class="info-left">
                        <div class="name">
                            <label for="name">Full Name</label>
                            <p>Steven Nathaniel</p>
                        </div>
                        <div class="place">
                            <label for="place">Place of Birth</label>
                            <p>Jakarta</p>
                        </div>
                        <div class="type">
                            <label for="type">Registration Type</label>
                            <p>BINUSIAN</p>
                        </div>
                    </div>
                    <div class="info-right">
                        <div class="date">
                            <label for="date">Date of Birth</label>
                            <p>26 Aug 2003 </p>
                        </div>
                        <div class="gender">
                            <label for="date">Gender</label>
                            <p>Male</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-info">
                <h1>Contact Information</h1>
                <div class="profile-line">
                    <img src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
                </div>
                <div class="info">
                    <div class="info-left">
                        <div class="email">
                            <label for="email">Email</label>
                            <p>Steven Nathaniel</p>
                        </div>
                        <div class="whatsapp">
                            <label for="whatsapp">Whatsapp</label>
                            <p>0812-2345-293</p>
                        </div>
                        <div class="line">
                            <label for="line">LINE ID</label>
                            <p>StevenN</p>
                        </div>
                    </div>
                    <div class="info-right">
                        <div class="git">
                            <label for="git">Github/Gitlab</label>
                            <p>gitHub</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section id="pay-upload">
            <h1>Upload Payment Receipt</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed. Viverra aliquet consequat consequat congue. Volutpat act.</p>
            <div class="upload-receipt">
                <img src="{{asset('Assets/Dashboard Icon/upload.png')}}" alt="">
                <p>Upload or drag file from your device</p>
            </div>
        </section>

        <section id="pay-verified">
            <img src="{{asset('Assets/Dashboard Icon/verified.png')}}" alt="">
            <h1>Your Payment is Being Verified</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed.</p>
        </section>

        <section id="pay-success">
            <img src="{{asset('Assets/Dashboard Icon/success.png')}}" alt="">
            <h1>You Have Been Registered Successfully</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed.</p>
        </section> --}}
        {{-- <section id="timeline">
            <h1>Timeline</h1>
            <div>
                <div class="timeline-left">
                    <div class="open">
                        <!-- <div class="circle"></div> -->
                        <h3>Open Registration</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed. Viverra aliquet consequat consequat congue. Volutpat ac, enim, montes, nullam eget feugiat cras quis sed. Convallis non mattis sociis aliquet viverra arcu. Quam mauris justo condimentum elit faucibus pulvinar adipiscing nulla lectus. Pharetra pellentesque enim elementum vehicula rhoncus, risus elementum. Et et vestibulum faucibus cursus sed est mattis ullamcorper odio. Et, hendrerit nunc neque, feugiat neque elit id vel.</p>
                    </div>
                    <div class="close">
                        <!-- <div class="circle"></div> -->
                        <h3>Close Registration</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed. Viverra aliquet consequat consequat congue. Volutpat ac, enim, montes, nullam eget feugiat cras quis sed. Convallis non mattis sociis aliquet viverra arcu. Quam mauris justo condimentum elit faucibus pulvinar adipiscing nulla lectus. Pharetra pellentesque enim elementum vehicula rhoncus, risus elementum. Et et vestibulum faucibus cursus sed est mattis ullamcorper odio. Et, hendrerit nunc neque, feugiat neque elit id vel.</p>
                    </div>
                    <div class="technical">
                        <!-- <div class="circle"></div> -->
                        <h3>Technical Meeting</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed. Viverra aliquet consequat consequat congue. Volutpat ac, enim, montes, nullam eget feugiat cras quis sed. Convallis non mattis sociis aliquet viverra arcu. Quam mauris justo condimentum elit faucibus pulvinar adipiscing nulla lectus. Pharetra pellentesque enim elementum vehicula rhoncus, risus elementum. Et et vestibulum faucibus cursus sed est mattis ullamcorper odio. Et, hendrerit nunc neque, feugiat neque elit id vel.</p>
                    </div>
                    <div class="competition">
                        <!-- <div class="circle"></div> -->
                        <h3>Competition Day</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl convallis morbi elit eu luctus sed. Viverra aliquet consequat consequat congue. Volutpat ac, enim, montes, nullam eget feugiat cras quis sed. Convallis non mattis sociis aliquet viverra arcu. Quam mauris justo condimentum elit faucibus pulvinar adipiscing nulla lectus. Pharetra pellentesque enim elementum vehicula rhoncus, risus elementum. Et et vestibulum faucibus cursus sed est mattis ullamcorper odio. Et, hendrerit nunc neque, feugiat neque elit id vel. <br><br><br><br></p>
                        <div class="competition-link"><a href="#"><span>Join Meeting</span></a></div>
                    </div>
                </div>
                <div class="timeline-right">
                    <img src="{{asset('Assets/Dashboard Icon/timeline-graph.png')}}" alt="">
                </div>
            </div>
        </section> --}}

        <section id="team">
            <h1>Vaporeon's Team Member</h1>
            <img src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
            <div class="team-members">
                <div class="member-1">
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/profile-pfp.png')}}" alt="">
                    </div>
                    <div class="member-text">
                        <h3>Steven Nathaniel</h3>
                        <h3>Team Leader</h3>
                    </div>
                    <img src="{{asset('Assets/Dashboard Icon/ellipse-arrow.png')}}" alt="">
                </div>
                <div class="member-2">
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/pfp-female.png')}}" alt="">
                    </div>
                    <div class="member-text">
                        <h3>Aurellia Gita Elysia</h3>
                        <h3>Team Member</h3>
                    </div>
                    <img src="{{asset('Assets/Dashboard Icon/ellipse-arrow.png')}}" alt="">
                </div>
                <div class="member-3">
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/ellipse.png')}}" alt="">
                    </div>
                    <div class="member-text">
                        <h3></h3>
                        <h3>Add Member</h3>
                    </div>
                    <img src="{{asset('Assets/Dashboard Icon/ellipse-add.png')}}" alt="">
                </div>
            </div>
        </section>

        <div class="contact-person">
            <h3>For more information please kindly contact :</h3>
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
    </div>



    <script src="{{asset('js/dashboard.js')}}"></script>
</body>
</html>
