<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .navbar {
            background-color: #1e3799;
            padding: 1rem;
        }

        .navbar-brand,
        .nav-link {
            color: white;
        }

        .navbar-brand:hover,
        .nav-link:hover {
            color: #0097e6;
        }

        .hero {
            background: linear-gradient(135deg, #1e3799, #4a69bd);
            color: white;
            padding: 4rem 0;
            margin-top: 56px;
        }

        .btn-primary {
            background-color: #6a89cc;
            border-color: #6a89cc;
        }

        .btn-primary:hover {
            background-color: #0097e6;
            border-color: #0097e6;
        }

        .job-card {
            border: 1px solid #e3e3e3;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .job-card:hover {
            border-color: #6a89cc;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .footer {
            background-color: #0c2461;
            color: white;
            padding: 2rem 0;
            margin-top: 2rem;
        }

        .stats-section {
            padding: 3rem 0;
            background-color: #f8f9fa;
            text-align: center;
        }

        .stat-card {
            padding: 1.5rem;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #1e3799;
        }

        .stat-label {
            font-size: 1rem;
            margin-top: 0.5rem;
            color: #555;
        }
    </style>
</head>

<body>

    <?php

require_once "../../../vendor/autoload.php";

use App\Config;

    // $sqlState = $pdo->query('SELECT * FROM Offre');
    // // var_dump($sqlState);
    // $Offre = $sqlState->fetchAll(PDO::FETCH_ASSOC);
    // // echo "<pre>";
    // // print_r($Offre);
    // // echo "<\pre>";
    ?>



    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home" onclick="showAll()">CareerLink</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home" onclick="showAll()">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#jobs">Offres</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="./auth/login.php">Connexion</a></li>
                    <li class="nav-item"><a class="nav-link" href="./auth/register.php" onclick="showSignup()">Inscription</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="mainContent">

        <section class="hero" id="home">
            <div class="container text-center">
                <h1>Trouvez votre prochain emploi</h1>
                <div class="mt-4">
                    <form class="row g-3 justify-content-center">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Mot clé">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Ville">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="stats-section">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="stat-card">
                            <i class="fas fa-briefcase mb-3 text-primary fa-2x"></i>
                            <div class="stat-number">1000+</div>
                            <div class="stat-label">Offres d'emploi</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <i class="fas fa-building mb-3 text-primary fa-2x"></i>
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Entreprises</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <i class="fas fa-users mb-3 text-primary fa-2x"></i>
                            <div class="stat-number">15K+</div>
                            <div class="stat-label">Candidats</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <i class="fas fa-handshake mb-3 text-primary fa-2x"></i>
                            <div class="stat-number">700+</div>
                            <div class="stat-label">Recrutements</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="job-card">
            <h3>Support IT</h3>
            <p class="text-muted">LabitB - Rabat</p>
            <div>CDD - 7-10K DH</div>
        </div> -->
        <!-- <div class='job-card'>
            <h3>Technicien Reseau</h3>
            <p class='text-muted'>LabitC - Casablanca</p>
            <div>Stage - 2000 DH</div>
        </div> -->
        <div class='container my-5'>
            <h2 class='mb-4'>Offres récentes</h2>
        </div>
        <?php
        foreach ($Offre as $OneOffre) {
            echo "
    <div class='container my-5' id='jobs'>
                <div class='job-card'>
                <h3>" . $OneOffre['titre'] . "</h3>
                <p class='text-muted'>" . $OneOffre['lieu'] . ", " . $OneOffre['typecontrat'] . "</p>
                <div>" . $OneOffre['salaire'] . '  ' . 'DH' . "</div>
            </div>
        </div>
        ";
        }
        ?>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <p>&copy; 2025 CareerLink. Tous droits réservés.</p>
                    </div>
                </div>
            </div>
        </footer>

</body>

</html>