<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.1/dist/semantic.min.css">
    <style>
        body {
            background-color: #1c1c1c;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            background: #ffffff;
            padding: 20px;
        }
        .user-avatar {
            width: 50px;
            height: 50px;
            background: #c0c0c0;
            border-radius: 50%;
            margin: 10px auto;
        }
        .sidebar .menu .item {
            color: black;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="ui left fixed vertical menu sidebar">
        <div class="item">
            <i class="image outline icon"></i>
            Logo
        </div>
        <div class="item center aligned">
            <div class="user-avatar"></div>
            <strong>Username</strong>
        </div>
        <div class="ui vertical menu">
            <a class="item">
                <i class="user icon"></i> Account
            </a>
            <a href="{{ route('home') }}" class="item {{ request()->is('home') ? 'active' : '' }}">
                <i class="home icon"></i> Home
            </a>            
            <a class="item">
                <i class="star icon"></i> Favorites
            </a>
            <a class="item">
                <i class="comment icon"></i> Chat CS
            </a>
        </div>
    </div>

    <main>
        @yield('konten')
    </main>
</body>
</html>
