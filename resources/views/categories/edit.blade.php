@extends('layouts.app')

@section('title')
    Update Categories
@endsection

@section('content')
<div class="container border border-2 " style="width: 50%">
    <p class='text-center fs-3 m-4'>Edit Categories</p>
    <form action="{{route('categories.update',['id'=>$categories->id])}}" class="form" method="post">
        @csrf
        <div class="form-group container">
            <label for="" class="form-label mt-2 mb-2 fs-6">Categories Name</label>
            <input placeholder="permission name" class="form-control mb-2" name="name" type="text" value="{{$categories->name}}">
            
            <label for="" class="form-label mt-2 mb-2 fs-6">Sub Category</label>
            <select type="text" name="parent_id" class="form-control">
                <option value="">None</option>
                    @foreach($categories->subcategory as $category)                                                 
                            <option value="{{$category->id}}">{{$category->name}}</option>                        
                    @endforeach
                </select>
            <button class="btn btn-primary mt-4 w-100">
                submit
            </button>
        </div>
    </form>
</div>
@endsection

