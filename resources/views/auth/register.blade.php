@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">   {{ __('Registar') }}
                    <div>
                    <button  class="btn btn-primary  col-md-6" id="individual">Individual</button>  <button  id="organizacao" class="btn btn-success col-md-6" >Organização</button>
                <div id="tindividual" style="display: none"> <p>Conta de agente individual</p></div>
                <div id="torganizacao" style="display: none"> <p>Conta de agente organizacional</p></div>
                </div>
                 
                </div>
                
           
                <div class="card-body" id="registar" style=" @if($errors->any()) display:block @else display:none @endif">
                    <form method="POST" class="register" id="formRegister" action="{{ route('registar') }}"   name="registo" enctype="multipart/form-data" >
                        @csrf
                 <div class="tab" >
                    <div class="form-wrap max-width-600 mx-auto">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nome" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme a Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" style="display: none" >
                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone" autofocus>

                                @error('telefone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                            <div class="col-md-6">
                                <label  class="col-md-4 col-form-label text-md-right">{{ __('Femenino') }}</label>
                                <input id="femenino" type="radio" class="form-control @error('name') is-invalid @enderror" name="genero" value="F"  >
                                <label  class="col-md-4 col-form-label text-md-right">{{ __('Masculino') }}</label>

                                <input id="masculino" type="radio" class="form-control @error('name') is-invalid @enderror" name="genero"  value="M" >

                                @error('genero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="dataNascimento" class="col-md-4 col-form-label text-md-right">{{ __('data de Nascimento') }}</label>

                            <div class="col-md-6">
                                <input id="dataNascimento" type="date" class="form-control @error('dataNascimento') is-invalid @enderror" name="dataNascimento" value="{{ old('dataNascimento') }}" required autocomplete="dataNascimento" autofocus>

                                @error('dataNascimento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row" id="nif">
                            <label for="nif" class="col-md-4 col-form-label text-md-right">{{ __('NIF') }}</label>

                            <div class="col-md-6">
                                <input id="nif" type="text" class="form-control @error('nif') is-invalid @enderror" name="nif" value="{{ old('nif') }}" required autocomplete="nif" autofocus>

                                @error('nif')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="col-md-6">
                            <label for="fotoPerfil" class="col-md-4 col-form-label text-md-right">{{ __('Foto de Perfil') }}</label>
                            <input id="fotoPerfil" type="file" class="form-control-file form-control height-auto @error('fotoPerfil') is-invalid @enderror" accept="image/*" name="fotoPerfil" >
                         
                            @error('fotoPerfil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                  

                        
                        <div class="form-group row">
                            <select name="permissao" class="form-control" style="width: 25%; font-size:10px; height:30px "
                            id="permissao_id">
                            <option selected value="0">Quem pode ver?</option>
                            <option value="1">Privado</option>
                            <option value="2">Amigo</option>
                            <option value="3">Amigo do Amigo</option>
                            <option value="4">Publica</option>
                        </select>
                        </div>


                               
                        <div class="form-group row">
                            <label for=""> Endereço</label>
                            <input id="bairro" type="text" placeholder="Bairro" class="form-control @error('bairro') is-invalid @enderror" accept="image/*" name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro" autofocus>

                            <select name="provincia" class="form-control" style="width: 25%; font-size:10px; height:30px "
                            id="pais">
                            <option selected >Provincia</option>
                            @foreach ($provincia as $provincia )
                            <option value= {{ $provincia->id  }}>{{ $provincia->nome }}</option>
                            @endforeach
                            </select>
                            <select name="pais" class="form-control" style="width: 25%; font-size:10px; height:30px "
                            id="pais">
                            <option selected >Pais</option>
                            @foreach ($pais as $pais )
                            <option value= {{ $pais->id  }}>{{ $pais->nome }}</option>
                            @endforeach
                            </select>



                           
                           
                        
                        </div>

                        <input type="hidden" id="tipo" name="tipo">


                </div>
         


                       






                        <div style="overflow:auto">
                            <div  style="float: right; margin-right:10%">
                            <button type="button" class="btn btn-primary"  id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
                            <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Proximo</button>
                            </div>
                        </div>
                            
                            
                        <div style="text-align: center; margin-top: 40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/step.js')}}"></script>

<script>
   $('document').ready(function(){
       $('#individual').on('click', function(){
    
        $('#tindividual').show()
        $('#torganizacao').hide()
           $('#registar').show()
        $('#nif').hide()
        $('#tipo').val(1)


       })

       $('#organizacao').on('click', function(){

        
           $('#tindividual').hide()
        $('#torganizacao').show()
           $('#registar').show()
        $('#nif').show()
        $('#tipo').val(2)
        
       })

    })
</script>


@endsection
