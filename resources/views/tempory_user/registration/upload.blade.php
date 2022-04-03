<h1>Upload File</h1>
<form action="" method="POST" enctype="multipart/form-data"> <!--multipart use when upload rich data file-->
    @csrf
    <hr>
    <h4>Application</h4>
    <input type="file" name="application">
    <button type="submit">Upload File</button> <hr>
    
    <hr>
    <h4>Id copy</h4>
    <input type="file" name="id">
    <button type="submit">Upload File</button> <hr>

    <button type="submit">Done</button>
</form>
 