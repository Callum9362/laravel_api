<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form action="{{ route('store-article') }}" method="POST">
            <div class="form-group row">
              <label for="title" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="title">
              </div>
            </div>
            <div class="form-group row">
              <label for="body" class="col-sm-2 col-form-label">Body</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="body">
              </div>
            </div>
            <button type="submit">Submit</button>
          </form>
    </div>
</body>
</html>
