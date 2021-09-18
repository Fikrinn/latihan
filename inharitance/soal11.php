<html>
 <head><title>Pengolahan Form</title></head>
 <body>
     <form action="" method="post">
        <fieldset>
            <legend>Hamba Allah</legend>
            <table>
                <tr>
            <td>Pilih Mahluk </td>
            <td> : </td>
            <td><select type="text" name="mahluk" >
            <option value= 1 > Manusia</option>
            <option value= 2 > Malaikat</option>
            <option value= 3 > Jin</option>
            <option value= 4 > Setan</option>
            </select></td>
            </tr>

<tr>
    <td></td><td></td>
    <td>
 <input type="submit" name="Input" value="Input"></td>
</tr>
 </table>
</form>
 </fieldset>
 </body>
</html>
<?php
if (isset($_POST['Input'])) {
    $mahluk = $_POST['mahluk'];

    class Manusia
    {
        public function __construct($mahluk)
        {
            $this->mahluk = "$mahluk";

        }
        protected function tugasManusia()
        {
            echo "Jenis mahkluk : Manusia <br>";
            return "Untuk Menyempurnakan Ahlak ";
        }
    }

// turunkan class Manusia ks Malaikat
    class Malaikat extends Manusia
    {
        protected function tugasMalaikat()
        {
            echo "Jenis mahkluk : Malaikat <br>";
            return " Beribadah Kepada Tuhan ";
        }
    }
    class jin extends Malaikat
    {
        protected function tugasJin()
        {
            echo "Jenis mahkluk : Jin <br>";
            return " Labil ";
        }
    }
// turunkan class Malaikat ke chromebook
    class setan extends jin
    {
        protected function tugasSetan()
        {
            echo "Jenis mahkluk : Setan <br>";
            return " Menggagu Manusia ";
        }

        public function HambaAllah()
        {
            if (2 > $this->mahluk) {
                $a = $this->tugasManusia();
            } elseif (3 < $this->mahluk) {
                $a = $this->tugasSetan();

            } elseif (2 < $this->mahluk) {
                $a = $this->tugasJin();

            } elseif (1 <= $this->mahluk) {
                $a = $this->tugasMalaikat();

            }

            // $b = $this->manusia();
            // $c = $this->beli_chromebook();
            // $d = $this->etan();

            return "Tugasnya : $a ";
        }
    }

// buat objek dari class Malaikat (instansiasi)
    $mahluk_Allah = new setan($mahluk);

//panggil method objek
    echo $mahluk_Allah->HambaAllah();

// $mahluk_Allah->tugasManusia();
    // Fatal error: Call to protected method Manusia::beli_komputer()
}