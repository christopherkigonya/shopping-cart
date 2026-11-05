<?php
//we should get the 4 most recent added products
$stmt = $pdo->('SELECT * FROM PRODUCTS ORDER BY date-added DESC LIMIT 4');
$stmt->execute();
$recently_added_products =stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?=template_header('Home')?>
<div class = "featured">
    <h2>Gadgets</h2>
    <p>Essential gadgets for everyday use</p>
</div>
<div class = "rencently-added content-wrapper">
    <h2> Recently added products</h2>
    <div class = "products">
        <?php foreach ($recently_added_products as products): ?>
            <a href = "index.php?page=product&id=<?=$product['id']?>" class = "product">
                <img src ="imgs/<?=$product['img']?>" width = "200" height = "200"
                alt = "<?=$product['title']?>">
                <span class = "name"><?=$product['title']?></span>
                <span class = "price">
                    &dollar;<?=product['price']?>
                    <?= if($product['rrp']>0): ?>
                        <span class = "rrp">&dollar;<?=$product['rrp']?></span>
                        <?php endif; ?>
                    </span>
                    </a>
                    <?= endforeach; ?>
                    </div>
                    </div>
                    <?=template_footer()?>

