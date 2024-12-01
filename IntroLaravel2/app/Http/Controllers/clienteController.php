<?php
 
namespace App\Http\Controllers;
use App\Http\Requests\validadorCliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class clienteController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    /**
     * Muestra la consulta del CRUD
     */
    public function index()
    {
        $consultaClientes=DB::table('clientes')->get();
        return view('clientes',compact('consultaClientes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Aquí se ejecuta el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            'nombre'=> $request->input('txtnombre'),
            'apellido'=> $request->input('txtapellido'),
            'correo'=> $request->input('txtcorreo'),
            'telefono'=> $request->input('txttelefono'),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        $usuario= $request->input('txtnombre');
        session()->flash('exito','Se guardó el usuario:  '.$usuario);
        return to_route('formulario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) //se pasa como parametro el id que deseamos modificar
    {
        $consultaClientes=DB::table('clientes')->where('id', $id)->first(); //se seleccionan los datos del id correspondiente

        if(!$consultaClientes){ //se consulta si en la base de datos existe el cliente

            return redirect('clientes')->with('error','Cliente no encontrado.'); //validación para mandar un msj si el cliente no existe
        }

        return view('editarclientes',compact('consultaClientes')); //se manda el registro a la vista editarclientes
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request)
    {
        $id = $request->input('id'); //se iguala la variable a el id solicitado de nuestro formulario

        DB::table('clientes')
        ->where('id', $id) //donde el usuario corresponda al id
        ->update([ //se actualizan los datos
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'updated_at' => Carbon::now(), //Actualiza la marca de tiempo
        ]);

        session()->flash('exito','Se actualizó el usuario'); //mensaje de éxito
        return to_route('clientes'); //se muestra la vista de la ruta de clientes
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \Log::info("ID recibido para eliminar: " . $id); //verifica que el Id llega al método

        $cliente = DB::table('clientes')->find($id); //encuentra el id en la tabla

    if (!$cliente) { //validación por si el cliente no existe
        return response()->json(['success' => false, 'message' => 'El cliente no existe.'], 404);
        return to_route('clientes');
    }

        $eliminar = DB::table('clientes') //el registro llega a la variable eliminar para que proceda con el método delete
        ->where('id',$id)
        ->delete();

        if($eliminar){ //Se comprueba si la eliminación fue exitosa

            return response()->json(['success' => true, 'message' => 'El cliente se eliminó correctamente.']);
        }
        else{
            return response()->json(['success' => false, 'message' => 'No se pudo eliminar el cliente.'], 500);
        }

        return to_route('clientes'); //se muestra la vista de la ruta de clientes
    }
}
