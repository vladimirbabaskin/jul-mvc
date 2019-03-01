<h2>Product->index</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Photo</th>
        <th>Description</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($this->products as $product): ?>
        <tr>
            <td><?= $product["id"]; ?></td>
            <td><?= $product["name"]; ?></td>
            <td><?= $product["price"]; ?></td>
            <td><?= $product["photo"]; ?></td>
            <td><?= $product["description"]; ?></td>
            <td>
                <form action="/products/delete" method="post">
                    <button name="id" value="<?= $product["id"]; ?>">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<form action="/products/add" method="post">
    <button>Add</button>
</form>
<?php
//    $_SERVER
//    var_dump($_SERVER);
//?>