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
                <a href="#"><img src="{{asset('Assets/Dashboard Icon/ellipse-arrow.png')}}" alt=""></a>
            </div>
            <div class="member-2">
                <div>
                    <img src="{{asset('Assets/Dashboard Icon/pfp-female.png')}}" alt="">
                </div>
                <div class="member-text">
                    <h3>Aurellia Gita Elysia</h3>
                    <h3>Team Member</h3>
                </div>
                <a href="#"><img src="{{asset('Assets/Dashboard Icon/ellipse-arrow.png')}}" alt=""></a>
            </div>
            <div class="member-3">
                <div>
                    <img src="{{asset('Assets/Dashboard Icon/ellipse.png')}}" alt="">
                </div>
                <div class="member-text">
                    <h3></h3>
                    <h3>Add Member</h3>
                </div>
                <a href="#"><img src="{{asset('Assets/Dashboard Icon/ellipse-add.png')}}" alt=""></a>
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
@endsection
