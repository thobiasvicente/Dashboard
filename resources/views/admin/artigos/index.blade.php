@extends('layouts.app')

@section('content')
  <pagina tamanho="12">
    <painel titulo="Lista de Artigos">
      <tabela-lista 
      v-bind:titulos="['#','Título','Descrição']"
      v-bind:itens="[[1,'testee','teste!!!!!!!!'],[2,'testii','testi!!!11!'],[3,'thestee','thestii!!']]"
      order='desc' ordercol='1'
      criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="489413646456"
      ></tabela-lista>
      

    </painel>

  </pagina>
@endsection
