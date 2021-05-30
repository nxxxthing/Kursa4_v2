@extends ('layout')
@section('table')
        @if($orders)
            <table>
                <tr>
                    <th>id</th>
                    <th>Час</th>
                    <th>Звідки</th>
                    <th>Куди</th>
                    <th>Статус</th>
                    <th>Тип машини</th>
                    <th>id Клієнта</th>
                    <th>id Водія</th>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_time }}</td>
                        <td>{{ $order->departure }}</td>
                        <td>{{ $order->destination }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->car_type }}</td>
                        <td>{{ $order->client_id }}</td>
                        <td>{{ $order->driver_id }}</td>
                    </tr>
                @endforeach
                @endif
            </table>


@endsection
@section('add')
    <a href="/admin" class="button" style="background: #e06565; width: 200px">Назад</a>
@endsection
