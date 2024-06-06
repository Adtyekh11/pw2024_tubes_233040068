// // ambil elemen
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');



// // tambahkan event ketika keyword di tulis
keyword.addEventListener('keyup', function() {
    // buat objek ajx
    var xhr = new XMLHttpRequest();


    // cetak kesiapan ajx
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }



    // eksekusi ajax
    xhr.open('GET', '../../ajax/ajax.php?keyword=' + keyword.value, true);
    xhr.send();

});

