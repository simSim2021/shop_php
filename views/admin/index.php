<?php
include (ROOT . '/views/parts/header_admin.php');
?>

<div class="container_admin">
    <h4>Hello, admin!</h4>

    <br/>

    <p>You can do:</p>

    <ul>
        <li><a target="_blank" href="/admin/product">Manage products</a></li>
        <li><a target="_blank" href="/admin/category">Manage categories</a></li>
        <li><a target="_blank" href="/admin/orders">Manage orders</a></li>
    </ul>
</div>
<div class="appendix"></div>

<?php
include (ROOT . '/views/parts/footer_admin.php');
?>
