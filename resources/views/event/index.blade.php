<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event List</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link  href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <h2 class="text-success">Events List</h2>
        <div>
            To create an event please click <a href="{{ url('events/create') }}">here</a>
        </div>
        <div class="col-12 mt-3">
            <table class="table table-bordered" id="tbl_events">
                <thead>
                    <tr>
                        <th class="bg-primary text-white">Name</th>
                        <th class="bg-primary text-white">Slug</th>
                        <th class="bg-primary text-white">Start Date</th>
                        <th class="bg-primary text-white">End Date</th>
                        <th class="bg-primary text-white">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div>
            <span id="message"></span>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/config.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/event/event.js') }}"></script>
</body>
</html>