<td><?= $item['name'] ?></td>
<td><?= $item['price'] ?></td>
<td>
	<ul class='product-opt'>
		<li><?= $item['quantity'] ?> </li>
		<li><a class='manipulate' name=<?= $item["products_id"] ?> href='edit'>update</a></li>
		<li><a class='false manipulate' name=<?= $item["products_id"] ?>  href='delete_from_cart'><span class='glyphicon glyphicon-trash'></a></li>
	</ul>
	<form action='cart/update' method='post' id=<?= $item["products_id"]?>>
		<input type='hidden' name='product_id' value= <?= $item["products_id"] ?>>
		<input type='hidden' name='quantity' value= <?= $item["quantity"] ?>>
	</form>
</td>
<td><?= $item['product_total'] ?></td>