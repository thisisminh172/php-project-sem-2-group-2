<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="public/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="logo" class="col-12 bg-dark d-block text-white">
                Hello Admin
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <nav class="d-none d-sm-block col-sm-2 col-md-2" id="sidebar">
                <div class="sidebar-header">
                    <h3>Admin</h3>
                </div>
                
                <ul class="list-unstyled components">
                <p>EDIT</p>
                    <li>
                        <a href="#homeSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled dropdown-menu" id="homeSubMenu">
                            <li>
                                <a href="#">Home 1</a>
                            </li>
                            <li>
                                <a href="#">Home 1</a>
                            </li>
                            <li>
                                <a href="#">Home 1</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    
                </ul>
            </nav>
            <div class="col-12 col-sm-10 col-md-10" id="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laudantium aliquam provident
                    recusandae pariatur assumenda aliquid aut amet facere saepe harum alias necessitatibus eum, quam
                    perspiciatis maxime nostrum odit ea earum quas, neque quisquam expedita nisi repellat. Deserunt,
                    dicta natus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laudantium aliquam provident
                    recusandae pariatur assumenda aliquid aut amet facere saepe harum alias necessitatibus eum, quam
                    perspiciatis maxime nostrum odit ea earum quas, neque quisquam expedita nisi repellat. Deserunt,
                    dicta natus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laudantium aliquam provident
                    recusandae pariatur assumenda aliquid aut amet facere saepe harum alias necessitatibus eum, quam
                    perspiciatis maxime nostrum odit ea earum quas, neque quisquam expedita nisi repellat. Deserunt,
                    dicta natus.</p>
                <i class="fas fa-clock">a</i>
                <i class="fas fa-clock"></i>
                <i class="fas fa-clock"></i>
                <i class="fas fa-clock"></i>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
</body>

</html>