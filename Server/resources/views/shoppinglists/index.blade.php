<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<ul>
    @foreach($shoppinglists as $shoppinglist)
        <li>
            <a href="shoppinglists/{{$shoppinglist->id}}">
                {{$shoppinglist->title}}
            </a>
        </li>
    @endforeach
</ul>




</body>
</html>