// Objeto literal
let Bicicleta1 = {
    cor: 'Branca',
    marcha: 'Única',
    aro: 12,
    pedalar() { return 'Método pedalar executado' }
}

let Bicicleta2 = {
    cor: 'Azul',
    marcha: '18',
    aro: 26,
    pedalar() { return 'Método pedalar executado' }
}

// console.log(Bicicleta1)
// console.log(Bicicleta2)

// Funções Factory
// ************************************************
let BicicletaFactory = function(cor, marcha, aro) {
    return {
        cor,
        marcha,
        aro,
        pedalar() { return 'Método pedalar executado' }
    }
}

let Bicicleta3 = BicicletaFactory('Branca', '18', '26')

console.log(Bicicleta3)
console.log(Bicicleta3.cor)
console.log(Bicicleta3.pedalar())