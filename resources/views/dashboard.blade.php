<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/dist/style.css">
    <title>Authentification</title>
</head>
<body>
    

    <div class="container2">
        <div class="nav">
                <ul>
                    <li>
                        <h1>Tableau de bord</h1>
                    </li>
                   
                    <li>
                        <h3>Bienvenue {{Auth::user()->name }} </h3> 
                    </li>
                    <li>
                        <a href="{{route('logout')}}"> Se deconnecter</a> 
                    </li>

                </ul>
             
            </div>
    </div>

</body>
</html>