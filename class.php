<?php
    class data{
        protected $Email;
        protected $Nama;

        public function setNama ($y) {
            $this->Nama = $y;
        }

        public function getNama () {
            return $this->Nama;
        }

        public function nilai($value) 
        {
            $poin = 0;
         if($value == "A"){
            $poin = 1;
         }   
         else if ($value == "B") {
            $poin = 2;
         }
         else if ($value == "C") {
            $poin = 3;
         }
         else if ($value == "D" ) {
            $poin = 4;
         }
         else if ($value == "E") {
            $poin = 2.5;
         }
         return $poin;
        }
        
        public function hasil ($jumlah)
        {
            if (($jumlah >= 27) && ($jumlah <=44)) {
                $tipe = "Oily skin type <br>"; 
                $info = "Cara merawat kulit kering : Untuk merawat jenis kulit wajah kering, gunakan pembersih wajah dengan bahan yang mampu melembapkan kulit wajah, seperti emolien, dan hindari produk yang mengandung alkohol atau pewangi. Setelah wajah selesai dibersihkan, Anda bisa menggunakan pelembap agar kulit tidak mudah kering. Selain itu, hindari terlalu lama mandi dan mencuci muka dengan air hangat.";
            }
            else if (($jumlah >=11) && ($jumlah <=26)) {
                $tipe = "Dry skin type <br>";
                $info = "Cara merawat kulit berminyak : Mencuci muka secara rutin 2 kali sehari dengan sabun cuci muka yang mengandung gliserin. Setelah selesai dibersihkan, Anda bisa menggunakan produk perawatan kulit lain, yaitu astringent atau toner yang mengandung benzoil peroksida, asam salisilat, dan asam glikolat. Selain itu, pilihlah produk kosmetik dengan kandungan air dan berlabel noncomedogenic yang tidak menyebabkan penyumbatan pada pori-pori.";
            }
            else {
                $tipe = "Tidak dapat ditentukan";
            }
            $finalresult = $tipe .  $info;
            return $finalresult;
        }
    }
    
?>