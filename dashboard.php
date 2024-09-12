<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body style="background-color: #f1f5f9;">
    <div class="dashboard-sidebar" id="dashboard_sidebar">
        <div class="dashboard-icon" id="dashboard_icon">
            <h2 id="menuTextLogo"><i>iMS</i> Charcoal</h2>
            <img src="references/1343979.png" alt="" id="menuLogo">
        </div>
        <div class="dashboard-menu">
            <ul>
                <li >
                    <a href="#" class="menu-active"><i class="las la-igloo menuIcons"></i>
                    <span class="menuText">Dashboard</span></a>
                </li>
                <li>
                    <a href="#"><i class="las la-users menuIcons"></i>
                    <span class="menuText">Customers</span></a>
                </li>
                <li>
                    
                    <a href="#"><i class="las la-clipboard-list menuIcons"></i>
                    <span class="menuText">Projects</span></a>
                </li>
                <li>
                    
                    <a href="#"><i class="las la-shopping-bag menuIcons"></i>
                    <span class="menuText">Orders</span></a>
                </li>
                <li>
                    <a href="#"><i class="las la-receipt menuIcons"></i>
                    <span class="menuText">Inventory</span></a>
                </li>
                <li>
                    <a href="#"><i class="las la-user-circle menuIcons"></i>
                    <span class="menuText">Accounts</span></a>
                </li>
                
                <li>
                    <a href="#"><i class="las la-clipboard menuIcons"></i>
                    <span class="menuText">Tasks</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="dashboard-content" id="dashboard_content">
        <header>
            <h2>
                <a href="" id="toggleBtn">
                    <i class="las la-bars"></i>
                    Dashboard
                </a>
                
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>

            <div class="user-wrapper">
                <img src="references/user.png" width="50px" height="30px" alt="user">
                <div>
                    <h4>John Doe</h4>
                    <small>Admin</small>
                </div>
                <div class="logout-wrapper">
                    <a href="" id="logoutBtn">
                        <img src="references/icons8-logout-100.png" alt="">
                    </a>
                </div>
            </div>
            
        </header>
        <main class="content-container">
            <div class="content">
                    
            </div>
        </main>
    </div>
    <script src="index.js"></script>
</body>
</html>