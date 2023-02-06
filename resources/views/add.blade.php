<!DOCTYPE html>
<html lang="en">
@include('layout')
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Ajouter un(e) nouvel(le) étudiant(e)</h2>
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form method="post" action="{{url('enregistrer')}}">
                    @csrf
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input name="prenom" type="text" class="form-control" id="prenom" placeholder="Entrez votre prenom"
                        value="{{old('prenom')}}">
                        @error('prenom')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Nom</label>
                        <input name="nom" type="text" class="form-control" id="nom" placeholder="Entrez votre nom"
                        value="{{old('nom')}}">
                        @error('nom')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="semestre">Semestre</label>
                        <select name="semestre" class="form-control" id="semestre" value="{{old('semestre')}}">
                        <option>Semestre 1</option>
                        <option>Semestre 2</option>
                        <option>Semestre 3</option>
                        <option>Semestre 4</option>
                        </select>
                        @error('Semestre')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="matiere">Matière</label>
                        <select name="matiere" class="form-control" id="matiere" value="{{old('matiere')}}">
                        <option>Laravel</option>
                        <option>DevOps</option>
                        <option>Java</option>
                        <option>Csharp</option>
                        <option>Design thinking</option>
                        <option>Oracle</option>
                        <option>IoT</option>
                        </select>
                        @error('matiere')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="note1">Note 1</label>
                        <input name="note1" type="number" class="form-control" id="note1"
                        value="{{old('note1')}}">
                        @error('note1')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="examen">Examen</label>
                        <input name="examen" type="number" class="form-control" id="examen"
                        value="{{old('examen')}}">
                        @error('examen')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Enregistrer </button>
                    <a href="{{url('etudiant')}}" class="btn btn-danger">Annuler</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
