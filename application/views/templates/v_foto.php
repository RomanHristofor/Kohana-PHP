
<?foreach($categori as $one):?>
    <p class="bg-success">
        <?=$one->name;?>

    </p>
    <?if($one->picture):?>
        <?$path = 'media/image/'.$one->id.'/'.$one->picture?>
        <?else:?>
        <?$path = 'media/image/no_photo.jpg'?>
    <?endif;?>
    <p align="center">
        <?=HTML::image($path,array('class'=>'pic','width'=>'670px'))?>
    </p>
<?endforeach;?>