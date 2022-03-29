<?php
// Array Associative
// Array yang key nya ber-asosiasi / berpasangan dengan string

$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "npm" =>"043040023",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Erik",
        "npm" =>"043030021",
        "email" => "erik@unpas.ac.id",
        "jurusan" => "Teknik Mesin"
    ],
    [
        "nama" => "Sandra",
        "npm" =>"063040033",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Anggoro",
        "email" => "erik@unpas.ac.id",
        "npm" =>"043040024",
        "jurusan" => "Teknik Informatika"
    ]
];

// var_dump($mahasiswa[3]["email"]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs["nama"]; ?></li>
    <li>NPM : <?php echo $mhs["email"]; ?></li>
    <li>Email : <?php echo $mhs["npm"]; ?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
</ul>
<?php } ?>