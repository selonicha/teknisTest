@extends('template.master')

@section('konten')
<table>
    <?php $id = 1; ?>
    <tbody>
        @forelse($users as $user)
        <tr>
            <td>{{$id++}}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ }}</td>
            <td>{{ }}</td>
        </tr>
        @empty
        <tr>
            <td>Tu</td>
        </tr>

        @endforelse
    </tbody>
</table>
@endsection