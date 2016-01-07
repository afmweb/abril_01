<div class="container">
    <div class="row  magin-topo80">
        <div class="col-xs-12">

            <h2>Estoque</h2>
            <table class="table table-responsive table-bordered table-hover magin-topo40 table-striped">
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                </tr>
                <?php foreach ($estoque as $row): ?>
                    <tr>
                        <td><?php echo $row->nome ?></td>
                        <td><?php echo $row->quantidade ?></td>                        
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>