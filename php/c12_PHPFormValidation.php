<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Validation</title>
</head>

    <body>


<h2>Exercício 2 </h2>
    <h1>Reservation Request</h1>
    <h2>General Information</h2><br>
        <form method="post">
            Arrival Date: <input type="date" name="Arrival"><br>
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
        if(isset($_POST['submit']))  
    {
        $ArrivalDate = $_POST['Arrival'];
        $Nights = $_POST['Nights'];
        $Adults = $_POST['Adults'];
        $Children = $_POST['Children'];

        $RoomType = $_POST['Roomtype'];
        $BedType = $_POST['BedType'];

        $nome=$_POST['name'];
        $email=$_POST['email'];
        $phone = $_POST['phone'];
        echo "Reserva: ", $ArrivalDate," Noites: ", $Nights, " Adultos: ", $Adults, " Children: ", $Children, " <br>";
        echo "Quarto para: ", $RoomType," tipo de cama: ",$BedType, "<br>"; 
        echo "Welcome:", $nome, "<br> Email:", $email, "<br> telemóvel:", $phone;
    }
    ?>
</body>
</html>
