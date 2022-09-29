<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/src/css/style.css')}}">
</head>

<body>

    <section class="header">

        <nav>
            <div class="d-flex">
                <div >
                    <img src="{{asset('assets/src/img/logouvci-removebg.png')}}"  class="logo" alt="" height="60px" srcset="">
                </div>
                <div class="divmenu">
                    <ul class="menu">
                        <li>
                            <a href="/Accueil">Accueil</a>
                        </li>
                        <li>
                            <a href="/Apropos">Apropos</a>
                        </li>
                        <li>
                            <a href="/Contacts">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>



        <video autoplay loop class="video-background" poster="imagefond.png" muted plays-inline>
            <source src="{{asset('assets/src/video/videofond.mp4')}}" type="video/mp4">
        </video>

        <div class="welcome-msg">
            <h1>DECOUVREZ LE METAVERSE <br> UNIVERSITAIRE</h1>
        </div>
        <div class="box d-flex ">
            <h2 class="h2index">Voyez les choses differemment</h2>
        </div>
        <br>
        <div class="d-flex divbutton">
            <a href="/Connexion" class="btnindex btn-suscribe ">Se connecter</a>
            <a href="/Inscription" class="btnindex btn-comment">Créer un Compte</a>
        </div>
        </div>




    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>