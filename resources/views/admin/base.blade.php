<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel | IndianResult</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">IndianResult</a>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-0">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Manage Schools</a>

                    <div class="dropdown-menu">
                        <a href="{{ route("school.create") }}" class="dropdown-item">Add School</a>
                        <a href="{{ route("school.index") }}" class="dropdown-item">Manage All Schools</a>
                        <a href="" class="dropdown-item">Reports</a>
                    </div>
                </li>
               
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Manage Result</a>

                    <div class="dropdown-menu">
                        <a href="{{ route("student.index") }}" class="dropdown-item">Manage All Results</a>
                        <a href="" class="dropdown-item">Reports</a>
                    </div>
                </li>
               
                <li class="nav-item"><a href="" class="nav-link">Reports</a></li>
                <li class="nav-item"><a href="" class="nav-link">Setting</a></li>
            </ul>
        </div>
    </nav>


    @section('content')
        @show
    
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>