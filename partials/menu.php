<?php
$page_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path_parts = explode('/', $page_path);
$page_name = $path_parts[1];
$trimmed_page_name = trim($page_name, ".php");

$menu_itens = array(
    "Dashboard" => array(
        "name" => "index",
        "link" => "/index.php",
        "icon" => "fa fa-home",
        "sub_itens" => array()
    ),
    "Cadastro" => array(
        "name" => "cadastro",
        "link" => "javascript:;",
        "icon" => "fa fa-file-text",
        "sub_itens" => array(
            "Cliente" => "/cadastro/cliente.php",
            "Fornecedor" => "/cadastro/fornecedor.php",
            "Perfil de acesso" => "/cadastro/perfil-de-acesso.php",
            "Produtos" => "/cadastro/produtos.php",
            "Usuário" => "/cadastro/usuario.php"
        )
    ),
    "Relatório" => array(
        "name" => "relatorio",
        "link" => "javascript:;",
        "icon" => "fa fa-bar-chart-o",
        "sub_itens" => array(
            "Cliente" => "/relatorio/cliente.php",
            "Faturamento" => "/relatorio/faturamento.php",
            "Produtos" => "/relatorio/produtos.php",
        )
    )
);
?>

<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone">
                </div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search" action="extra_search.html" method="POST">
                    <div class="form-container">
                        <div class="input-box">
                            <a href="javascript:;" class="remove"></a>
                            <input type="text" placeholder="Search..." />
                            <input type="button" class="submit" value=" " />
                        </div>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <?php foreach ($menu_itens as $menu_item => $menu_item_data): ?>
            <li class="<?php echo $trimmed_page_name === strtolower($menu_item_data["name"]) ? "start active" : "" ?>">
                <a href="<?php echo $menu_item_data["link"] ?>">
                    <i class="<?php echo $menu_item_data["icon"] ?>"></i>
                    <span class="title">
                        <?php echo $menu_item ?>
                    </span>
                    <span class="selected">
                    </span>
                </a>
                <?php if (sizeof($menu_item_data["sub_itens"]) > 0) { ?>
                <ul class="sub-menu">
                    <?php foreach ($menu_item_data["sub_itens"] as $sub_menu_item => $sub_menu_item_data): ?>
                    <li>
                        <a href="<?php echo $sub_menu_item_data ?>"><?php echo $sub_menu_item ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php }; ?>
            </li>
            <?php endforeach; ?>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>