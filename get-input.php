<?php
    $title = "Get Inputs";

    include("./inc/header.php");
    // require_once("./inc/functions.php");

    // super global
    // $product_id = $_GET["productid"];

    $category = "";
    $limit = "";

    function setValues(){
        global $category, $limit;

        // but this has not been sanitized
        // $category = $_GET["category"];
        // $limit = $_GET['limit'];

        // so to sanitize
        $category = filter_input(INPUT_GET, "category", FILTER_VALIDATE_INT);
        $limit = filter_input(INPUT_GET, "limit", FILTER_VALIDATE_INT);

        if($category === "false" || $limit === "false"){
            die();
        }


    }

    setValues();




?>

<body>
    <div class="container">
        <div class="row">
           <div class="col-lg-12 text-center">
            <h1 class="mt-5">Get Input</h1>
            <div class="row">
                <!-- <?= $product_id;?> -->
                 Showing Category: <?=$category;?>
                 Showing Limit: <?=$limit;?>
            </div>
           </div> 
        </div>
    </div>
</body>

<?php
    include("./inc/footer.php")
?>