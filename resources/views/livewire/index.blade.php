<!DOCTYPE html>
<html>
<head>
    <title>My-Blog | Livewire CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">  
    @livewireStyles


<style>
.vl {
  border-left: 2px solid black;
  height: 300px;
}
</style>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                    <div class="border border-dark p-3 mb-2 bg-info text-dark text-center">
                        <h2>Livewire CRUD Demo</h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('books')
                    </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>