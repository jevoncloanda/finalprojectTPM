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
    <!-- Navbar -->
    <nav class='navbar registration-page'>
        <div class="container">
            <div class="container-items">
                <h2>Hackathon 5.0</h2>
                <a href=""><p>Home</p></a>
                <a href=""><p>About</p></a>
                <a href=""><p>Timeline</p></a>
                <a href=""><p>FAQ</p></a>
                <a href=""><p>Mentor & Jury</p></a>
                <btn class='btn registration-btn'>Sign In</btn>
            </div>
        </div>
    </nav>

    <!-- Sign In Section -->
    <div class="sign-in-section section hidden">
        <div class="container">
            <form class="container-items center">

                <div class="foo-container">

                    <h1 class="sign-in">Sign In</h1>

                    <h4>Team Name</h4>
                    <div class="display-table">
                        <div class="display-table-row">
                            <div class="display-table-cell icon-placeholder">
                                <span class="iconify" data-icon="akar-icons:person"></span>
                            </div>
                            <div class="display-table-cell">
                                <input type='text' placeholder="Please type your team name here..">
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
                                <input type='text' placeholder="Please type your team password here..">
                            </div>
                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="center">
                        <div class="foo-bar-container">
                            <button class='btn sign-in-btn' type='submit'>Next</button>
                            <p>Don't have an account ?
                                <span><a>Sign Up</a></span>
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
            <form class="container-items center">

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
                                <div class="display-table-cell">
                                    <input type='text' placeholder="Please type your team name here..">
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
                                    <input type='text' placeholder="Please type your team password here..">
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>

                        <h4>Registration Type</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify triangle" data-icon="fluent:triangle-12-regular"></span>
                                </div>
                                <div class="display-table-cell">
                                    <select>
                                        <option>Please select your registration type</option>
                                        <option value='binusian'>Binusian</option>
                                        <option value='non-binusian'>Non Binusian</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>

                        <div class="center">
                            <div class="foo-bar-container">
                                <button class='btn sign-in-btn next'>Next</button>
                                <p>Already have an account ?
                                    <span><a>Login</a></span>
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
                                <div class="display-table-cell">
                                    <input type='text' placeholder="Please type your full name here..">
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>

                        <h4>Place Of Birth</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="akar-icons:location"></span>
                                </div>
                                <div class="display-table-cell">
                                    <input type='text' placeholder="Please type your place of birth here..">
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>

                        <h4>Date Of Birth</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify triangle" data-icon="fluent:triangle-12-regular"></span>
                                </div>
                                <div class="display-table-cell">
                                    <input type='date'>
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>

                        <div class="center">
                            <div class="foo-bar-container">
                                <div class="button-container">
                                    <button class='btn sign-in-btn back'>Back</button>
                                    <button class='btn sign-in-btn next'>Next</button>
                                </div>
                                <p>Already have an account ?
                                    <span><a>Login</a></span>
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
                                <div class="display-table-cell">
                                    <input type='text' placeholder="Please type your email here..">
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>

                        <h4>Whatsapp</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="akar-icons:whatsapp-fill"></span>
                                </div>
                                <div class="display-table-cell">
                                    <input type='text' placeholder="Please type your Whatsapp number here..">
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>

                        <h4>Line ID</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="bi:line"></span>
                                </div>
                                <div class="display-table-cell">
                                    <input type='text' placeholder="Please type your LINE ID here..">
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>

                        <h4>Github/Gitlab</h4>
                        <div class="display-table">
                            <div class="display-table-row">
                                <div class="display-table-cell icon-placeholder">
                                    <span class="iconify" data-icon="akar-icons:github-fill"></span>
                                </div>
                                <div class="display-table-cell">
                                    <input type='text' placeholder="Please type your Github/Gitlab ID here..">
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>

                        <div class="center">
                            <div class="foo-bar-container">
                                <div class="button-container">
                                    <button class='btn sign-in-btn back'>Back</button>
                                    <button class='btn sign-in-btn next'>Next</button>
                                </div>
                                <p>Already have an account ?
                                    <span><a>Login</a></span>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="temp-container page-4 3 hidden">

                        <div class="gender">
                            <span class="iconify" data-icon="bi:gender-ambiguous"></span>
                            <h4>Gender</h4>
                        </div>

                        <div class="display-table">
                            <div class="display-table-row gender">
                                <div class="male-option gender">
                                    <label>Male
                                        <input type='radio' value='male' name='gender'><span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="female-option gender">
                                    <label>Female
                                        <input type='radio' value='female' name='gender'><span class="checkmark"></span>
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
                                    <input type='file' id='cv' hidden>
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
                                    <input type='file' id='identity' hidden>
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
