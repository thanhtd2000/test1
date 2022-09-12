<table border="1">
    <thead>
        <td>id</td>
        <td>name</td>
        <td>image</td>
        <td>intro</td>
        <td>description</td>
        <td>number_date</td>
        <td>price</td>
        <td>category_id</td>
    </thead>

    <tbody>
        <?php foreach ($loadAlltour as $st) : ?>
            <tr>
                <td><?= $st['id'] ?></td>
                <td><?= $st['name'] ?></td>
                <td><img src="../img/<?= $st['image'] ?>" alt="" width="50"></td>
                <td><?= $st['intro'] ?></td>
                <td><?= $st['description'] ?></td>
                <td><?= $st['number_date'] ?></td>
                <td><?= $st['price'] ?></td>
                <td><?= $st['category_id'] ?></td>
                <td><a href="index.php?act=edit&&id=<?= $st['id'] ?>">Sửa</a> || <a href="index.php?act=del&&id=<?= $st['id'] ?>">Xoá</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
    <a href="index.php?act=add">Thêm mới</a>
</table>