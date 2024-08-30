<?php
    // Correct the path to the FPDF library
    require('fpdf.php');
    var_dump($_POST);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Capture form data
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $titre = htmlspecialchars($_POST['titre']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $ville = htmlspecialchars($_POST['ville']);
        $code_postal = htmlspecialchars($_POST['code_postal']);
        $profil = htmlspecialchars($_POST['profil']);
        $formation = htmlspecialchars($_POST['formation']);
        $centres_interet = htmlspecialchars($_POST['centres_interet']);
        // Create PDF
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);

        // Header
        $pdf->Cell(0, 10, 'Curriculum Vitae', 0, 1, 'C');
        $pdf->Ln(10);

        // Personal Information
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, 'Informations personnelles', 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, "Nom: $nom", 0, 1);
        $pdf->Cell(0, 10, "Prenom: $prenom", 0, 1);
        $pdf->Cell(0, 10, "Email: $email", 0, 1);
        $pdf->Cell(0, 10, "Titre: $titre", 0, 1);
        $pdf->Cell(0, 10, "Telephone: $telephone", 0, 1);
        $pdf->Cell(0, 10, "Adresse: $adresse", 0, 1);
        $pdf->Cell(0, 10, "Ville: $ville", 0, 1);
        $pdf->Cell(0, 10, "Code Postal: $code_postal", 0, 1);
        $pdf->Ln(10);

        // Profile
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, 'Profile', 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, $profil);
        $pdf->Ln(10);

        // Formation
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, 'Formation', 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, $formation);
        $pdf->Ln(10);

        // Centres d'Intérêt
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, 'Centres d\'Intérêt', 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, $centres_interet);
        $pdf->Ln(10);

        // Save the PDF
        $file_name = $nom . '_' . $prenom . '_CV.pdf';
        $pdf->Output('F', "../CVs/$file_name");

        // Redirect to the view page
        header("Location: http://localhost/CV-Generator/PHP/ViewCV.php?file=$file_name");
        exit;
    } else {
        echo "\n" . htmlspecialchars($_POST['nom']) . "\n";
        echo "Invalid request method.";
    }
?>
