<!-- Content -->
<div class="container">

    <div class="row">
        <div class="cycle-slideshow" style="width: 45%">
            <img src="http://malsup.github.io/images/p1.jpg">
            <img src="http://malsup.github.io/images/p2.jpg">
            <img src="http://malsup.github.io/images/p3.jpg">
            <img src="http://malsup.github.io/images/p4.jpg">
        </div>
    </div>


    <?php

    $menuname = $menu->getActive()->title;

    /*If home page */
    if ($menu->getActive() == $menu->getDefault()) {
        echo $menuname;
    }
    /*end home page */

    ?>

    <?php if ($this->countModules('breadcrumbs')) : ?>
        <div id="breadcrumbs">

            <div class="row">
                <jdoc:include type="modules" name="breadcrumbs" style="block"/>
            </div>

        </div>
    <?php endif; ?>
    <div id="main" class="row show-grid">
        <!-- Left -->
        <?php if ($this->countModules('left')) : ?>
            <div id="sidebar" class="col-sm-<?php echo $leftcolgrid; ?>">
                <jdoc:include type="modules" name="left" style="xhtml"/>
            </div>
        <?php endif; ?>
        <!-- Component -->
        <div id="container" class="col-sm-<?php echo(12 - $leftcolgrid - $rightcolgrid); ?>">
            <!-- Content-top Module Position -->
            <?php if ($this->countModules('content-top')) : ?>
                <div id="content-top">
                    <div class="row">
                        <jdoc:include type="modules" name="content-top" style="block"/>
                    </div>
                </div>
            <?php endif; ?>
            <div class="main-box">
                <jdoc:include type="component"/>
                <jdoc:include type="message"/>
            </div>
            <!-- Below Content Module Position -->
            <?php if ($this->countModules('content-bottom')) : ?>
                <div id="content-bottom">
                    <div class="row">
                        <jdoc:include type="modules" name="content-bottom" style="block"/>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <!-- Right -->
        <?php if ($this->countModules('right')) : ?>
            <div id="sidebar-2" class="col-sm-<?php echo $rightcolgrid; ?>">
                <jdoc:include type="modules" name="right" style="xhtml"/>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- Content -->