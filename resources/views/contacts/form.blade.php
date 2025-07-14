<x-layout>
    <div class="container mx-auto mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Nome</label>
                <input id="exampleInputText1" type="text" class="form-control" name="firstname"
                    value="{{ old('firstname') }}">
                @error('firstname')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputText2" class="form-label">Cognome</label>
                <input id="exampleInputText2" type="text" value="{{ old('lastname') }}" class="form-control"
                    name="lastname">
                @error('lastname')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input id="exampleInputEmail1" value="{{ old('email') }}" required type="email" class="form-control"
                    name="email">
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputArea" class="form-label">Messaggio</label>
                <textarea id="exampleInputArea" class="form-control" name="body">{{ old('body') }}</textarea>
                @error('body')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Invio</button>
        </form>
    </div>

</x-layout>
