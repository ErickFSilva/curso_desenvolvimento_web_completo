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

class Avestruz extends Passaro {

    constructor(cor, tamanho, peso, bico) {
        super(cor, tamanho, peso, bico)
    }

    enterrarCabeca() {
        console.log('Enterra a cabeça')
    }

    voar() {
        console.log('Não sabe voar')
    }

}


let papagaio = new Papagaio('azul com verde', '23,3cm', '240g', 'médio', true)
let avestruz = new Avestruz('preto com branco', '1,8m', '35kg', 'grande')

console.log(papagaio)
console.log(avestruz)
console.log()

avestruz.enterrarCabeca()
avestruz.voar()
