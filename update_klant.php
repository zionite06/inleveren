<?php
    // functie: update klant
    // auteur: zion

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updateklant($_POST) == true){
            echo "<script>alert('klant is gewijzigd')</script>";
        } else {
            echo '<script>alert("klant is NIET gewijzigd")</script>';
        }
    }

    // Test of id is meegegeven in de URL
    if(isset($_GET['id'])){  
        // Haal alle info van de betreffende id $_GET['id']
        $id = $_GET['id'];
        $row = getklant($id);
    
?>
<?php
include_once "config.php";
$conn = connectDb();

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    
    $sql = "SELECT * FROM " . CRUD_TABLE . " WHERE id = :id";
    $query = $conn->prepare($sql);
    $query->execute([':id'=>$id]);
    $result = $query->fetch();

    if(isset($_POST['submit'])) {
        $merk = $_POST['merk'];
        $type = $_POST['type'];
        $prijs = $_POST['prijs'];

        $sql = "UPDATE " . CRUD_TABLE . " SET merk = :merk, type = :type, prijs = :prijs WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':merk'=>$merk,
            ':type'=>$type,
            ':prijs'=>$prijs,
            ':id'=>$id
        ]);
        
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig klant</title>
</head>
<body>
  <h2>Wijzig klant</h2>
  <form method="post">
    
    <input type="hidden" id="merk" name="id" required value="<?php echo $row['id']; ?>"><br>
    <label for="merk">Merk:</label>
    <input type="text" id="merk" name="merk" required value="<?php echo $row['merk']; ?>"><br>

    <label for="type">Type:</label>
    <input type="text" id="type" name="type" required value="<?php echo $row['type']; ?>"><br>

    <label for="prijs">Prijs:</label>
    <input type="number" id="prijs" name="prijs" required value="<?php echo $row['prijs']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='crud_klant.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen id opgegeven<br>";
    }
?>