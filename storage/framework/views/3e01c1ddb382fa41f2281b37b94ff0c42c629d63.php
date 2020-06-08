<?php $__env->startSection('page_heading','Syllabus Schema'); ?>
<?php $__env->startSection('section'); ?>

    <?php if($errors->any()): ?>
        <div class=" alert alert-danger">
            <?php echo e($errors->first()); ?>

        </div>

    
    <?php endif; ?>


    <?php if(session('success')): ?>
        <div class="alert alert-success">   
                <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    
    <?php if(session('error')): ?>
        <div class="alert alert-danger">   
                <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <?php if(@isset($success)): ?>
        <div class="alert alert-success">   
              Inserted
        </div>
    <?php endif; ?>
    
    
    
    
    <div class="page-container">
        <?php echo e(session('term_data')); ?>

        <?php echo Form::open(['action'=>'SyllabusController@store', 'method'=>'POST']); ?>

            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="course_code">Course Code:</label>
                        <input type="text" class="form-control" name="course_code" required />
                    </div>             
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="course_name">Course Name:</label>
                        <input type="text" class="form-control" name="course_name" required />
                    </div>             
                </div>
            </div>

            
            <div class="col-sm-6">
                <div class="row">
                    <label for="IA">Internal Test</label>
                    <input name="IA" type="checkbox" id="checkbox1" onclick="if (this.checked){ 
                        document.getElementById('IA_max').disabled = false;
                        document.getElementById('IA_pass').disabled = false;
                        }else{
                        document.getElementById('IA_max').disabled = true;
                        document.getElementById('IA_pass').disabled = true;
                        document.getElementById('IA_max').value = '';
                        document.getElementById('IA_pass').value = '';
                        }" />
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input class="form-control max" type="number" name="IA_max" id="IA_max" placeholder="Maximum Marks" min="0" step="1" disabled required/>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input class="form-control" type="number" name="IA_pass" id="IA_pass" placeholder="Passing Marks" min="0" step="1" disabled required/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-sm-6">
                <div class="row">
                    <label for="ESE">End Semester Exam</label>    
                    <input name="ESE" type="checkbox" id="checkbox2" onclick="if (this.checked){ 
                        document.getElementById('ESE_max').disabled = false;
                        document.getElementById('ESE_pass').disabled = false;
                        }else{
                        document.getElementById('ESE_max').disabled = true;
                        document.getElementById('ESE_pass').disabled = true;
                        document.getElementById('ESE_max').value = '';
                        document.getElementById('ESE_pass').value = '';
                        }" />
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input class="form-control max" type="number" name="ESE_max" id="ESE_max" placeholder="Maximum Marks" min="0" step="1" disabled required/>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input class="form-control" type="number" name="ESE_pass" id="ESE_pass" placeholder="Passing Marks" min="0" step="1" disabled required/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                           

            
            <div class="col-sm-12">
                <div class="row">
                    <label for="PROR">Practical/Oral</label> 
                    <input name="PROR" type="checkbox" id="checkbox3" onclick="if (this.checked){ 
                        document.getElementById('prac').style.display = 'none';
                        document.getElementById('prd1').style.display = 'none';
                        document.getElementById('prd2').style.display = 'none';
                        document.getElementById('prd3').style.display = 'block';
                        
                        document.getElementById('oral').style.display = 'none'; 
                        document.getElementById('ord1').style.display = 'none';
                        document.getElementById('ord2').style.display = 'none';
                        document.getElementById('ord3').style.display = 'block';

                        document.getElementById('PROR_max').disabled = false;
                        document.getElementById('PROR_pass').disabled = false;

                        }else{
                        document.getElementById('prac').style.display = 'block';
                        document.getElementById('prd1').style.display = 'block';
                        document.getElementById('prd2').style.display = 'block';
                        document.getElementById('prd3').style.display = 'none';

                        document.getElementById('oral').style.display = 'block';
                        document.getElementById('ord1').style.display = 'block';
                        document.getElementById('ord2').style.display = 'block';
                        document.getElementById('ord3').style.display = 'none';

                        document.getElementById('PROR_max').disabled = true;
                        document.getElementById('PROR_pass').disabled = true;
                        document.getElementById('PROR_max').value = '';
                        document.getElementById('PROR_pass').value = '';
                        }" />
                </div>
            </div>

               
            <div class="col-sm-6">
                <div class="row" id="prac">
                    <label for="PR">Practical</label>    
                    <input name="PR" type="checkbox" id="checkbox4" onclick="if (this.checked){ 
                        document.getElementById('PR_max').disabled = false;
                        document.getElementById('PR_pass').disabled = false;
                        }else{
                        document.getElementById('PR_max').disabled = true;
                        document.getElementById('PR_pass').disabled = true;
                        document.getElementById('PR_max').value = '';
                        document.getElementById('PR_pass').value = '';
                        }" />
                </div>
                <div class="row">
                    <div class="row" id="prac_details">
                        <div class="col-sm-5">
                            <div class="form-group" id="prd1">
                                <input class="form-control max" type="number" name="PR_max" id="PR_max" placeholder="Maximum Marks" min="0" step="1" disabled required/>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group" id="prd2">
                                <input class="form-control" type="number" name="PR_pass" id="PR_pass" placeholder="Passing Marks" min="0" step="1" disabled required/>
                            </div>
                        </div>
                        <div class="col-sm-8" style="display: none" id="prd3">
                            <div class="form-group">
                                <input class="form-control max" type="number" name="PROR_max" id="PROR_max" placeholder="Maximum Marks" min="0" step="1" disabled required/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              
            <div class="col-sm-6">
                <div class="row" id="oral">
                    <label for="OR">Oral</label>    
                    <input name="OR" type="checkbox" id="checkbox5" onclick="if (this.checked){ 
                        document.getElementById('OR_max').disabled = false;
                        document.getElementById('OR_pass').disabled = false;
                        }else{
                        document.getElementById('OR_max').disabled = true;
                        document.getElementById('OR_pass').disabled = true;
                        document.getElementById('OR_max').value = '';
                        document.getElementById('OR_pass').value = '';
                        }" />
                </div>
                <div class="row">
                    <div class="row" id="oral_details">
                        <div class="col-sm-5" id="ord1">
                            <div class="form-group">
                                <input class="form-control max" type="number" name="OR_max" id="OR_max" placeholder="Maximum Marks" min="0" step="1" disabled required/>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group" id="ord2">
                                <input class="form-control" type="number" name="OR_pass" id="OR_pass" placeholder="Passing Marks" min="0" step="1" disabled required/>
                            </div>
                        </div>
                        <div class="col-sm-8" style="display: none" id="ord3">
                            <div class="form-group">
                                <input class="form-control" type="number" name="PROR_pass" id="PROR_pass" placeholder="Passing Marks" min="0" step="1" disabled required/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    

            
            <div class="col-sm-6">
                <div class="row">
                    <label for="TW">TermWork</label>    
                    <input name="TW" type="checkbox" id="checkbox6" onclick="if (this.checked){ 
                        document.getElementById('TW_max').disabled = false;
                        document.getElementById('TW_pass').disabled = false;
                        }else{
                        document.getElementById('TW_max').disabled = true;
                        document.getElementById('TW_pass').disabled = true;
                        document.getElementById('TW_max').value = '';
                        document.getElementById('TW_pass').value = '';
                        }" />
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input class="form-control max" type="number" name="TW_max" id="TW_max" placeholder="Maximum Marks" min="0" step="1" disabled required/>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input class="form-control" type="number" name="TW_pass" id="TW_pass" placeholder="Passing Marks" min="0" step="1" disabled required/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    

              
            <div class="col-sm-6">
                <div class="row">
                    <label for="THTT">Theory Hours</label>    
                    <input name="THTT" type="checkbox" id="checkbox7" onclick="if (this.checked){ 
                        document.getElementById('THT').disabled = false;
                        }else{
                        document.getElementById('THT').disabled = true;
                        document.getElementById('THT').value = '';
                        }" />
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input class="form-control" type="number" name="THT" id="THT" placeholder="Hours" min="0" step="1" disabled required/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
              
            <div class="col-sm-6">
                <div class="row">
                    <label for="PH">Partical Hours</label>    
                    <input name="PH" type="checkbox" id="checkbox8" onclick="if (this.checked){ 
                        document.getElementById('PHT').disabled = false;
                        able('PDB');
                        }else{
                        document.getElementById('PHT').disabled = true;
                        document.getElementById('PHT').value = '';
                        disable('PDB');
                        }" />
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input class="form-control" type="number" name="PHT" id="PHT" placeholder="Hours" min="0" step="1" disabled required/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             
            <div class="col-sm-6">
                <div class="row">
                    <label for="TR">Tutorial Hours</label>    
                    <input name="TR" type="checkbox" id="checkbox9" onclick="if (this.checked){ 
                        document.getElementById('TRH').disabled = false;
                        able('TDB');
                        }else{
                        document.getElementById('TRH').disabled = true;
                        document.getElementById('TRH').value = '';
                        disable('TDB');
                        }" />
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input class="form-control" type="number" name="TRH" id="TRH" placeholder="Hours" min="0" step="1" disabled required/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             
            <div class="col-sm-6">
                <div class="row">
                    <label for="PD">Pactical Details</label>    
                </div>

                <div class="row">
                    <?php for($i = 0; $i < session('div'); $i++): ?>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="PDD<?php echo e($i); ?>" id="PDD<?php echo e($i); ?>" value="Division <?php echo e(chr($i + 65)); ?>" min="0" step="1" disabled required/>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" type="number" name="PDB<?php echo e($i); ?>" id="PDB<?php echo e($i); ?>" placeholder="Batches" min="0" step="1" disabled required/>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

             
            <div class="col-sm-6">
                <div class="row">
                    <label for="TD">Tutorial Details</label>
                </div>
                <?php for($i = 0; $i < session('div'); $i++): ?>
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="TDD<?php echo e($i); ?>" id="TDD<?php echo e($i); ?>" value="Division <?php echo e(chr($i + 65)); ?>" min="0" step="1" disabled required/>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" type="number" name="TDB<?php echo e($i); ?>" id="TDB<?php echo e($i); ?>" placeholder="Batches" min="0" step="1" disabled required/>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>


            
            <div class="col-sm-12">
                <div class="row">
                    <label for="Total">Total Marks</label>
                </div>
                <div class="row">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <input class="form-control" type="number" name="Total" id="total_marks" min="0" step="1" required/>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            </div>

            <div class="row">
                <div class="col-sm-2"></div>    
                <div class="col-sm-3">
                    <input type="submit" value="Save And Enter Next Subject" name ="submit" class="form-control btn btn-success" />
                </div>
                <div class="col-sm-3">
                    <input type="submit" value="Save And Finish" name ="submit" class="form-control btn btn-primary" />
                </div>
                </div>
            </div>
        <?php echo Form::close(); ?>

    </div>
    <?php 
        $id = session('div');
    ?>
    <script>
    function able(l){
        var x = '<?php echo $id; ?>';
        var i = 0;
        var id = l;
        for(; i < x; i++){
            id = l + i;
            document.getElementById(id).disabled = false;    
        }
    }
    function disable(l){
        var x = '<?php echo $id; ?>';
        var i = 0;
        var id = l;
        for(; i < x; i++){
            id = l + i;
            document.getElementById(id).disabled = true;    
        }
    }
    $(document).ready(function(){
        $(document).on('change','.max',function(){
            var  IAMax = $('#IA_max').val();
            var  ESEMax = $('#ESE_max').val();
            var  PRMax = $('#PR_max').val();
            var  PRORMax = $('#PROR_max').val();
            var  ORMax = $('#OR_max').val();
            var  TWMax = $('#TW_max').val(); 

            IAMax = parseInt(IAMax);
            if(isNaN(IAMax)){
                IAMax = 0;
            }
            ESEMax = parseInt(ESEMax);
            if(isNaN(ESEMax)){
                ESEMax = 0;
            }
            PRMax = parseInt(PRMax);
            if(isNaN(PRMax)){
                PRMax = 0;
            }
            PRORMax = parseInt(PRORMax);
            if(isNaN(PRORMax)){
                PRORMax = 0;
            }
            ORMax = parseInt(ORMax);
            if(isNaN(ORMax)){
                ORMax = 0;
            }
            TWMax = parseInt(TWMax);
            if(isNaN(TWMax)){
                TWMax = 0;
            }



            $("#total_marks").val(IAMax + ESEMax + PRMax + PRORMax + ORMax + TWMax);
            console.log(IAMax + ESEMax + PRMax + PRORMax + ORMax + TWMax);
        });

        $(document).on('focus','#total_marks',function(){
            var  IAMax = $('#IA_max').val();
            var  ESEMax = $('#ESE_max').val();
            var  PRMax = $('#PR_max').val();
            var  PRORMax = $('#PROR_max').val();
            var  ORMax = $('#OR_max').val();
            var  TWMax = $('#TW_max').val(); 

            IAMax = parseInt(IAMax);
            if(isNaN(IAMax)){
                IAMax = 0;
            }
            ESEMax = parseInt(ESEMax);
            if(isNaN(ESEMax)){
                ESEMax = 0;
            }
            PRMax = parseInt(PRMax);
            if(isNaN(PRMax)){
                PRMax = 0;
            }
            PRORMax = parseInt(PRORMax);
            if(isNaN(PRORMax)){
                PRORMax = 0;
            }
            ORMax = parseInt(ORMax);
            if(isNaN(ORMax)){
                ORMax = 0;
            }
            TWMax = parseInt(TWMax);
            if(isNaN(TWMax)){
                TWMax = 0;
            }

            

            $("#total_marks").val(IAMax + ESEMax + PRMax + PRORMax + ORMax + TWMax);
            console.log(IAMax + ESEMax + PRMax + PRORMax + ORMax + TWMax);
        });
    });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>