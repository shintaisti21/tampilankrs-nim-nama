<!DOCTYPE html>
<html>
    <head> 
        <title> Tugas </title>
    </head>
    <style>
        body{
     font-family: sans-serif;
     background:  #ccfff2;
            }
            input[type=text],
            input[type=password]{
                font-size: 10px;
                width: 100%;
                padding: 9px 18px;
                margin: 8px 0;

            }
            input[type=submit]{
                font-size: 15px;
                background: #009973;
                color: white;
                border: white 3px solid;
                border-radius: 5px;
                padding: 12px 20px;
                cursor:pointer;
                margin-top: 10px;
            }

            input[type=submit]:hover{
                opacity:0.9;
            }


    </style>
    <body>
        <form action="tampilan.php" method="POST">
            <label>NIM</label>
            <input type="text" name="nim">
            <br>
            <label>Nama</label>
            <input type="text" name="nama">
            <br>
            <label>Kode Matakuliah</label>
            <input type="text" name="kode_matakuliah">
            <br>
            <label>Nama Mata Kuliah</label>
            <input type="text" name="nama_matakuliah">
            <br>
            <label>SKS</label>
            <input type="text" name="sks">
            <br>
            <select name = "kelas">
                <option value="">Kelas</option>
                <option value="A">A</option>
                <option value="B">B</option> </select>
            <br>
            <select name = "semester">
                <option value="">semester</option>
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="5">5</option>
                <option value="7">7</option>
            
            <input type="submit" value="login">
        </form>
    </body>
</html>