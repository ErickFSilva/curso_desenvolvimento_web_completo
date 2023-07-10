let funcionarios = [
    {nome: 'Fernanda', cargo: 'Analista de RH', salario: 3100, status: 'Ativo'},
    {nome: 'Miguel', cargo: 'Assistente ADM', salario: 1700, status: 'Ativo'},
    {nome: 'Rosa', cargo: 'Auxiliar de contabilidade', salario: 1600, status: 'Inativo'},
    {nome: 'Roberto', cargo: 'Programador PHP', salario: 4500, status: 'Ativo'},
    {nome: 'Maria', cargo: 'Engenheira mecânica', salario: 7500, status: 'Ativo'},
]

let filtro = funcionarios.filter(dado => dado.salario < 2000)
                         .filter(dado => dado.status == 'Ativo')

console.log(filtro)