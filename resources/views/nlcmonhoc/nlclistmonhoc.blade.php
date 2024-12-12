<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sach mon hoc</title>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <section class="container border my-3" >
        <h1>danh sach mon hoc</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ma mon hoc</th>
                    <th>ten mon hoc</th>
                    <th>so tiet</th>
                    <th>chuc nang</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=0;
                @endphp
                @foreach ($nlcmonhocs as $item)
                @php
                    $stt++;
                @endphp
                <tr>
                    <th>{{$stt}}</th>
                    <td>{{$item->nlcmamh}}</td>
                    <td>{{$item->nlctenmh}}</td>
                    <td>{{$item->nlcsotiet}}</td>
                    <td>
                        <a href="/monhoc/detail/{{$item->nlcmamh}}"class="btn btn-success">chi tiet</a>
                        <a href="/monhoc/edit/{{$item->nlcmamh}}"class="btn btn-primary">sua</a>
                        <a href="/monhoc/delete/{{$item->nlcmamh}}"class="btn btn-danger"
                            onclick="return confirm('ban co chac muon xoa khoa nay khong'))">delete</a>
                        <a href="/monhoc/insert/{{$item->nlcmamh}}"class="btn btn-success">insert</a>
                        edit / delete
                    </td>
                </tr>
                @endforeach
                            </tbody>
        </table>
    </section>
        
</body>
</html>
