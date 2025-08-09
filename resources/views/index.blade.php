<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- <link rel="stylesheet" href=""> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="text-center p-4">
            <img src="{{ asset('images/profile.jpg') }}" alt="Dave Rosero" class="img-fluid rounded-circle mb-3" width="150" height="150">
            <h1>Dave Rosero</h1>
            <p>Aspiring Programmer/Developer</p>
            <a href="{{ url('/download-resume') }}" class="btn btn-primary btn-md">Download Resume</a>
        </header>    

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">My Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="about" class="container mt-5">
            <h2>About Me</h2>
            <p>{{ $contents }}</p>
        </section>

        <section id="sessions" class="container mt-5">
            <h2>My Coding Sessions</h2>

            <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($sessions as $index => $video)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            {!! $video !!}
                        </div>
                    @endforeach
                    <!-- <div class="carousel-item active">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/NybrrBEs-HQ?controls=1"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div> -->
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="projects" class="container mt-5">
            <h2>My Projects</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 h-100">
                        <img src="{{ asset('images/fmware.png') }}" class="card-img-top fixed-image-size" alt="Project 1">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">FMWare</h5>
                            <p class="card-text flex-grow-1">Online Ordering with Point of Sale System for F.M. Odulio's enterprise & Gen. Merchandise (Done)</p>
                            <p class="card-text flex-grow-1">This is the system we have made for our Capstone Project at Pambayang Dalubhasaan ng Marilao. My role for this project is Full-stack Developer/Lead Developer.</p>
                            <p class="card-text flex-grow-1">Other Contributors: 
                                <br>- Israel Joseph Gonzales (Backend Developer/Researcher)
                                <br>- Ryogi Kuroyanagi (Quality Assurance/Researcher)
                                <br>- Marcjhero Marcelo (Project Manager/Frontend Developer)
                            </p>
                            <a href="https://fmware.shop" class="btn btn-primary mt-auto">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 h-100">
                        <img src="{{ asset('images/dmp.png') }}" class="card-img-top fixed-image-size" alt="Project 1">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">DMP</h5>
                            <p class="card-text flex-grow-1">Web-based Inventory and Point of Sale System for Danielle Motorparts (Done)</p>
                            <p class="card-text flex-grow-1">This is the system we have created for the business during my on-the-job training. My role for this project is Database Lead Developer.</p>
                            <p class="card-text flex-grow-1">Other Contributors: 
                                <br>- Christian Azul (Inventory Lead Developer)
                                <br>- Alexander Inciong (Backend Lead System Developer)
                                <br>- Joemarie Andrada Jr. (System Hardware/Output Lead)
                                <br>- Lois Lance Rivera (Site System Lead Developer)
                                <br>- Fyke Lotereña (Point of Sale Lead Developer)
                            </p>
                            <a href="https://dmp-motors.com" class="btn btn-primary mt-auto">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 h-100">
                        <img src="{{ asset('images/game.png') }}" class="card-img-top fixed-image-size" alt="Project 1">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Professors, Deadlines, and Me (Not Finished)</h5>
                            <p class="card-text flex-grow-1">A game I made in requirement to my subject Game Dev. This game is about a student having a nightmare because academic pressures and is trying to escape the game's setting which is the campus of Pambayang Dalubhasaan ng Marilao.</p>
                            <a href="https://www.youtube.com/watch?v=PcuOZS_4WN0" class="btn btn-primary mt-auto">View Project</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other projects -->
            </div>        
        </section>

        <section id="contact" class="container mt-5">
            <h2>Contact Me</h2>
            <ul class="list-unstyled">
                <li><i class="bi bi-envelope-fill"></i> Email: daveshingierosero@gmail.com</li>
                <li><i class="bi bi-phone-fill"></i> Phone: 0906 471 9681</li>
                <li><i class="bi bi-linkedin"></i> LinkedIn: <a href="https://www.linkedin.com/in/dave-shingie-rosero-5ab546322/" target="_blank">linkedin.com/in/dave-shingie-rosero</a></li>
                <li><i class="bi bi-github"></i> GitHub: <a href="https://github.com/DaveRosero" target="_blank">github.com/DaveRosero</a></li>
                <!-- Add more contact details as needed -->
            </ul>
        </section>    

        <footer class="text-center p-4">
            <p>&copy; Dave Rosero 2024-2025</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>