@include('master/header')

<div class="container">
<a href="{{url('/')}}">Back to home</a><br>
    <h1 style="text-align: center;">Insert form </h1>
    <form action="{{url('/insert')}}" method="post" enctype="multipart/form-data">

        {{csrf_field()}}

        @if(count($errors)> 0)

        @foreach($errors->all() as $error)
        <span style="color:red;">{{$error }}</span><br>
        @endforeach
        @endif

        <input type="text" name="name" placeholder="Username"><br><br>

        <input type="email" name="email" placeholder="email">
        <br><br>
        <textarea name="message" rows="15" cols="30"></textarea><br>

        <input type="submit" value="Insert">

    </form>

</div>

@include('master/footer')