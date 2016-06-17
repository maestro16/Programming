<?php
class DataBase
{
    public static $host;//="localhost";
    public static $user;//="root";
    public static $pass;//="";
    public static $name;//="u516131903_proj";
    public static $type = 'mysql';
    protected static $connection = null;
    private $dbh = null;
    public static function getInstance() {
        if (empty(self::$connection)) {
            self::$connection = new self();
        }
        return self::$connection;
    }
    public function connect() {
        if (!(self::$connection->dbh instanceof PDO)) {
            try {
                self::$connection->dbh = new PDO(self::$type.":host=".self::$host . ";dbname=" . self::$name, self::$user, self::$pass);
                self::$connection->dbh->exec("SET CHARACTER SET utf8");
                self::$connection->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return self::$connection->dbh;
            }
            catch (PDOException $e) {
                echo '<br>Ошибка:' . $e->getMessage(). '<br>';
            }
        }
        else {
            return self::$connection->dbh;
        }
    }
}
#endofclass
