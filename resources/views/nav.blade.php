<style>

    *{
        block-size: border-box;
        padding: 0;
        margin: 0;
    }

    #container{
        background-color: aqua;
    }
    nav{
        display: flex;
        justify-content: center;
        gap: 15px;
        font-size: 3rem;

    }



</style>

@php
    $arrayLinks=[
        '/' => 'home',
        '/HelloWorld'=>'HelloWorld',
        '/WhoAmI' => 'WhoAmI'
        ]
@endphp

<div id="container">

    <nav>

        @foreach ($arrayLinks as $link =>$linkValue)
           <a href="{{$link}}">{{$linkValue}}</a>
        @endforeach

    </nav>


</div>
