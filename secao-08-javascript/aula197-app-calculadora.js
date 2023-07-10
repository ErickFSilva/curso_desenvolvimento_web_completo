function calcular(tipo, valor) { // "tipo" = acao ou valor, "valor" = é o valor da tecla
    
    if (tipo === 'acao') {

        if (valor === 'c') {
            document.getElementById('resultado').value = ''
        }

        if (valor === '+' || valor === '-' || valor === '*' || valor === '/' || valor === '.') {
            document.getElementById('resultado').value += valor
        }

        if (valor === '=') {
            var valorCampo = document.getElementById('resultado').value
            document.getElementById('resultado').value = eval(valorCampo)
        }

    }
    else if (tipo === 'valor') {
        document.getElementById('resultado').value += valor
    }

}