@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit User
                </div>
                <div class="float-end">
                    <a href="{{ route('home') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('profile.update', $user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}" disabled>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_telefon" class="col-md-4 col-form-label text-md-end text-start">No Telefon</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('no_telefon') is-invalid @enderror" id="no_telefon" name="no_telefon" value="{{ $user->no_telefon }}">
                            @if ($errors->has('no_telefon'))
                                <span class="text-danger">{{ $errors->first('no_telefon') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jawatan" class="col-md-4 col-form-label text-md-end text-start">Jawatan</label>
                        <div class="col-md-6">
                        <select class="form-select @error('jawatan') is-invalid @enderror" id="jawatan" name="jawatan" value="{{ $user->jawatan }}">
                            <option value="{{ $user->jawatan }}">{{ $user->jawatan }}</option>
                            @foreach ($jawatan as $nama)
                                <option value="{{ $nama }}" @selected(old('nama') == $nama)>
                                    {{ $nama }}
                                </option>
                            @endforeach
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                            @if ($errors->has('jawatan'))
                                <span class="text-danger">{{ $errors->first('jawatan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="gred" class="col-md-4 col-form-label text-md-end text-start">Gred</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('gred') is-invalid @enderror" id="gred" name="gred" value="{{ $user->gred }}" placeholder="DV41 ..">
                            @if ($errors->has('gred'))
                                <span class="text-danger">{{ $errors->first('gred') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Gambar:</label>
                        <div class="col-md-6" style="line-height: 35px;">
                        @if ($user->photo)
                        <img src="{{ asset('storage/'.$user->photo) }}" width="150" height="250" alt="" class="rounded img-thumbnail">
                        @else
                        <img src="{{ asset('storage/'.'../user.png') }}" width="150" height="250" alt="" class="rounded img-thumbnail">
                        @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="photo" class="col-md-4 col-form-label text-md-end text-start"></label>
                        <div class="col-md-6">
                          <input type="hidden" name="photo_lama" value="{{ $user->photo }}">
                          <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" value="{{ $user->photo }}" >
                            @if ($errors->has('photo'))
                                <span class="text-danger">{{ $errors->first('photo') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <header>
                            <h2 class="text-lg text-center font-medium text-gray-900">
                                {{ __('Update Password') }}
                            </h2>

                            <p class="mt-1 text-sm text-center text-gray-600">
                                {{ __('Ensure your account is using a long, random password to stay secure.') }}
                            </p>
                        </header>
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>

                   
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update User">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>    
    
@endsection