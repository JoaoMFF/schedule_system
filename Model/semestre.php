 <?php
//João Filipe, 13568

class Semestre
{
    var $bd;

    function __construct($bd)
    {
        $this->bd = $bd;
    }

    public function getSemestre()
    {
        $semestre = array();
        $this->bd->connect();
        mysql_set_charset('utf8');
        $select = "SELECT * FROM Semestre";
        $query = mysql_query($select);
        $this->bd->close();
        $i = 0;

        while($row = mysql_fetch_array($query))
        {
            $semestre[$i]['id'] = $row['id'];
            $semestre[$i]['semestre'] = $row['semestre'];
            $i++;
        }
        return $semestre;
    }
}   
?>