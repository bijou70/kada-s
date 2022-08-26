@extends('todash')

@section('contenue')

{{-- modal rdv --}}

<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Medecin</label>
                  <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp">
                  {{-- <div id="textHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                  <label for="exampleInputDate" class="form-label">Date de Rendez-vous</label>
                  <input type="date" class="form-control" id="exampleDate>
                </div>
                <div class="mb-3 form-check">
                  {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> --}}
                  {{-- <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
                </div>
                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="button" class="btn btn-primary">Envoyer</button>
        </div>
      </div>
    </div>
  </div>
{{-- fin modal --}}
<div class="card" style=";">
    <div class="card-body">
      <h5 class="card-title">  Liste de mes rendez-vous  <button class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">Nouveau Rdv</button></h5>
     
      <table class="table mt-5" >
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Heure</th>
            <th scope="col">Médecin</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">13/08/2022</th>
            <td>13h</td>
            <td> Ismael Diarra</td>
            <td><button class="btn-primary">Reporter</button> </td>
          </tr>
          <tr>
            <th scope="row">16/08/2022</th>
            <td>16h</td>
            <td>Abdoulaye Coulibaly</td>
            <td><button class="btn-primary">Reporter</button> </td>
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
@endsection