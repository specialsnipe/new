<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Норма азота</th>
        <th>Норма фосфора</th>
        <th>Норма калия</th>
        <th>Группа культур</th>
        <th>Регион</th>
        <th>Цена</th>
        <th>Описание</th>
        <th>Назначение</th>

    </tr>
    </thead>
    <tbody>
    @foreach($fertilizers as $fertilizer)
        <tr>
            <td>{{ $fertilizer->id }}</td>
            <td>{{ $fertilizer->title }}</td>
            <td>{{ $fertilizer->norm_nitrogen }}</td>
            <td>{{ $fertilizer->norm_phosphorus }}</td>
            <td>{{ $fertilizer->norm_potassium }}</td>
            <td>{{ $fertilizer->crop->title }}</td>
            <td>{{ $fertilizer->area }}</td>
            <td>{{ $fertilizer->price }}</td>
            <td>{{ $fertilizer->description }}</td>
            <td>{{ $fertilizer->purpose }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
