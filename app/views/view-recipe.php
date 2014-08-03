<div class="thumbnail">
    <img class="img-responsive" src="/pictures/<?php echo $dish->pic ?>" alt="">
    <div class="caption-full">
        <h4><?php echo $dish->name ?></h4>
        <p><?php echo $dish->description ?></p>

        <?php $ingredient_list = explode('|||', $dish->ingredients); ?>
        <ul>
        <?php foreach ($ingredient_list as $ingredient): ?>
            <li><?php echo $ingredient ?></li>
        <?php endforeach ?>
        </ul>
        
        <p><?php echo $dish->instructions ?></p>
    </div>
</div>