class Animal {

    constructor(cor, tamanho, peso) {
        this._cor = cor
        this._tamanho = tamanho
        this._peso = peso
    }

    get cor() {
        return this._cor
    }
    set cor(dados) {
        this._cor = dados
    }

    get tamanho() {
        return this._tamanho
    }
    set tamanho(dados) {
        this._tamanho = dados
    }

    get peso() {
        return this._peso
    }
    set peso(dados) {
        this._peso = dados
    }

    domir() {
        console.log('Dormir')
    }

}

class Passaro extends Animal {

    constructor(cor, tamanho, peso, bico) {
        super(cor, tamanho, peso)
        this._bico = bico
    }

    get bico() {
        return this._bico
    }
    set bico(dados) {
        this._bico = dados
    }

    voar() {
        console.log('Voar')
    }

}

class Papagaio extends Passaro {

    constructor(cor, tamanho, peso, bico, sabeFalar) {
        super(cor, tamanho, peso, bico)
        this._sabeFalar = sabeFalar
    }

    get sabeFalar() {
        return this._sabeFalar
    }
    set sabeFalar(dados) {
        this._sabeFalar = dados
    }

    falar() {
        console.log('Falar')
    }

}


let papagaio = Array(new Papagaio())

papagaio[0] = ['azul com verde', '23,3cm', '240g', 'médio', true]
papagaio[1] = ['verde com branco', '24cm', '268g', 'grande', false]

console.log(papagaio)
console.log()
console.log(papagaio[0])
console.log(papagaio[1])
