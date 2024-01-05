<div class="cabinet-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
<?php

    $roles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());
    echo '<ul>';    


    foreach($roles as $role){
        echo '<li><a href = "index.php?r=cabinet/'.$role -> name.'">'.$role -> description. '</a></li>';
    }
    echo '</ul>';    

?>



    </p>

</div>
