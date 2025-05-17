<?php include_once 'header.php'?>
<?php include_once 'config.php'?>



<?php


    $sql = "SELECT * from movies";
        $getMovies = $conn->prepare($sql);
        $getMovies->execute();

        $movies= $getMovies->fetchALL();
        ?>
        

        <div class="d-flex" style="height: 100vh">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
            Home
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            Dashboard
            </a>
        </li>
        <li>
            <a href="movies.php" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Movies
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
            Products
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            Customers
            </a>
        </li>

        <li>
            <a href="logout.php" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            Logout
            </a>
        </li>
        </ul>
        <hr>
        <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
        </div>
    </div>

        <style>
            .ngsht{
                width: 85%;
                margin: 10px;
            }

            .h1{
                margin-left: -300px;
            }
        </style>
    <div class="ngsht">

   
        <table class="mb-5 table table-bordered" >
        <thead>
            <th>Id</th>
            <th>Movie Name</th>
            <th>Movie Description</th>
            <th>Movie Quality</th>
            <th>Movie Rating</th>
            <th>Movie Image</th>
            <th>Action</th>
        </thead>
 </div>
        <tbody>
            <?php
                foreach($movies as $movie){


                    ?>
                    <tr>
                        <td><?php echo $movie['id'] ?></td>
                        <td><?php echo $movie['movie_name'] ?></td>
                        <td><?php echo $movie['movie_desc'] ?></td>
                        <td><?php echo $movie['movie_quality'] ?></td>
                        <td><?php echo $movie['movie_rating'] ?></td>
                        <td><?php echo $movie['movie_image'] ?></td>
                        <td><a href="delete.php?id=<?php echo $movie['id'] ?>">Delete</a> | <a href="edit.php?id=<?php echo $movie['id'] ?>">edit</a></td>
                    </tr>
                    <?php
                
            }


            ?>
        </tbody>
