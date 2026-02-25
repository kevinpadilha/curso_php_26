<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>

<p>oiii</p>
<hr>
<h3>Todos usuarios</h3>
<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Nome Usuario</th>
            <th>Status</th>
            <th>Email</th>
        </tr>
    </thead>
        <?php
            $existeUsuarios = !empty($usuarios);
            if ($existeUsuarios) {

                foreach($usuarios as $idx => $usuario){
                    $status = $usuarios->status == 1 ? "Ativo" : "Inativo";
                    ?>
                <tr>
                    <th>1</th>
                    <th>Kevin</th>
                    <th>kvn</th>
                    <th>ativo</th>
                    <th>kevin@infoserv.com</th>
                </tr>
               
                <?php }

            }
        ?>

</table>
</body>
</html>