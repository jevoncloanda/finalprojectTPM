NETCloud
#2596

Lycia — 12/28/2021
langsung di situ gapapa kan?
Image
Apa perlu bikin folder css dulu
NETCloud — 12/28/2021
buat dulu
udah — 12/28/2021
iya
NETCloud — 12/28/2021
https://youtu.be/ewQcW76l5bU?t=4536
YouTube
Knowledge Center BNCC
TPM_BE_003
Image
udah — 12/28/2021
1 jam 15 menit utk front end
NETCloud — 01/02/2022
Image
Image
urgent tag aja — 01/02/2022
Image
Image
Lycia — 01/02/2022
https://drive.google.com/drive/folders/1Asq3d751ikw3gWHQnAvdafP4962LiXWF
udah — 01/02/2022
Image
di catatan gw sih temanya liat ts tahun lalu
@urgent tag aja
https://docs.google.com/document/d/1cOsJ_QvGKVlQ2-65kc5xSV3oJTu_5yks/edit
Google Docs
RG - TPM 2022.docx
Website Hackathon Home Page Animasi loading page (Optional) Favicon Navigation bar Logo Hackathon Home Champion Prizes Mentor & Jury About FAQ Timeline Login Notes: Selain Logo Hackathon dan Login, sisanya jika diklik auto scroll ke section tersebut. Landing Page Include: Nama event -> Hackatho...
Image
urgent tag aja — 01/03/2022
- Landing page
- Register
- Dashboard
- Payment
- Timeline
- Admin panel
udah — 01/03/2022
https://docs.google.com/document/d/1VxBfYePHsCPRYZ4XzxvCLbxiTH0tbAIAdVLPZ8_z4Zo/edit
Google Docs
Website Hackathon
Website Hackathon Home Page Animasi loading page (Optional) Favicon Navigation bar Logo Hackathon Home Champion Prizes Mentor & Jury About FAQ Timeline Login Notes: Selain Logo Hackathon dan Login, sisanya jika diklik auto scroll ke section tersebut. Landing Page Include: Nama event -> Hackatho...
Image
NETCloud — 01/05/2022
Image
@Lycia @dh balek
itu nnti kalau mau bikin FE buat login regis
di situ ya
Lycia — 01/05/2022
Okee
NETCloud — 01/05/2022
di view -> auth
itu hapus aja yang ada di dalem situ gapapa
Lycia — 01/05/2022
aku ga begitu ngerti kalo coding langsung di php, jadi masih di html
nanti di copas
NETCloud — 01/05/2022
itu bawaan dari laravel
iyaa itu bkn php kok
itu html jg wkwkwkk
Lycia — 01/05/2022
oke
NETCloud — 01/05/2022
tapi di laravel itu emng .blade.php
tp sama aja kek .html sebenernya
persis
Lycia — 01/05/2022
ngga, maksudku kalau nulis html di blade.php ga ngerti cara buka live server nya wkwk
NETCloud — 01/05/2022
oalah
okok
wkwkwkkw
udah progress sampe mana FE
Lycia — 01/05/2022
wkwkwk masih noob, maklum yak
gua baru sedikit sihhh
NETCloud — 01/05/2022
wkwkkwkw sama gw jg masi banyak bingung ini BE nya
Lycia — 01/05/2022
malem ini mau ngerjain css nyaa
NETCloud — 01/05/2022
yauda okok
semangat smangat
@here
Lycia — 01/05/2022
🔥
udah — 01/05/2022
Image
NETCloud — 01/09/2022
git add .
git commit "[pesan commitnya]"
git push
udah — Today at 4:22 PM
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
    <?php
        use App\Models\User;
        $id = Auth::user()->id;
        $leader = User::find($id);
    ?>
    <form action="{{route('createMember',['id'=>$leader->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <section id="profile">
            <div class="profile-pic">
                <h1>Profile Picture</h1>
                <div class="profile-line">
                    <img class="pfp-line" src="{{asset('/Dashboard Icon/line_.png')}}" alt="">
                </div>
                <div class="profile-pfp">
                    <div>
                        <img src="{{asset('/Dashboard Icon/profile-pfp.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="personal-info">
                <h1>Personal Information</h1>
                <div class="profile-line">
                    <img src="{{asset('/Dashboard Icon/line_.png')}}" alt="">
                </div>
                <div class="info">
                    <div class="info-left">
                        <div class="name">
                            <label for="name">Full Name</label>
                            <input name= "name" type="text" placeholder="Enter your full name here...">
                        </div>
                        <div class="place">
                            <label for="place">Place of Birth</label>
                            <input name="birth_place" type="text" placeholder="Enter your place of birth here...">
                        </div>
                    </div>
                    <div class="info-right">
                        <div class="date">
                            <label for="date">Date of Birth</label>
                            <input name="birth_date" type="date">
                        </div>
                        <div class="gender">
                            <label for="date">Gender</label>
                            <div>
                                <input type="radio" name="gender" value="Male" id="male">
                                <label for="male">Male</label>
                                <input type="radio" name="gender" value="Male" id="female">
                                <label for="female">Female</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-info">
                <h1>Contact Information</h1>
                <div class="profile-line">
                    <img src="{{asset('/Dashboard Icon/line_.png')}}" alt="">
                </div>
                <div class="info">
                    <div class="info-left">
                        <div class="email">
                            <label for="email">Email</label>
                            <input name="email" type="text" placeholder="Enter your email here...">
                        </div>
                        <div class="whatsapp">
                            <label for="whatsapp">Whatsapp</label>
                            <input name="wa_number" type="text" placeholder="Enter your Whatsapp number here...">
                        </div>
                        <div class="line">
                            <label for="line">LINE ID</label>
                            <input name="line_id" type="text" placeholder="Enter your Line ID here...">
                        </div>
                    </div>
                    <div class="info-right">
                        <div class="git">
                            <label for="git">Github/Gitlab</label>
                            <input name="github" type="text" placeholder="Enter your github here...">
                        </div>
                        <div>
                            <div class="info-button">
                                <label for="upload-cv">CV</label>
                                <input class="upload-input" type="file" name="CV" style="visibility: hidden;" id="upload-cv" accept="image/png, image/gif, image/jpeg, application/pdf" onchange="validateFileType()">
                            </div>
                            <br>
                            <div class="info-button">
                                <input class="upload-input" name="card" id="upload-flazz" type="file" id="upload-flazz" accept="image/png, image/gif, image/jpeg, application/pdf" onchange="validateFileType()">
