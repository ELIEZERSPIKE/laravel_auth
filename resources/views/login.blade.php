{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>
</head>

<body>
    <form action="{{route('login.process')}} " method="POST">

        @csrf
        <h1>Connexion</h1>
        

        <label for="name">Email</label><br />
        <input type="text" name="email" id="email" placeholder="Saisir l'email ici..."><br /><br />

        <label for="name">Mot de passe</label><br />
        <input type="password" name="password" id="password" placeholder="Saisir le mot de passe ici..."><br /><br />

        <a href="{{route('registration')}} "> S'inscrire</a>
        <button type="submit">Soumettre</button>
    </form>
   </body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Authentification</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
    <link rel="stylesheet" href="/dist/style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" action="{{ route('login.process') }} " method="POST">
                    @csrf
                    <h1>Connexion</h1>

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            {!! implode('', $errors->all('<li>:message</li>')) !!}
                        </ul>
                    @endif

                    @if ($messages = Session::get('error'))
                        <div> {{ $message }} </div> <br />
                    @endif

                    <div class="login__field">
                        <i class="login__icon fas fa-envelope"></i>
                        <input type="texte" name="email" id="email" class="login__input"
                            placeholder="Saisir votre email ici">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="password" id="password" class="login__input"
                            placeholder="Password">
                    </div>

                    <button class="button login__submit" type="submit">
                        {{-- <span class="button__text">S'inscire</span>
					<i class="button__icon fas fa-chevron-right"></i> --}}
                        Soumettre
                    </button>

                    <a href="{{ route('registration') }} "> S'inscrire</a>
                    <button type="submit"></button>
                </form>



                <div class="social-login">
                    <h3>log in via</h3>
                    <div class="social-icons">
                        <a href="#" class="social-login__icon fab fa-instagram"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>
                    </div>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		

                {{-- <div class="social-login">
                    <h3>log in via</h3>
                    <div class="social-icons">
                        <a href="#" class="social-login__icon fab fa-instagram"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>
                    </div> --}}
                </div>
            </div>

</body>

</html>
