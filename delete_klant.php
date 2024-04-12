<?php
// auteur: zion
// functie: verwijder een klant op basis van de id
include 'functions.php';

// Haal klant uit de database
if(isset($_GET['id'])){

    // test of insert gelukt is
    if(deleteklant($_GET['id']) == true){
        echo '<script>alert("klantcode: ' . $_GET['id'] . ' is verwijderd")</script>';
        echo "<script> location.replace('crud_klant.php'); </script>";
    } else {
        echo '<script>alert("klant is NIET verwijderd")</script>';
    }
}
?>

<?php
include_once "config.php";
$conn = connectDb();

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM " . CRUD_TABLE . " WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':id'=>$id]);

    header("Location: crud_ klant.php");
}
?>
