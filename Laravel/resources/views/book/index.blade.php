<form action="{{ route('book.search') }}" method="post">

{{ csrf_field()}}
{{method_field('get')}}

<label>名前</label>
        <input type="text" class="form-control col-md-5" placeholder="検索したい名前" name="name">
    <button type="submit" class="btn btn-primary" >
                            {{ __('検索') }}
    </button>
</form>

<button type="button" class="btn btn-primary" onclick="location.href='{{ route('book.create') }}'">
                        {{ __('追加') }}
</button>
<div class="table-resopnsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>{{__('id')}}</th>
                <th>{{__('name')}}</th>
                <th>{{__('del')}}</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($books))
            @foreach ($books as $book)
            <tr>
                <td><a href="/book/{{ $book->id }}">{{ $book->id }}</a></td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->del}}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>