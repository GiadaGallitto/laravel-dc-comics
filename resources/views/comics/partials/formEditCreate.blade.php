<form action="{{ route($route, $comic->id) }}" method="POST">
    @csrf
    @method($method)

    @if ($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}">
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series )}}">
    </div>

    <div class="mb-3">
        <label for="sale_date">Sale Date</label>
        <input type="date" name="sale_date" id="sale_date" class="form-control" value="{{ old('sale_date', $comic->sale_date )}}">
    </div>

    <div class="mb-3">
        <label for="price">Price</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ old('price',$comic->price) }}">
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $comic->type) }}">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" id="description" class="form-control" name="description" value="{{ old('description', $comic->description) }}">
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">Thumb </label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
    </div>

    <button type="submit" class="btn btn-primary">Inserisci</button>
</form>
