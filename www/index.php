<html>
    <head>
        <title>Prueba php local postgres</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                $dbconn = pg_connect("host=host.docker.internal port=55004 dbname=smartinfo_web user=smartinfo_web password=smartinfo.04");

                $result = pg_query($dbconn, 'SELECT * FROM datos');
                if(pg_num_rows($result) > 0){
                    echo "Listado de nombres: <br>";
                    while($obj=pg_fetch_object($result)){
                        echo $obj->nombre . "<br>";
                    }
                }
            ?>
        </div>
    </body>
</html>
