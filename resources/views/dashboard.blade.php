<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="{{ asset('fav.png') }}" />


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
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
                </li>
    <li >
                <a href="{{ route('product.create') }}">
                    <i class='bx bx-plus' ></i>
                    <span class="text">Create</span>
                </a>
            </li>

      
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
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                     <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                       
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                    <div style="margin-top: 20px;"></div>
            
                     <h2 style="color:grey;">Welcome,{{ auth()->user()->name }} </h2>
                             <hr>
                   
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check' ></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>New Order</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group' ></i>
                    <span class="text">
                        <h3>2834</h3>
                        <p>Visitors</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle' ></i>
                    <span class="text">
                        <h3>$2543</h3>
                        <p>Total Sales</p>
                    </span>
                </li>
            </ul>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Orders</h3>
                        <i class='bx bx-search' ></i>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Date Order</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status process">Process</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>Todos</h3>
                        <i class='bx bx-plus' ></i>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <ul class="todo-list">
                        <li class="completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="not-completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        <li class="not-completed">
                            <p>Todo List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    
<script >
    // script.js
document.querySelector('.logout').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('.logout-form').submit();
});

</script>
    <script src="script.js"></script>
</body>
</html>