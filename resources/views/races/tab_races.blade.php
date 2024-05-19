<div class="tableau">
    <table class="table-style">
        <thead>
            <tr>
                <th>ID</th>
                <th>Point de Depart</th>
                <th>Point d'arrive</th>
                <th>Chauffeur</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($races as $race)
                <tr>
                    <td>{{$race->id}}</td>
                    <td>{{$race->starting_point}}</td>
                    <td>{{$race->arrival_point}}</td>
                    <td>{{$race->driver?->name}} {{$race->driver?->first_name}}</td>
                    <td>{{$race->race_status}}</td>
                    <td>
                        <div class="races-buttons">
                            <a href="{{route('races.edit', $race)}}">
                                <button class="races-btn">Modifier</button>
                            </a>
                    
                            <form action="{{route('races.destroy', $race)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="races-btn">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>

                
            @endforeach
        </tbody>
    </table>
</div>