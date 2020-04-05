<?php




////enter data to connect
//$servername = "localhost";
//$username = "admin";
//$password = "admin";
//$dbName = "skopins";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbName);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully" . '</br>' . '1';
//
//
//
////select from db datas, return to var and print_r to array
//$sql = "SELECT title FROM content";
//$result = mysqli_query($conn, $sql);
//$datas = array();
//if (mysqli_num_rows($result) > 0)
//{
//    while ($row = mysqli_fetch_assoc($result)) {
//        $datas[] = $row;
//    }
//}
//print_r($datas);



class db
{

    protected $connection;
    protected $query;
    public $query_count = 0;

    public function __construct($dbhost = 'localhost', $dbuser = 'root', $dbpass = '', $dbname = '', $charset = 'utf8')
    {
        $this->connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($this->connection->connect_error) {
            die('Failed to connect to MySQL - ' . $this->connection->connect_error);
        }
        $this->connection->set_charset($charset);
    }

    public function checkConnection ()
        {
                if ($this->connection->connect_error)
                {
                die("Connection failed: " . $this->connection->connect_error);
                }
                echo "Connected successfully" . '</br>' . '1';

        }

    //select from db datas, return to var and print_r to array
    public function query($sql)
    {
        $result = mysqli_query($this->connection, $sql);
        $datas = array();
        if (mysqli_num_rows($result) > 0)
        {
            while ($row = mysqli_fetch_assoc($result)) {
                $datas[] = $row;
            }
        }
        print_r($datas);
    }
}

$connect = new db('localhost', 'admin', 'admin', 'skopins');
$connect->checkConnection();
$connect->query("SELECT title FROM content");


?>