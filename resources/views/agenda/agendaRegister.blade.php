@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agenda') }}</div>

                <div class="card-body">
                    @if(session()->has("success"))
                    <div class="alert alert-succes">
                       {{session()->get('success')}}
                     </div>
                       @endif
           
                       @if ($errors ->any())
                     <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                                 <li>{{$error }}</li>
                         @endforeach
                     </ul>
                     @endif
                    <form method="POST" action="{{ route('agenda.create') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="medecins" class="col-md-4 col-form-label text-md-end">{{ __('MedecinId') }}</label>

                            <div class="col-md-6">
                                <input id="medecinsId" type="text" class="form-control @error('medecinsId') is-invalid @enderror" name="medecinsId" value="{{ old('medecinsId') }}" required autocomplete="medecinsId" autofocus>

                                @error('medecinsId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="date_agenda" type="date" class="form-control @error('date') is-invalid @enderror" name="date_agenda" value="{{ old('date') }}" required autocomplete="date" autofocus>

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="heure" class="col-md-4 col-form-label text-md-end">{{ __('Heure') }}</label>
    
                                <div class="col-md-6">
                                    <input id="heure" type="time"  name="heure" value="{{ old('heure') }}" required autocomplete="heure" autofocus>
    
                                    @error('heure')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
