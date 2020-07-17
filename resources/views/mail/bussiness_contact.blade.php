<h5>You have message from - <b>{{$request['name'].' '.$request['last-name']}}</b> for Getnord {{$request['page']}}</h5>
@if($request['phone-number'] != '')
    <p>Phone Number - <b>{{$request['phone-number']}}</b> </p>
@endif
@if($request['company'] != '')
    <p>Company - <b>{{$request['company']}}</b></p>
@endif
@if($request['business'] != '')
    <p>Business - <b>{{$request['business']}}</b></p>
@endif
@if($request['website'] != '')
    <p>Website - <b>{{$request['website']}}</b></p>
@endif
@if($request['info'] != '')
    <p><b>Message</b></p>
    <p>{{ $request['info'] }}</p>
    @else
    <p>No message</p>
@endif

