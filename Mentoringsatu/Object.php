 <?php
    class Mahasiswa {
        public $Nama;
        public $NIM;
        public $Prodi;
        public $IPK;
        public $dataMahasiswa = [];

        function __construct($Nama = null, $NIM = null , $Prodi = null , $IPK = null) {
            $this->Nama = $Nama;
            $this->NIM = $NIM;
            $this->Prodi = $Prodi;
            $this->IPK = $IPK;
        }

        function tambahData($Nama,$NIM, $Prodi, $IPK) {
           $new = [
            "Nama" => $Nama,
            "NIM" => $NIM,
            "Jurusan" => $Prodi,
            "IPK" => $IPK,];

           $this->dataMahasiswa[] = $new;
        }

        function get_name() {
            return $this->Nama;
        }

        function get_nim() {
            return $this->NIM;
        }

        function get_prodi() {
            return $this->Prodi;
        }

        function get_ipk() {
            return $this->IPK;
        }

        /* function __destruct(){
            echo "Nama Mahasiswa : {$this->Nama} <br>";
            echo "NIM : {$this->NIM}<br>";
            echo "Prodi: {$this->Prodi}<br>";
            echo "IPK : {$this->Nama}<br>";
        } */

        function getData() {
            return $this->dataMahasiswa;
        }

    }
    ?>