... (14 lines left)
Collapse
team-add.blade.php
6 KB
﻿
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
    <?php
        use App\Models\User;
        $id = Auth::user()->id;
        $leader = User::find($id);
    ?>
    <form action="{{route('createMember',['id'=>$leader->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <section id="profile">
            <div class="profile-pic">
                <h1>Profile Picture</h1>
                <div class="profile-line">
                    <img class="pfp-line" src="{{asset('/Dashboard Icon/line_.png')}}" alt="">
                </div>
                <div class="profile-pfp">
                    <div>
                        <img src="{{asset('/Dashboard Icon/profile-pfp.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="personal-info">
                <h1>Personal Information</h1>
                <div class="profile-line">
                    <img src="{{asset('/Dashboard Icon/line_.png')}}" alt="">
                </div>
                <div class="info">
                    <div class="info-left">
                        <div class="name">
                            <label for="name">Full Name</label>
                            <input name= "name" type="text" placeholder="Enter your full name here...">
                        </div>
                        <div class="place">
                            <label for="place">Place of Birth</label>
                            <input name="birth_place" type="text" placeholder="Enter your place of birth here...">
                        </div>
                    </div>
                    <div class="info-right">
                        <div class="date">
                            <label for="date">Date of Birth</label>
                            <input name="birth_date" type="date">
                        </div>
                        <div class="gender">
                            <label for="date">Gender</label>
                            <div>
                                <input type="radio" name="gender" value="Male" id="male">
                                <label for="male">Male</label>
                                <input type="radio" name="gender" value="Male" id="female">
                                <label for="female">Female</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-info">
                <h1>Contact Information</h1>
                <div class="profile-line">
                    <img src="{{asset('/Dashboard Icon/line_.png')}}" alt="">
                </div>
                <div class="info">
                    <div class="info-left">
                        <div class="email">
                            <label for="email">Email</label>
                            <input name="email" type="text" placeholder="Enter your email here...">
                        </div>
                        <div class="whatsapp">
                            <label for="whatsapp">Whatsapp</label>
                            <input name="wa_number" type="text" placeholder="Enter your Whatsapp number here...">
                        </div>
                        <div class="line">
                            <label for="line">LINE ID</label>
                            <input name="line_id" type="text" placeholder="Enter your Line ID here...">
                        </div>
                    </div>
                    <div class="info-right">
                        <div class="git">
                            <label for="git">Github/Gitlab</label>
                            <input name="github" type="text" placeholder="Enter your github here...">
                        </div>
                        <div>
                            <div class="info-button">
                                <label for="upload-cv">CV</label>
                                <input class="upload-input" type="file" name="CV" style="visibility: hidden;" id="upload-cv" accept="image/png, image/gif, image/jpeg, application/pdf" onchange="validateFileType()">
                            </div>
                            <br>
                            <div class="info-button">
                                <input class="upload-input" name="card" id="upload-flazz" type="file" id="upload-flazz" accept="image/png, image/gif, image/jpeg, application/pdf" onchange="validateFileType()">
                                <label for="upload-flazz">Flazz</label>
                            </div>
                            <div class="info-button">
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
<script src="{{asset('js/dashboard.js')}}"></script>
@endsection
