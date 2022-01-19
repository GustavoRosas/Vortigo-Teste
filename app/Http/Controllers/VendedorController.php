<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
use Illuminate\Support\Facades\DB;
use App\Exceptions\Handler;
use App\Http\Requests\VendedorRequest;

class VendedorController extends Controller
{
    public function addVendedor(VendedorRequest $request)
    {  
        if(isset($request->nome))
            if( preg_match('/\d+/', $request->nome)>0 )
                $stErro = 'O nome não pode conter números.';

        if(isset($request->email))
            if(!filter_var($request->email, FILTER_VALIDATE_EMAIL))
                $stErro = "Email inválido.";

        if(!isset($stErro)){
            $obVendedor = new Vendedor;
            DB::beginTransaction();
            $obVendedor->nome = $request->nome;
            $obVendedor->email = $request->email;
            $obVendedor->save();
            
            $arDados = [
                "id_vendedor" => $obVendedor->id_vendedor,
                "nome" => $obVendedor->nome,
                "email"=> $obVendedor->email
            ];
            DB::commit();
        } else {
            $arDados = [ "mensagem" => $stErro ];
        }

        return response()->json($arDados);
    }

    public function listVendedor()
    {
        return response()->json(Vendedor::all());
      
    }
}
