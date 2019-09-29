<h1>hello word {{ $acb}}</h1>
<form action="{{ url('/submit')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name">
    <input type="file" name="filename">
    <button type="submit">gửi</button>
</form>