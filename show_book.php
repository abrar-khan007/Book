<?php
if(isset($_POST["get_seleted_Category"]) ||  isset($_POST["search"])){
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM products,category WHERE product_cat = '$id' AND product_cat=cat_id";
	}else {
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products,category WHERE product_cat=cat_id AND product_keywords LIKE '%$keyword%'";
	}
}
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>

    <script src="form.js"></script>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="application/javascript" src="jquery.iframeResizer.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <style>
        .iframe {
            width: 100%;
            height: 100%;
            border: none;

            background: #eee;


            z-index: 1;
        }

        .resizable {
            width: 300px;
            height: 300px;
            background: #fff;
            border: 1px solid #ccc;


            z-index: 9;
        }
    </style>
    <script>
        $(function() {
            $('.resizable').resizable({
                start: function(event, ui) {
                    $('iframe').css('pointer-events', 'none');
                },
                stop: function(event, ui) {
                    $('iframe').css('pointer-events', 'auto');
                }
            });
        });
    </script>
</head>

<body>

    <div class="container">



        <div class="col-lg-12">
            <!-- SEARCH BAR -->
            <div class="col-md-6">
                <div class="header-search">
                    <form>
                        <select class="input-select">
                            <option value="0">All Books</option>
                            <option value="1">User</option>
                            <option value="2">Author </option>
                            <option value="3">Poetry </option>
                            <option value="4">General </option>
                        </select>
                        <input class="input" id="search" type="text" placeholder="Search for anything">
                        <button type="submit" id="search_btn" class="search-btn" style="background: linear-gradient(to bottom, #312d2d, #191a1b);">Search</button>
                    </form>
                </div>
            </div>
            <br>

            <br>
            <h1 class="warning text-center">Displayed Book Detail </h1>
            <br>

            <table class="table  table-hover table-striped" style="font-size:18px">
                <tr class="bg-dark text-white text-center">
                    <th>Id </th>
                    <th>Title </th>
                    <th>Description </th>
                    <th> Book</th>
                    <th>Category </th>
                    <th>Created On </th>
                    <th>Author </th>
                    <th>Publication </th>
                    <th> Status </th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th><a class=" btn btn-primary" href="findex.php">Add New</a></th>
                </tr>
                <?php
                include 'db.php';

                $sqll = mysqli_query($con, "SELECT `id`, `book_title`, `pic_book`, `book_details`, `Category`, `created_on`, `author`, `publication`, `status` FROM `book_publication`") or die("query 1 incorrect.......");

                while ($r = mysqli_fetch_array($sqll)) {
                ?>
                    <tr class="text-center">
                        <td><?php echo $r['id']; ?> </td>
                        <td><?php echo $r['book_title']; ?></td>
                        <?php $book_pic = $r['pic_book']; ?>
                        <td><?php echo "  <div class='resizable'>  <iframe id='iframe' src='book_images/$book_pic' style='width:100%;scrolling:no; height:100%; border:groove #000'> </iframe></div>"   ?> </td>
                        <td><?php echo $r['book_details']; ?></td>
                        <td><?php echo $r['Category']; ?></td>
                        <td><?php echo $r['created_on'] ?></td>
                        <td><?php echo $r['author'] ?></td>
                        <td><?php echo $r['publication'] ?></td>
                        <td><?php echo $r['status'] ?></td>
                        <td><button class="btn-danger"><a href='edit.php?id=<?php echo  $r['id']; ?>' class="text-white">Edit</a></button></td>
                        <td> <button class="btn-danger"><a href='delete.php?id=<?php echo  $r['id']; ?>' class="text-white">Delete</a></button></td>
                        <input hidden="" type="text" name="success" value="<?php echo "$link"; ?>">


                    </tr>
                <?php
                }

                ?>
            </table>


            <?php     ///pagination


            ?>


        </div>

</body>

</html>