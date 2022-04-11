
<head>
    <title>
        SuperManager - Dashboard
    </title>

    <link rel="icon" href="assets/favicon/favicon.png"/> <!-- Logo on tab -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="Views/common/fontawesome/css/all.css" rel="stylesheet"/>
    <link href="Views/common/css/main.css" rel="stylesheet"/>
    <script src="Views/common/js/jquery-3.6.0.min.js"></script>
    <style>
        main{
            display: flex;
            flex-wrap: nowrap;
            height: 100vh;
            height: -webkit-fill-available;
            max-height: 100vh;
            overflow-x: auto;
            overflow-y: hidden;
        }
    </style>
</head>
<body>
    <?php 
        // Read the current request URI.
        $request = $_SERVER['REQUEST_URI'];

        // Remove the root folder name from the URI.
        $uri = str_replace('/'.ROOT_FOLDER_NAME, '', $request);
        $uri = explode('?', $uri);
        $uri = $uri[0];
    ?>
    <main>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">SuperManager <?php if($_SESSION['admin']) echo "<span class='badge bg-warning'>Admin</span>";?></span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="dashboard" class="nav-link text-white <?php if(strpos($uri,'dashboard')) echo 'active';?>">
                        <i class="fas fa-line-chart fa-fw me-2"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <?php if($_SESSION['admin']){ ?>
                <li>
                    <a href="employeeList" class="nav-link text-white <?php if(strpos($uri,'employee')) echo 'active';?>">
                        <i class="fas fa-user fa-fw me-2"></i>
                        <span class="title">Employee Management</span>
                    </a>
                </li>
                <li>
                    <a href="shiftList" class="nav-link text-white <?php if(strpos($uri,'shift')) echo 'active';?>">
                        <i class="fas fa-clock fa-fw me-2"></i>
                        <span class="title">Shift Management</span>
                    </a>
                </li>
                <li>
                    <a href="codeView" class="nav-link text-white <?php if(strpos($uri,'code')) echo 'active';?>">
                        <i class="fas fa-key fa-fw me-2"></i>
                        <span class="title">Code Generator</span>
                    </a>
                </li>
                <?php } ?>
            </ul>
            <hr>
            <a class="text-center profile-link" href="profile">View Profile</a>
            <a class="text-white btn btn-primary" href="logout">Sign out</a>
        </div>

        <!-- Do not close HTML tag here, so that other pages can reuse this on bottom part -->