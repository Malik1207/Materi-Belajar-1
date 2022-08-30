function tambah (a,b) {
	return a + b;	
}

var a = parseInt (prompt('Masukkan Nilai Pertama :'))
var b = parseInt (prompt('Masukkan Nilai Kedua :'))
var hasil = tambah(a, b);

document.getElementById("hasil").innerHTML = hasil;
console.log(hasil);
