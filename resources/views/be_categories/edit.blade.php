@extends('layouts.master')

@section("content")

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Inputs</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/categories/{{$categories->id}}/update" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="category">Category ID</label>
                                    <input name="category" type="text" class="form-control" id="category" aria-describedby="category" value="{{$categories->category}}">
                                </div>


                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
