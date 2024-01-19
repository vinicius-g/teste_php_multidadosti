<?php
require_once("./DataRequest.php");

if (isset($_GET["request"]) && $_GET["request"] === "clientes") {
    $lista_clientes = $dataRequest->dadosClientes();

    $tabela_clientes =
    "<thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    ";

    foreach ($lista_clientes as $cliente_id => $cliente) {
        $cliente_id += 1;
        $tabela_clientes .= "<tr>
            <td> {$cliente_id} </td>
            <td> {$cliente["nome"]} </td>
            <td> {$cliente["cpf"]} </td>
            <td> {$cliente["endereco"]} </td>
            <td> {$cliente["telefone"]} </td>
            <td> {$cliente["email"]} </td>
        <tr>";
    }

    $tabela_clientes .= "</tbody>";

    echo $tabela_clientes;
}

if (isset($_GET["request"]) && $_GET["request"] === "usuarios") {
    $lista_usuarios = $dataRequest->dadosUsuarios();

    $tabela_usuarios =
    "<thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Usuário</th>
        </tr>
    </thead>
    <tbody>
    ";

    foreach ($lista_usuarios as $usuario_id => $usuario) {
        $usuario_id += 1;

        $tabela_usuarios .= "<tr>
            <td> {$usuario_id} </td>
            <td> {$usuario["nome"]} </td>
            <td> {$usuario["cpf"]} </td>
            <td> {$usuario["endereco"]} </td>
            <td> {$usuario["telefone"]} </td>
            <td> {$usuario["usuario"]} </td>
        <tr>";
    }

    $tabela_usuarios .= "</tbody>";

    echo $tabela_usuarios;
}

if (isset($_GET["request"]) && $_GET["request"] === "fornecedores") {
    $lista_fornecedores = $dataRequest->dadosFornecedores();

    $tabela_fornecedores =
    "<thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Cidade</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    ";

    foreach ($lista_fornecedores as $fornecedor_id => $fornecedor) {
        $fornecedor_id += 1;

        $tabela_fornecedores .= "<tr>
            <td> {$fornecedor_id} </td>
            <td> {$fornecedor["nome"]} </td>
            <td> {$fornecedor["cpf"]} </td>
            <td> {$fornecedor["cidade"]} </td>
            <td> {$fornecedor["email"]} </td>
        <tr>";
    }

    $tabela_fornecedores .= "</tbody>";

    echo $tabela_fornecedores;
}