var resetLayar = false;
var nomorSebelum;
var hitunganBaru = false;

function balikLayar() {

	const val = document.querySelector('#layar').value;
	
	return val;
}

function angka(value) {

	if (document.querySelector('#layar').value == 0) {
		document.querySelector('#layar').value = null;
	}
	
	hitunganBaru = true;
	
	if(resetLayar == true) {
		hitunganBerikutnya();
	} 

	const current = balikLayar();
	
	const number = current + value;
	
	document.querySelector('#layar').value = number;
}

function operator(opr) {

	if (nomorSebelum) {
		hasil();
	}
	
	resetLayar = true;

	document.querySelector('#operator').innerHTML = opr;
}

function hitunganBerikutnya() {

	const current = balikLayar();
	
	nomorSebelum = current;
	
	resetLayar = false;
	
	document.querySelector('#layar').value = null;
}

function hasil() {

	const current = balikLayar();
	
	const operator = document.querySelector('#operator').innerHTML
	
	const hitung = nomorSebelum + operator + current; 
	
	const result = eval(hitung)
	
	if (hitunganBaru == false) {
		return
	}
	
	document.querySelector('#layar').value = result;
	
	nomorSebelum = result;
	
	hitungaBaru = false;
}

function reset() {
	resetLayar = false;
	nomorSebelum = 0;
	document.querySelector('#layar').value = 0;
	document.querySelector('#operator').innerHTML = null;
}
