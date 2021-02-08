<?php
// 1. chaine guillemets simples (stringSingleQuotes)
$mess = 'Bonjour, je m’appelle françois dupont, j’ai 35 ans et j’habite paris.';
// 2.  chaine guillemets doubles (stringDoubleQuotes)

$mess2 = 'Je suis une "chaîne de caractères"';
// 3. chaine longue, écriture HereDoc (longString)
$mess3 = <<<EOD
Croisant les bras, et tous s'assirent autour du foyer, rougie, rendait violâtre. Avoue que je suis simplement ici pour tenir compagnie au tien et pour t'imaginer que tu souffres par ta faute. Élevez un étendard sur une montagne, et je serais dans un extrême embarras. Voir, si touchés que je fusse un grand misérable! Facile, il devait trouver le cardinal seul, sans interlocuteur, un drame invisible et inconnu aux autres spectateurs que nous jouions, du pauvre pygmée qui s'en allait.
EOD;

// 4. nouvelle chaine guillemets simple corrigée (firstname, lastname, age, city)
$firstName = 'françois';
$lastName = 'dupont';
$age = '35';
$city = 'paris';

$mess4 = "Bonjour, je m'appelle $firstName $lastName, j'ai $age et j'habite $city";
// 5. Nouvelle chaîne formée avec des variables (newStringSingleQuotes)
// $mess5 = "Bonjour, je m'appelle "ucfirst($firstName)" "strtoupper($lastame)", j'ai $age et j'habite "ucfirst($city)"";
      //strtoupper(lastame)
      // The ucfirst($firstName)
// 6. Nouvelle chaine modifiée (revisedNewStringSimpleQuotes)


// Tableaux

// 8. Notes (grades)
$notes = [
  15,
  13,
  8,
  10,
  17,
];

// 9. Matières (courses)
$matieres = [
  'html/css',
  'algorithme',
  'anglais',
  'marketing',
  'ui/ux',
];

// 11. fusion de deux tableaux (coursesGrades)


// copie du tableau pour ne écraser l'original (revisedCoursesGrades)


// 12. Inversion des notes d'algorithmique et de marketing

// 13. Tableau de notes des étudiants (students)

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Chaines de caractères | Tableaux</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-4">Training sur les chaines de caractères et les tableaux</h1>

        <div class="container">
            <div class="card-columns">
            <!-- Question 1 -->
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h2 class="card-title">Présentation 1</h2>
                        <p class="card-text">
                            <?= $mess ?>
                        </p>
                    </div>
                </div>
                <!-- Question 2 -->
                <div class="card p-3">
                    <h2 class="card-title">Chaine guillemets doubles</h2>
                    <p>
                         <?= $mess2 ?>
                    </p>
                </div>
                <!-- Question 3 -->
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Chaine Très longue</h2>
                        <blockquote class="blockquote mb-0">
                            <p class="card-text">
                                 <?= $mess3 ?>
                            </p>
                        </blockquote>
                    </div>
                </div>
                <!-- Question 4 -->
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h2 class="card-title">Présentation 2</h2>
                        <p class="card-text">
                            <?= $mess4 ?>
                        </p>
                    </div>
                </div>
                <!-- Question 5 -->
                <div class="card">
                    <div class="card-body bg-primary text-white">
                        <h2 class="card-title">Présentation 3</h2>
                        <p class="card-text">
                             <!-- afficher votre réponse ici -->
                        </p>
                    </div>
                </div>

               <!-- Question 6 -->
                <div class="card bg-primary text-white text-center p-3">
                    <h2 class="card-title">Longueur d'une chaine</h2>
                    <p>Le prénom contient <?php echo strlen($firstName) ?> caractères.</p>
                </div>

                 <!-- Question 7 -->
                 <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h2 class="card-title">Présentation 4</h2>
                        <p class="card-text">
                            <?= ucwords($mess4)?>
                        </p>
                    </div>
                </div>

                <!-- Question 10 -->
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="card-title">Tableau - Notes / Matières</h2>
                        <p class="card-text">
                           <?= "$matieres[0] = $notes[0]"?>
                        </p>
                    </div>
                </div>
                <!-- Question 11 -->
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="card-title">Tableau - Fusion Matières / Notes</h2>
                        <p class="card-text">
                            <pre>
                                <!-- afficher votre réponse ici -->
                            </pre>
                        </p>
                    </div>
                </div>

                <!-- Question 12 -->
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="card-title">Tableau - Correction reporting</h2>
                        <p class="card-text">
                            <!-- question 11 -->
                            <pre>
                                 <!-- afficher votre réponse ici -->
                            </pre>
                        </p>
                    </div>
                </div>
                <!-- Question 13 -->
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="card-title">Tableau - Notes étudiants</h2>
                        <p class="card-text">
                            <pre>
                                 <!-- afficher votre réponse ici -->
                            </pre>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
