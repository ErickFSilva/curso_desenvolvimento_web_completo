class Animal {

    constructor() {
        this._cor = ''
        this._tamanho = null
        this._peso = null
    }

    get cor() {
        return this._cor
    }
    set cor(descricao) {
        this._cor = descricao
    }

    get tamanho() {
        return this._tamanho
    }
    set tamanho(descricao) {
        this._tamanho = descricao
    }

    get peso() {
        return this._peso
    }
    set peso(descricao) {
        this._peso = descricao
    }

    dormir() {
        console.log('Dormir')
    }

}

class Cachorro extends Animal {

    constructor() {
        super()
        this._orelhas = 'Grandes e caidas'
    }

    get orelhas() {
        return this._orelhas
    }
    set orelhas(descricao) {
        this._orelhas = descricao
    }

    correr() {
        console.log('Correr')
    }

    rosnar() {
        console.log('rosnar')
    }

}

class Passaro extends Animal {

    constructor() {
        super()
        this._bico = 'Curto'
    }

    get bico() {
        return this._bico
    }
    set bico(descricao) {
        this._bico = descricao
    }

    voar() {
        console.log('Voar')
    }

}

class Papagaio extends Passaro {

    constructor() {
        super()
        this._sabeFalar = true
    }

    get sabeFalar() {
        return this._sabeFalar
    }
    set sabeFalar(descricao) {
        this._sabeFalar = descricao
    }

    falar() {
        console.log('Falar')
    }

}

let animal = new Animal()
let cachorro = new Cachorro()
let passaro = new Passaro()
let papagaio = new Papagaio()

console.log(animal)
console.log(cachorro)
console.log(passaro)
console.log(papagaio)

papagaio.cor = 'Verde com branco'
papagaio.tamanho = '25cm'
papagaio.peso = '320g'

console.log(papagaio)