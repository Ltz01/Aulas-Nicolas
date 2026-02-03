//const alunos = ["Lorenzo", "Gabriel", "Amanda"]

//console.log(alunos)


//function somar(a,b){    
//return a + b
//}

//function bomdia(nome){
//    return "bom dia meu/minha querido(a) " + nome
//}

//console.log(somar(10, 5))
//console.log(somar(12, 7))
//console.log(bomdia("Leo D"))

//let titulo = document.getElementById("titulo")

//titulo.innerText = "Alterando texto pelo javascript"

//console.log(titulo)


function somar(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    alert(n1 + n2)
}
function subtrair(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    alert(n1 - n2)
}
function multiplicar(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    alert(n1 * n2)
}
function dividir(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    if(n1 == 0 || n2 == 0){
        alert("não é possível dividir")
    }
    else{
        alert(n1 / n2)
    }
}
