@extends ('layout')
@section('table')
        @if(count($clients))
            <table>
                <tr>
                    <th>id</th>
                    <th>Ім`я</th>
                    <th>Номер</th>
                </tr>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->phone_number }}</td>
                    </tr>
                @endforeach
                @endif
            </table>


@endsection
@section('add')
    <a href="/admin" class="button" style="background: #e06565; width: 200px">Назад</a>
@endsection
