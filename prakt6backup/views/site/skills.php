<div>
    <?php
        foreach($skills as $skill): 
    ?>
    <p><?= $skill['id'].'. '.$skill['name'];?></p>
    <ul>
        <li>
            <?= 'proficiency_level = '.$skill['proficiency_level']; ?>
            

        </li>
        <li>
            <?= 'popularity_index = '.$skill['popularity_index']; ?>
        </li>
    </ul>
    <?php
        endforeach;
    ?>
</div>
