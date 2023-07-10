function calcular(tipo, botao) { // tipo: acao ou valor

    console.log(tipo, botao)

    if (tipo === 'acao') {

        if (botao === 'c') {
            document.getElementById('resultado').value = ''
        }
        else if (botao === '/' || botao === '*' || botao === '-' || botao === '+' || botao === '.') {
            document.getElementById('resultado').value += botao
        }
        else if (botao === '=') {
            var valorCampo = document.getElementById('resultado').value
            console.log(valorCampo)

            document.getElementById('resultado').value = eval(valorCampo)
            console.log(eval(valorCampo))
        }

    }
    else if (tipo === 'valor') {
        document.getElementById('resultado').value += botao
    }

}