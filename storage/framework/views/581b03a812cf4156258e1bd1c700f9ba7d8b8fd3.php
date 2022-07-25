<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>image Upload in Laravel 9</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>

        <div class="relative flex items-center min-h-screen justify-center overflow-hidden">
            <form action="<?php echo e(route('image.store')); ?>" method="POST" class="shadow p-12" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <label class="block mb-4">
                    <span class="sr-only">Choose File</span>
                    <input type="file" name="image"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-600 text-sm"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </label>
                <button type="submit" class="px-4 py-2 text-sm text-white bg-indigo-600 rounded">Submit</button>
            </form>
        </div>

    </body>

</html><?php /**PATH C:\xampp\htdocs\myhome\resources\views/image.blade.php ENDPATH**/ ?>