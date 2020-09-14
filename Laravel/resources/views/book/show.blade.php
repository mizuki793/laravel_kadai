<div>
    <div>shoq_book</div>
            <div class="form-group row">
                <label for="id" class="col-md-4 col-from-label text-md-right">{{__('ID')}}></label>
                <div class="col-md-6 input-group-text">
                    {{ $books->id }}              
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-from-label text-md-right">{{__('Name')}}></label>
                <div class="col-md-6 input-group-text">
                    {{ $books->name }}              
                </div>
            </div>

            <div class="form-group row">
                <label for="del" class="col-md-4 col-from-label text-md-right">{{__('Del')}}></label>
                <div class="col-md-6 input-group-text">
                    {{ $books->del }}              
                </div>
            </div>
            <div class="form-group row md-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary" onclick="location.href='{{ route('book.edit',$books->id) }}'">
                        {{__('Change') }}
                    </button>
                    <form action="{{ route('book.destroy',$books->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            {{ __('del')}}
                        </button>
                    <button type="submit" class="btn btn-primary" onclick="history.back()">
                        {{__('back') }}
                    </button>
                </div>
            </div>
</div>