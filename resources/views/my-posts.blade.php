<!DOCTYPE html>

<html>

<head>

    <title>Laravel 5.5 Ajax CRUD Example</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">

</head>

<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('my-posts')}}">Crud Paginate ajax</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<style>
    .cont{
        padding-top: 70px;
    }
</style>
<div class="container cont">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 5.5 Ajax CRUD Example</h2>

            </div>

            <div class="pull-right">

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">Create Post</button>

            </div>

        </div>

    </div>

    <table class="table table-bordered">

        <thead>

        <tr>

            <th>Title</th>

            <th>Details</th>

            <th width="200px">Action</th>

        </tr>

        </thead>

        <tbody id="body" class="body">

        </tbody>

    </table>



    <ul id="pagination" class="pagination-sm"></ul>



    <!-- Create Item Modal -->

    @include('create')

            <!-- Edit Item Modal -->

    @include('edit')



</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">



<script type="text/javascript">

    var url = "<?php echo route('posts.index')?>";

</script>

<script src="/js/posts-ajax.js"></script>



</body>

</html>