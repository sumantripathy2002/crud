
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
<style>
table, th, td {
  border: 1px solid;
}

table {
  width: 100%;
}
</style>
<div class="tbl-header">

<table class="table table-success table-striped-columns">
             <thead class="table-dark">
            
                <th>ID</th>  
            <th> NAME</th>
            <th>EMAIL</th>
            <th>PHONE NO</th>
            <th  center colspan="4"> Action </th>
        </thead>
    <tbody>
        @foreach($students as $student)
    <tr>
    <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->number}}</td>
        <td> <a href="{{route('student.edit',$student->id)}}" class="buttonnn">Edit </a></td>
        <td><form action="{{ route('student.delete', $student->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="buttonn" value="Delete">
                </form>
            </td>
    @endforeach
    </tbody>
    </table>
</div>
<div class="add">
<a href="{{route('student.create')}}">Add </a>
</div>
</body>
</html>