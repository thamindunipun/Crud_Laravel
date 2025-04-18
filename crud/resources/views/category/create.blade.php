<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create Catogory</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container bg-light py-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Category 
                    
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" action="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control"/>
                                @error('name'){{ $message }} @enderror
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name ="description" rows="3" class="form-control"></textarea>
                                @error('description'){{ $message }} @enderror

                            </div>

                            <div class="mb-3">
                                <label>Status</label>
                                <br>
                                <input type="checkbox" name="status" checked /> checked=visible,unchecked=hidden
                                @error('status'){{ $message }} @enderror

                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>