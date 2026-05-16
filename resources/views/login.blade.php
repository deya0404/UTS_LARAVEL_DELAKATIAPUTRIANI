<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body style="background:#1e1e2f;">

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">

    <div class="container">

        <a class="navbar-brand fw-bold text-info"
           href="#">

            POLGAN

        </a>

    </div>

</nav>

<!-- LOGIN -->

<div class="container">

    <div class="row justify-content-center align-items-center"
         style="min-height:90vh;">

        <div class="col-md-5">

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                <!-- HEADER -->

                <div class="bg-dark text-center p-4">

                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                         width="95"
                         class="mb-3">

                    <h2 class="fw-bold text-info">

                        Welcome Back

                    </h2>

                    <p class="text-light mb-0">

                        Login to your account

                    </p>

                </div>

                <!-- BODY -->

                <div class="p-5 bg-white">

                    <form action="/login"
                          method="POST">

                        @csrf

                        <div class="mb-4">

                            <label class="form-label fw-semibold">

                                Email

                            </label>

                            <input type="email"
                                   name="email"
                                   class="form-control form-control-lg rounded-4"
                                   placeholder="Masukkan email">

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">

                                Password

                            </label>

                            <input type="password"
                                   name="password"
                                   class="form-control form-control-lg rounded-4"
                                   placeholder="Masukkan password">

                        </div>

                        <button class="btn btn-info btn-lg w-100 rounded-4 text-white fw-bold">

                            Login

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>