@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contacts</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="width: 20rem; margin-left: 5rem">Nom et prenom</th>
                                        <th style="width: 20rem">Adresse électronique </th>
                                        <th style="width: 20rem">Message</th>
                                        <th style="width: 20rem">Action</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($contacts as $contact)
                                        <tr>
                                            {{-- @foreach ($user_test->user as $user)
                                                    <td> {{ $user->name }}</td>
                                                @endforeach --}}
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td> <button class="btn btn-danger"
                                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $contact->id }}').submit();">Delete</button>
                                            </td>
                                            <form id="delete-form-{{ $contact->id }}" +
                                                action="{{ route('dashboard.destroy', $contact->id) }}" method="post">
                                                @csrf @method('DELETE')

                                            </form>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
