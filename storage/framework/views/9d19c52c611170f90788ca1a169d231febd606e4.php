<!-- 
<?php $__env->startSection('page_heading','Assign Roll'); ?>
<?php $__env->startSection('section'); ?>
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
<div class = "col-sm-8 col-md-8">
    <?php if(isset($page_data)): ?>
    <?php if(count($page_data)>1): ?>
    
    <?php echo Form::open(['method'=>'POST','action' => 'ClassTeacherController@confirm_roll']); ?>

    <table class="table table-hover">
        <tr>
            <th>Sr No</th>
            <th>UID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Roll no.</th>
        </tr>
        <?php for($i=0; $i<count($page_data); $i++): ?>
        <tr>
            <td><?php echo e($i+1); ?></td>
            <td><?php echo e($page_data[$i]->UID); ?></td>
            <td><?php echo e($page_data[$i]->first_name); ?></td>
            <td><?php echo e($page_data[$i]->last_name); ?></td>
            <td width=20%>
                <input id="form-control<?php echo e($i); ?>" class="form-control selectedSelects" name="<?php echo e($page_data[$i]->UID); ?>" type="number" min="1" value="<?php echo e($page_data[$i]->roll_no); ?>">
            </td>
        </tr>
        <?php endfor; ?>
    </table>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-5 col-sm-5"></div>
        <div class="col-md-2 col-sm-2">
            <?php echo e(Form::submit('Confirm',['class'=>'btn btn-success btn-lg'])); ?>

        </div>  
    </div>
    <?php echo Form::close(); ?>

    
    <br>
    <div class="row">
        <div class="col-md-4 col-sm-4"></div>
        <div class="col-md-2 col-sm-2">
            <button class="btn btn-lg btn-primary" onclick="changeFunction()">Auto Fill Roll Numbers</button>
        </div>  
    </div>
    
    <?php else: ?>
    <div class="col-sm-6 col-md-6">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×</button>
                <span class="glyphicon glyphicon-hand-right"></span> <strong>Can't Assign Roll nos.</strong>
                <hr class="message-inner-separator">
                <p>
                    <table>
                        <tr>
                            <th>Sr No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                        </tr>
                        <?php for($i=0; $i<count($details); $i++): ?>
                        <tr>
                            <td><?php echo e($i+1); ?></td>
                            <td><?php echo e(@$page_data->first_name); ?></td>
                            <td><?php echo e(@$page_data->last_name); ?></td>
                        </tr>
                        <?php endfor; ?>
                    </table>
                </p>
            </div>
        </div>   
        <?php endif; ?>
    </div>
    <script>
        var flag=true;
        function flag_switch(){
            if(flag==true){
                flag=false;
                echo "gg1";
                changeFunction();
                console.log(flag);
            }
            else{
                flag=true;
                echo "gg2";
                changeFunction();
                console.log(flag);
            }
        }
        function changeFunction(){
            if(flag==true){
                var elements = document.getElementsByClassName("selectedSelects");
                for(var i=0;i<elements.length;i++){
                    document.getElementById("form-control"+i).value = i+1;
                }
            }
            else{
            // var elements = document.getElementsByClassName("selectedSelects");
            // for(var i=0;i<elements.length;i++){
            //     document.getElementById("form-control"+i).value = "";
        }
    }
}
</script>
<?php $__env->stopSection(); ?> -->
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>