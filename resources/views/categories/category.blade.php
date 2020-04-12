@extends('Templates.Template')
<!-- Card HEADER -->
@section('cabecalho-card-header') 
@endsection
<!-- Conteudo da Pagina de Inicio -->
@section('content')
<div class="row"> 
  <div class="col-md-5 mb-3 ml-3">
    <a href="{{url("category/create")}}">
     <button type="submit" class="btn btn-sm btn-success" style="margin-left:-15px;">
       <i class="fa fa-plus" aria-hidden="true"></i>
       Cadastrar
     </button>
    </a>      
  </div>
  {{-- <div class="col-md-6 mb-3 ml-5">
    <form class="form-inline" action="{{url("/search")}}" method="GET">
      <div class="form-group">
        <input type="search" name="search" class="form-control" autocomplete="off">
        <span class="form-group-btn">
           <button type="submit" class="btn btn-primary">Localizar</button>
        </span>
      </div>
    </form>
  </div>  --}}
</div>
  <div class="table-responsive">
 
    <table id="datatable" class="table table-sm table-bordered text-center" width="100%">
      <thead class="thead-dark">
        <th>Código</th>
        <th>Nome</th>
        <th>Descrição</th> 
        <th>Ações</th>     
        {{-- <th>Ações</th> --}}
      </thead>
      {{-- @foreach($category as $categories)           
      <tbody>  
        <td>{{$categories->id}}</td>
        <td>{{$categories->name}}</td>
        <td>{{$categories->description}}</td>      
        <td>
           <a href="{{url("category/$categories->id")}}">             
             <button type="submit" class="btn btn-sm btn-outline-dark">
                <i class="fa fa-search" aria-hidden="true"></i>
                Exibir
             </button>   
           </a> 
           <a href="{{url("category/$categories->id/edit")}}">
             <button type="submit" class="btn btn-sm btn-outline-primary">
                <i class="fa fa-edit" aria-hidden="true"></i>
                Editar
             </button>   
           </a>
           <a href="{{url("category/$categories->id")}}" class="exclusaoJS">
             <button type="submit" class="btn btn-sm btn-outline-danger">
                <i class="fa fa-trash" aria-hidden="true"></i>
                Excluir
             </button>   
           </a>  
        </td>
      </tbody>
    @endforeach     --}}
   </table>
  </div>
@endsection
{{-- Conteudo - JS --}}
@section('data-table')
$(document).ready( function () {
  $('#datatable').DataTable({
      "language": {
                     "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
                  },
      processing: true,
      serverSide: true,
      ajax: '{{route('categoria.data')}}',
      columns:[
        {data: 'id',          name: 'id'},
        {data: 'name',        name: 'name'},
        {data: 'description', name: 'description'},
        {data: 'action',      name: 'action', orderable: false}       
      ]
  });
} );

// Exclusao Categoria Selecionada
$(document).on('click', '#deleteCategory', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    
    $.ajax({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '{{ route("category.destroy") }}',
        data: {
            'id': id
        },
        success: function(data){
            //
            $('#datatable').DataTable().ajax.reload(null, false);
        }
    });
});
@endsection

  