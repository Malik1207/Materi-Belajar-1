//Konversi Fahrenheit ke Celsius.
function fahrenheitToCelsius (a) {
	return a ;	
}

var a = parseInt (prompt('Konversi Fahrenheit ke Celsius.'))
var hasil = fahrenheitToCelsius (5/9) * (a-32);

document.getElementById("hasil-1").innerHTML = hasil + " " + "&deg;C";
console.log(hasil);


//Konversi Celsius ke Fahrenheit.
function celsiusToFahrenheit (a) {
	return a ;	
}

var a = parseInt (prompt('Konversi Celsius ke Fahrenheit.'))
var hasil = celsiusToFahrenheit (a* 9/5) + (32);

document.getElementById("hasil-2").innerHTML = hasil + " " + "&deg;F";
console.log(hasil);


//Konversi Celsius ke Kelvin.
function celsiusToKelvin (a) {
	return a ;	
}

var a = parseInt (prompt('Konversi Celsius ke Kelvin.'))
var hasil = celsiusToKelvin (a + 273,15);

document.getElementById("hasil-3").innerHTML = hasil + " " + "&deg;K";
console.log(hasil);


//Konversi Kelvin ke Celsius.
function kelvinToCelsius (a) {
	return a ;	
}

var a = parseInt (prompt('Konversi Kelvin ke Celsius.'))
var hasil = kelvinToCelsius (a - 273,15);

document.getElementById("hasil-4").innerHTML = hasil + " " + "&deg;C";
console.log(hasil);



