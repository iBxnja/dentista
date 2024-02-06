<?php

namespace App\Http\Controllers;

use App\Models\imagenes;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControladorImagen extends Controller
{
    public function index()
    {
        $aImagenes = Imagenes::with('cliente')->get(); // Obtener todas las imágenes con la relación cargada
        return view('imagenes.imagenes-listar', compact('aImagenes'));
    }

    public function enviarNombreApellido(){
        $cliente = new Cliente();
        $aCliente = $cliente->obtenerNombreApellido();
        $imagen = new Imagenes();
        $aImagen = $imagen->obtenerTodos();
        return view('imagenes.imagenes-nuevo', compact('aCliente','aImagen'));
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'lstfk_idCliente' => 'required',
            'txtTitulo' => 'required',
            'txtTexto' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '-' . $imagen->getClientOriginalName();

            try {
                // Guardar la imagen en el directorio storage/app/public/imagenes
                $rutaImagen = $imagen->storeAs('public/imagenes', $nombreImagen);

                // Obtener la URL de la imagen almacenada en storage
                $urlImagen = Storage::url($rutaImagen);

                // Crear un nuevo registro en la base de datos
                imagenes::create([
                    'imagen' => $urlImagen,
                    'titulo' => $request->input('txtTitulo'),
                    'texto' => $request->input('txtTexto'),
                    'fk_idCliente' => $request->input('lstfk_idCliente'),
                ]);

                return redirect()->route('inicio.inicio')->with('mensaje', '¡Excelente, se agregó correctamente la imagen!');
            } catch (\Exception $e) {
                $error = "¡Parece que ocurrió un error!.";
                return redirect()->route('inicio.inicio')->with('error', $error);
            }
        } else {
            $error = "¡Parece que ocurrió un error!.";
            return redirect()->route('inicio.inicio')->with('error', $error);
        }
    }

    public function eliminar($id)
    {
        $imagen = imagenes::find($id); // Asegúrate de que la clase sea 'imagenes' en lugar de 'Imagenes'

        if ($imagen) {
            $imagen->eliminar();
            $mensaje = "¡Excelente, se eliminó correctamente la imagen!";
            return redirect()->route('inicio.inicio')->with('mensaje', $mensaje);
        } else {
            $error = "¡Parece que ocurrió un error!.";
            return redirect()->route('inicio.inicio')->with('error', $error);
        }
    }
}
