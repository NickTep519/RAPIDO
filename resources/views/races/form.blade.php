<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{$race->exists ? 'Modifier la course' : 'Ajouter une course'}}</title>
</head>
<body>
    <div class="container" >

        <div class="form">

            <div class="title">
                <h2>{{$race->exists ? 'Modifier la course' : 'Ajouter une course'}}</h2>
            </div>

            <form action="{{route($race->exists ? 'race.update' : 'race.create', $race)}}" method="POST" >
                @csrf
                @method($race->exists ? 'PUT' : 'POST')

                @include('shared.input', ['name'=>'starting_point', 'label'=>'Point de depart', 'value'=>$race->starting_point ])
                @include('shared.input', ['name'=>'arrival_point', 'label'=>'Point d\'arrivee', 'value'=>$race->arrival_point ])
                @include('shared.input', ['type'=>'datetime-local','name'=>'starting_date_time', 'label'=>'Date et heure de depart', 'value'=>$race->starting_date_time ])
                @include('shared.input', ['type'=>'datetime-local','name'=>'arrival_date_time', 'label'=>'Date et heure d\'arrivee', 'value'=>$race->arrival_date_time ])

            </form>

        </div>
    </div>
</body>
</html>