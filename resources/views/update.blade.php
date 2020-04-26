@include('master/header')

<div class="container">
<a href="{{url('/')}}">Back to home</a><br>
    <h1 style="text-align: center;">Update form </h1>
    <!-- must use array($posts->id) -->
    <form action="{{url('/update',array($posts->id))}}" method="post" enctype="multipart/form-data">

        {{csrf_field()}}

        @if(count($errors)> 0)

        @foreach($errors->all() as $error)
        <span style="color:red;">{{$error }}</span><br>
        @endforeach
        @endif

        <input type="text" name="name" value="{{$posts->id}}" placeholder="Username"><br><br>

        <input type="email" name="email" value="{{$posts->email}}" placeholder="email">
        <br><br>
        <textarea name="message" rows="15" cols="30">{{ $posts->message}}</textarea><br>

        <input type="submit" value="Update">

    </form>

</div>

@include('master/footer')