<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--<h>Hello I am Abdullah</h>-->
    <?php
        $var = '5';
        //$new = htmlspecialchars("<a herf='test' >Test</a>");
       // echo $new;
    /*
        if ($var == 5){
            echo $var;
        }else{
            echo 'not equal';
        }
    */
    $array =['first','second','third','fourth','fifth'];
    foreach ($array as $item) {
        echo $item.'<br>';
    }
    ?>
    <BR>
    @if($var==5)
        {{$var}}
    @else
        {{'not equal'}}
    @endif
    <ul>
    @foreach($array as $i)
        <li>{{$i}}</li>
    @endforeach
    </ul>
    @php
        $s='first';
    @endphp
    <ol>
        @forelse($array as $j)
            <li>{{$j}}</li>
        @empty
            {{'empty'}}
        @endforelse
    </ol>
    @switch($s)
        @case('first')
        {{'the case is first'}}
        @break
        @case('second')
        {{'the case is second'}}
        @break
        @default
        {{'this is default'}}
    @endswitch
    @php $r=1 @endphp
    @while($r < 5)
        {{'r is '.$r++}}<br>
    @endwhile
  {{-- {{$var}}--}}
    <br>
   {{--
    {!! $var !!}
    --}}
</body>
</html>
