<?php
use yii\widgets\DetailView;
?>

<?=
    DetailView::widget([
        'model' => $mahasiswa075,
        'attributes' => [
            'id019',
            'nim019',
            'nama019',
            'kelas019',
            'status019',
        ],
    ]);
?>