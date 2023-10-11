 <?php
 header('Content-Type: text/html; charset=utf-8');
session_start();
require_once './head.php';
?>

<body>
    
    <?php
    $menu = filter_input(INPUT_GET, "menu");
    require_once './menu.php';
    require_once './tartalom.php';
    ?>
    <script src="./bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>