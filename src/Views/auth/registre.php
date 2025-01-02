<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #2C3E50 0%, #3498DB 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 40px 0;
        }
        .register-card {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            max-width: 500px;
            width: 90%;
            margin: auto;
        }
        .register-card .logo {
            font-size: 24px;
            color: #2C3E50;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-control {
            padding: 12px;
            margin-bottom: 20px;
        }
        .btn-primary {
            background: #3498DB;
            border: none;
            padding: 12px;
            width: 100%;
        }
        .user-type-selector {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }
        .user-type-btn {
            padding: 15px 30px;
            border: 2px solid #3498DB;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }
        .user-type-btn.active {
            background: #3498DB;
            color: white;
        }
        .upload-resume {
            border: 2px dashed #3498DB;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-card">
            <div class="logo">
                <i class="fas fa-briefcase me-2"></i>CareerLink
            </div>
            <h4 class="text-center mb-4">Créer un compte</h4>
            
            <div class="user-type-selector">
                <div class="user-type-btn active" data-type="candidate">
                    <i class="fas fa-user me-2"></i>Candidat
                </div>
                <div class="user-type-btn" data-type="recruiter">
                    <i class="fas fa-building me-2"></i>Recruteur
                </div>
            </div>

            <form id="registerForm">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Prénom">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Nom">
                    </div>
                </div>

                <input type="email" class="form-control" placeholder="Email">
                <input type="password" class="form-control" placeholder="Mot de passe">
                <input type="password" class="form-control" placeholder="Confirmer le mot de passe">

                <div id="candidateFields">
                    <input type="tel" class="form-control" placeholder="Téléphone">
                    <div class="upload-resume">
                        <i class="fas fa-cloud-upload-alt mb-2"></i>
                        <p class="mb-0">Déposez votre CV ici ou cliquez pour sélectionner</p>
                        <input type="file" hidden>
                    </div>
                </div>

                <div id="recruiterFields" style="display: none;">
                    <input type="text" class="form-control" placeholder="Nom de l'entreprise">
                    <input type="text" class="form-control" placeholder="Poste occupé">
                    <input type="text" class="form-control" placeholder="Site web de l'entreprise">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="terms">
                    <label class="form-check-label" for="terms">
                        J'accepte les conditions d'utilisation et la politique de confidentialité
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Créer mon compte</button>
            </form>

            <div class="text-center mt-4">
                <p>Déjà inscrit ? <a href="login.php">Connectez-vous</a></p>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.user-type-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.user-type-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const type = this.dataset.type;
                if(type === 'candidate') {
                    document.getElementById('candidateFields').style.display = 'block';
                    document.getElementById('recruiterFields').style.display = 'none';
                } else {
                    document.getElementById('candidateFields').style.display = 'none';
                    document.getElementById('recruiterFields').style.display = 'block';
                }
            });
        });

        const uploadZone = document.querySelector('.upload-resume');
        const fileInput = uploadZone.querySelector('input[type="file"]');

        uploadZone.addEventListener('click', () => fileInput.click());

        uploadZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadZone.style.borderColor = '#3498DB';
        });

        uploadZone.addEventListener('dragleave', () => {
            uploadZone.style.borderColor = '#3498DB';
        });

        uploadZone.addEventListener('drop', (e) => {
            e.preventDefault();
            const files = e.dataTransfer.files;
            if(files.length) {
                fileInput.files = files;
                uploadZone.querySelector('p').textContent = `Fichier sélectionné : ${files[0].name}`;
            }
        });

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
        });
    </script>
</body>
</html>