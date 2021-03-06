
<!DOCTYPE html>
<html lang="en">
  <head>

  <style type="text/css">
      label
      {
        display:inline-block;
        width:200px;
      }
  </style>
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
        <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid page-body-wrapper">



        <div class="container" align="center" style="padding-top: 100px;">
        
        <?php if(session()->has('message')): ?>

<div class="alert alert-success">
    <button type="button"class="close" data-dismiss="alert">
    </button>
<?php echo e(session()->get('message')); ?>

</div>


<?php endif; ?>



        <form action="<?php echo e(url('upload_doctor')); ?>" method="POST" enctype="multipart/form-data" >
            <?php echo csrf_field(); ?>
        <div style="padding:15px;">
            <label>Doctor Name </label>
            <input type="text" style="color:black;" name="name" placeholder="Write name" required="">
        </div>

        <div style="padding:15px;">
            <label>Phone </label>
            <input type="number" style="color:black;" name="number" placeholder="Write number"  required="">
        </div>

        <div style="padding:15px;">
            <label>Speciality </label>
            <select name="speciality" style="color:black; width:200px;">
            <option>--Select--</option>
                <option value="skin">skin</option>
                <option value="heart">heart</option>
                <option value="eye">eye</option>
                <option value="nose">nose</option>
            </select>
        </div>

        <div style="padding:15px;">
            <label>Room No </label>
            <input type="text" style="color:black;" name="room" placeholder="Write room number"  required="">
        </div>


        <div style="padding:15px;">
            <label>Doctor Image </label>
            <input type="file" name="file"  required="">
        </div>
        <div style="padding:15px;">
            <input type="submit" class="btn btn-success">
        </div>



         </div>


        </div>
   
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </body>
</html><?php /**PATH C:\xampp\htdocs\Hospital\resources\views/admin/add_doctor.blade.php ENDPATH**/ ?>