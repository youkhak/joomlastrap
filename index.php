<?php
$app = JFactory::getApplication();
$menu = $app->getMenu();
$itemid = JRequest::getVar('Itemid');
$active = $menu->getItem($itemid);
$params = $menu->getParams( $active->id );
$pageclass = $params->get( 'pageclass_sfx' );
if ($menu->getActive() == $menu->getDefault()) {
    //echo 'This is the front page';
}
?>




<?php
/*------------------------------------------------------------------------
# author Gonzalo Suez
# copyright Copyright © 2013 gsuez.cl. All rights reserved.
# @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website http://www.gsuez.cl
-------------------------------------------------------------------------*/
// no direct access
defined('_JEXEC') or die;

include 'includes/params.php';
?>
<!doctype html>
<html lang="en">

<?php include 'templateblocks/head.php'; ?>

<body>

<!--top-->
<?php if ($this->countModules('top')) : ?>
    <div id="top">
        <div class="container">
            <div class="row">
                <jdoc:include type="modules" name="top" style="none"/>
            </div>
        </div>
    </div>
<?php endif; ?>
<!--top-->
<div id="wrap">

    <?php include 'templateblocks/navigation.php'; ?>

    <!--fullwidth-->
    <?php if ($this->countModules('fullwidth')) : ?>
        <div id="fullwidth">
            <div class="row">
                <jdoc:include type="modules" name="fullwidth" style="block"/>
            </div>
        </div>
    <?php endif; ?>
    <!--fullwidth-->


    <!--Showcase-->
    <?php if ($this->countModules('showcase')) : ?>
        <div id="showcase">
            <div class="container">
                <div class="row">
                    <jdoc:include type="modules" name="showcase" style="block"/>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!--Showcase-->


    <!--Feature-->
    <?php if ($this->countModules('feature')) : ?>
        <div id="feature">
            <div class="container">
                <div class="row">
                    <jdoc:include type="modules" name="feature" style="block"/>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!--Feature-->


    <?php include 'templateblocks/body.php'; ?>



    <!-- bottom -->
    <?php if ($this->countModules('bottom')) : ?>
        <div id="bottom">
            <div class="container">
                <div class="row">
                    <jdoc:include type="modules" name="bottom" style="block"/>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div id="push"></div>
    <!-- bottom -->


</div>

<?php include 'templateblocks/footer.php'; ?>


<jdoc:include type="modules" name="debug"/>
<!-- page -->

<!-- JS -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.cycle2.min.js"></script>


<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {
// dropdown
            if ($('.parent').children('ul').length > 0) {
                $('.parent').addClass('dropdown');
                $('.parent > a').addClass('dropdown-toggle');
                $('.parent > a').attr('data-toggle', 'dropdown');
                $('.parent > a').append('<b class="caret"></b>');
                $('.parent > ul').addClass('dropdown-menu');
            }

            /*Additional javascript calls */

        });
    })(jQuery);
</script>
<script type="text/javascript">
    $('.dropdown input').click(function (e) {
        e.stopPropagation();
    });
</script>
<script type="text/javascript">
    $('.dropdown-menu .dropdown-submenu a[data-toggle="dropdown-submenu"]').click(function (e) {
        e.stopPropagation();
    });
</script>

<!-- JS -->
</body>
</html>
