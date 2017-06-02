<!DOCTYPE html>
<html>
<head>

    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/frontend.css')}}">

    <style>

        #menu, #menu ul li .dropdown-menu
        {
            background-color: black;
        }

        #menu
        {
            background-color: black;
            display: -webkit-flex;
            -webkit-justify-content: space-around;
            justify-content: space-around;
        }

        #menu ul .open a
        {
            background-color: unset;
        }

        #menu a:hover, #menu a:focus, #menu ul .active a
        {
            background-color: unset;
            color: #fd7b52;
        }

        #menu a
        {
            color: white;
        }

        @media screen and (min-width: 1024px)
         { body
        {
            background-color: lightgreen;
        }

        }




    </style>
</head>
<body>


</body>
</html>
