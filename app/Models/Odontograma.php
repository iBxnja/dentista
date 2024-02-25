<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Odontograma extends Model
{
    protected $table = 'odontograma';
    protected $primaryKey = 'idOdontograma';
    public $timestamps = false;

    protected $fillable = [
        'idOdontograma', 'piezasPadecientes', 'infantil', 'adulto', 'mayor', 'doctora', 'cariado', 'obturado', 'perdida', 'extraccion', 'sano', 'observacion', 'fk_idCliente', 'dientes', 'numeroOdontograma',
    ];

    protected $hidden = [];

    public function cargarDesdeRequest($request){
        $this->idOdontograma = $request->input('id', $this->idOdontograma);
        $this->piezasPadecientes = $request->input('piezasPadecientes');
        $this->infantil = $request->input('infantil');
        $this->adulto = $request->input('adulto');
        $this->mayor = $request->input('mayor');
        $this->doctora = $request->input('doctora');
        $this->cariado = $request->input('cariado');
        $this->obturado = $request->input('obturado');
        $this->perdida = $request->input('perdida');
        $this->extraccion = $request->input('extraccion');
        $this->sano = $request->input('sano');
        $this->observacion = $request->input('observacion');
        $this->numeroOdontograma = $request->input('numeroOdontograma');
        $this->fk_idCliente = $request->input('fk_idCliente');
    }
      
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'fk_idCliente');
    }
    public function obtenerTodos()
    {
        $sql = "SELECT
                  idOdontograma,
                  piezasPadecientes,
                  infantil,
                  adulto,
                  mayor,
                  doctora,
                  cariado,
                  obturado,
                  perdida,
                  extraccion,
                  sano,
                  observacion,
                  fk_idCliente,
                  numeroOdontograma
                FROM odontograma ORDER BY idOdontograma";
        $lstRetorno = DB::select($sql);
        return $lstRetorno;
    }
    


    public function guardar($datosDientes)
{
    // Actualizar o crear el registro en la base de datos
    $this->updateOrCreate(
        ['idOdontograma' => $this->idOdontograma],
        [
            'piezasPadecientes' => $this->piezasPadecientes,
            'infantil' => $this->infantil,
            'adulto' => $this->adulto,
            'mayor' => $this->mayor,
            'doctora' => $this->doctora,
            'cariado' => $this->cariado,
            'obturado' => $this->obturado,
            'perdida' => $this->perdida,
            'extraccion' => $this->extraccion,
            'sano' => $this->sano,
            'observacion' => $this->observacion,
            'fk_idCliente' => $this->fk_idCliente,
            'numeroOdontograma' => $this->numeroOdontograma,
            'dientes' => json_encode($datosDientes),
        ]
    );
}


    
    #--------------------------------------------------------------------------------------
    public function eliminar(){
        #crear query(consulta) en una variable
        $sql = "DELETE FROM odontograma WHERE idOdontograma=?";
    
        $affected = DB::delete($sql, [$this->idOdontograma]);
    }
    #--------------------------------------------------------------------------------------





}


