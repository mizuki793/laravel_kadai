<div class="container">
    <h1>Edit_book</h1>
    <form action="{{ url('book/'.$books->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="id" class="col-md-4 col-from-label text-md-right">{{__('ID')}}></label>
            <div class="col-md-6 input-group-text">
                {{ $books->id }}              
            </div>
        </div>

        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $books->name }}">
        </div>
        <div class="form-group">
            <label for="name">{{ __('Del') }}</label>
            <input id="del" type="text" class="form-control" name="del" value="{{ $books->del }}">
        </div>

        <button type="submit" class="btn btn-primary" name='action' value='edit'>
            {{ __('edit') }}
        </button>

        <button type="submit" class="btn btn-primary" name='action' value='back'>
            {{ __('back') }}
        </button>        

    </form>
</div>