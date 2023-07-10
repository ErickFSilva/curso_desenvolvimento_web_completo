<?php

    /**
     * try: tente
     * catch: pegar
     * finally: finalmente
     * throw: lançar
     */

    try {

        echo '<h3>*** Try ***</h3>';

        $sql = 'select * from clientes';
        // mysql_query($sql); // erro

        if (!file_exists('require_arquivo_a.php')) {
            // throw new Error('O arquivo indisponível na data ' . date('d/m/Y H:i:s') . '. Continuando sem ele!');
            throw new Exception('O arquivo indisponível na data ' . date('d/m/Y H:i:s') . '. Continuando sem ele!');
        }

    }
    catch (Error $e) {

        echo '<h3>*** Catch Error ***</h3>';
        echo '<p style="color: red">' . $e . '</p>';

    }
    catch (Exception $e) {

        echo '<h3>*** Catch Exception ***</h3>';
        echo '<p style="color: red">' . $e . '</p>';

    }
    finally {

        echo '<h3>*** Finally ***</h3>';

    }

?>