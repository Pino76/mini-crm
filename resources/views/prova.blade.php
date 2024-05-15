<form method="POST" action="{{route('getFailedsJob')}}">
    from <br/> <input type="text" value="1714521600" name="fromDate"><br/>
    to <br/> <input type="text" value="1715385540" name="toDate"><br/>
    method <br/> <input type="text" value="Pippo" name="sendMethod"><br/>
@csrf
    <input type="submit" value="vai">
</form>
