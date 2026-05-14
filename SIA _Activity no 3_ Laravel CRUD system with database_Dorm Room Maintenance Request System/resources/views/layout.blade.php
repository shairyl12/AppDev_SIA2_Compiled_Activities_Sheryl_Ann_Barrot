<!DOCTYPE html>
<html>
<head>
    <title>Dorm Room Maintenance System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Simple custom design -->
    <style>
        body {
            background: #f4f6f9;
        }

        .navbar {
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
        }

        .navbar-brand {
            font-weight: bold;
            letter-spacing: 1px;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .btn {
            border-radius: 8px;
        }

        .container {
            margin-top: 30px;
        }

        .title-box {
            background: white;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
    </style>
</head>

<body>

<nav class="navbar navbar-dark px-4 py-3">
    <a class="navbar-brand" href="/requests">
        🏠 Dorm Room Maintenance Request System
    </a>

    <a href="/requests/create" class="btn btn-light">
        + New Request
    </a>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>