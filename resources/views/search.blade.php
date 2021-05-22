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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .w-5 {
            display: none;
        }

        body,
        html {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .searchbar {
            margin-bottom: auto;
            margin-top: auto;
            height: 60px;
            background-color: #353b48;
            border-radius: 30px;
            padding: 10px;
        }

        .search_input {
            color: white;
            border: 0;
            outline: 0;
            background: none;
            width: 450px;
            caret-color: transparent;
            line-height: 40px;
            transition: width 0.4s linear;
        }

        .searchbar:hover>.search_input {
            padding: 0 10px;
            caret-color: red;
            transition: width 0.4s linear;
        }

        .searchbar:hover>.search_icon {
            background: white;
            color: #e74c3c;
        }

        .search_icon {
            height: 40px;
            width: 40px;
            float: right;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: white;
            text-decoration: none;
        }

        .center {
            display: flex;
            justify-content: space-evenly;
        }

    </style>
</head>

<body>
    <div class="container">
        <form action="companies" method="get">
            <div class="searchbar">
                <input class="search_input" type="text" name="search" placeholder="Search...">
                <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
            </div>
            {!! Form::select('category[]', $categories, null, ['class' => 'form-control']) !!}
        </form>
       
    </div>

    {{-- @if (isset($companies))
        <x-companies :companies="$companies" />
    @elseif(isset($trainer))
        <x-trainer :trainer="$trainer" /> 
    @endif --}}

</body>

</html>
