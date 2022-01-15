@extends('layouts.dashboardmenu')

@section('menu')
<div class="right-column">
    <header>
        <div class="header-top">
            <div class="header-date">
                <h3>Dashboard</h3>
                <p id="date"></p>
            </div>
            {{-- <div class="search">
                <img src="{{asset('Assets/Dashboard Icon/search.png')}}" alt=""><input type="text" placeholder="Search name...">
            </div> --}}
        </div>
    </header>
    <form action="">
        <section id="profile">
            <div class="profile-pic">
                <h1>Profile Picture</h1>
                <div class="profile-line">
                    <img class="pfp-line" src="/Assets/Dashboard Icon/line_.png" alt="">
                </div>
                <div class="profile-pfp">
                    <div>
                        <img src="./Assets/Dashboard Icon/profile-pfp.png" alt="">
                    </div>
                </div>
            </div>
            <div class="personal-info">
                <h1>Personal Information</h1>
                <div class="profile-line">
                    <img src="/Assets/Dashboard Icon/line_.png" alt="">
                </div>
                <div class="info">
                    <div class="info-left">
                        <div class="name">
                            <label for="name">Full Name</label>
                            <input type="text" placeholder="Enter your full name here..."></input>
                        </div>
                        <div class="place">
                            <label for="place">Place of Birth</label>
                            <input type="text" placeholder="Enter your place of birth here..."></input>
                        </div>
                        <div class="type">
                            <label for="type">Registration Type</label>
                            <div>
                                <input type="radio" name="type" value="Binusian" id="binusian"></input>
                                <label for="binusian">Binusian</label>
                                <input type="radio" name="type" value="Non-Binusian" id="non-binusian"></input>
                                <label for="non-binusian">Non-Binusian</label>
                            </div>
                        </div>
                    </div>
                    <div class="info-right">
                        <div class="date">
                            <label for="date">Date of Birth</label>
                            <input type="date"></input>
                        </div>
                        <div class="gender">
                            <label for="date">Gender</label>
                            <div>
                                <input type="radio" name="gender" value="Male" id="male"></input>
                                <label for="male">Male</label>
                                <input type="radio" name="gender" value="Male" id="female"></input>
                                <label for="female">Female</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-info">
                <h1>Contact Information</h1>
                <div class="profile-line">
                    <img src="/Assets/Dashboard Icon/line_.png" alt="">
                </div>
                <div class="info">
                    <div class="info-left">
                        <div class="email">
                            <label for="email">Email</label>
                            <input type="text" placeholder="Enter your email here..."></input>
                        </div>
                        <div class="whatsapp">
                            <label for="whatsapp">Whatsapp</label>
                            <input type="text" placeholder="Enter your Whatsapp number here..."></input>
                        </div>
                        <div class="line">
                            <label for="line">LINE ID</label>
                            <input type="text" placeholder="Enter your Line ID here..."></input>
                        </div>
                    </div>
                    <div class="info-right">
                        <div class="git">
                            <label for="git">Github/Gitlab</label>
                            <input type="text" placeholder="Enter your github here..."></input>
                        </div>
                        <div class="info-button">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
<script src="{{asset('js/dashboard.js')}}"></script>
@endsection
