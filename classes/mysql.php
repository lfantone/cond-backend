<?

if (!class_exists('db_mysql')) {

  class db_mysql {

    var $connection;
    var $host;
    var $user;
    var $pass;
    var $base;
    var $id;

    function connect() {
      /*
        $this->host = 'mysql50-37.wc1.dfw1.stabletransit.com';
        $this->user = '384668_condu';
        $this->pass = 'Mysql2009';
        $this->base = '384668_conduciendo';
       */
		/*
        $this->host = 'conduciendo2009.db.5102269.hostedresource.com';
        $this->user = 'conduciendo2009';
        $this->pass = 'Conduciendo1!';
        $this->base = 'conduciendo2009';
        */
      $this->host = 'localhost';
      $this->user = 'conduciendo_prod';
      $this->pass = 'm4sticoN1010';
      $this->base = 'conduciendo_prod';		
        

      $this->connection = @mysql_connect($this->host, $this->user, $this->pass) or die("<b>Error:</b> Connection to database server cannot be established.");
      @mysql_select_db($this->base, $this->connection) or die("<b>Error:</b> Connection to database cannot be established.");
    }

    function close() {
      @mysql_close($this->connection);
    }

    function query($query) {
      $result = mysql_query($query, $this->connection);
      return $result;
    }

    function strip($string) {
      return "'" . mysql_real_escape_string($string, $this->connection) . "'";
    }

    function list_assoc($query) {
      $results = array();
      $resource = $this->query($query);
      while ($row = @mysql_fetch_assoc($resource)) {
        $results[] = $row;
      }
      @mysql_free_result($resource);
      return $results;
    }

    function row_assoc($query) {
      $resource = $this->query($query);
      $result = @mysql_fetch_assoc($resource);
      @mysql_free_result($resource);
      return $result;
    }

    function update($table, $values, $where) {
      $result = $this->query("UPDATE $table SET $values WHERE $where");
      return $result;
    }

    function insert($table, $values) {
      $result = $this->query("INSERT INTO $table SET $values");
      $this->id = mysql_insert_id();
      return $result;
    }

    function insert_id() {
      return $this->id;
    }

  }

}
?>
