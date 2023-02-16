<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Social Login Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light d-flex justify-content-end">
        <form class="d-flex">
              <li class="nav-item dropdown d-flex">
                <img src="{{ Auth::user()->profile_photo_url }}" class="rounded-circle" width="30px" height="30px" alt="profile">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li>
                      <a class="dropdown-item tw-flex tw-space-x-2" href="{{ route('logout') }}">
                        Logout
                      </a>
                    </li>
                </ul>
              </li>
        </form>
      </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>