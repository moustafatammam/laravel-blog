<h1>
Hello, {{$firstName}} {{$lastName}} 
Age, {{$age}}
Books
</h1>

@foreach($books as $book)
<h1>
{{$book}}
</h1>
@endforeach