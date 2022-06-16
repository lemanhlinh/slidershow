<?php
    global $tmpl; 
    $tmpl -> addStylesheet('style_default','blocks/slideshow/assets/css');
    $tmpl -> addScript('default_home','blocks/slideshow/assets/js');
    $i = 0;$j = 0;
?>	
<?php if(isset($data) && !empty($data)){?>
    <div id="myCarousel" class="" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php foreach($data as $item){?>
            <div class="item <?php echo ($j==0)?'active':''?> ">
                <img class="img-responsive" src="<?php echo URL_ROOT.str_replace('/original/', '/original/', $item -> image)?>" alt="<?php echo $item->name;?>" />
                <div class="container">
                    <div class="content-slider">
                        <div class="summary_slider">
                            <?php echo $item->summary; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php $j++;?>               
            <?php }?>
        </div>
        <div class="clear"></div>
    </div>
<?php }?>