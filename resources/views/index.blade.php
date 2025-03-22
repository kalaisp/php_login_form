<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta viewport="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/9ba602d7e1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <title>Employee</title>
  <style>
@import "https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap";

@import "https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css";

/* Global style settings */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif; /* Applying 'Poppins' font globally */
}

/* Sidebar container styling */
.sidebar {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 97px; /* Default sidebar width */
  background: #11101D; /* Dark background color for sidebar */
  padding: 6px 14px;
  z-index: 99; /* Ensures sidebar is on top */
  transition: all 0.5s ease; /* Smooth transition for width change */
}

/* Logo details within the sidebar */
.sidebar .logo-details {
  height: 60px;
  display: flex;
  align-items: center;
  position: relative;
}
.sidebar .logo-details .icon {
  opacity: 0; /* Hidden by default, shows when sidebar is expanded */
  transition: all 0.5s ease;
}
.sidebar .logo-details .logo_name {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  opacity: 0; /* Hidden by default, shows when sidebar is expanded */
  transition: all 0.5s ease;
}
.sidebar .logo-details #btn {
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  font-size: 23px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s ease;
}

/* General icon styling */
.sidebar i {
  color: #fff;
  height: 60px;
  min-width: 50px;
  font-size: 28px;
  text-align: center;
  line-height: 60px; /* Centers icon vertically */
}

/* Sidebar navigation list styling */
.sidebar .nav-list {
  height: calc(100% - 140px); /* Leaves space for logo and profile */
}

/* Scrollbar styles for sidebar */
.sidebar .scroll {
  overflow-y: auto; /* Enables vertical scrolling */
  scrollbar-width: thin;
}
.sidebar .scroll::-webkit-scrollbar {
  width: 8px;
  background: #262440; /* Scrollbar background color */
  border-radius: 5px;
}
.sidebar .scroll::-webkit-scrollbar-thumb {
  background: #262440; /* Scrollbar thumb color */
  border-radius: 5px;
}
.sidebar .scroll::-webkit-scrollbar-track {
  background: #171526; /* Scrollbar track color */
  border-radius: 5px;
}

/* Sidebar navigation item styling */
.sidebar li {
  position: relative;
  margin: 8px 8px 8px 0;
  list-style: none;
}
.sidebar li .tooltip {
  position: absolute;
  top: -20px;
  left: calc(100% + 15px);
  z-index: 3;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 400;
  opacity: 0; /* Hidden by default */
  pointer-events: none;
  transition: 0s;
}
.sidebar li:hover .tooltip {
  opacity: 1; /* Shows tooltip on hover */
  pointer-events: auto;
  transition: all 0.4s ease;
  top: 50%;
  transform: translateY(-50%);
}

.sidebar li a {
  display: flex;
  height: 9%;
  width: 100%;
  border-radius: 12px;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  background: #11101D;
}
.sidebar li a:hover {
  background: #1d1b31;
}

.sidebar li a:hover .links_name {
  transition: all 0.5s ease;
}
.sidebar li a:hover i {
  transition: all 0.5s ease;
}

.sidebar li a .links_name {
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: 0.4s;
}
.sidebar li i {
  height: 50px;
  line-height: 50px;
  font-size: 18px;
  border-radius: 12px;
}

.sidebar li .profile-details {
  display: flex;
  align-items: center;
  flex-wrap: nowrap;
}
.sidebar li img {
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 6px;
  margin-right: 10px;
}

.sidebar input {
  font-size: 15px;
  color: #FFF;
  font-weight: 400;
  outline: none;
  height: 50px;
  width: 50px;
  border: none;
  border-radius: 12px;
  transition: all 0.5s ease;
  background: #1d1b31;
}

.sidebar .bx-search {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  font-size: 22px;
  background: #1d1b31;
  color: #FFF;
}
.sidebar .bx-search:hover {
  background: #FFF;
  color: #11101d;
}

.sidebar li.profile {
  position: fixed;
  height: 60px;
  width: 78px;
  left: 0;
  bottom: -8px;
  padding: 10px 14px;
  background: #1d1b31;
  transition: all 0.5s ease;
  overflow: hidden;
}
.sidebar li.profile .name {
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  white-space: nowrap;
}
.sidebar li.profile .job {
  font-size: 12px;
  font-weight: 400;
  color: #fff;
  white-space: nowrap;
}

