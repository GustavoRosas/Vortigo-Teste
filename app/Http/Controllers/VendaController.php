<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Vendedor;
use App\Http\Requests\VendaRequest;

class VendaController extends Controller
{
    public function addVenda (VendaRequest $request) 
    {
        $obVendedor = Vendedor::all()->where('id_vendedor', $request->id_vendedor)->first();

        if(isset($obVendedor)){
            $obVenda = new Venda;
            $obVenda->id_vendedor = $request->id_vendedor;
            $obVenda->valor_venda = $request->valor_venda;

            $flValorComissao = floatval($obVendedor->comissao) * floatval($request->valor_venda);
            $obVenda->vendedor_comissao = $flValorComissao;
            $obVenda->save();

            $arDados = [
                "id_venda" => $obVenda->id_venda,
                "nome" => $obVendedor->nome,
                "email"=> $obVendedor->email,  
                "valor_venda"=> $obVenda->valor_venda,  
                "vendedor_comissao"=> $obVenda->vendedor_comissao,  
                "data_venda"=> $obVenda->data_venda,
            ];

            return response()->json($arDados);
        } else {
            $arDados = [
                "mensagem" => 'Não foi possível inserir esta venda. Verifique o código do Vendedor e o valor da venda.'
            ];
            return response()->json($arDados);
        }
    }

    public function listVenda (Request $request)
    {

        $obVendas = Venda::orderBy('vendedor.id_vendedor')
                            ->join('vendedor', function($join) {
                                $join->on('vendedor.id_vendedor', '=', 'venda.id_vendedor');
                            })
                            ->select('venda.id_venda', 'venda.valor_venda', 'vendedor.nome', 'vendedor.email', 'venda.vendedor_comissao', 'venda.data_venda')
                            ->paginate(15);
        foreach ($obVendas as $arDados){
            $arDadosVenda[] = $arDados;
        }
      
        return response()->json($arDadosVenda);
    }

}
