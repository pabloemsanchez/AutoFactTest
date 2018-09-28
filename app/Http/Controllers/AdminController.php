<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava2;
//use Khill\Lavacharts\Lavacharts;
use App\Quiz;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('admin');
    }

    public function grafico()
    {
    	$stocksTable = Lava2::DataTable();

		$stocksTable->addStringColumn("Texto")
					->addNumberColumn('%');

		$con1 = Quiz::where('Q2','Si');
		$con2 = Quiz::where('Q2','No');
		$con3 = Quiz::where('Q2','Mas o Menos');

	    $stocksTable->addRow([
	      "Si", $con1->count()
	    ]);
		$stocksTable->addRow([
	      "No", $con2->count()
	    ]);
	    $stocksTable->addRow([
	      "Mas o Menos", $con3->count()
	    ]);
		
		$chart = Lava2::PieChart("Porcentaje de Respuestas",$stocksTable, ['is3D'=>true]);

    	return view('grafico')->with('graf',$chart);
    }
}
