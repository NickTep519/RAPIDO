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
                        <a href="{{route('race.edit',$race)}}">Edit</a>/
                        
                        <form action="{{route('race.destroy', $race)}}" method="post">
                            @csrf
                            @method('delete')
                            <button>sup</button>
                        </form>
                    </td>
                </tr>

                
            @endforeach
        </tbody>
    </table>
</div>