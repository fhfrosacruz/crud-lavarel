<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastrosModel; //imposta o componente model para ser usado neste local

class CadastrosController extends Controller
{
    private $dados_tbl; //tras todo o conteudo da tbl Cadastros

    public function __construct()
    {
        $this->dados_tbl = new CadastrosModel(); //variavel dados..., é uma instancia de CadastrosModel
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dadosCadastrados = $this->dados_tbl->all();
        
       // dd($this->dados_tbl->all()); // comando de vardump do laravel
        return view('index', compact('dadosCadastrados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $cad = $this->dados_tbl->create([
            'nome'=>$request->nome,
            'cpf'=>$request->cpf,
            'endereco'=>$request->endereço
            ]);
            
        if($cad){
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dadosCadastrados = $this->dados_tbl->find($id);
        return view('show', compact('dadosCadastrados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($this->dados_tbl->all());
        $dadosCadastrados = $this->dados_tbl->find($id);
        return view('/cadastrar', compact('dadosCadastrados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($this->dados_tbl->all());
        $this->dados_tbl->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'cpf'=>$request->cpf,
            'endereco'=>$request->endereço
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->dados_tbl->destroy($id);
    }
}
