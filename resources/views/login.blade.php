<!-- login.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title> Woniee | Login </title>
      <link rel="shortcut icon" type="image/png" href="{{ asset('fav.png') }}" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        .form-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            border: 5px solid black;
            border-radius: 10px;
            padding: 20px;
            max-width: 800px;
            width: 80%; /* Adjust the width as needed */
            height: 80%; /* Adjust the height as needed */
            z-index: 999; /* Ensure the form is on top of other elements */

        }

       .login-form {
    margin: 0 auto; /* Add margin:auto to horizontally center the login form */
    max-width: 400px; /* Adjust the max-width as needed */
}
        .form-container .image-container {
            width: 40%; /* Adjust the width as needed */
            height: 100%; /* Adjust the height as needed */
            padding-right: 20px;
        }

        .form-container .image-container img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 10px;
        }

        .form-container h1 {
            margin-bottom: 20px;
            text-align: center;
            width: 100%;
        }

        .form-container input {
            border: 1px solid black;
            width: 80%;
            border-radius: 5px;
            padding: 8px;
            display: flex;
            align-items: center;
        }

        .form-container input .input-group-text {
            margin-right: 8px;
        }

.form-container button {
    border-radius: 20px;
    transition: background-color 0.3s ease-in-out;
    display: block;
    margin: 0 auto;
    width: 300px; /* Adjust the width as needed */
    margin-top: 40px;
}

        .form-container .form-group {
            width: 100%;
            margin-bottom: 10px;
        }

        .form-container .form-group label {
            text-align: left;
            display: block;
        }

        .form-container .image-container {
            width: 100%;
            padding-right: 20px;
            margin-bottom: 20px;
        }

        .form-container .image-container img {
            max-width: 100%;
            border-radius: 10px;
        }

        .fade-in {
            animation-name: fade-in;
            animation-duration: 1s;
            animation-timing-function: ease-in-out;
            animation-fill-mode: forwards;
            opacity: 0;
        }

        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .typewriter {
            overflow: hidden; /* Ensures the content is not revealed until the animation */
            white-space: nowrap; /* Keeps the content on a single line */
            margin: 0 auto; /* Gives that scrolling effect as the typing happens */
            letter-spacing: .10em; /* Adjust as needed */
            animation: typing 2s steps(30, end) 1s 1 normal both;
        }

        /* The typing animation */
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        body {
            background-image: url("{{ asset('bg1.png') }}");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            overflow: hidden; /* Prevent scrolling */
        }

        @media (max-width: 1200px) {
            .form-container {
                max-width: 95%;
            }

            .form-container .image-container {
                width: 40%;
            }
        }

        @media (max-width: 992px) {
            .form-container {
                max-width: 95%;
                flex-direction: column;
                height: auto;
            }

            .form-container .image-container {
                width: 100%;
                padding-right: 0;
                margin-bottom: 20px;
            }

            .form-container button {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .form-container {
                max-width: 95%;
                height: auto;
            }

            .form-container .image-container {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="container fade-in">
    <div class="form-container">
        <div class="login-form" style="margin-top: 40px; margin-left: 60px; margin-right: auto;">
            <h1 class="typewriter">Login Form</h1>

              @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <form method="POST" action="{{ route('login.store') }}">
             @csrf

                <div class="form-group">
                    <label for="name" class="text-left">Email</label>
                    <div class="input-group">
                        <span class="input-group-text border border-dark"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" placeholder="Email" id="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="text-left">Password</label>
                    <div class="input-group">
                        <span class="input-group-text border border-dark"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Password" id="password" required>
                    </div>
                </div>

                <div style="margin-top: 10px;">
                    <button type="submit" class="btn btn-outline-warning">Login</button>
                </div>
            </form>
  <div class="login-link" style=" margin-top: 10px;  ">
    <p style="margin-left: 20px;">Don't have an account? <a href="{{ route('register.create') }}">Register</a></p>
</div>

        </div>

        <div class="image-container" style="margin-top:30px; margin-left: 30px;">
            <img src="pic2.png" alt="Image">
        </div>
    </div>
</div>
<!-- ... -->


</script>
    <footer style="position: absolute; bottom: 0; top:610px ;left: 50%; transform: translateX(-50%); text-align: center; width: 100%;  padding: 10px; color: white;">
</footer>
<script src="https://kit.fontawesome.com/0d91d9d41f.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
