<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    

    <form name="latihan1" method="POST" onsubmit="return checkform(this)">
        <div>
            NAMA
            <input type="text" name="txNAMA" id="NAMA"></input>
        </div>
        <div>
            <br>NIM<br>
            <input type="text" name="txNIM" id="NIM"></input>
        </div>

        <br>Jenis Kelamin</br>
        <input type="radio" name="txJKL" id="JKL" value="L">Laki-Laki</input>
        <input type="radio" name="txJKL" id="JKL" value="P">Perempuan</input>

        <div>
            <br>Jurusan<br>
            <select name="txJURUSAN" id=JURUSAN>
                <option value="Tata Boga">Tata Boga</option>
                <option value="Tata Busana">Tata Busana</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Manajemen">Manajemen</option>

            </select>
        </div>

        <div>
            <br>HOBI<br>
            <input type="checkbox" name="txHOBI_MANCING" value="1">Mancing
            <input type="checkbox" name="txHOBI_BERENANG" value="2">Berenang
            <input type="checkbox" name="txHOBI_VOLI" value="3">Voli
            <input type="checkbox" name="txHOBI_MASAK" value="4">Masak
            <input type="checkbox" name="txHOBI_MAKAN" value="5">Makan
        </div>

        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>

    <script>
        function checkform(frm){
            let F = frm .elements;
            let nama = F.namedItem("txNAMA").value;
            let nim = F.namedItem("txNIM").value;
            let jkl = F.namedItem("txJKL").value;
            let jurusan = F.namedItem("txJURUSAN").value;
            let hobi = [
                F.namedItem("txHOBI_MANCING").checked,
                F.namedItem("txHOBI_BERENANG").checked,
                F.namedItem("txHOBI_VOLI").checked,
                F.namedItem("txHOBI_MASAK").checked,
                F.namedItem("txHOBI_MAKAN").checked,
            ]
            console.log("NAMA : "+nama)
            console.log("NIM : "+nim)
            console.log("JKL : "+jkl)
            console.log("JURUSAN : "+jurusan)
            // console.log("HOBI : "+hobi)
            let h1 = hobi[0] ? "mancing.": "";
            let h2 = hobi[1] ? "berenang.": "";
            let h3 = hobi[2] ? "voli.": "";
            let h4 = hobi[3] ? "masak.": "";
            let h5 = hobi[4] ? "makan.": "";
            console.log("HOBI : "+h1+h2+h3+h4+h5)





            return false
        }
    </script>


</body>
</html>