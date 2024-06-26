<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/bootstrap/dist/bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
    <script type="text/javascript" src="public/js/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>


    <title>Cilindros</title>
</head>
<body>
<div class="div_header page-header">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center"><h1 class="titulo">Cilindros</h1></div>
        <div class="col-md-3"></div>

<!-- aqui comienza el datatable -->
        <div class="container">
            <table id="example" name="usuarios" class="display table table-striped" cellspacing="0" width="100%">
                <thead class=" table table-striped table-dark">
                <tr class="active">
                    <td>ID</td>
                    <td>Formato</td>

                    <td></td>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($resultado as $row)  {   ?>
                    <tr>
                    <td><?php echo $row['ID_CILINDROS']  ?></td>
                    <td><?php echo $row['FORMATO']?></td>
                    <td><a href="#" class="btn btn-success">Detalle</a></td>
                    </tr><?php } ?>
                </tbody>
            </table>
            <a href="../init.php" class="btn btn-success">Volver</a>
        </div>

    </div>
</div>
</body>
</html>