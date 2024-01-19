const botaoVisualizarClientes = document.getElementById("botao-visualizar-clientes");
const botaoVisualizarUsuarios = document.getElementById("botao-visualizar-usuarios");
const botaoVisualizarFornecedores = document.getElementById("botao-visualizar-fornecedores");

function visualizarInformacoes(requisicao, cor) {
	const bordaTabela = document.querySelector(".portlet.box");
	const bordaTabelaCorAtual = bordaTabela.classList[2];
	const nomeTabela = document.querySelector(".caption");

	bordaTabela.classList.remove(bordaTabelaCorAtual);
	bordaTabela.classList.add(cor);
	nomeTabela.innerHTML = `<i class="fa fa-folder-open"></i> Tabela ${requisicao}`;

	pegarDados(requisicao);
}

function pegarDados(requisicao) {
	$.ajax({
		type: "GET",
		url: "/handleDataRequest.php",
		data: { request: requisicao },
		success: function (response) {
			const tabela = document.querySelector(".table.table-hover");
			tabela.innerHTML = response;
		},
		error: function (xhr, status, error) {
			console.log(`Error: ${error}, status: ${status}`);
		},
	});
}

botaoVisualizarClientes.addEventListener("click", function() {
    visualizarInformacoes('clientes', 'blue');
});
botaoVisualizarUsuarios.addEventListener("click", function() {
    visualizarInformacoes('usuarios', 'green');
});
botaoVisualizarFornecedores.addEventListener("click", function() {
    visualizarInformacoes('fornecedores', 'purple');
});