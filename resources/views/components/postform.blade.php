<div class="post">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Create Post</h1>
        <label for="productName">Product Name</label>
        <input type="text" placeholder="Enter Product Name" name="productName">
        <label for="productDiscription">Product Discription</label>
        <textarea placeholder="Enter Product Discription" name="productDiscription" rows="5" cols="50"></textarea>
        <label for="img">Select image:</label>
        <input class="img-input" type="file" name="img" id="img">
        <button type="submit">Create Post</button>
    </form>
</div>