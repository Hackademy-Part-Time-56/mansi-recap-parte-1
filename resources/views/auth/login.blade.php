<x-layout>
    <div class="container mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="" class="form-label">Inserisci Email</label>
                <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Inserisci Password</label>
                <input type="password" name="password" class="form-control">
                @error('password')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Accedi Subito</button>
        </form>

        <div>
            <p>Non sei registrato? <a href="{{ route('register') }}">Clicca qui</a></p>
        </div>
    </div>
</x-layout>
