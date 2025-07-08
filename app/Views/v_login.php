<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Admin - Web GIS Badminton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-box {
            width: 100%;
            max-width: 420px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .login-header {
            background-color: #24524A;
            padding: 30px 20px;
            text-align: center;
            color: white;
        }

        .login-header i.bi-geo-alt-fill {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #51B8A7;
        }

        .login-header h4 {
            margin: 0;
            font-weight: bold;
        }

        .login-header small {
            color: #aad4ca;
        }

        .login-body {
            padding: 25px;
        }

        .btn-login {
            background-color: #51B8A7;
            border: none;
        }

        .btn-login:hover {
            background-color: #3f998a;
        }

        .icon-badminton {
            font-size: 24px;
            color: #4BAA9A;
            margin-left: 8px;
        }

        .form-label {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <div class="login-header">
            <i class="bi bi-geo-alt-fill"></i>
            <h4>Login Admin</h4>
            <small>Web GIS Badminton <i class="bi bi-trophy-fill icon-badminton" title="Badminton Icon"></i></small>
        </div>
        <div class="login-body">
            <form method="post" action="<?= base_url('login/loginProses') ?>" autocomplete="off">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="username" class="form-control" autocomplete="off">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" autocomplete="off">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-login text-white">Masuk</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            document.getElementById("form3Example3").removeAttribute("readonly");
            document.getElementById("form3Example4").removeAttribute("readonly");
        };
    </script>
</body>

</html>