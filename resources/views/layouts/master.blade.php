<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    This is the master sidebar.

@show

<div class="container">
    @yield('content')

    The current UNIX timestamp is {{ date("Y-m-d H:m") }}

    {{$work or 'PHP'}}
</div>

{{--@include('demo', ['some' =>   date("Y-m-d H:m")  ]);--}}


@each('test.test', array(1,"asdfa",2,3,4,5,6,7), 'job',"test.empty")

@datetime("14526262665")

</body>
</html>
