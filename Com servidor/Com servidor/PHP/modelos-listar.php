<h1>Listar Modelo</h1>
<?php
    $sql ="SELECT * FROM modelo AS mo
           INNER JOIN marca AS ma
           ON mo.marca_id_marca = ma.id_marca";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "Encontrou <b>$qtd</b> resultado(s)";
        print"<table class='table table-cordered table-hover'";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Marca</th>";
        print "<th>Modelo</th>";
        print "<th>Cor</th>";
        print "<th>Armazenamento</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_modelo."</td>";
            print "<td>".$row->nome_marca."</td>";
            print "<td>".$row->nome_modelo."</td>";
            print "<td>".$row->cor_modelo."</td>";
            print "<td>".$row->armazenamento_modelo."</td>";
            print "<td>
                        <button onclick=\"location.href='?page=modelos-editar&id_modelo=".$row->id_modelo."'\" class='btn btn-primary'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que desaja excluir?')){location.href='?page=modelos-salvar&acao=excluir&id_modelo=".$row->id_modelo."'}else{false}\"  class='btn btn-danger'>Excluir</button>
                  </td>";
            print "</tr>";
        }
        print"</table>";
    } else {
        print "Não encontrou resultado";
        }
?>