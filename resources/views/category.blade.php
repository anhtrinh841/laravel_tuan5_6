<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .w-5 {
            display: none;
        }

        .center {
            display: flex;
            justify-content: center;
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
        <ol class="list-group list-group-numbered">
            @foreach ($categories as $category)
                <li class="list-group-item">{!!$category->category_name!!}</li>
            @endforeach
        </ol>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        const searchFocus = document.getElementById('search-focus');
        const keys = [{
                keyCode: 'AltLeft',
                isTriggered: false
            },
            {
                keyCode: 'ControlLeft',
                isTriggered: false
            },
        ];

        window.addEventListener('keydown', (e) => {
            keys.forEach((obj) => {
                if (obj.keyCode === e.code) {
                    obj.isTriggered = true;
                }
            });

            const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

            if (shortcutTriggered) {
                searchFocus.focus();
            }
        });

        window.addEventListener('keyup', (e) => {
            keys.forEach((obj) => {
                if (obj.keyCode === e.code) {
                    obj.isTriggered = false;
                }
            });
        });

    </script>
</body>

</html>
