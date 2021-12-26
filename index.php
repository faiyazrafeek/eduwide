<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <script src="script.js"></script>
</head>
<body>
    <div class="container mb-4">
        <div class="display-5 my-5">Student Details</div>
        <form name="student_form">
            <div class="row">
                <div class="col mb-3">
                    <label for="id" class="form-label">Student ID</label>
                    <input type="text" class="form-control" id="id" name="id">
                  </div>
                  <div class="col mb-3">

                      <label for="name" class="form-label">Student Name</label>
                      <input type="text" class="form-control" id="name" name="name" >
                    </div>
            </div>
             <div class="row">
                <div class="col mb-3">

                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" name="age" >
                  </div>
                  <div class="col mb-3">

                      <label for="city" class="form-label">City</label>
                      <input type="text" class="form-control" id="city" name="city">
                    </div>
             </div>
           
            <button type="button" onclick="save_data();" class="btn btn-primary">Save</button>
          </form>
    </div>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">City</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>S001</td>
                    <td>Ali</td>
                    <td>22</td>
                    <td>KLM</td>
                    <td>
                        <button class="btn btn-sm btn-success">Edit</button>
                    </td>
                </tr>
            </tbody>
          </table>
    </div>
</body>
</html>