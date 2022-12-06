//console.log("YASIR ANAK SHOLEH")

var x = penjumlahan(5,5);

document.getElementById("hasil").innerHTML = x;

function penjumlahan (x,y) {
	return x + y;
}


//var y = toCelsius (80);

//console.log(y);

function toCelsius (f){
		var hasil = (f-32) * (5/9);

		return hasil;
}

document.writeln(toCelsius(100));
document.writeln("</br>");

function sayHello(name){
	document.writeln(`Hello ${name}`);
}

sayHello("Malix")
const say = sayHello;
say("Ali")





















































