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
        <?php
            use App\Models\User;
            $id = Auth::user()->id;
            $leader = User::find($id);
        ?>
        <h1>{{$leader->group_name}}'s Team Member</h1>
        <img src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
        <div class="team-members">
            <div class="member-1">
                @if ($leader->leader_gender == 'Male')
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/profile-pfp.png')}}" alt="">
                    </div>
                @else
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/pfp-female.png')}}" alt="">
                    </div>
                @endif
                <div class="member-text">
                    <h3>{{$leader->leader_name}}</h3>
                    <h3>Team Leader</h3>
                </div>
                <a href="{{route('getLeaderProfilePage')}}"><img src="{{asset('Assets/Dashboard Icon/ellipse-arrow.png')}}" alt=""></a>
            </div>
            <?php
                $count = 0;
            ?>
            @foreach ($members as $member)
                <div class="member-2">
                    @if ($member->gender == 'Male')
                        <div>
                            <img src="{{asset('Assets/Dashboard Icon/profile-pfp.png')}}" alt="">
                        </div>
                    @else
                        <div>
                            <img src="{{asset('Assets/Dashboard Icon/pfp-female.png')}}" alt="">
                        </div>
                    @endif
                    <div class="member-text">
                        <h3>{{$member->name}}</h3>
                        <h3>Team Member</h3>
                    </div>
                    <a href="{{route('getProfilePage',['id'=>$member->id])}}"><img src="{{asset('Assets/Dashboard Icon/ellipse-arrow.png')}}" alt=""></a>
                </div>
                <?php
                    $count++
                ?>
            @endforeach

            @if ($count == 3)
                <label for="fullrfgg">Sudah penuh</label>
            @else
                <div class="member-3">
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/ellipse.png')}}" alt="">
                    </div>
                    <div class="member-text">
                        <h3></h3>
                        <h3>Add Member</h3>
                    </div>
                    <a href="{{route('getTeamAddPage')}}"><img src="{{asset('Assets/Dashboard Icon/ellipse-add.png')}}" alt=""></a>
                </div>
            @endif
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
