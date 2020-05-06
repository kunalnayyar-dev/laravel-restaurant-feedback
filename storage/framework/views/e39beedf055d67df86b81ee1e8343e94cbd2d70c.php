<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kunal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="flex-center position-ref">
            <!-- <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/admin')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?> -->

            <div class="content">
                <div class="title m-b-md">
                    <?php echo e(config('app.name')); ?>

                </div>

                <div class="row">
                    <div class="container">
                        <div class="col-12">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <select type="email" class="form-control" placeholder="Enter email">
                                    <option></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted error">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <textarea type="password" class="form-control" id="exampleInputPassword1" placeholder="Review"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <!-- <?php if(Session::has('message')): ?>
                        <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
                    <?php endif; ?>

                        
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        
                        <?php echo e(Form::open(array('url' => '/'))); ?>

                            <div class="form-group">
                                <?php echo e(Form::label('customer_email', 'E-mail Address')); ?>

                                <?php echo e(Form::email('customer_email', null, ['class' => 'form-control', 'placeholder' => 'Your email'])); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::label('customer_name', 'Name')); ?>

                                <?php echo e(Form::text('customer_name', null, ['class' => 'form-control', 'placeholder' => 'Your name'])); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::label('review_text', 'Review')); ?>

                                <?php echo e(Form::textarea('review_text', null, ['class' => 'form-control', 'placeholder' => 'Your review text'])); ?>

                            </div>

                            <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

                        <?php echo e(Form::close()); ?> -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\laragon\www\kunal\resources\views/welcome.blade.php ENDPATH**/ ?>