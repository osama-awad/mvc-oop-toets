<?php

class Reuzenrad extends BaseController
{

    private $ReuzenradModel;

    public function __construct()
    {
        $this->ReuzenradModel = $this->model('ReuzenradModel');
    }

public function index()
{

    $result = $this->ReuzenradModel->getReuzenrad();

   

    $rows = '';
    foreach($result as $Reuzenrad) {
        $rows .= "<tr>
                <td>$Reuzenrad->Naam</td>
                <td>$Reuzenrad->Hoogte</td>
                <td>$Reuzenrad->Land</td>
                <td>$Reuzenrad->Kosten</td>
                <td>$Reuzenrad->AantalPassagiers</td>
                </tr>";
    }

    $data = [
        'title' => 'Top 5 hoogste rezenraden ter wereld',
        'rows' => $rows
    ];


        $this->view('Reuzenrad/index', $data);
}





}