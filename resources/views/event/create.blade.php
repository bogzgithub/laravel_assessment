<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Event</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="row">
                    <form id="formCreate">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="slug" class="form-label">Slug:</label>
                            <input type="text" class="form-control" id="slug" placeholder="Enter slug" name="slug">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="startAt" class="form-label">Start At:</label>
                            <input type="datetime-local" class="form-control" id="startAt" placeholder="Start At" name="startAt">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="endAt" class="form-label">End At:</label>
                            <input type="datetime-local" class="form-control" id="endAt" placeholder="End At" name="endAt">
                        </div>
                        <button type="button" id="btnSubmit" class="btn btn-primary">Submit</button>
                        <div class="mb-3 mt-3">
                            <span id='message'></span>
                        </div>
                    </form>
                </div>
                <div class="row">
                    @include('layout.goback')
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/config.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/event/create.js') }}"></script>
</body>
</html>