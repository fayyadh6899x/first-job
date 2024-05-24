<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Website Inventaris</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <i class='bx bx-code-alt'></i>
            <div class="logo-name"><span>Inventaris</span></div>
        </a>
        <ul class="side-menu">
            <li><a href="/template/index.html"><i class='bx bxs-dashboard'></i>Stok Barang</a></li>
            <li><a href="/template/masuk.html"><i class='bx bx-arrow-to-left'></i>Barang Masuk</a></li>
            <li class="active"><a href="#"><i class='bx bx-arrow-to-right'></i>Barang Keluar</a></li>
            <li><a href="#"><i class='bx bx-group'></i>Users</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="profile">
                <img src="/images/logo.png" alt="">
            </a>
        </nav>

        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Stok Barang</h1>
                    <!-- <ul class="breadcrumb">
                        <li><a href="#">
                                Analytics
                            </a></li>
                        /
                        <li><a href="#" class="active">Shop</a></li>
                    </ul> -->
                </div>
                <!-- <a href="#" class="report">
                    <i class='bx bx-cloud-download'></i>
                    <span>Download CSV</span>
                </a> -->
            </div>

            <!-- Insights -->
            <ul class="insights">
                <li>
                    <i class='bx bx-arrow-to-right' style="color: rgb(24, 141, 180);"></i>
                    <span class="info">
                        <h3>
                            41
                        </h3>
                        <p>Total Barang Masuk</p>
                    </span>
                </li>
                <li><i class='bx bx-arrow-to-left' style="color: rgb(207, 164, 10);"></i>
                    <span class="info">
                        <h3>
                            20
                        </h3>
                        <p>Total Barang Keluar</p>
                    </span>
                </li>
            </ul>
            <!-- End of Insights -->

            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Daftar Barang</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Gambar</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td><img src="/images/iphone.webp" alt="" class="img-fluid w-35 h-25"></td>
                                <td>200</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Reminders -->
                <!-- <div class="reminders">
                    <div class="header">
                        <i class='bx bx-note'></i>
                        <h3>Remiders</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-plus'></i>
                    </div>
                    <ul class="task-list">
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Start Our Meeting</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Analyse Our Site</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="not-completed">
                            <div class="task-title">
                                <i class='bx bx-x-circle'></i>
                                <p>Play Footbal</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                    </ul>
                </div> -->

                <!-- End of Reminders-->

            </div>

        </main>

    </div>

    <script src="index.js"></script>
</body>

</html>