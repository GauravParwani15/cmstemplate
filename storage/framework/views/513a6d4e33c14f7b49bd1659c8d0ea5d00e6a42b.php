<?php $__env->startSection('page_heading','Assign Batches'); ?>
<?php $__env->startSection('section'); ?>
<div class = "col-sm-10">
    <div class="panel panel-heading ">
        <div class="row">
            <?php if(@isset($page_data)): ?>
            <div class="row">

                <div class = "col-sm-2">
                    <div class="col-md-offset-5 col-xs-offset-5 onoffswitch-ct">
                        <input type="checkbox" name="onoffswitch-ct" class="onoffswitch-ct-checkbox" id="myonoffswitch-ct" onclick="flag_switch()">
                        <label class="onoffswitch-ct-label" for="myonoffswitch-ct">
                            <span class="onoffswitch-ct-inner"></span>
                            <span class="onoffswitch-ct-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo Form::open(['method'=>'POST','action' => 'ClassTeacherController@confirm_batches']); ?>

    <table class="table table-hover">
        <tr>
            <th>Sr No</th>
            <th>UID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Roll no.</th>
            <th>Batch</th>
        </tr>
        <?php for($i=0; $i<count($page_data); $i++): ?>
        <tr>
            <td><?php echo e($i+1); ?></td>
            <td><?php echo e($page_data[$i]->UID); ?></td>
            <td><?php echo e($page_data[$i]->first_name); ?></td>
            <td><?php echo e($page_data[$i]->last_name); ?></td>
            <td><?php echo e($page_data[$i]->roll_no); ?></td>
            <td>
                <select id="form-control<?php echo e($i); ?>"class="form-control batch selectedSelects" name="<?php echo e($page_data[$i]->UID); ?>" onchange="changeFunction(value, <?php echo e($i); ?>)">
                    <option value="A" <?php echo e(((($page_data[$i]->batch)=='A') ? 'selected="selected"' : '')); ?>>A</option>
                    <option value="B" <?php echo e(((($page_data[$i]->batch)=='B') ? 'selected="selected"' : '')); ?>>B</option>
                    <option value="C" <?php echo e(((($page_data[$i]->batch)=='C') ? 'selected="selected"' : '')); ?>>C</option>
                </select>
            </td>
        </tr>
        <?php endfor; ?>
    </table>
    <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-2">        
            <div class="span6 offset3">
                <?php echo e(Form::submit('Confirm',['class'=>'btn btn-success btn-lg'])); ?>

            </div>
        </div>       
    </div>
    <?php echo Form::close(); ?>

    
    <?php endif; ?>
    <script>
        var flag=true;
        function flag_switch(){
            if(flag==true){
                flag=false;
            }
            else{
                flag=true;
            }
        }
        function changeFunction($value, $i){
            if(flag==true){
                var elements = document.getElementsByClassName("selectedSelects");
                for(var i=$i;i<elements.length;i++){
                    document.getElementById("form-control" + i).value = $value;
                }
            }
        }
        
    </script>
    <!--jquery for disability
    <script>
        $(document).ready(function() {
            $('#submit_button').prop('disabled', true);
            $('#form-control').onchange(function() {
                if($(this).val() =) {
                    $('#submit_button').prop('disabled', false);
            }
            });
        });
    </script>-->

    <!--<script>
    // $(document).ready(function() {
    //     $(#submit_button).prop('disabled',true);
    //     setTimeout(function(){
    //           $('#submit_button').prop('disabled', false);
    //       },14000);
    // });
    // <script>-->
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>