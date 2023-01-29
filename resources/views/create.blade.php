

<html>
    <head>
    <style> 
           h1{ text-align: center;
        background-color: orange;}
       

input[type=submit] 
        {
            width: 100%;
            padding: 10px 15px;
            margin: 5px 0;
            box-sizing: border-box;
            background-color: slategrey;
        }    
</style>

    </head>
    <body>

    <style> 
           h1{ text-align: center;
        background-color: orange;}
        </style>
        <h1>CREATE FROM</h1>
        <style>
        input[type=submit] 
        {
            width: 100%;
            padding: 10px 15px;
            margin: 5px 0;
            box-sizing: border-box;
            background-color: slategrey;
        }    
</style>
    @if (count($errors) > 0)
    <div class="danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="{{route('student.store')}} " method="post">
            @csrf
            
        <input type="text"  name ="name" placeholder="Enter  the Name"  value="{{old('name')}}"> </br>
        <input type="email"  name ="email" placeholder="Enter the Email" value="{{old('email')}}"></br>
        <input type="number"  name = "number" placeholder="Enter the Number"></br>
        <input type="submit" value="SUBMIT">
    </from>
    
</body>
</html>