    <form method="post" action="/talk">
        @csrf
        Name: <input type="text" name="title" />
        Description: <textarea name="description"></textarea>
        <button> Save Talk</button>
    </form>
