<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container">
    
    <h1>Alunos</h1>
    <hr>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <th>Nome</th>
            <th>Cidade</th>
            <th>Matrícula</th>
        </thead>
        
        <tbody>
            <?php
                foreach ($alunos as $cadaAluno) {
                    echo "<tr>
                        <td>{$cadaAluno['nome']}</td>
                        <td>{$cadaAluno['cidade']}</td>
                        <td>{$cadaAluno['matricula']}</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
    
</div>
