@extends ('layout')
@section('table')
        @if($drivers && $cars)
            <table>
                <tr>
                    <th>id</th>
                    <th>Ім`я</th>
                    <th>Статус</th>
                    <th>Модель машини</th>
                    <th>Колір</th>
                    <th>Номер</th>
                    <th>Тип</th>
                </tr>
                @for ($i = 0; $i < count($cars); $i++)
                    <tr>
                        <td>{{ $drivers[$i]->id }}</td>
                        <td>{{ $drivers[$i]->name }}</td>
                        <td>{{ $drivers[$i]->status }}</td>
                        <td>{{ $cars[$i]->model }}</td>
                        <td>{{ $cars[$i]->color }}</td>
                        <td>{{ $cars[$i]->license_plate }}</td>
                        <td>{{ $cars[$i]->type }}</td>
                    </tr>
                @endfor
                @endif
            </table>


@endsection
@section('add')
    <a href="/admin" class="button" style="background: #e06565; width: 200px">Назад</a>
@endsection
