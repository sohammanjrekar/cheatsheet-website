<?php
require_once 'Navbar.php';
require_once '../db.php';

// Get the ID from the URL parameter
$id = $_GET['id'];

// Prepare the SQL statement to fetch HTML, CSS, and JS code based on the ID
$sql = "SELECT html_code, css_code, js_code FROM adddesign WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Initialize variables to store HTML, CSS, and JS code
$html_code = '';
$css_code = '';
$js_code = '';

// Fetch the data
if ($row = $result->fetch_assoc()) {
    $html_code = $row['html_code'];
    $css_code = $row['css_code'];
    $js_code = $row['js_code'];
}
?>

<div class="container py-5">
    <div class="p-5 bg-white rounded shadow mb-5">
        <!-- Rounded tabs -->
        <ul id="myTab" role="tablist" class="nav bg-dark nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav" style="--bs-nav-link-color: rgb(249, 249, 253); --bs-nav-pills-link-active-color: red; --bs-nav-pills-link-active-bg: orange;">
            <li class="nav-item flex-sm-fill">
                <a id="html-tab" data-toggle="tab" href="#html" role="tab" aria-controls="html" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">HTML</a>
            </li>
            <li class="nav-item flex-sm-fill">
                <a id="css-tab" data-toggle="tab" href="#css" role="tab" aria-controls="css" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">CSS</a>
            </li>
            <li class="nav-item flex-sm-fill">
                <a id="js-tab" data-toggle="tab" href="#js" role="tab" aria-controls="js" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">JS</a>
            </li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div id="html" role="tabpanel" aria-labelledby="html-tab" class="tab-pane fade px-4 py-5 show active" style="font-size:15px;">
            <pre class="language-html"><code><?php echo $html_code; ?></code></pre>
            </div>
            <div id="css" role="tabpanel" aria-labelledby="css-tab" class="tab-pane fade px-4 py-5" style="font-size:15px;">
            <pre class="language-css"><code><?php echo htmlspecialchars($css_code); ?></code></pre>
            </div>
            <div id="js" role="tabpanel" aria-labelledby="js-tab" class="tab-pane fade px-4 py-5" style="font-size:15px;">
            <pre class="language-js"><code><?php echo htmlspecialchars($js_code); ?></code></pre>
            </div>
        </div>
        <!-- End rounded tabs -->
    </div>
</div>

<?php
require_once 'Footer.php';
?>
