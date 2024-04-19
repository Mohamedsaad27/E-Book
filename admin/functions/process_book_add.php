<?php
include("../../includes/connection.php");

if (!empty($_POST)) {
    $errors = array();

    // Validate book name
    if (empty($_POST['book_name'])) {
        $errors['book_name'] = "Book name is required.";
    }

    // Validate book category
    if (empty($_POST['book_category'])) {
        $errors['book_category'] = "Book category is required.";
    }

    // Validate book description
    if (empty($_POST['book_description'])) {
        $errors['book_description'] = "Book description is required.";
    }

    // Validate book price
    if (empty($_POST['book_price']) || !is_numeric($_POST['book_price'])) {
        $errors['book_price'] = "Book price is required and must be a number.";
    }

    // Validate book image
    if (empty($_FILES['book_img']['name'])) {
        $errors['book_img'] = "Book image is required.";
    } else {
        $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
        $file_extension = strtolower(pathinfo($_FILES['book_img']['name'], PATHINFO_EXTENSION));
        if (!in_array($file_extension, $allowed_extensions)) {
            $errors['book_img'] = "Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    }

    if (empty($errors)) {
        extract($_POST);

        $time = time();

        $random_number_name = uniqid();

        $new_name_file = $random_number_name . $_FILES['book_img']['name'];

        move_uploaded_file($_FILES['book_img']['tmp_name'], "../../book_img/" . $new_name_file);
        $book_img = "book_img/" . $_FILES['book_img']['name'];

        $query = "INSERT INTO `book_table`(`book_name`, `book_category`, `book_description`, `book_price`, `book_img`, `book_time`) VALUES ('$book_name', '$book_category', '$book_description', '$book_price', '$book_img', '$time')";

        mysqli_query($connection_database, $query);

        header("location: ../book_view.php");
        exit();
    } else {
        // Redirect back to the form with error messages
        header("location: ../book_add.php?errors=" . urlencode(serialize($errors)));
        exit();
    }
} else {
    header("location: ../book_add.php");
    exit();
}
?>