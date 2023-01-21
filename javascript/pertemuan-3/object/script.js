const cars = ["Avanza", "LamborGhini", "BMW", "Ferari", "Mclaren"];

document.write(cars[0] + "<br>")
document.write(cars[1] + "<br>")
document.write(cars[2] + "<br>")
document.write(cars[3] + "<br>")
document.write(cars[4] + "<br>")

 
document.write("<br>" + "<br>") 
 
for (let i = 0; i < cars.length; i++) {
	document.write(cars[i] + "<br>");
}
