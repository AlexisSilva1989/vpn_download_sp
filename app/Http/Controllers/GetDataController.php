<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Utils\Json;

class GetDataController extends Controller
{
    /*
        Nombre Proceso Almacenado: RV_KPI_Equipos
        Parámetros: equipo, fecha inicio, fecha fin
        Ejemplo: Exec RV_KPI_Equipos ‘141ML1011’, ‘2021-01-01’,’2021-02-28’
    */

    public function getRvKpiEquipos (Request $request) {

        //$request->equipo $request->fecha_inicio $request->fecha_fin

        $data = DB::select('EXEC RV_KPI_Equipos(?,?,?)', ['141ML1011', '2021-01-01','2021-02-28']);

        $response = response()->json($data);

        return $response;
    }

    /*
        Nombre Proceso Almacenado: RV_Cambio_Revestimiento
        Parámetros: equipo, fecha inicio, fecha fin
        Ejemplo: Exec RV_Cambio_Revestimiento ‘141ML1011’, ‘2020-01-01’,’2021-09-16’
    */

    public function getRvCambioRevestimiento (Request $request) {

        //$request->equipo $request->fecha_inicio $request->fecha_fin

        $data = DB::select('EXEC RV_Cambio_Revestimiento(?,?,?)', ['141ML1011', '2021-01-01','2021-02-28']);

        $response = response()->json([]);

        return $response;
    }

    /*
        Nombre Proceso Almacenado: RV_Tonelaje_Por_Revestimiento
        Parámetros: equipo, fecha inicio, fecha fin
        Ejemplo: Exec RV_Tonelaje_Por_Revestimiento ‘141ML1011’, ‘2020-01-01’,’2021-09-16’
    */

    public function getRvTonelajePorRevestimiento (Request $request) {

        //$request->equipo $request->fecha_inicio $request->fecha_fin

        $data = DB::select('EXEC RV_Tonelaje_Por_Revestimiento(?,?,?)', ['141ML1011', '2021-01-01','2021-02-28']);

        $response = response()->json($data);

        return $response;
    }
}
