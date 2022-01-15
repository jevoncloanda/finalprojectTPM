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
                <h3><a href="">Payment</a></h3>
            </div>
        </section>
    </div>
    <section id="payment">
        <section id="team">
            <h1>Approval List</h1>
            <img class="_line_" src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
            <div class="team-members">
                @foreach ($users as $user)
                <div class="member-1">
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/profile-pfp.png')}}" alt="">
                    </div>
                    <div class="member-text">
                        <h3>{{$user->group_name}}</h3>
                        <h3>Leader : {{$user->leader_name}}</h3>
                    </div>
                    <button onclick="openForm()"><img src="{{asset('Assets/Dashboard Icon/view.png')}}" alt=""></button>
                </div>
                {{-- <div class="member-2">
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/pfp-female.png')}}" alt="">
            </div>
            <div class="member-text">
                <h3>Brooklyn Visions</h3>
                <h3>Leader : Miles Morales</h3>
            </div>
            <button onclick="openForm()"><img src="{{asset('Assets/Dashboard Icon/view.png')}}" alt=""></button>
            </div> --}}
            @endforeach
            </div>
        </section>
    </section>

    <section id="pay-approved">
        <section id="team">
            <h1>Approval List</h1>
            <img class="_line_" src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
            <div class="pay-success">
                <img src="{{asset('Assets/Dashboard Icon/success.png')}}" alt="">
                <h1>All payments have been approved</h1>
                <p>There are no recent payment updates currently.</p>
            </div>
        </section>
    </section>

    <div class="receipt-popup" id="myForm">
        <section id="pay-popup">
            <div class="pay-popup2">
                <img onclick="closeForm()" src="{{asset('Assets/Home/close-form.png')}}" alt="">
                <div class="receipt">
                    <img src="{{asset('Assets/Dashboard Icon/receipt.png')}}" alt="">
                </div>
                <div class="acc">
                    <button><img src="{{asset('Assets/Dashboard Icon/reject.png')}}" alt=""></button>
                    <button><img src="{{asset('Assets/Dashboard Icon/accept.png')}}" alt=""></button>
                </div>
            </div>
        </section>
    </div>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/home/form-popup.js')}}"></script>
    <script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>
</body>

</html>
