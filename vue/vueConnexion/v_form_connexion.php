<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login - Entreprise XYZ</title>

    <!-- Utilisation du thème Flatly de Bootswatch pour un look soft -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/flatly/bootstrap.min.css">
    <style>
        .btn-color {
            background-color: #0e1c36;
            color: #fff;
        }

        .profile-image-pic {
            height: 200px;
            width: 200px;
            object-fit: cover;
        }

        .cardbody-color {
            background-color: #ebf2fa;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-5">

                    <form action="index.php?ctl=connexion&action=veriflogin" method="post" class="card-body cardbody-color p-lg-5">
                        <div class="text-center">
                            <img src="resto.jpg"
                                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px"
                                alt="profile">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="myEmail" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="myPassword" class="form-control" placeholder="Password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button>
                        </div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not Registered? <a
                                href="#" class="text-dark fw-bold"> Create an Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

