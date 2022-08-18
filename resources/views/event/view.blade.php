<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Event</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container mt-3">
            @if (!$data['success'])
                <div>
                    <strong class="text-danger">{{ $data['message'] }}</strong>
                </div>
            @else
                <h2 class="text-primary">Event Info</h2>
                <div class="col-4">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Id:</td>
                                <td><strong>&nbsp;{{ $data['data']->id }}</strong></td>
                            </tr>
                            <tr>
                                <td>Name: </td>
                                <td><strong>&nbsp;{{ $data['data']->name }}</strong></td>
                            </tr>
                            <tr>
                                <td>Slug: </td>
                                <td><strong>&nbsp;{{ $data['data']->slug }}</strong></td>
                            </tr>
                            <tr>
                                <td>Start At: </td>
                                <td><strong>&nbsp;{{ $data['data']->startAt }}</strong></td>
                            </tr>
                            <tr>
                                <td>End At: </td>
                                <td><strong>&nbsp;{{ $data['data']->endAt }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endif

            @include('layout.goback')
    </div>
</body>
</html>