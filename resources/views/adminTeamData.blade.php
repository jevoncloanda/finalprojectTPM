<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>

<body>
    <img class="bg-bubble" src="{{asset('Assets/Background/admin-bubble.png')}}" alt="">
    <div class="left-column">
        <h1>Admin Dashboard</h1>
        <section id="stat">
            <div class="stat-image">
                <img src="#" alt="">
            </div>
            <div class="stat-text">
                <p>Welcome back,</p>
                <h3 class="stat-name">Admin</h3>
                <p class="status">Status : Admin Panel</p>
            </div>
        </section>

        <section id="menu">
            <div class="menu-icon">
                <img src="{{asset('Assets/Dashboard Icon/members.png')}}" alt="">
                <img src="{{asset('Assets/Dashboard Icon/payment.png')}}" alt="">
            </div>
            <div class="menu-text">
                <h3><a href="{{route('getTeamData')}}">Team</a></h3>
                {{-- {{route('getTeamData')}} --}}
                <h3><a href="{{route('getTeamPayment')}}">Payment</a></h3>
            </div>
        </section>
    </div>
    <section id="team">
        <h1>Team Members</h1>
        <img class="_line_" src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
        <div class="test">
            <div class="team-name">
                <h1>Team Members</h1>
                {{-- <span class="verif-span">BINUSIAN</span>
                        <p class="verif">Verified</p> --}}
            </div>
            <div class="team-members">
                <div class="member-1">
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/profile-pfp.png')}}" alt="">
                    </div>
                    <div class="member-text">
                        <h3>{{$user->leader_name}}</h3>
                        <h3>Team Leader</h3>
                    </div>
                    <a href="{{route('getLeaderData', ['id'=>$user->id])}}"><img
                            src="{{asset('Assets/Dashboard Icon/ellipse-arrow.png')}}" alt=""></a>
                </div>
                @foreach ($members as $member)
                <div class="member-2">
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/pfp-female.png')}}" alt="">
                    </div>
                    <div class="member-text">
                        <h3>{{$member->name}}</h3>
                        <h3>Team Member</h3>
                    </div>
                    <a href="{{route('getMemberData',['id'=>$member->id])}}"><img
                            src="{{asset('Assets/Dashboard Icon/ellipse-arrow.png')}}" alt=""></a>
                </div>
                @endforeach
            </div>
            <form action="{{route('deleteTeam', ['id'=>$user->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('delete')
                <button class="delete" type="submit"><img src="{{asset('Assets/Dashboard Icon/delete.png')}}"
                        alt=""></button>
            </form>
        </div>
    </section>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/home/form-popup.js')}}"></script>
    <script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>
</body>

</html>
