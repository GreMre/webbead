<?php

class Invertories extends Controller
{
    private $db;

    public function __construct()
    {
        // Inicializálj egy PDO kapcsolatot az adatbázishoz
        $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $this->db->exec("set names 'utf8'");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function index() {
        $data = [
            'title' => 'Client',
            'description' => ''
        ];
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $gepid = $_POST['klubid'];
    
            // Példa SQL lekérdezés a gép adatainak lekérésére
            $stmt = $this->db->prepare('SELECT * FROM klub WHERE id = :klubid');
            $stmt->bindParam(':klubid', $klubid, PDO::PARAM_INT);
            $stmt->execute();
            $data['csapatnev'] = $stmt->fetchAll(PDO::FETCH_OBJ);
    
            // Példa SQL lekérdezés a géphez tartozó telepített szoftverek lekérésére
            $stmt = $this->db->prepare('SELECT l.vezeteknev, l.utonev, p.nev FROM poszt p
                JOIN labdarugo l ON p.posztid = l.posztid
                WHERE p.posztid = :posztid');
            $stmt->bindParam(':posztid', $posztid, PDO::PARAM_INT);
            $stmt->execute();
            $installedSoftware = $stmt->fetchAll(PDO::FETCH_OBJ);
    
            // Csoportosítás név, kategória és verzió alapján
            $groupedSoftware = [];
            foreach ($jatekosPoszt as $software) {
                $key = $software->nev . '_' . $software->kategoria . '_' . $software->verzio;
                if (!isset($groupedPoszt[$key])) {
                    $groupedPoszt[$key] = $software;
                }
            }
    
            $data['jatekosPoszt'] = array_values($groupedPoszt);
        }
    
        $this->view('pages/inventory', $data);
    }
    
}