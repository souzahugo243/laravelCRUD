@extends('Templates.Template')
<!-- Card HEADER -->
@section('cabecalho-card-header') 
<div class="alert alert-success" role="alert">
   Visualizando Informações Categoria
</div> @endsection

<!-- Conteudo da Pagina de Inicio -->
@section('content')
    <div class="container-fluid">     
        <form>       
            <div class="form-row">              
                  <h5><label for="id">Código: {{$category->id}}</label></h5>                                            
            </div>           
            <div class="form-row">              
                  <h5><label for="name">Nome: {{$category->name}}</label></h5>                                            
            </div>  
            <div class="form-row">              
                  <h5><label for="description">Descrição: {{$category->description}}</label></h5>                                            
            </div>
            <div class="form-row">              
                  <h5><label for="created">Criação: {{ date('d-m-Y h:m:s', strtotime($category->created_at)) }}</label></h5>                                            
            </div>
            <div class="form-row">              
                  <h5><label for="updated">Modificado: {{ date('d-m-Y h:m:s', strtotime($category->updated_at)) }}</label></h5>                                            
            </div>          
        </form>
    </div>
    <div class="col-md-12 mb-3">
      <a href="{{url('/category')}}">
        <button type="submit" class="btn btn-sm btn-success" style="margin-left:-8px;">
          <i class="fa fa-arrow-left" aria-hidden="true"></i>
          Voltar
        </button>
      </a>  
      </div> 
@endsection
  