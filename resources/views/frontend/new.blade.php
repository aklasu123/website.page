@extends('templates.master')

@section('body')

    <body>
        <div class="container">
            <h1>thank you for contacting us</h1>
            <div>
                @if (session()->has('success'))
                    <div>
                        {{ session('success') }}

                    </div>
                @endif
            </div>
            <div>
                <div>
                    <a href="{{ route('frontend.contact') }}">Create a new contact</a>
                </div>
                <div class='tableMargin'>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Fullname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phonenumber</th>
                                <th scope="col">Message</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        @foreach ($contacts as $contact)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $contact->id }}</th>
                                    <td>{{ $contact->fullname }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phonenumber }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td>
                                        <a href="{{ route('frontend.edit', ['contact' => $contact]) }}">Edit</a>
                                    </td>
                                    <td>
                                        <form method="post" action="{{ route('frontend.delete', $contact->id) }}">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete" />
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        </div>
    </body>
@endsection
