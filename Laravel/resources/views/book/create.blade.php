<div class="container">
    <h1>add_book</h1>
    <form action="{{ url('book') }}" method="post">
        @csrf {{-- CSRF保護 --}}
        @method('POST') {{-- 疑似フォームメソッド --}}
        
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="email">{{ __('del') }}</label>
            <input id="del" type="text" class="form-control" name="del">
        </div>
        
        <button type="submit" class="btn btn-primary" name='action' value='add'>
            {{ __('add') }}
        </button>

        <button type="submit" class="btn btn-primary" name='action' value='back'>
            {{ __('back') }}
        </button>        
    </form>
</div>