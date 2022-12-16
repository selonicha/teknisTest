@extends('template.master')

@push('style')
<link rel="stylesheet" href="{{asset('asset/css/users.css')}}">
    
@endpush

@section('content')

<div class="content">
    <h3>Users Data</h3>
    <div class="card">
        <table class="user-table" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th class="p-2">No</th>
                    <th class="p-2">Name</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">Action</th>
                </tr>
            </thead>
            <tbody class="mb-5">
                @forelse ($users as $user)
                <tr style="padding: 15px;" class="mb-5">
                    <td class="p-2">{{$loop->iteration}}</td>
                    <td class="p-2">{{$user->name}}</td>
                    <td class="p-2">{{$user->email}}</td>
                    <td class="p-2">
                        <a href="" class="btn btn-success btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
</tr>
                @empty
                    <tr>
                        <td>Tidak ada data</td>
                    </tr>
                @endforelse
                
            </tbody>
        </table>

    </div>
</div>

@endsection


