<?php $pictures = array_reverse($gallery['Picture']); ?>

<?php if(empty($pictures)): ?>
    <h4 class="empty text-center">Er bevinden zich nog geen foto's in dit album.</h4>
<?php else: ?>
    <?php $i = 0; ?>
    <?php foreach($pictures as $picture): ?>
        <?php $i++; ?>
        <?php if($i % 4 == 1): ?>
            <div class="row">
        <?php endif; ?>

        <div class="col-sm-6 col-md-3">
            <a href="#" class="thumbnail" data-pictureid="<?php echo $picture['id']; ?>">
                <?php echo $this->Html->image('uploads/thumbnail/' . $picture['name'], $options = array()); ?>

                <div class="hide picture-info">
                    <span class="descr_nl"><?php echo $picture['descr_nl']; ?></span>
                    <span class="descr_fr"><?php echo $picture['descr_fr']; ?></span>
                    <span class="descr_en"><?php echo $picture['descr_en']; ?></span>
                </div>
            </a>

            
            <div class="alert picture-alert alert-warning <?php if(!($picture['descr_nl'] == '' || $picture['descr_fr'] == '' || $picture['descr_en'] == '')): ?>out<?php endif; ?>" style="position: absolute; bottom: -7px; left: 27px;">Foto info nog niet compleet!</div>
            
        </div>

        <?php if($i % 4 == 0): ?>
            </div>
            <div class="clearfix"></div><br/>
        <?php endif; ?>

    <?php endforeach; ?>
<?php endif; ?>