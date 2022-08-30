//console.log("YASIR ANAK SHOLEH")

var x = penjumlahan(5,5);

document.getElementById("hasil").innerHTML = x;

function penjumlahan (x,y) {
	return x + y;
}




//var y = toCelsius (80);

//console.log(y);

function toCelsius (a){
		var total = (5/9) * (a-32);

		return total;
}
document.writeln(toCelsius(80));
document.writeln("</br>");
document.writeln(toCelsius(50));

function sayHello(name){
	document.writeln(`Hello ${name}`);
}

sayHello("Malix")
const say = sayHello;
say("Ali")





















































