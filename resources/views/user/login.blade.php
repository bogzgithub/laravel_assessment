<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="row">
                    <form id="formLogin">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                        </div>
                        <button type="button" id="btnSubmit" class="btn btn-primary">Submit</button>
                        <div class="mb-3 mt-3">
                            <span id='message'></span>
                        </div>
                    </form>
                </div>
                @include('layout.gobackhomepage')
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/config.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/user/login.js') }}"></script>
</body>
</html>