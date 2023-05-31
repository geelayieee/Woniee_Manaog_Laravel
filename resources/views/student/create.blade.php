<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>AdminHub</title>
</head>
<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">ADMIN SIDE</span>
        </a>
        <ul class="side-menu top">
            <li >
                <a href="{{ route('dashboard') }}">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="{{ route('student.create') }}">
                    <i class='bx bx-plus' ></i>
                    <span class="text">Create</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <form class="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#" class="logout">
                        <i class='bx bxs-log-out-circle' ></i>
                        <span class="text">Logout</span>
                    </a>
                </form>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu' ></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            
    <div class="container py-5">
        @yield('body')
    </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script>
        // script.js
        document.querySelector('.logout').addEventListener('click', function(event) {
            event.preventDefault();
            document.querySelector('.logout-form').submit();
        });
    </script>
    <script src="script.js"></script>
</body>
</html>
