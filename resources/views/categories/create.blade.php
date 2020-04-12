@extends('Templates.Template')

<!-- Card HEADER -->
@section('cabecalho-card-header') 
{{-- <div class="alert alert-success" role="alert">
   @if(isset($category))Alterando Categoria @else Cadastrando Nova Categoria @endif
</div> @endsection --}}

@section('content')
    <div class="container-fluid">     
      @if(isset($category))

      <form class="needs-validation" name="formUpdate" id="formUpdate" method="POST" action="{{url('category')}}/<?php echo $category->id; ?>" novalidate>
               @method('PUT')
       @else
        <form class="needs-validation" name="formRegister" id="formRegister" method="POST" action="{{url('category')}}" novalidate>
      @endif              
          @csrf 
           <div class="form-row">
             <div class="col-md-4">
                <label for="nameCategory">Nome</label>   
                <input type="text" class="form-control" id="nameCategory" name="nameCategory" value="{{$category->name ?? ''}}" required autocomplete="off">              
                <div class="invalid-feedback">
                     .::Atenção! Preencha o "Campo Nome" para continuar.::
                 </div>
             </div>
             <div class="col-md-8">
               <label for="descriptionCategory">Descrição</label>
               <input type="text"  class="form-control" id="descriptionCategory" name="descriptionCategory" value="{{$category->description ?? ''}}"  required autocomplete="off">
               <div class="invalid-feedback">
                     .::Atenção! Preencha o "Campo Descrição" para continuar.::
                </div>   
             </div>  
           </div>           
           <div class="col-md-12 mt-3">
            <button type="submit" class="btn btn-sm btn-success" style="margin-left:-8px;">
              <i class="fa fa-clipboard-check" aria-hidden="true"></i>
              Confirmar
            </button>        
          </div> 
        </form>       
    </div> 
    <!-- Validando Formulário Registro !-->       
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>    
@endsection

  