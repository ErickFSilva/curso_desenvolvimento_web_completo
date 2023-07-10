class Cadeira {

    // Atributos
    constructor(qtdPernas, giratoria, cor) {
        this.qtdPernas = qtdPernas
        this.giratoria = giratoria
        this.cor = cor
    }

    // Métodos
    girarCadeira() {

        if (this.giratoria === true) {
            console.log('girou')
        }
        else if (this.giratoria === false) {
            console.log('cadeira não é giratória')
        }

    }

    addCor(cor) {
        this.cor = cor
    }

}

let cadeiras = Array()

cadeiras.push(new Cadeira(4, false, 'Azul'))
cadeiras.push(new Cadeira(1, true, 'Verde'))

console.log(cadeiras)
console.log(cadeiras[1].cor)

cadeiras[0].girarCadeira()
cadeiras[1].girarCadeira()

cadeiras[1].addCor('Preto')

console.log(cadeiras)
console.log(cadeiras[1].cor)