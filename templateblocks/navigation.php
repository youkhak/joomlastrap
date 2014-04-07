<!--Navigation-->
<div id="navigation">
    <div class="container">
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div id="brand">
                    <a href="<?php echo $this->params->get('logo_link') ?>">
                        <img
                            style="width:<?php echo $this->params->get('logo_width') ?>px; height:<?php echo $this->params->get('logo_height') ?>px; "
                            src="<?php echo $this->params->get('logo_file') ?>" alt="Logo"/>
                    </a>
                </div>
            </div>
            <div class="navbar-collapse collapse">
                <?php if ($this->countModules('navigation')) : ?>
                    <nav class="navigation" role="navigation">
                        <jdoc:include type="modules" name="navigation" style="none"/>
                    </nav>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!--Navigation-->