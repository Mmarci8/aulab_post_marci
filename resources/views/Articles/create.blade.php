<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1>Crea un nuovo articolo</h1>

                {{-- Errore --}}
                {{-- @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif --}}

                {{-- Success --}}
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form class="mt-4" action="{{ route('articles.store') }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf                    
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="category_id">Categoria</label>
                            @foreach($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="categories[]" value="{{ $category->id }}">
                                <label class="form-check-label">
                                    {{ $category->name }}
                                </label>
                            </div>
                            @endforeach                            
                        </div>
                        <div class="col-12">
                            <label for="title">Titolo</label>
                            <input type="text" id="title" name="title" class="form-control" maxlength="150"
                            value="{{ old('title') }}">
                            @error('title') <span class="text-danger small">{{ $message }}</span>  @enderror
                        </div>
                        <div class="col-12">
                            <label for="body">Testo</label>
                            <textarea name="body" id="body" rows="10"class="form-control"
                            >{{ old('body') }}</textarea>
                            @error('body') <span class="text-danger small">{{ $message }}</span>  @enderror
                        </div>
                        <div class="col-12">
                            <label for="image">Immagine</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>