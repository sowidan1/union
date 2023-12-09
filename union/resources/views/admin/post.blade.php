<!DOCTYPE html>
<html>
<head>
  <title>Edit Post</title>
  <style>
    .menu {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(240, 101, 9);
            padding: 10px;
        }

        .menu a {
            margin: 0 10px;
            text-decoration: none;
            color: #ffffff;
            padding: 5px;
        }

        .menu a:hover {
            background-color:  rgb(192, 80, 5);
        }

.container {
  max-width: 100%;
  margin: 0 auto;
  padding: 20px;
  text-align: center;
}

h1 {
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  text-align: left;
  font-weight: bold;
}

textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="file"] {
  padding: 10px;
  background-color: #ff5d27; /* Orange color */
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"] {
  padding: 10px 20px;
  background-color: #ff5d27;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #ff8c00;
}  </style>
<script src="https://cdn.tiny.cloud/1/cmaiktndglvfdlcnhxzbkqn240yrs898otzko26e08xyubga/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body>
    <header>
        <div class="menu">
            <a href="{{ route('post')}}">Edit Post</a>
        <a href="{{ route('event')}}">Edit Event</a>
        <a href="{{ route('instractor')}}">Edit Instructor</a>

        </div>
    </header>
  <div class="container">
    <img src="../assets/images/logo3-1-232x107.png" alt="#" style="height: 8rem;">

    <form>
        <div class="container">
            <h1>Edit Post</h1>
            <form>
              <div class="form-group">
                <label for="featured-image">Featured Image:</label>
                <input type="file" id="featured-image" name="featured-image" accept="image/*">
              </div>
              <div class="form-group">
                <label for="post-content">Post Content:</label>
                <textarea id="post-content" name="post-content" rows="8" cols="50" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Publish">
              </div>
            </form>
          </div>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
  </script>

</body>
