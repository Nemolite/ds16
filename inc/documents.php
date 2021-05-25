<?php
/**
 * Для секции документы
 */
?>

<div class="ds16-documents">
    <div class="container-fluid">
        <div class="missed-inner">    
            <div class="row">
                <div class="col-md-12">
                    <div class="mg-sec-title">
                        <h4>Сведения об образовательной организации</h4>
                    </div>                
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar( 'documentation-left' ); ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar( 'documentation-center' ); ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar( 'documentation-right' ); ?>
                </div>
            </div>
        </div>    
    </div>
</div>