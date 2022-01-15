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
    <section id="participant">
        <div class="part-left">
            <form action="{{route('updateLeaderData', ['id'=>$user->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div>
                    <div>
                        <h1>User Edit Panel :</h1>
                        <div>
                            <div>
                                <label for="name">Full Name :</label>
                                <input type="text" name="leader_name" id="name" value="{{$user->leader_name}}">

                                <label for="place">Place of Birth :</label>
                                <input type="text" name="leader_birth_place" id="place"
                                    value="{{$user->leader_birth_place}}">

                                <label for="role">Role :</label>
                                <label for="role">Team Leader</label>

                                <label for="team">Team :</label>
                                <label for="team">{{$user->group_name}}</label>
                            </div>
                            <div>
                                <img class="square-delete" src="{{asset('Assets/Dashboard Icon/square-img.png')}}"
                                    alt="">
                                <img class="delete" src="{{asset('Assets/Dashboard Icon/delete.png')}}" alt="">

                                <label for="date">Date of Birth :</label>
                                <input type="text" name="leader_birth_date" id="date"
                                    value="{{$user->leader_birth_place}}">

                                <label for="type">Reg Type :</label>
                                <input type="text" name="status" id="type" value="{{$user->status}}">
                            </div>
                            <div>
                            </div>
                        </div>
                        <br>
                        <h1>Social Media :</h1>
                        <div>
                            <div>
                                <label for="email">Email :</label>
                                <input type="text" name="leader_email" id="email" value="{{$user->leader_email}}">

                                <label for="line">Line :</label>
                                <input type="text" name="leader_line_id" id="line" value="{{$user->leader_line_id}}">
                            </div>
                            <div>
                                <label for="wa">Whatsapp :</label>
                                <input type="text" name="leader_wa_number" id="wa" value="{{$user->leader_wa_number}}">

                                <label for="git">Github :</label>
                                <input type="text" name="leader_github" id="git" value="{{$user->leader_github}}">
                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="buttons-b"><label for="upload-cv">CV</label></button>
                        <button class="buttons-b"><label for="upload-flazz">Flazz</label></button>

                        <input class="upload-input" type="file" style="visibility: hidden;" name="leader_CV"
                            id="upload-cv" accept="image/png, image/gif, image/jpeg, application/pdf"
                            onchange="validateFileType()">
                        <input class="upload-input" type="file" style="visibility: hidden;" name="leader_card"
                            id="upload-flazz" accept="image/png, image/gif, image/jpeg, application/pdf"
                            onchange="validateFileType()">

                    </div>
                    <label for="edit-docs">Accept this changes?</label>
                    <div>
                        <button class="edit-submit" type="submit">SUBMIT</button>
                    </div>
            </form>
        </div>

        <div class="part-right">
            <section id="team-edit">
                <div>
                    <h1>Team Edit Panel :</h1>
                </div>
                <div class="team-info">
                    <div>
                        <span>1</span>
                    </div>
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/square-img.png')}}" alt="">
                    </div>
                    <div>
                        <p>Name :</p>
                        <h1>Steven Nathaniel</h1>
                        <p>Status : Team Leader</p>
                        <button>Edit Profile</button>
                    </div>
                </div>
                <div class="team-info">
                    <div>
                        <span>2</span>
                    </div>
                    <div>
                        <img src="{{asset('Assets/Dashboard Icon/square-img.png')}}" alt="">
                    </div>
                    <div>
                        <p>Name :</p>
                        <h1>Aurellia Gita Elysia</h1>
                        <p>Status : Team Member</p>
                        <button>Edit Profile</button>
                    </div>
                </div>
            </section>
        </div>

    </section>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/home/form-popup.js')}}"></script>
    <script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>
</body>

</html>
