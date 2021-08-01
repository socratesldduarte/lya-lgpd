<h1>Clientes</h1>
<table border="1" cellpadding="4" cellspacing="0">
    <tr>
        <td><a href="{{route('index', ['order' => 'id'])}}">#</a></td>
        <td><a href="{{route('index', ['order' => 'name'])}}">Nome</a></td>
        <td><a href="{{route('index', ['order' => 'email'])}}">E-mail</a></td>
        <td><a href="{{route('index', ['order' => 'document'])}}">CPF</a></td>
        <td><a href="{{route('index', ['order' => 'birthday'])}}">Nascimento</a></td>
        <td>Ação</td>
    </tr>
@foreach($clients as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->document}}</td>
            <td>{{$client->birthday->format('d/m/Y')}}</td>
            <td><a href="{{route('update', ['client' => $client->id])}}">Editar</a> | <a href="{{route('destroy', ['client' => $client->id])}}">Excluir</a></td>
        </tr>
@endforeach
</table>
<br><a href="{{route('store')}}">ADICIONAR CLIENTE (fake)</a>
