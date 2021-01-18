<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Validation</title>
</head>

    <body>
    test_input(
            <?php
        // define variables and set to empty values
        $ArrivalDate = $Nights = $Adults = $Children = $RoomType = $BedType = 
        $nome = $email = $phone = "";
        
        
  /*        if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["name"])) {
 $nameErr = "Name is required";
} else {
 $name = test_input($_POST["name"]);
}
 if (empty($_POST["email"])) {
 $emailErr = "Email is required";
} else {
 $email = test_input($_POST["email"]);
}  */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST['Arrival'])){
                $ArrivalDateErro = "Arrival Date is Invalid";
            }else{
                $ArrivalDate = test_input($_POST['Arrival']);
            }
            $Nights =test_input( $_POST['Nights']);
            $Adults = test_input($_POST['Adults']);
            $Children = test_input($_POST['Children']);
    
            $RoomType = test_input($_POST['Roomtype']);
            $BedType = test_input($_POST['BedType']);
    
            $nome=test_input($_POST['name']);
            $email=test_input($_POST['email']);
            $phone =test_input( $_POST['phone']);
        }
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>


<h2>Exercício 2 </h2>
    <h1>Reservation Request</h1>
    <h2>General Information</h2><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Arrival Date: <input type="date" name="Arrival"><br>
            <span class="error"> * <?php echo $ArrivalDateErro ?></span><br>
            Nights: <input type="text" name="Nights"><br>
            Adults:<input type="number" name="Adults"><br>
            Children: <input type="number" name="Children"><br>
            <br>

    <h2>Preferences</h2>
            Room type: <input type="radio" name="Roomtype" value="Standard">
                       <label for="Standard">Standard</label>
                       <input type="radio" name="Roomtype" value="Business">
                       <label for="Business">Business</label>
                       <input type="radio" name="Roomtype" value="Suite">
                       <label for="Suite">Suite</label><br>
            Bed type:  <input type="checkbox"  name="BedType" value="King">
                        <label for="King">King</label>
                        <input type="checkbox"  name="BedType" value="Double_Double">
                        <label for="Double_Double">Double Double</label>
                        <input type="checkbox"  name="BedType" value="Smoking">
                        <label for="Smoking">Smoking</label><br>
    <h2>Contact Information</h2><br>
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            Phone: <input type="number" name="phone"><br>
    <input type="submit" name="submit" value="Confirmar">
    <input type="Reset" name="Clear" value="Limpar">

    <h1>Your given details are as:</h1>

    <?php
        echo "Reserva: ", $ArrivalDate," Noites: ", $Nights, " Adultos: ", $Adults, " Children: ", $Children, " <br>";
        echo "Quarto para: ", $RoomType," tipo de cama: ",$BedType, "<br>"; 
        echo "Welcome:", $nome, "<br> Email:", $email, "<br> telemóvel:", $phone;
    ?>
</body>
</html>
