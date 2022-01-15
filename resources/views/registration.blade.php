<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stlye -->
    <link rel='stylesheet' href="{{asset('css/registration/style.css')}}">
    <link rel='stylesheet' href="{{asset('css/registration/navbar.css')}}">
    <link rel='stylesheet' href="{{asset('css/registration/sign-in-section.css')}}">
    <link rel='stylesheet' href="{{asset('css/registration/sign-up.css')}}">

    <!-- Assets -->
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

    <title>Registration Page</title>
</head>
<body>

    <nav class='navbar registration-page nav-none'>
        <div class="container">
            <div class="container-items">
                <h2>Hackathon 5.0</h2>
                <a href=""><p>Home</p></a>
                <a href=""><p>About</p></a>
                <a href=""><p>Timeline</p></a>
                <a href=""><p>FAQ</p></a>
                <a href=""><p>Mentor & Jury</p></a>
                <button class='btn registration-btn'>Sign In</button>
            </div>
        </div>
    </nav>

    <div class="bgatas">
        <img src="../registration-page/style/Group 38.png" alt="">
    </div>

    <!-- Sign In Section -->
    <div class="sign-in-section section hidden">
        <div class="container">
            <form class="container-items center" action="{{route('login')}}" method="POST">
                @csrf

                <div class="foo-container">

                    <h1 class="sign-in">Sign In</h1>

                    <h4>Team Name</h4>
                    <div class="display-table">
                        <div class="display-table-row">
                            <div class="display-table-cell icon-placeholder">
                                <span class="iconify" data-icon="akar-icons:person"></span>
                            </div>
                            <div class="display-table-cell">
                                <input type='text' id="group_name" name="group_name" placeholder="Please type your team name here..">
                            </div>
                        </div>
                    </div>

                    <div class="line"></div>

                    <h4>Password</h4>
                    <div class="display-table">
                        <div class="display-table-row">
                            <div class="display-table-cell icon-placeholder">
                                <span class="iconify" data-icon="akar-icons:key"></span>
                            </div>
                            <div class="display-table-cell">
                                <input type='password' name="password" placeholder="Please type your team password here..">
                            </div>
                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="center">
                        <div class="foo-bar-container">
                            <button class='btn sign-in-btn' type='submit'>Login</button>
                            <p>Don't have an account ?
                                <span><a class='sign-up-text'>Sign Up</a></span>
                            </p>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <!-- Sign Up Section -->
    <div class="sign-in-section sign-up-section section">
        <div class="container">
            <form action="{{route('register')}}" method="POST" enctype="multipart/form-data" class="container-items center">
                @csrf

                <div class="foo-container">

                    <h1 class="sign-in">Sign Up</h1>

                        <div class='circle-container'>
                            <div class='circle active'></div>
                            <div class='circle'></div>
                            <div class='circle'></div>
                            <div class='circle'></div>
                        </div>

                    <div class="temp-container page-1 0">

                        <h4>Team Name</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="akar-icons:person"></span>
                                </div>
                                <div class="display-table-cell display-flex">
                                    <input class='text-input input' type='text' id="group_name" name="group_name" placeholder="Please type your team name here..">
                                    <span class="iconify warning hidden" data-icon="carbon:warning"></span>
                                </div>
                            </div>
                        </div>

                        <div class="line warning-line"></div>
                        <p class='warning-text hidden'>Please input this field</p>

                        <h4>Password</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="akar-icons:key"></span>
                                </div>
                                <div class="display-table-cell display-flex">
                                    <input class='text-input input' type='password' id="password" name="password" placeholder="Please type your team password here..">
                                    <span class="iconify warning hidden" data-icon="carbon:warning"></span>
                                </div>
                            </div>
                        </div>

                        <div class="line warning-line"></div>
                        <p class='warning-text hidden'>Password must contain atleast 1 uppercase letter and numbers</p>

                        <h4>Registration Type</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify triangle" data-icon="fluent:triangle-12-regular"></span>
                                </div>
                                <div class="display-table-cell display-flex">
                                    <select id="status" name="status" class='select-input input'>
                                        <option value='NULL'>Please select your registration type</option>
                                        <option value='Binusian'>Binusian</option>
                                        <option value='Non-binusian'>Non Binusian</option>
                                    </select>
                                    <span class="iconify warning float-right hidden" data-icon="carbon:warning"></span>
                                </div>
                            </div>
                        </div>

                        <div class="line warning-line"></div>
                        <p class='warning-text hidden'>Please input this field</p>

                        <div class="center">
                            <div class="foo-bar-container">
                                <button class='btn sign-in-btn next'>Next</button>
                                <p>Already have an account ?
                                    <span><a class='login-text'>Login</a></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="temp-container page-2 1 hidden">
                        <h4 class='text-center'>Team Leader</h4>
                        <h4>Full Name</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="akar-icons:person"></span>
                                </div>
                                <div class="display-table-cell display-flex">
                                    <input class='input' type='text' id="leader_name" name="leader_name" placeholder="Please type your full name here..">
                                    <span class="iconify warning float-right hidden" data-icon="carbon:warning"></span>
                                </div>
                            </div>
                        </div>

                        <div class="line warning-line"></div>
                        <p class='warning-text hidden'>Please input this field</p>

                        <h4>Place Of Birth</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="akar-icons:location"></span>
                                </div>
                                <div class="display-table-cell display-flex">
                                    <input class='input' type='text' id="leader_birth_place" name="leader_birth_place" placeholder="Please type your place of birth here..">
                                    <span class="iconify warning float-right hidden" data-icon="carbon:warning"></span>
                                </div>
                            </div>
                        </div>

                        <div class="line warning-line"></div>
                        <p class='warning-text hidden'>Please input this field</p>

                        <h4>Date Of Birth</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify triangle" data-icon="fluent:triangle-12-regular"></span>
                                </div>
                                <div class="display-table-cell display-flex">
                                    <input class='input' type='date' id="leader_birth_date" name="leader_birth_date">
                                    <span class="iconify warning float-right hidden" data-icon="carbon:warning"></span>
                                </div>
                            </div>
                        </div>

                        <div class="line warning-line"></div>
                        <p class='warning-text hidden'>Participant must be atleast 17 years old</p>

                        <div class="center">
                            <div class="foo-bar-container">
                                <div class="button-container">
                                    <button class='btn sign-in-btn back'>Back</button>
                                    <button class='btn sign-in-btn next'>Next</button>
                                </div>
                                <p>Already have an account ?
                                    <span><a class='login-text'>Login</a></span>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="temp-container page-3 2 hidden">

                        <h4>Email</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="carbon:email"></span>
                                </div>
                                <div class="display-table-cell display-flex">
                                    <input class='input' type='text' id="leader_email" name="leader_email" placeholder="Please type your email here..">
                                    <span class="iconify warning float-right hidden" data-icon="carbon:warning"></span>
                                </div>
                            </div>
                        </div>

                        <div class="line warning-line"></div>
                        <p class='warning-text hidden'>Please input this field</p>

                        <h4>Whatsapp</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="akar-icons:whatsapp-fill"></span>
                                </div>
                                <div class="display-table-cell display-flex">
                                    <input class='input' type='text' id="leader_wa_number" name="leader_wa_number" placeholder="Please type your Whatsapp number here..">
                                    <span class="iconify warning float-right hidden" data-icon="carbon:warning"></span>
                                </div>
                            </div>
                        </div>

                        <div class="line warning-line"></div>
                        <p class='warning-text hidden'>Please input this field</p>

                        <h4>Line ID</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="bi:line"></span>
                                </div>
                                <div class="display-table-cell display-flex">
                                    <input class='input' type='text' id="leader_line_id" name="leader_line_id" placeholder="Please type your LINE ID here..">
                                    <span class="iconify warning float-right hidden" data-icon="carbon:warning"></span>
                                </div>
                            </div>
                        </div>

                        <div class="line warning-line"></div>
                        <p class='warning-text hidden'>Please input this field</p>

                        <h4>Github/Gitlab</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="akar-icons:github-fill"></span>
                                </div>
                                <div class="display-table-cell display-flex">
                                    <input class='input' type='text' id="leader_github" name="leader_github" placeholder="Please type your Github/Gitlab ID here..">
                                    <span class="iconify warning float-right hidden" data-icon="carbon:warning"></span>
                                </div>
                            </div>
                        </div>

                        <div class="line warning-line"></div>
                        <p class='warning-text hidden'>Please input this field</p>

                        <div class="center">
                            <div class="foo-bar-container">
                                <div class="button-container">
                                    <button class='btn sign-in-btn back'>Back</button>
                                    <button class='btn sign-in-btn next'>Next</button>
                                </div>
                                <p>Already have an account ?
                                    <span><a class='login-text'>Login</a></span>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="temp-container page-4 3 hidden">

                        <div class="gender">
                            <span class="iconify" data-icon="bi:gender-ambiguous"></span>
                            <p class='gender-font'>Gender</p>
                        </div>

                        <div class="display-table">
                            <div class="display-table-row gender">
                                <div class="male-option gender">
                                    <label>Male
                                        <input type='radio' value='Male' class="male" name='leader_gender'><span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="female-option gender">
                                    <label>Female
                                        <input type='radio' value='Female' class="female" name='leader_gender'><span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>


                        <h4>CV</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="carbon:email"></span>
                                </div>
                                <div class="display-table-cell file">
                                    <input type='file' id='cv' name="leader_CV" hidden>
                                    <label for="cv" id='label-cv'>Please upload your CV card here...</label>
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>

                        <h4>Identity</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="carbon:email"></span>
                                </div>
                                <div class="display-table-cell file">
                                    <input type='file' id='identity' name="leader_card" hidden>
                                    <label for="identity" id='label-identity'>Please upload your identity card here...</label>
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>

                        <div class="center">
                            <div class="foo-bar-container">
                                <button class='btn sign-in-btn' type='submit'>Submit</button>
                            </div>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>

    <script type='module' src="{{asset('js/registration/script.js')}}"></script>
</body>
</html>
