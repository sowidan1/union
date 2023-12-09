<!DOCTYPE html>
<html>
<head>
    <title>Create Instractor</title>
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



        body {
            font-family: sans-serif;
            margin: 50px;
            padding: 20px;

        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        .textarea {
            width: 100%;
            height: 200px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        .button {
            padding: 10px 20px;
            background-color: #ff5d27;
            color: #fff;
            border: none;
            cursor: pointer;
            margin: 20px auto;
            display: block;
            width: 150px;
        }
        .button:hover {
  background-color: #ff7f00;
}

        .file-upload {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            background-color: rgb(255, 115, 0);

        }

    </style>
</head>
<body>
    <header>
        <div class="menu">
            <a href="{{ route('post')}}">Edit Post</a>
        <a href="{{ route('event')}}">Edit Event</a>
        <a href="{{ route('instractor')}}">Edit Instructor</a>

        </div>
    </header>

  <img src="../assets/images/logo3-1-232x107.png" alt="#" style="display: block;
  margin: 0 auto;width: 300px;height: 150px;">
  <h1>Create Instractor</h1>

    <form action="#">
        <label for="instractortName">Instractor Name:</label>
        <input type="text" id="instractorName" name="instractorName" class="input-field" required>



        <label for="description">Description:</label>
        <textarea id="description" name="description" class="textarea" required></textarea>

        <button type="submit" class="button">Create Instractor</button>
    </form>

    <label for="eventImage">Upload Instractor Image:</label>
    <input type="file" id="instractortImage" name="instractortImage" class="file-upload">
</body>
</html>
