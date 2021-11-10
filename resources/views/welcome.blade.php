<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1 class="text-center mb-3">Project API Endpoints</h1>
        <div class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>All Articles</td>
                        <td>A JSON get endpoint with all articles</td>
                        <td><a href="{{ route('all-articles') }}">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>Article By ID</td>
                        <td>Get an article by id</td>
                        <td><a href="{{ route('article-by-id', ['id' => 1]) }}">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>Delete Article By ID</td>
                        <td>Delete an article by id</td>
                        <td><a href="{{ route('delete-article', ['id' => 50]) }}">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>Article Count</td>
                        <td>Get the count of all articles</td>
                        <td><a href="{{ route('article-count') }}">Click Here</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
