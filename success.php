<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Debugging to check if success.php is being accessed
echo "<h1>Debug: success.php is reached</h1>";
?>
<main>
    <div class="wrapper">
        <?php
        // Include breadcrumb component
        $APPLICATION->IncludeComponent("bitrix:breadcrumb", "planet", Array(
            "START_FROM" => "0",
            "PATH" => "",
            "SITE_ID" => "s1"
        ));
        ?>

        <h1 class="aside title">Success</h1>

        <?php
        // Check if the request method is POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Initialize an array to store form data
            $formData = [];
            foreach ($_POST as $key => $value) {
                $formData[$key] = htmlspecialchars($value);
            }

            // Display a success message and the submitted data
            echo "<h2>Thank you for your submission!</h2>";
            echo "<h3>Your submitted data:</h3>";
            echo "<ul>";
            foreach ($formData as $fieldName => $fieldValue) {
                echo "<li><strong>" . ucfirst(str_replace('form_', '', $fieldName)) . ":</strong> " . $fieldValue . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<h2>No data submitted.</h2>";
        }
        ?>
    </div>
</main>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
