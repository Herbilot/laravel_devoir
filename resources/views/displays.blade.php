<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout')
    
</head>
<body> 
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
            <h2>Liste des étudiants</h2>
            </div> 
            <div class="col-md-4">
            <h2>Moyen Générale: {{$moyenneGenerale}}</h2>
            </div> 
            <div class="col-md-4">
                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                    <div>
                    <a href="{{ url('ajouter') }}" class="btn btn-primary"><i class="bx bx-plus me-1"></i>Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">  
                <table class="table bg-light">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Matière date</th>
                            <th scope="col">Note 1</th>
                            <th scope="col">Examen</th>
                            <th scope="col">semestre</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach ($data as $etu)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $etu->id }}</td>
                            <td>{{ $etu->prenom }}</td>
                            <td>{{ $etu->nom }}</td>
                            <td>{{ $etu->matiere }}</td>
                            <td>{{ $etu->note1 }}</td>
                            <td>{{ $etu->examen }}</td>
                            <td>{{ $etu->semestre }}</td>
                            <td><a class="btn btn-primary" href="#" role="button">Modifier</a>
                            <a class="btn btn-danger" href="{{url('supprimer/'.$etu->id)}}" role="button">Supprimer</a>
                        </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>