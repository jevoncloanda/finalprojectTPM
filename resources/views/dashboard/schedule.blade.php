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
    <section id="timeline">
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
