/*document.getElementById("sidenav").onclick = function () {
	document.getElementById("mobile-demo").style.right = "0"
}; */

//codigo para não precisar mudar o ano no Copyright

var ano_atual = new Date;
ano_atual = ano_atual.getFullYear();
document.getElementById("current_year").innerHTML = ano_atual;
console.log(ano_atual);