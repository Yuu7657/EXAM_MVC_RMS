
    <?php 
    class Conexion {
        public static function conectar() {
            $dsn = "mysql:host=localhost; dbname=mvc";
            $usuario = "root";
            $password = "utom";
            try {
                $cnn = new PDO($dsn, $usuario, $password);
            } catch (PDOException $e) {
                echo "Fallo la conexion:" . $e -> getMessage();
            }
               return $cnn;
        }
    }
    ?>
</body>
</html>