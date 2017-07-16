 <?php
 //João Filipe, 13568

class AnoLectivo
{
    var $bd;

    function __construct($bd)
    {
        $this->bd = $bd;
    }

    public function getAno()
    {
        $anoLectivo = array();
        $this->bd->connect();
        mysql_set_charset('utf8');
        $select = "SELECT * FROM anoLectivo";
        $query = mysql_query($select);
        $this->bd->close();
        $i = 0;

        while($row = mysql_fetch_array($query))
        {
            $anoLectivo[$i]['id'] = $row['id'];
            $anoLectivo[$i]['ano_lectivo'] = $row['ano_lectivo'];
            $i++;
        }
        return $anoLectivo;
    }
}  
?>