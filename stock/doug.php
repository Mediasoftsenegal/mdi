<?
  class md{
    private $host = 'localhost';
	private $database = 'remacons_mdcaisse';
	private $username = 'remacons_mdi';
	private $pass =  'j9BAfWuyF-4!';			
	private $port='5432';
    private $db;

    public function __construct($host=null, $username=null, $pass=null, $database=null, $port=null){
        if($host != null){

            $this->host = $host;

            $this->username = $username;

            $this->pass = $pass;

            $this->database = $database;

        }
        $this->md = new PDO('mysql:host='.$this->host.';dbname='.$this->database.';charset=utf8', ''.$this->username.'', ''.$this->pass.'',''.$this->port.'' );
    }
    public function query($sql, $data = array()){

        $req = $this->md->prepare($sql);

        $req->execute($data);

        return $req->fetchAll(PDO::FETCH_OBJ);

    }
}
  ?> 