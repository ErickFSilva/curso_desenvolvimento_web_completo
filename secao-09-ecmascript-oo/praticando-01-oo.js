
function enviaDados() {

    let nome = document.getElementById('nome').value
    document.getElementById('nome').value = ''

    let tipo = document.getElementById('tipo').value
    document.getElementById('tipo').value = ''

    class Alimentos {

        constructor(nome, tipo) {
            this._nome = nome
            this._tipo = tipo
        }
    
        get nome() {
            return this._nome
        }
        set nome(cont) {
            this._nome = cont
        }
    
        get tipo() {
            return this._tipo
        }
        set tipo(cont) {
            this._tipo = cont
        }
    
        exibeAlimentos() {
            return `Nome: ${nome}; Tipo: ${tipo}`
        }
    
    }
    
    let alimentos = new Alimentos(nome, tipo)

    console.log(alimentos.exibeAlimentos())

}
