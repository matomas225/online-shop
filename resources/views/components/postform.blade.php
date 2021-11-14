<div class="post">
    <form action="{{$editPage ? route('post.edit') : route('post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method($editPage ? "patch" : "post" )
        <h1>{{$editPage ? "Edit Post" : "Create Post"}}</h1>
        <label for="productName">Product Name</label>
        @error("productName")
        <p>{{$message}}</p>
        @enderror
        <input type="text" value="{{$post->productName ?? ''}}" placeholder="Enter Product Name" name="productName">
        <label for="productDiscription">Product Discription</label>
        @error("productDiscription")
        <p>{{$message}}</p>
        @enderror
        <textarea placeholder="Enter Product Discription"  name="productDiscription" rows="5" cols="50">{{$post->productDiscription ?? ''}}</textarea>
        <label for="img">Select image:</label>
        @error("img")
        <p>{{$message}}</p>
        @enderror
        <input class="img-input" type="file" name="img" id="img">
        <button type="submit">{{$editPage ? "Edit Post" : "Create Post"}}</button>
    </form>
</div>