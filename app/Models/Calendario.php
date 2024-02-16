<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;

    protected $table = 'calendario';
    protected $primaryKey = 'idCalendario';
    public $timestamps = false;

    protected $fillable = [
        'idCalendario','nombre','fecha',
    ];


    public function obtenerTodos()
    {
        $sql = "SELECT
                  idCalendario,
                  nombre,
                  fecha
                FROM calendario ORDER BY idCalendario";
        $lstRetorno = DB::select($sql);
        return $lstRetorno;
    }



    #--------------------------------------------------------------------------------------
    public function eliminar(){
        #crear query(consulta) en una variable
        $sql = "DELETE FROM calendario WHERE idCalendario=?";
    
        $affected = DB::delete($sql, [$this->idCalendario]);
    }
    #--------------------------------------------------------------------------------------



}
