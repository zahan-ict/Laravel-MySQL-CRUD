@include('master/header')
<h2 style="text-align:center"> Laravel MySQL CRUD</h2>
<!--When user insert show sms on this page with this session. In general loading will now show sms-->

<div class="container">
@if(session('sms'))
<span style="color:green;">{{session('sms')}}</span><br>
@endif
    <a href="{{url('/insertform')}}">Insert User</a><br><br>
    <table style="width:100%">
        <th>User ID</th>
        <th>UserName</th>
        <th> Email </th>
        <th> Message </th>
        <th> Created Time </th>
        <th> Update Time </th>
        <th>Actions</th>

        @foreach($posts->all() as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->email}}</td>
            <td>{{$post->message}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
            <td>
                <a href='{{url("/updateform/{$post->id}")}}'>Update</a>
                <a onclick="return confirm('Are you sure?')" href='{{url("/delete/{$post->id}")}}'>Delete</a>
            </td>
        </tr>

        @endforeach


    </table>
</div>


@include('master/footer')