.sidebar .profile #log_out {
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  background: #1d1b31;
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 0px;
  transition: all 0.5s ease;
}

.sidebar.open {
  width: 250px;
}
.sidebar.open .logo-details .icon {
  opacity: 1;
}
.sidebar.open .logo-details .logo_name {
  opacity: 1;
}
.sidebar.open .logo-details #btn {
  text-align: right;
}
.sidebar.open li .tooltip {
  display: none;
}
.sidebar.open li a .links_name {
  opacity: 1;   pointer-events: auto;
}
.sidebar.open input {
  padding: 0 20px 0 50px;
  width: 100%;
}
.sidebar.open .bx-search:hover {
  background: #1d1b31;
  color: #FFF;
}
.sidebar.open li.profile {
  width: 250px;
}
.sidebar.open .profile #log_out {
  width: 50px;
  background: none;
}
.sidebar.open ~ .home-section {
  left: 250px;
  width: calc(100% - 250px);
}

.home-section {
  position: relative;
  background: #E4E9F7;
  min-height: 100vh;
  top: 0;
  left: 78px;
  width: calc(100% - 78px);
  transition: all 0.5s ease;
  z-index: 2;
}
.home-section .text {
  display: inline-block;
  color: #11101d;
  font-size: 25px;
  font-weight: 500;
  margin: 18px;
}

.move-left {
    margin-left: 24px;
}

  </style>
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-user'></i>
      <div class="logo_name">Staff</div>
      <i class='bx bx-menu-alt-right' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <i class='bx bx-search'></i>
        <input type="text" placeholder="Search...">
        <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="{{ route('staff.index') }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="{{ route('login') }}">
          <i class='bx bx-user-circle'></i>
          <span class="links_name">User</span>
        </a>
        <span class="tooltip">User</span>
      </li>
      <li>
        <a href="{{ route('indexemp') }}">
          <i class='bx bxs-user-check'></i>
          <span class="links_name">Employee</span>
        </a>
        <span class="tooltip">Employee</span>
      </li>

    </ul>
  </div>
  <section class="home-section ">
    {{-- <div class="move-left">Dashboard</div> --}}
    @if(session('success'))
    <script>
        window.onload = function() {
            alert("{{ session('success') }}");
        };
    </script>
    @endif
    @csrf
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <div class="justify-end ">
        <div class="col ">
            <p>Stafflist</p>
          <a class="btn btn-sm btn-success move-left" href={{ route('insert.submit') }}>Add Post</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <table id="mytable">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Address</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staff as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->dateofbirth }}</td>
                    <td>{{ $member->address }}</td>
                    <td>{{ $member->mobileno }}</td>
                    <td>
                        <a href="{{ route('edit.submit', $member->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('delete.submit', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this staff member?');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  </section>
</div>
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
<script>

    document.addEventListener("DOMContentLoaded", () => {
    // Get elements
    const closeBtn = document.getElementById("closeBtn");
    const sidebar = document.querySelector(".sidebar");
    const navList = document.querySelector(".nav-list");

    // Set the sidebar to be open by default
    sidebar.classList.add("open");
    navList.classList.add("scroll");

    // Toggle function for the button
    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        navList.classList.toggle("scroll");
        menuBtnChange();
    });
});

// Function to change the button (if required, modify as per your button)
function menuBtnChange() {
    // You can add code here to change the button's appearance when clicked (e.g., change icon or text)
}

  // let sidebar = document.querySelector(".sidebar");
    // let closeBtn = document.querySelector("#btn");
    // let searchBtn = document.querySelector(".bx-search");
    // let navList = document.querySelector(".nav-list");
    // $(document).ready(function() {
    //     $('#mytable').DataTable();
    // });

    // closeBtn.addEventListener("click", () => {
    //     sidebar.classList.toggle("open");
    //     navList.classList.toggle("scroll");
    //     menuBtnChange();
    // });

    // searchBtn.addEventListener("click", () => {
    //     sidebar.classList.toggle("open");
    //     navList.classList.toggle("scroll");
    //     menuBtnChange();
    // });

    // function menuBtnChange() {
    //     if (sidebar.classList.contains("open")) {
    //         closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
    //     }
    //     else {
    //         closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    //     }
    // }
</script>
