<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nlc-danh sach khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
</head>
<body>
    <section class="container border my-3" >
        <h1>danh sach khoa</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ma khoa</th>
                    <th>ten khoa</th>
                    <th>chuc nang</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=0;
                @endphp
                @foreach ($nlckhoa as $item)
                @php
                    $stt++;
                @endphp
                <tr>
                    <th>{{$stt}}</th>
                    <td>{{$item->nlcmakhoa}}</td>
                    <td>{{$item->nlctenkhoa}}</td>
                    <td>
                        <a href="/khoas/detail/{{$item->nlcmakhoa}}"class="btn btn-success">chi tiet</a>
                        <a href="/khoas/edit/{{$item->nlcmakhoa}}"class="btn btn-primary">sua</a>
                        edit / delete
                    </td>
                </tr>
                @endforeach
                            </tbody>
        </table>
    </section>
</body>
</html>
