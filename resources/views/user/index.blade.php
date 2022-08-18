<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <h2 class="text-success">Home Page</h2>
        <div>
            Click <a href="{{ url('/register') }}">here</a> to Register
        </div>
        <div>
            Click <a href="{{ url('/login') }}">here</a> to Login
        </div>
    </div>
</body>
</html>