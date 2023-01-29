
<!DOCTYPE html>
<html lang="en">
<head>
    <style> 
           h1{ text-align: center;
        background-color: orange;}
       
            
</style>
<h1>UPDATE FROM</h1>
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
</head>
<body>
    <form action="{{route('student.update',$student->id)}}" method="post">
        @csrf
        @method('patch')
        <input type="text" name="name" value="{{$student->name}}" >
        <input type="email" name=" email" value="{{$student->email}}" placeholder="enter email">
        <input type="number" name="number" value="{{$student->number}}" placeholder="enter number">
        <div class='submitWrapper'>
            <input type="submit" value="UPDATE">
        </div>
    </form>
    
</body>
</html>