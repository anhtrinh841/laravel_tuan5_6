<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        crossorigin="anonymous">
    
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .w-5 {
            display: none;
        }

    </style>
</head>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ url('/companies') }}">Companies</a>
            <a class="p-2 text-dark" href="{{ url('/trainer') }}">Trainer</a>
            <a class="p-2 text-dark" href="{{ url('/search') }}">Search</a>
        </nav>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Companies</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Companies</th>
                </tr>
            </thead>
            @foreach ($trainers as $trainer)
                <tbody>
                    <tr>
                        <th scope="row">{!! $trainer->trainers_id !!}</th>
                        <td>{!! $trainer->trainers_name !!}</td>
                        <td>{!! $trainer->trainers_email !!}</td>
                        <td>{!! $trainer->trainers_phone !!}</td>
                        <td>{!! $trainer->companies['company_name'] !!}</td>
                    </tr>
                </tbody>
            @endforeach

        </table>
        {{ $trainers->links() }}
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
</body>

</html>
