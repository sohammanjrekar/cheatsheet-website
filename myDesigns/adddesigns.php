<?php require_once '../db.php';

// Initialize variables to store success and error messages
$success_message = '';
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $title = $_POST['title'];
    $category = $_POST['category'];
    // Encode HTML, CSS, and JavaScript code
    $html = htmlspecialchars($_POST['html']);
    $css = htmlspecialchars($_POST['css']);
    $js = htmlspecialchars($_POST['js']);

    // Check if file is uploaded
    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // File path to save in "Design" folder
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_destination = 'Design/' . $file_name;
        
        // Move uploaded file to "Design" folder
        if(move_uploaded_file($file_tmp, $file_destination)) {
            // SQL to insert data into table
            $sql = "INSERT INTO adddesign (title, image_url, category, html_code, css_code, js_code) VALUES (?, ?, ?, ?, ?, ?)";

            // Prepare the statement
            $stmt = $conn->prepare($sql);
            
            // Bind parameters
            $stmt->bind_param("ssssss", $title, $file_name, $category, $html, $css, $js);
            
            // Execute the statement
            if ($stmt->execute()) {
                // Set success message
                $success_message = "New record created successfully";
            } else {
                // Set error message
                $error_message = "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            $error_message = "Failed to move uploaded file.";
        }
    } else {
        $error_message = "No file uploaded.";
    }
}
?>

<div class="container">
    <h2>Submit Form</h2>
    <form method="post" enctype="multipart/form-data"> <!-- Add enctype for file upload -->
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input class="form-control" type="file" id="image" name="image"> <!-- Add file input field -->
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>                    
            <select class="form-select" id="category" name="category">
                <option selected>Choose...</option>
                <option value="navbar">Navbar</option>
                <option value="hero">Hero Section</option>
                <option value="footer">Footer</option>
                <option value="carousel">Carousel</option>
                <option value="jumbotron">Jumbotron</option>
                <option value="comment_box">Comment Box</option>
                <option value="button">Button</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="html" class="form-label">HTML Code:</label>
            <textarea class="form-control" id="html" name="html" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="css" class="form-label">CSS Code:</label>
            <textarea class="form-control" id="css" name="css" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="js" class="form-label">JavaScript Code:</label>
            <textarea class="form-control" id="js" name="js" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- Display success and error messages -->
        <?php if (!empty($success_message)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
    </form>
</div>
