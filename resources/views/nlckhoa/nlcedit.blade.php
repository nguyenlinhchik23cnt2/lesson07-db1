<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nlc danh sach khoa can sua</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
</head>
<body>
    <section class="container my-3">
        <form action="{{route('nlckhoa.nlceditsubmit')}}" method="post">
            @csrf
            <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiết khoa can sua</h3>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="nlcmakhoa" class="col-sm-2 col-form-label">ma khoa</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control" id="nlcmakhoa" name="nlcmakh" value="">
                    </div>
                  </div>
            </div>
            <div class="mb-3 row">
                <label for="nlctenkhoa" class="col-sm-2 col-form-label">ten khoa</label>
                <div class="col-sm-10">
                  <input type="text"  class="form-control" id="nlctenkhoa" name="nlctenkh" value="">
                </div>
              </div>
            <div class="card-footer">
                <button class="btn btn-primary mx-2">submit</button>
                <a href="/khoas" class="btn btn-primary">Back</a>
            </div>
            </div>
        </form>
        </section>
</body>
</html>

