<?php
/**
 * PHP home
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>PHP | <?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => "Cursos, artigos e matérias sobre desenvolvimento web de alta qualidade",
            "keywords" =>  KEYWORDS_PAD . KEYWORDS_TEC . KEYWORDS_PHP
        );
        include BASE_PATH.COMPONENTES_PATH."head_meta.php";
        ?>
        <?php include BASE_PATH.COMPONENTES_PATH."head_links_css.php"; ?>
        <style type="text/css">
            div.materia-resumo.lista-php {
                background-image: url("../furia/imagens/lista_php.png");
            }
        </style>
    </head>
    <body class="respiro-em-baixo">

        <?php
        $nav_top['secao'] = "php";
        include BASE_PATH.COMPONENTES_PATH."nav_top.php";
        ?>

        <div class="container">

            <div class="row">
                <div class="span12">
                    <header>
                        <p>
                            <?php include BASE_PATH.COMPONENTES_PATH."google_search.php"; ?>
                        </p>
                    </header>
                </div>
            </div>

            <div class="row">
                <div class="span10 offset1">
                    <?php
                    $tree_completa['secao'] = "php";
                    $tree_completa['nivel'] = "basico";
                    include BASE_PATH.COMPONENTES_PATH."tree_completa.php";
                    ?>
                </div>
            </div>


            <div class="row">
                <div class="span10 offset1">
                    <div class="furia-lista-materias">
                        <?php
                        $order    = "ORDER BY secao, ordem";
                        $where    = "WHERE secao = 'php'";
                        $materias = Materia::getObjects($where, $order);
                        ?>
                        <?php foreach($materias as $materia): ?>
                            <div class="materia-resumo lista-<?php echo $materia->secao; ?>">
                                <a href="<?php echo BASE_PATH.$materia->url ?>">
                                    <em><?php echo $materia->titulo; ?></em>
                                    <span class="resumo">
                                        <?php echo $materia->resumo; ?> (continuar lendo)
                                    </span>
                                    <span class="hidden-phone assinatura">
                                        <?php echo $materia->autor; ?>,
                                        atualizado em <?php echo $materia->dt_atualizacao; ?>,
                                        escrito em <?php echo $materia->dt_criacao; ?>.
                                    </span>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>


        </div><!-- container -->

    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>