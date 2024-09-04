<style>
    body {
        font-family: Arial, sans-serif;
    }

    form {
        width: 300px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }

    .hasil {
        margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
    }
</style>

<body>
    <form method="post">
        <h1>Form</h1>
        <label for="name">Masukan Teks</label>
        <input type="text" name="Teks" id="Teks" required><br><br>

        <button type="Submit" name="Submit">Submit</button><br><br>

        <?php
        if(isset($_POST['Submit'])) {
            $Teks = $_POST["Teks"];
    
            $AngkaOnly = filter_var($Teks, FILTER_SANITIZE_NUMBER_INT);
    
            if ($AngkaOnly) {
                echo "<p class='hasil'>Teks : " . $Teks . "<br>";
                echo "<b>Teks Mengandung Angka : <b>" . $AngkaOnly . "</p>";
            } else {
                echo "<p class='hasil'>Teks : " . $Teks . "<br>";
                echo "<b>Teks Tidak Mengandung Angka<b></p>";
            }
        }
        ?>
     </form>
</body>
</html> 
