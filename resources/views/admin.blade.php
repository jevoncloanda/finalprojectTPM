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
                <h3><a href="{{route('getTeamPayment')}}">Payment</a></h3>
            </div>
        </section>
    </div>

    <div class="center-column">
        <header>
            <div class="header-top">
                <div class="header-date">
                    <h3>Dashboard</h3>
                    <p id="date"></p>
                </div>
                <div class="header-feat">
                    <div class="search">
                        <form action="">
                            <img src="{{asset('Assets/Dashboard Icon/search.png')}}" alt=""><input name="search" type="text" placeholder="Search team or name...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                    <div class="sort dropbtn">
                        <form action="">
                            <button class="dropdown">
                                <span class="iconify-inline" data-icon="bx:bx-sort"></span>
                                <span>Sort by</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li class="a-z" value="ASC" name="sort"><button type="submit" value="ASC" name="sort"><span class="iconify-inline" data-icon="akar-icons:arrow-down" style="color: black;"></span>
                                <span>A to Z</span></button></li>
                                <li class="z-a" value="DESC" name="sort"><button type="submit" value="DESC" name="sort"><span class="iconify-inline" data-icon="akar-icons:arrow-up" style="color: black;"></span>
                                <span>Z to A</span></button></li>
                            </ul>
                        </form>
                    </div>
                    <div class="filter dropbtn">
                        <form action="">
                            <button class="dropdown">
                                <span class="iconify-inline" data-icon="bx:bx-filter-alt" style="color: black;"></span>
                                <span>Filter</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li class="a-z" name="Statusfilter" value="Binusian"><button name="Statusfilter" value="Binusian" type="submit"><span class="iconify-inline" data-icon="akar-icons:square-fill" style="color: white;"></span>
                                    <span>BINUSIAN</span></button></li>
                                <li class="a-z" name="Statusfilter" value="Non-binusian"><button name="Statusfilter" value="Non-binusian" type="submit"><span class="iconify-inline" data-icon="akar-icons:square-fill" style="color: #4e9a9e;"></span>
                                    <span>Non-BINUSIAN</span></button></li>
                                <li class="a-z" name="Verificationfilter" value="verified"><button name="Verificationfilter" value="verified" type="submit"><span class="iconify-inline" data-icon="akar-icons:square-fill" style="color: #4e9a9e;"></span>
                                    <span>Verified</span></button></li>
                                <li class="a-z" name="Verificationfilter" value="unverified"><button name="Verificationfilter" value="unverified" type="submit"><span class="iconify-inline" data-icon="akar-icons:square-fill" style="color: white;"></span>
                                    <span>Unverified</span></button></li>
                        </ul>
                    </form>
                    </div>
                </div>
            </div>
        </header>

        <br><br>
        <div>
            <section id="team">
                <h1>Team List</h1>
                <img class="_line_" src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
                @foreach ($users as $user)
                    <div class="team-members">
                        <div class="member-1">

                        <div>
                            <img src="{{asset('Assets/Dashboard Icon/profile-pfp.png')}}" alt="">
                        </div>
                        <div class="member-text">
                            <h3>{{$user->group_name}}</h3>
                            <h3>Leader : {{$user->leader_name}}</h3>
                        </div>
                        <a href="{{route('getData', ['id'=>$user->id])}}"><img src="{{asset('Assets/Dashboard Icon/ellipse-arrow.png')}}" alt=""></a>
                    </div>
                @endforeach
            </section>

            {{-- <section id="team">
                <h1>Team Members</h1>
                <img class="_line_" src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
                <div class="test">
                    <div class="team-name">
                        <h1>Team Members</h1>
                        <span class="verif-span">BINUSIAN</span>
                        <p class="verif">Verified</p>
                    </div>
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
                    <button class="delete"><img src="{{asset('Assets/Dashboard Icon/delete.png')}}" alt=""></button>
                </div>
            </section>

            <section id="payment">
                <section id="team">
                    <h1>Approval List</h1>
                    <img class="_line_" src="{{asset('Assets/Dashboard Icon/line_.png')}}" alt="">
                    <div class="team-members">
                        <div class="member-1">
                            <div>
                                <img src="{{asset('Assets/Dashboard Icon/profile-pfp.png')}}" alt="">
                            </div>
                            <div class="member-text">
                                <h3>china #1</h3>
                                <h3>Leader : John Xina</h3>
                            </div>
                            <button onclick="openForm()"><img src="{{asset('Assets/Dashboard Icon/view.png')}}" alt=""></button>
                        </div>
                        <div class="member-2">
                            <div>
                                <img src="{{asset('Assets/Dashboard Icon/pfp-female.png')}}" alt="">
                            </div>
                            <div class="member-text">
                                <h3>Brooklyn Visions</h3>
                                <h3>Leader : Miles Morales</h3>
                            </div>
                            <button onclick="openForm()"><img src="{{asset('Assets/Dashboard Icon/view.png')}}" alt=""></button>
                        </div>
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
                </section> --}}
            </div>
        </div>

        {{-- <section id="participant">
            <div class="part-left">
                <div>
                    <div>
                        <h1>User Edit Panel :</h1>
                    <div>
                        <div>
                            <label for="name">Full Name :</label>
                            <input type="text" name="name" id="name">

                            <label for="place">Place of Birth :</label>
                            <input type="text" name="place" id="place">

                            <label for="role">Role :</label>
                            <input type="text" name="role" id="role">

                            <label for="team">Team :</label>
                            <input type="text" name="team" id="">
                        </div>
                        <div>
                            <img class="square-delete" src="{{asset('Assets/Dashboard Icon/square-img.png')}}" alt="">
                            <img class="delete" src="{{asset('Assets/Dashboard Icon/delete.png')}}" alt="">

                            <label for="date">Date of Birth :</label>
                            <input type="text" name="date" id="date">

                            <label for="type">Reg Type :</label>
                            <input type="text" name="type" id="type">
                        </div>
                        <div>
                        </div>
                    </div>
                    <br>
                    <h1>Social Media :</h1>
                    <div>
                        <div>
                            <label for="email">Email :</label>
                            <input type="text" name="email" id="email">

                            <label for="line">Line :</label>
                            <input type="text" name="line" id="line">
                        </div>
                        <div>
                            <label for="wa">Whatsapp :</label>
                            <input type="text" name="wa" id="wa">

                            <label for="git">Github :</label>
                            <input type="text" name="git" id="git">
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <button class="buttons-b"><label for="upload-cv">CV</label></button>
                    <button class="buttons-b"><label for="upload-flazz">Flazz</label></button>

                    <input class="upload-input" type="file" style="visibility: hidden;" id="upload-cv" accept="image/png, image/gif, image/jpeg, application/pdf" onchange="validateFileType()">
                    <input class="upload-input" type="file" style="visibility: hidden;" id="upload-flazz" accept="image/png, image/gif, image/jpeg, application/pdf" onchange="validateFileType()">

                </div>
                <label for="edit-docs">Accept this changes?</label>
                <div>
                    <button class="edit-submit" type="submit">SUBMIT</button>
                </div>
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

        </section> --}}
    </div>

    <!-- <div class="right-column">

    </div> -->

    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/home/form-popup.js')}}"></script>
    <script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>
</body>
</html>
