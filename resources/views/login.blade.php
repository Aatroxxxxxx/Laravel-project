<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Animated login signup</title>
</head>

<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div id="container" class="container">
        <!-- FORM SECTION -->
        <div class="row">
            <!-- SIGN UP -->
            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                    <form action="{{ url('/signup') }}" method="POST" style="width: 100%;">
                        @csrf
                        <div class="form sign-up">
                            <div class="input-group">
                                <i class='bx bxs-user'></i>
                                <input type="text" placeholder="First Name" name="fname" id="fname" required>
                            </div>
                            <div class="input-group">
                                <i class='bx bx-mail-send'></i>
                                <input type="text" placeholder="Last Name" name="lname" id="lname" required>
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="email" placeholder="Email" name="email" id="email" required>
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" placeholder="Password" name="password" id="password" required>
                            </div>
                            <button>Sign up</button>

                            <p>
                                <span>Already have an account?</span>
                                <b onclick="toggle()" class="pointer">Sign in here</b>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="form-wrapper">
                    <div class="social-list align-items-center sign-up">
                        <div class="align-items-center facebook-bg">
                            <i class='bx bxl-facebook'></i>
                        </div>
                        <div class="align-items-center google-bg">
                            <i class='bx bxl-google'></i>
                        </div>
                        <div class="align-items-center twitter-bg">
                            <i class='bx bxl-twitter'></i>
                        </div>
                        <div class="align-items-center insta-bg">
                            <i class='bx bxl-instagram-alt'></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SIGN UP -->

            <!-- SIGN IN -->
            <div class="col align-items-center flex-col sign-in">
                <div class="form-wrapper align-items-center">
                    <form method='post' action='{{ url("authenticate") }}' style="width: 100%;">
                        @csrf
                        <div class="form sign-in">
                            <div class="input-group">
                                <i class='bx bxs-user'></i>
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            <button>Sign in</button>

                            <p>
                                <b>Forgot password?</b>
                            </p>
                            <p>
                                <span>Don't have an account?</span>
                                <b onclick="toggle()" class="pointer">Sign up here</b>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="form-wrapper">
                    <div class="social-list align-items-center sign-in">
                        <div class="align-items-center facebook-bg">
                            <i class='bx bxl-facebook'></i>
                        </div>
                        <div class="align-items-center google-bg">
                            <i class='bx bxl-google'></i>
                        </div>
                        <div class="align-items-center twitter-bg">
                            <i class='bx bxl-twitter'></i>
                        </div>
                        <div class="align-items-center insta-bg">
                            <i class='bx bxl-instagram-alt'></i>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <!-- END SIGN IN -->
        </div>
        <!-- END FORM SECTION -->

        <!-- CONTENT SECTION -->
        <div class="row content-row">
            <!-- SIGN IN CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="text sign-in">
                    <h2>Welcome back</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit obcaecati, accusantium
                        molestias, laborum, aspernatur deserunt officia voluptatum tempora dicta quo ab ullam. Assumenda
                        enim harum minima possimus dignissimos deserunt rem.
                    </p>
                </div>
                <div class="img sign-in">
                    <img src="{{ asset('assets/img/undraw_different_love_a3rg.svg') }}" alt="welcome">
                </div>
            </div>
            <!-- END SIGN IN CONTENT -->

            <!-- SIGN UP CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="img sign-up">
                    <img src="{{ asset('assets/img/undraw_creative_team_r90h.svg') }}" alt="welcome">
                </div>
                <div class="text sign-up">
                    <h2>Join with us</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit obcaecati, accusantium
                        molestias, laborum, aspernatur deserunt officia voluptatum tempora dicta quo ab ullam. Assumenda
                        enim harum minima possimus dignissimos deserunt rem.
                    </p>
                </div>
            </div>
            <!-- END SIGN UP CONTENT -->
        </div>
        <!-- END CONTENT SECTION -->
    </div>

    @if (session('error'))
    <div class="alert alert-danger error-message">
        {{ session('error') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger error-message">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
