<!DOCTYPE html>
<html>
<head>
    <title> Woniee | Registration </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/png" href="{{ asset('fav.png') }}" />

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
        }

        .form-container button {
            border-radius: 20px;
            transition: background-color 0.3s ease-in-out;
            display: block;
            margin: 0 auto;
            width: 400px;
            margin-top: 10px;
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
            <div class="image-container" style="margin-top:60px;">
                <img src="pic1.png" alt="Image">
            </div>

            <div class="registration-form">
                <h1 class="typewriter" style="margin-top:40px;">Registration Form</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register.store') }}">
                    @csrf
<div class="form-group">
    <label for="name" class="text-left">Name</label>
    <div class="input-group">
        <span class="input-group-text border border-dark"><i class="fas fa-user"></i></span>
        <input type="text" class="form-control border border-dark" id="name" name="name"  placeholder="name" value="{{ old('name') }}" required>
    </div>
</div>

                    <div class="form-group">
                        <label for="email" class="text-left">Email</label>
                          <div class="input-group">
        <span class="input-group-text border border-dark"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{ old('email') }}" required>
                    </div>
                </div>
                    <div class="form-group">

                        <label for="password" class="text-left">Password</label>
                          <div class="input-group">
        <span class="input-group-text border border-dark"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                    </div>
                </div>
                <div class="input-group mb-5" style="margin-top:12px">
    <div class="form-check ms-auto text-end">
      <input type="checkbox" class="form-check-input" id="remember-me-checkbox">
      <label for="remember-me-checkbox" class="form-check-label text-secondary"><small>Show Pin</small></label>
    </div>

                    <button type="submit" class="btn btn-outline-warning">Register</button>
                </form>

              <div class="login-link" style="text-align: center; margin-top: 10px;">
    <p style="margin-left: 70px">Already have an account?  <a href="{{ route('login.create') }}">Login</a></p>
</div>

            </div>
        </div>
    </div>

<script>
  const pinInput = document.getElementById('password');

  const rememberMeCheckbox = document.getElementById('remember-me-checkbox');

  rememberMeCheckbox.addEventListener('change', () => {
    if (rememberMeCheckbox.checked) {
      pinInput.type = 'text';
    } else {
      pinInput.type = 'password';
    }
  });


</script>
    <footer style="position: absolute; bottom: 0; top:610px ;left: 50%; transform: translateX(-50%); text-align: center; width: 100%;  padding: 10px; color: white;">
</footer>
<script src="https://kit.fontawesome.com/0d91d9d41f.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
