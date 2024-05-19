<?php
require_once 'Navbar.php';
require_once '../db.php';

// Get the category from the URL parameter
$name = $_GET['name'];

// Prepare the SQL statement with a placeholder for the category
$sql = "SELECT DISTINCT id, title, image_url FROM adddesign WHERE category = ?";
$stmt = $conn->prepare($sql);

// Bind the category parameter
$stmt->bind_param("s", $name);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Initialize an array to store encountered IDs
$encountered_ids = array();

?>

<section id="portfolio" class="content-section">
    <div class="container">
        <div class="content-section-heading text-center">
            <h2 id="LINKBELOW" class="mb-5">My <?php echo $name; ?>'s</h2>
        </div>
        
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                // Check if ID is already encountered
                if (in_array($id, $encountered_ids)) {
                    // Skip if ID is already encountered
                    continue;
                }
                // Store the encountered ID
                $encountered_ids[] = $id;

                $image_url = $row["image_url"];
                $title = $row["title"];
        ?>

        <div class="col-md-6">
            <a href="code.php?id=<?php echo $id; ?>">
            <div class="card text-bg-dark">
                <img src="Design/<?php echo $image_url; ?>" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title" style="color:black"><?php echo $title; ?></h5>
                </div>
            </div>
            </a>
        </div>

        <?php
            }
        }
        ?>
    </div>
</section>

<?php
require_once 'Footer.php';
?>
