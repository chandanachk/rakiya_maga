<?php
/* @var $this yii\web\View */

$this->title = 'JOB SEARCH';
?>

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;


$form = ActiveForm::begin([
    'id' => 'active-form',
    'options' => [
        'class' => 'form-horizontal',
        'enctype' => 'multipart/form-data'
        ],
])
/* ADD FORM FIELDS */


?>


<div class="site-index">

    <div class="jumbotron">
        <h1>JOB SITE HOME PAGE</h1>

        <p class="lead">COMMING SOON...</p>

        <!-- <p><a class="btn btn-lg btn-success" href="">SEARCH JOB</a></p> -->
    </div>
    
    <div class="control-group buttons">
      <?php

        echo $form->field($model, 'name')->textInput()->hint('Search Job')->label('Search');
         
      ?>
      <div class="form-actions">
          <?php echo Html::button( $content = 'Button', $options = ['id'=>'btnSearch','class'=>'btnSearch'] ); ?>
      </div>
            
        
    </div>
<?php ActiveForm::end();?>
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                
            </div>
            <div class="col-lg-4">
                
            </div>
            <div class="col-lg-4">
                
            </div>
        </div>

    </div>
</div>



<?php 
$script = <<< JS
$('#btnSearch').on('click', function(e) {
  alert("sdfgdsf");
  var form = $(this);
    $.ajax({
       url:form.attr('action'),
       type:'POST',
       contentType: "application/json; charset=utf-8",
       dataType: "json",
       data: {id: '12321', 'other': 'dfsdfsf'},
       success: function(data) {
           alert(data);
       }
    });
});
JS;
$this->registerJs($script);
?>
