@extends('app')
@section('content')
    @if (session('error'))
        <div style="color: red">{{ session('error') }}</div>
    @endif
    @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $er)
                    <div class="alert alert-danger" role="alert">
                        <strong>Alert!</strong>{{ $er }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.update',$user->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" name="name" value="{{ $user ? $user->name : old('name') }}" required>

        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="{{ $user ? $user->email : old('email') }}" required>

        <label for="" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">

        <button type="submit" name="" class="btn btn-primary mt-2">Create</button>
    </form>
@endsection