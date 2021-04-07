<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>

    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label>First Name</label><br><br>
        <input type="text" Name="nm_dpn"><br><br>
        <label>Last Name</label><br><br>
        <input type="text" Name="nm_blkg"><br><br>
        <label>Gender:</label><br><br>
        <input type="radio" Name="gender"> Male<br>
        <input type="radio" Name="gender"> Female<br>
        <input type="radio" Name="gender">Other<br><br>
        <label>Nationality</label><br><br>
        <select name="Nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Singaopre">England</option>
        </select><br><br>
        <label>Language Spoken:</label><br><br>
        <input type="checkbox"> Bahasa Indonesia<br>
        <input type="checkbox"> English<br>
        <input type="checkbox"> Other<br><br>
        <label>Bio:</label><br>
        <textarea name="Bio" id="" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Sign Up">
    </form>
    <table style="width:auto">
   
    

    </table>
</body>
</html>