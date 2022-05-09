<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Дата договора</th>
        <th>Стоимость поставки</th>
        <th>Регион</th>

    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->title }}</td>
            <td>{{ $client->date }}</td>
            <td>{{ $client->price }}</td>
            <td>{{ $client->region }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
