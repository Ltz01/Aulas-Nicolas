function somar(){
    let valor_1 = Number(document.getElementById("valor_1").value)
    let valor_2 = Number(document.getElementById("valor_2").value)

    let soma = valor_1 + valor_2

    document.getElementById("resultado").innerText = "Soma: " + soma

}

function sub(){
    let valor_1 = Number(document.getElementById("valor_1").value)
    let valor_2 = Number(document.getElementById("valor_2").value)

    let sub = valor_1 - valor_2

    document.getElementById("resultado").innerText = "Subtração: " + sub

}

function mult(){
    let valor_1 = Number(document.getElementById("valor_1").value)
    let valor_2 = Number(document.getElementById("valor_2").value)

    let mult = valor_1 * valor_2

    document.getElementById("resultado").innerText = "Multiplicação: " + mult

}

function div(){
    let valor_1 = Number(document.getElementById("valor_1").value)
    let valor_2 = Number(document.getElementById("valor_2").value)

    let div = valor_1 / valor_2

        if (valor_1 === 0 || valor_2 === 0) {
            document.getElementById("resultado").innerText = "Não é possivel dividir por 0!"
        }
        else {
            document.getElementById("resultado").innerText = "divisão: " + div
        }
}