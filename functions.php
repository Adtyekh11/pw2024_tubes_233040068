<?php
// koneksi ke database
function koneksi()
{
    return mysqli_connect("localhost", "root", "", "pw2024_tubes_233040068");
    $conn = mysqli_connect("localhost", "root", "", "user");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    
    }


    return $rows;
   
}

// tambah data
function tambah($data)
{
  $conn = koneksi();

  $nama = mysqli_real_escape_string($conn, htmlspecialchars($data['nama']));
  $harga = mysqli_real_escape_string($conn, htmlspecialchars($data['harga']));
  $deskripsi = mysqli_real_escape_string($conn, htmlspecialchars($data['deskripsi']));

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }
  

  $query = "INSERT INTO product (nama, gambar, harga, deskripsi)
            VALUES ('$nama', '$gambar', '$harga', '$deskripsi')";

  if (mysqli_query($conn, $query)) {
    return mysqli_affected_rows($conn);
  } else {
    return 0;
  }

  
}


// upload gambar
function upload(){
$namaFile = $_FILES['gambar']['name'];
$ukuranFile = $_FILES['gambar']['size'];
$error = $_FILES['gambar']['error'];
$tmpName = $_FILES['gambar']['tmp_name'];


// cek jika tdk ada gambar yg diupload
if ($error === 4) {
  echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
  return false;


}

// cek yg di upload
$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
$ekstensiGambar = explode('.', $namaFile);
$ekstensiGambar = strtolower(end($ekstensiGambar));
if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
  echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
  return false;


}


// cek ukuran
if ($ukuranFile > 5000000) {
  echo "<script>
        alert('ukuran gambar terlalu besar!');
        </script>";
  return false;


}

// gambar siap diupload
// generate nama gambar baru
$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;
move_uploaded_file($tmpName, '../../asset/img/' . $namaFileBaru);
return $namaFileBaru;

}




// hapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM product WHERE id = $id");

    return mysqli_affected_rows($conn);
}


// ubah data
function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = mysqli_real_escape_string($conn, htmlspecialchars($data['nama']));
  $gambar = mysqli_real_escape_string($conn, htmlspecialchars($data['gambar']));
  $harga = mysqli_real_escape_string($conn, htmlspecialchars($data['harga']));
  $deskripsi = mysqli_real_escape_string($conn, htmlspecialchars($data['deskripsi']));
  

  $query = "UPDATE product
            SET
            nama = '$nama',
            gambar = '$gambar',
            harga = '$harga',
            deskripsi = '$deskripsi'
            WHERE id = '$id'";

  if (mysqli_query($conn, $query)) {
    return mysqli_affected_rows($conn);
  } else {
    return 0;
  }

  
}




// cari data

function cari($keyword) {
  $conn = koneksi();
  $query = "SELECT * FROM product WHERE 
            nama LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);
  
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
  }
  
  return $rows;
}

$conn = koneksi();

function registrasi($data){
    global $conn;

    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
              alert('username sudah digunakan!');
              </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
              alert('konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    $query = "INSERT INTO user (username, password) VALUES('$username', '$password')";
    if (mysqli_query($conn, $query)) {
        return mysqli_affected_rows($conn);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        return false;
    }
}



?>


