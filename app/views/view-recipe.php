<div class="thumbnail">
    <!-- <img class="img-responsive" src="/pictures/<?php echo $dish->pic ?>" alt=""> -->
    <div class="caption-full">
        <h4><?php echo $dish->name ?></h4>
        <p><i><?php echo $dish->description ?></i></p>
        <p><strong>Ingredients:</strong></p>
        <?php $ingredient_list = explode('|||', $dish->ingredients); ?>
        <ul>
        <?php foreach ($ingredient_list as $ingredient): ?>
            <li><?php echo $ingredient ?></li>
        <?php endforeach ?>
        </ul>
        <p><strong>Instructions:</strong></p>
        <?php $instruction_list = explode('|||', $dish->instructions); ?>
        <ol>
        <?php foreach ($instruction_list as $instruction): ?>
            <li><?php echo $instruction ?></li>
        <?php endforeach ?>
        </ol>
    </div>
</div>